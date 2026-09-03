import { readFile } from 'node:fs/promises';
import { spawnSync } from 'node:child_process';
import process from 'node:process';

/*
 * Runs every `verify:*` script declared in package.json.
 *
 * Checks register themselves by adding a `verify:` script, so a change that
 * introduces one does not have to edit a list somewhere else.
 */

const manifest = JSON.parse( await readFile( 'package.json', 'utf8' ) );
const checks = Object.keys( manifest.scripts ?? {} )
	.filter( ( name ) => name.startsWith( 'verify:' ) )
	.sort();

if ( checks.length === 0 ) {
	console.log( 'No verify: scripts found.' );
	process.exit( 0 );
}

console.log( `Running ${ checks.length } checks: ${ checks.join( ', ' ) }` );

for ( const check of checks ) {
	const result = spawnSync( 'npm', [ 'run', '--silent', check ], {
		stdio: 'inherit',
		shell: process.platform === 'win32',
	} );

	if ( result.status !== 0 ) {
		console.error( `Check failed: ${ check }` );
		process.exit( result.status ?? 1 );
	}
}

console.log( `All ${ checks.length } checks passed.` );
