import { readdir, readFile } from 'node:fs/promises';
import path from 'node:path';
import process from 'node:process';

const ignoredDirectories = new Set( [ '.git', 'node_modules', 'vendor' ] );
const files = [];

async function collectJsonFiles( directory ) {
	for ( const entry of await readdir( directory, { withFileTypes: true } ) ) {
		if ( entry.isDirectory() && ignoredDirectories.has( entry.name ) ) {
			continue;
		}

		const entryPath = path.join( directory, entry.name );
		if ( entry.isDirectory() ) {
			await collectJsonFiles( entryPath );
		} else if ( entry.name.endsWith( '.json' ) ) {
			files.push( entryPath );
		}
	}
}

await collectJsonFiles( '.' );

const failures = [];
for ( const file of files ) {
	try {
		JSON.parse( await readFile( file, 'utf8' ) );
	} catch ( error ) {
		failures.push( `${ file }: ${ error.message }` );
	}
}

if ( failures.length ) {
	console.error( failures.join( '\n' ) );
	process.exit( 1 );
}

console.log( `Validated ${ files.length } JSON files.` );
