# Mētis

Mētis is an official WordPress block theme currently under development.

## Development environment

The recommended development environment uses [`wp-env`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) so contributors can start the same WordPress configuration with a small set of commands.

### Requirements

- Node.js 20 or later
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
```

### Browser-only testing

[Open Mētis in WordPress Playground](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/WordPress/metis/trunk/.github/blueprint.json) to try the latest `trunk` in a throwaway WordPress site in your browser, with Mētis already active. Nothing to install; close the tab and it's gone. The Blueprint lives at [`.github/blueprint.json`](.github/blueprint.json).

