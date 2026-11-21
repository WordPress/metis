# Mētis

Mētis is an official WordPress block theme currently under development.

## Development environment

The recommended development environment uses [`wp-env`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) so contributors can start the same WordPress configuration with a small set of commands.

### Requirements

- Node.js 24.18 or later
- npm
- Docker Desktop or another running Docker-compatible daemon

If you use `nvm`, run `nvm use` to select the version in `.nvmrc`.

### First-time setup

```sh
npm install
npm run env:setup
```

This starts WordPress, mounts and activates Metis, and installs and activates the Theme Check plugin.

- Site: <http://localhost:8898>
- Administration: <http://localhost:8898/wp-admin/>
- Username: `admin`
- Password: `password`

WordPress debugging, script debugging, and theme development mode are enabled. PHP notices, warnings, and errors are written to `wp-content/debug.log` rather than displayed in the browser.

### Everyday commands

```sh
npm run env:start   # Start the existing environment.
npm run env:status  # Show its current status and ports.
npm run env:stop    # Stop it without deleting its data.
npm run env:clean   # Delete its WordPress and database data.
```

`npm run env:clean` is destructive. The next `npm run env:setup` creates a fresh site.

### Existing WordPress installation

You can also place this repository at `wp-content/themes/metis` in an existing WordPress development installation and activate Mētis from Appearance → Themes.

Enable theme development mode and debugging in that installation while contributing:

```php
define( 'WP_DEVELOPMENT_MODE', 'theme' );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', true );
```

### Editing the stylesheet

Sites load `style.min.css`, a minified copy of `style.css`. When `SCRIPT_DEBUG` is on, as it is in the `wp-env` setup above, the theme loads `style.css` instead, so your edits show up right away.

Edit `style.css`, never `style.min.css`, then regenerate the minified copy and commit both files:

```sh
npm run build   # Regenerate style.min.css from style.css.
npm run watch   # Or regenerate it every time style.css changes.
```

If `style.min.css` conflicts in a merge or rebase, don't edit it: resolve `style.css`, then run `npm run build`.

### Browser-only testing

WordPress Playground can install and run a ZIP of the theme entirely in the browser. A one-click repository Blueprint will be added after the public GitHub repository URL is available. Until then, open [WordPress Playground](https://playground.wordpress.net/), choose **Add theme**, upload a Mētis ZIP, and activate it.

