import { utimesSync } from 'node:fs';

/*
 * Marks style.min.css as built now. Runs after postcss in `npm run build`.
 *
 * postcss-cli does not rewrite a file whose content would not change, as
 * after an edit to a comment in style.css. functions.php loads style.css
 * whenever it is newer than style.min.css, so without this the site would
 * keep loading the unminified file after a successful build.
 */

const now = new Date();
utimesSync( 'style.min.css', now, now );
