import fs from 'node:fs';
import path from 'node:path';
import process from 'node:process';
import { spawnSync } from 'node:child_process';

import {
	applyPatternBaseline,
	collectRegisteredCategories,
	validatePatternSource,
} from './pattern-validation.mjs';

const root = process.cwd();
const patternsDirectory = path.join( root, 'patterns' );
const baselinePath = path.join( root, 'tools', 'pattern-baseline.json' );
const allPatternFiles = fs
	.readdirSync( patternsDirectory )
	.filter( ( file ) => file.endsWith( '.php' ) )
	.map( ( file ) => path.join( patternsDirectory, file ) )
	.sort();
const requestedFiles = process.argv
	.slice( 2 )
	.filter( ( argument ) => ! argument.startsWith( '--' ) )
	.map( ( file ) => path.resolve( root, file ) )
	.filter(
		( file ) =>
			file.startsWith( `${ patternsDirectory }${ path.sep }` ) &&
			file.endsWith( '.php' ) &&
			fs.existsSync( file )
	);
const targetFiles = requestedFiles.length ? requestedFiles : allPatternFiles;
const registeredCategories = collectRegisteredCategories(
	fs.readFileSync( path.join( root, 'functions.php' ), 'utf8' )
);
const results = new Map();

for ( const file of allPatternFiles ) {
	const relativePath = path.relative( root, file );
	const phpLint = spawnSync( 'php', [ '-l', file ], { encoding: 'utf8' } );
	const result = validatePatternSource( {
		filePath: relativePath,
		registeredCategories,
		source: fs.readFileSync( file, 'utf8' ),
	} );
	if ( phpLint.status !== 0 ) {
		result.findings.unshift( {
			code: 'php-syntax',
			file: relativePath,
			line: 1,
			message: phpLint.stderr.trim() || phpLint.stdout.trim(),
			value: 'php-syntax',
		} );
	}
	results.set( file, result );
}

const slugs = new Map();
for ( const [ file, result ] of results ) {
	const slug = result.fields.get( 'Slug' );
	if ( ! slug ) {
		continue;
	}
	if ( slugs.has( slug ) ) {
		for ( const duplicateFile of [ file, slugs.get( slug ) ] ) {
			results.get( duplicateFile ).findings.push( {
				code: 'duplicate-slug',
				file: path.relative( root, duplicateFile ),
				line: 1,
				message: `Pattern slug ${ slug } is duplicated.`,
				value: slug,
			} );
		}
	} else {
		slugs.set( slug, file );
	}
}

const strict = process.argv.includes( '--strict' );

/*
 * A pattern opts out by adding a `Validation` header field:
 *
 *   * Validation: skip                 ignore every finding
 *   * Validation: skip query-id, ...   ignore only those codes
 *
 * The reason belongs next to the pattern, so nothing here needs editing.
 */
function skippedCodes( result ) {
	const directive = result.fields.get( 'Validation' ) ?? '';
	const match = directive.match( /^skip\b\s*(.*)$/i );
	if ( ! match ) {
		return null;
	}
	const codes = match[ 1 ]
		.split( ',' )
		.map( ( code ) => code.trim() )
		.filter( Boolean );
	return codes.length ? new Set( codes ) : 'all';
}

const baseline = fs.existsSync( baselinePath )
	? JSON.parse( fs.readFileSync( baselinePath, 'utf8' ) ).allowed ?? {}
	: {};
const targetFindings = [];
let skipped = 0;
for ( const file of targetFiles ) {
	const result = results.get( file );
	if ( ! result ) {
		continue;
	}
	const skip = skippedCodes( result );
	for ( const finding of result.findings ) {
		if ( skip === 'all' || skip?.has( finding.code ) ) {
			skipped += 1;
			continue;
		}
		targetFindings.push( finding );
	}
}
const { actionable, suppressed } = applyPatternBaseline(
	targetFindings,
	baseline
);

for ( const finding of actionable ) {
	console.log(
		`${ finding.file }:${ finding.line } [${ finding.code }] ${ finding.message }`
	);
}

const notes = [ `${ targetFiles.length } pattern(s) checked` ];
if ( suppressed ) {
	notes.push( `${ suppressed } in the baseline` );
}
if ( skipped ) {
	notes.push( `${ skipped } skipped by a Validation header` );
}
console.log( notes.join( ', ' ) + '.' );

if ( ! actionable.length ) {
	process.exit( 0 );
}

console.log(
	`${ actionable.length } finding(s) to look at. Fix them, or add a \`Validation: skip\` header to the pattern when it is right as it stands.`
);

// Findings are advice by default. Pass --strict where they should fail.
process.exit( strict ? 1 : 0 );
