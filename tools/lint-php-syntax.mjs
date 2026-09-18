import { readdir } from 'node:fs/promises';
import { spawnSync } from 'node:child_process';
import path from 'node:path';
import process from 'node:process';

const files = [ 'functions.php' ];
const directories = [ 'patterns', 'tools' ];

async function collectPhpFiles( directory ) {
	for ( const entry of await readdir( directory, { withFileTypes: true } ) ) {
		const entryPath = path.join( directory, entry.name );
		if ( entry.isDirectory() ) {
			await collectPhpFiles( entryPath );
		} else if ( entry.name.endsWith( '.php' ) ) {
			files.push( entryPath );
		}
	}
}

for ( const directory of directories ) {
	await collectPhpFiles( directory );
}

for ( const file of files ) {
	const result = spawnSync( 'php', [ '-l', file ], { encoding: 'utf8' } );
	if ( result.status !== 0 ) {
		process.stderr.write( result.stdout );
		process.stderr.write( result.stderr );
		process.exit( result.status ?? 1 );
	}
}

console.log( `Validated PHP syntax in ${ files.length } files.` );
