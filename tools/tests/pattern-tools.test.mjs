import assert from 'node:assert/strict';
import { execFileSync } from 'node:child_process';
import fs from 'node:fs';
import os from 'node:os';
import path from 'node:path';
import test from 'node:test';
import { fileURLToPath } from 'node:url';

import {
	applyPatternBaseline,
	validatePatternSource,
} from '../pattern-validation.mjs';

const currentDirectory = path.dirname( fileURLToPath( import.meta.url ) );
const fixer = path.resolve( currentDirectory, '..', 'fix-patterns.php' );
const categories = new Set( [ 'Text' ] );

function pattern( body, header = {} ) {
	return `<?php
/**
 * Title: ${ header.title ?? 'Example' }
 * Slug: ${ header.slug ?? 'metis/example' }
 * Categories: ${ header.categories ?? 'Text' }
 */
?>
${ body }
`;
}

function codesFor( source ) {
	return validatePatternSource( {
		filePath: 'patterns/example.php',
		registeredCategories: categories,
		source,
	} ).findings.map( ( finding ) => finding.code );
}

test( 'accepts content and style attributes without canonicalizing them', () => {
	const source = pattern( `<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Editable content', 'metis' ); ?></p>
<!-- /wp:paragraph -->` );

	assert.deepEqual( codesFor( source ), [] );
} );

test( 'rejects malformed block JSON and mismatched delimiters', () => {
	const source = pattern( `<!-- wp:group {"layout":} -->
<div><!-- wp:paragraph --><p>Text</p><!-- /wp:heading --></div>
<!-- /wp:group -->` );
	const codes = codesFor( source );

	assert.ok( codes.includes( 'invalid-block-json' ) );
	assert.ok( codes.includes( 'block-nesting' ) );
} );

test( 'rejects non-portable attributes, URLs, and text domains', () => {
	const source = pattern( `<!-- wp:query {"queryId":7} -->
<div><?php esc_html_e( 'Wrong domain', 'another-theme' ); ?></div>
<!-- wp:image {"id":42,"url":"https://example.test/wp-content/uploads/photo.jpg"} /-->
<!-- /wp:query -->` );
	const codes = codesFor( source );

	assert.ok( codes.includes( 'query-id' ) );
	assert.ok( codes.includes( 'attachment-id' ) );
	assert.ok( codes.includes( 'nonportable-url' ) );
	assert.ok( codes.includes( 'invalid-text-domain' ) );
} );

test( 'requires the filename-derived Metis slug and a registered category', () => {
	const source = pattern( '<!-- wp:paragraph --><p>Text</p><!-- /wp:paragraph -->', {
		categories: 'Unknown',
		slug: 'another/example',
	} );
	const codes = codesFor( source );

	assert.ok( codes.includes( 'invalid-slug' ) );
	assert.ok( codes.includes( 'unknown-category' ) );
} );

test( 'requires translator context for placeholders', () => {
	const source = pattern( `<!-- wp:paragraph -->
<p><?php printf( esc_html__( '%s item', 'metis' ), 2 ); ?></p>
<!-- /wp:paragraph -->` );

	assert.ok( codesFor( source ).includes( 'missing-translators-comment' ) );
} );

test( 'formatter changes PHP whitespace without changing block markup', () => {
	const temporaryRoot = fs.mkdtempSync(
		path.join( os.tmpdir(), 'metis-pattern-fixer-' )
	);
	const patternsDirectory = path.join( temporaryRoot, 'patterns' );
	const file = path.join( patternsDirectory, 'example.php' );
	fs.mkdirSync( patternsDirectory );
	fs.writeFileSync(
		file,
		pattern(
			`<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note"><?php esc_html_e('Editable content', 'metis');?></p>
<!-- /wp:paragraph -->`
		)
	);

	execFileSync( 'php', [ fixer, 'patterns/example.php' ], {
		cwd: temporaryRoot,
	} );
	const formatted = fs.readFileSync( file, 'utf8' );

	assert.match(
		formatted,
		/esc_html_e\( 'Editable content', 'metis' \); \?>/
	);
	assert.match(
		formatted,
		/<!-- wp:paragraph \{"className":"is-style-note"\} -->/
	);
} );

test( 'baseline suppresses only the recorded number of exact findings', () => {
	const finding = {
		code: 'query-id',
		file: 'patterns/example.php',
		value: '7',
	};
	const result = applyPatternBaseline( [ finding, finding ], {
		'patterns/example.php': { 'query-id': { 7: 1 } },
	} );

	assert.equal( result.suppressed, 1 );
	assert.equal( result.actionable.length, 1 );
} );
