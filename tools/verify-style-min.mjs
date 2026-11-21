import { readFile } from 'node:fs/promises';
import { spawnSync } from 'node:child_process';
import { createRequire } from 'node:module';
import process from 'node:process';

/*
 * Checks that the committed style.min.css is what `npm run build` makes from
 * style.css, so the site never loads a stale copy.
 *
 * Runs the same postcss-cli command as the build script, writing to stdout
 * instead of the file, and compares the output with style.min.css.
 */

const require = createRequire( import.meta.url );
const postcssCli = require.resolve( 'postcss-cli' );

const build = spawnSync(
	process.execPath,
	[ postcssCli, 'style.css', '--use', 'cssnano', '--no-map' ],
	{ encoding: 'utf8', maxBuffer: 16 * 1024 * 1024 }
);

if ( build.status !== 0 ) {
	console.error( build.stderr || build.error );
	console.error( 'Could not build style.css with cssnano.' );
	process.exit( 1 );
}

let committed;
try {
	committed = await readFile( 'style.min.css', 'utf8' );
} catch {
	console.error( 'style.min.css is missing. Run npm run build and commit it.' );
	process.exit( 1 );
}

if ( committed !== build.stdout ) {
	console.error(
		'style.min.css does not match style.css. Run npm run build and commit both files.'
	);
	process.exit( 1 );
}

console.log( 'style.min.css matches style.css.' );
