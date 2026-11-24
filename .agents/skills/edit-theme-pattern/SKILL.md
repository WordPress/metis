---
name: edit-theme-pattern
description: Change an existing Metis WordPress block pattern and check the result with the repository's pattern scripts. Use when revising copy, media, styling, or block markup in patterns/; do not use for template-only or theme.json-only changes.
license: GPL-2.0-or-later
---

# Edit a Metis pattern

Change a pattern without breaking the things that only surface once someone inserts it: registration, block validation, portability, and translation.

## Before the edit

Read the pattern and two or three neighbours with a similar purpose. Note the category, inserter visibility, and the presets already used for the same role. Keep the change inside those conventions.

Run `npm run verify:patterns` first and keep the output. A pattern may already have findings that are nothing to do with your change, and you want to be able to tell the two apart.

## Making the edit

Prefer block markup produced by the editor over markup written by hand. Keep the header untouched unless the change is about registration, and keep the slug matching the filename.

Watch for the things that make a pattern work on one site only:

- attachment IDs, post IDs, and query IDs left behind by the editor;
- absolute URLs to uploads, rather than a theme URI for bundled assets;
- a `theme` attribute pinning a block to one theme;
- fixed colours, spacing, or fonts where a `theme.json` preset says the same thing.

Keep visible strings translatable with the `metis` text domain, and put a translator comment above any string with placeholders.

## Checking the result

```sh
npm run fix:patterns        # whitespace, output-preserving
npm run verify:patterns     # reports findings; does not fail
```

`verify:patterns` is advice. Read what it reports and decide:

- **Fix it** when the finding is right. Most are, and most are quick.
- **Skip it** when the pattern is correct as it stands. Add a `Validation` header to that pattern rather than changing the tool:

  ```php
   * Validation: skip query-id
  ```

  List the codes to ignore, or write `skip` alone to ignore all of them for that pattern. Skips are counted in the output, so they stay visible. Prefer naming codes over a blanket skip, and say why in the pull request.

Run `npm run check` before opening a pull request. To make findings fail instead of report, run `node tools/validate-patterns.mjs --strict`.

A pre-commit hook runs the same two scripts against staged pattern files, so most of this arrives before review.

## In WordPress

Insert the edited pattern and confirm it arrives without block recovery or validation warnings. Edit the text and media you changed, save, and reload. Check the front end, narrow and wide viewports, and any style variation the change affects. Check headings, reading order, keyboard focus, contrast, and RTL where relevant.

## Reporting

Say what behaviour changed, which findings you fixed, and which you skipped and why. Include before-and-after screenshots for visual changes, taken from the running site.
