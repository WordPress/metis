import path from 'node:path';

import { parse } from '@wordpress/block-serialization-default-parser';

const translationFunctions = [
	'__',
	'_e',
	'_ex',
	'_x',
	'esc_attr__',
	'esc_attr_e',
	'esc_attr_x',
	'esc_html__',
	'esc_html_e',
	'esc_html_x',
];

const attachmentIdBlocks = new Set( [
	'core/audio',
	'core/cover',
	'core/file',
	'core/gallery',
	'core/image',
	'core/media-text',
	'core/playlist-track',
	'core/video',
] );

function lineNumberAt( source, index ) {
	return source.slice( 0, index ).split( '\n' ).length;
}

function normalizeBlockName( name ) {
	return name.includes( '/' ) ? name : `core/${ name }`;
}

function walkValues( value, callback ) {
	if ( Array.isArray( value ) ) {
		value.forEach( ( item ) => walkValues( item, callback ) );
		return;
	}

	if ( value && typeof value === 'object' ) {
		Object.values( value ).forEach( ( item ) =>
			walkValues( item, callback )
		);
		return;
	}

	callback( value );
}

export function validatePatternSource( {
	filePath,
	source,
	registeredCategories,
} ) {
	const relativePath = filePath.split( path.sep ).join( '/' );
	const fileName = path.basename( relativePath, '.php' );
	const findings = [];
	const addFinding = ( code, message, index = 0, value = message ) => {
		findings.push( {
			code,
			file: relativePath,
			line: lineNumberAt( source, index ),
			message,
			value: String( value ),
		} );
	};

	const headerMatch = source.match( /^<\?php\s*\/\*\*([\s\S]*?)\*\// );
	const header = headerMatch?.[ 1 ] ?? '';
	const fields = new Map();
	for ( const match of header.matchAll( /^\s*\*\s*([^:\n]+):\s*(.*?)\s*$/gm ) ) {
		fields.set( match[ 1 ].trim(), match[ 2 ].trim() );
	}

	if ( ! headerMatch ) {
		addFinding(
			'missing-header',
			'Pattern must start with a PHP documentation header.'
		);
	}

	for ( const field of [ 'Title', 'Slug' ] ) {
		if ( ! fields.get( field ) ) {
			addFinding(
				'missing-header-field',
				`Pattern header requires a non-empty ${ field } field.`,
				0,
				field
			);
		}
	}

	const expectedSlug = `metis/${ fileName }`;
	if ( fields.get( 'Slug' ) && fields.get( 'Slug' ) !== expectedSlug ) {
		addFinding(
			'invalid-slug',
			`Slug must be ${ expectedSlug }; found ${ fields.get( 'Slug' ) }.`
		);
	}

	const inserterHidden = fields.get( 'Inserter' )?.toLowerCase() === 'no';
	const categories = ( fields.get( 'Categories' ) ?? '' )
		.split( ',' )
		.map( ( category ) => category.trim() )
		.filter( Boolean );

	if ( ! inserterHidden && categories.length === 0 ) {
		addFinding(
			'missing-category',
			'Inserter-visible patterns require at least one category.'
		);
	}

	for ( const category of categories ) {
		if ( ! registeredCategories.has( category ) ) {
			addFinding(
				'unknown-category',
				`Category ${ category } is not registered by Metis.`,
				0,
				category
			);
		}
	}

	const blockStack = [];
	const blockComment = /<!--\s*(\/?)wp:([a-z0-9-]+(?:\/[a-z0-9-]+)?)([\s\S]*?)-->/g;
	let commentMatch;
	let namedBlockCount = 0;
	while ( ( commentMatch = blockComment.exec( source ) ) ) {
		const [ fullComment, closingMarker, rawName, rawPayload ] = commentMatch;
		const blockName = normalizeBlockName( rawName );
		const closing = closingMarker === '/';
		const selfClosing = ! closing && /\/\s*$/.test( rawPayload );

		if ( closing ) {
			const expected = blockStack.pop();
			if ( expected !== blockName ) {
				addFinding(
					'block-nesting',
					`Closing ${ blockName } does not match ${ expected ?? 'an opening block' }.`,
					commentMatch.index,
					`${ expected ?? 'none' }:${ blockName }`
				);
			}
			continue;
		}

		namedBlockCount++;
		if ( ! selfClosing ) {
			blockStack.push( blockName );
		}

		let payload = rawPayload.trim();
		if ( selfClosing ) {
			payload = payload.replace( /\/\s*$/, '' ).trim();
		}
		if ( ! payload ) {
			continue;
		}

		let attributes;
		try {
			attributes = JSON.parse( payload );
		} catch ( error ) {
			addFinding(
				'invalid-block-json',
				`Invalid JSON for ${ blockName }: ${ error.message }`,
				commentMatch.index,
				fullComment
			);
			continue;
		}

		if ( Object.hasOwn( attributes, 'queryId' ) ) {
			addFinding(
				'query-id',
				`${ blockName } contains non-portable queryId ${ attributes.queryId }.` ,
				commentMatch.index,
				attributes.queryId
			);
		}
		if ( Object.hasOwn( attributes, 'theme' ) ) {
			addFinding(
				'theme-attribute',
				`${ blockName } contains a theme attribute.`,
				commentMatch.index,
				attributes.theme
			);
		}
		if (
			attachmentIdBlocks.has( blockName ) &&
			Object.hasOwn( attributes, 'id' )
		) {
			addFinding(
				'attachment-id',
				`${ blockName } contains attachment ID ${ attributes.id }.` ,
				commentMatch.index,
				attributes.id
			);
		}

		walkValues( attributes, ( value ) => {
			if (
				typeof value === 'string' &&
				/^https?:\/\/[^/]+\/wp-content\/uploads\//i.test( value )
			) {
				addFinding(
					'nonportable-url',
					`${ blockName } contains a site-specific uploads URL: ${ value }`,
					commentMatch.index,
					value
				);
			}
		} );
	}

	for ( const unclosedBlock of blockStack.reverse() ) {
		addFinding(
			'block-nesting',
			`Opening ${ unclosedBlock } has no matching closing block.`,
			0,
			unclosedBlock
		);
	}

	if ( namedBlockCount === 0 ) {
		addFinding( 'missing-blocks', 'Pattern contains no WordPress blocks.' );
	} else {
		try {
			parse( source );
		} catch ( error ) {
			addFinding(
				'block-parser-error',
				`The WordPress block parser rejected this pattern: ${ error.message }`
			);
		}
	}

	const translationPattern = new RegExp(
		`\\b(?:${ translationFunctions.join( '|' ) })\\s*\\(([\\s\\S]*?)\\?>`,
		'g'
	);
	for ( const match of source.matchAll( translationPattern ) ) {
		if ( ! /["']metis["']/.test( match[ 1 ] ) ) {
			addFinding(
				'invalid-text-domain',
				'Translation call must use the metis text domain.',
				match.index,
				match[ 0 ]
			);
		}
		const placeholders = [
			...match[ 1 ].matchAll( /%(?:\d+\$)?[bcdeEfFgGosuxX]/g ),
		].map( ( placeholder ) => placeholder[ 0 ] );
		if ( placeholders.length ) {
			const phpOpening = source.lastIndexOf( '<?php', match.index );
			const context = source.slice( Math.max( 0, phpOpening ), match.index );
			if ( ! /translators:/i.test( context ) ) {
				addFinding(
					'missing-translators-comment',
					'Translated placeholders require a translators comment in the same PHP block.',
					match.index,
					placeholders.join( ',' )
				);
			}
		}
	}

	for ( const match of source.matchAll( /\bwp-image-(\d+)\b/g ) ) {
		addFinding(
			'attachment-class',
			`Pattern contains attachment-specific class wp-image-${ match[ 1 ] }.` ,
			match.index,
			match[ 1 ]
		);
	}

	return { fields, findings };
}

export function collectRegisteredCategories( functionsSource ) {
	const categoryBlock = functionsSource.match(
		/\$categories\s*=\s*array\(([\s\S]*?)\);/
	)?.[ 1 ];
	if ( ! categoryBlock ) {
		throw new Error( 'Could not find the Metis pattern category registry.' );
	}

	return new Set(
		[ ...categoryBlock.matchAll( /['"]([^'"]+)['"]\s*=>/g ) ].map(
			( match ) => match[ 1 ]
		)
	);
}

export function applyPatternBaseline( findings, baseline ) {
	const usedBaseline = new Map();
	const actionable = [];
	let suppressed = 0;

	for ( const finding of findings ) {
		const allowedCount =
			baseline[ finding.file ]?.[ finding.code ]?.[ finding.value ] ?? 0;
		const key = `${ finding.file }\u0000${ finding.code }\u0000${ finding.value }`;
		const usedCount = usedBaseline.get( key ) ?? 0;
		if ( usedCount < allowedCount ) {
			usedBaseline.set( key, usedCount + 1 );
			suppressed++;
			continue;
		}
		actionable.push( finding );
	}

	return { actionable, suppressed };
}
