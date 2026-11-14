# Contributing to Mētis

Thank you for your interest in Mētis! A heads-up before you open a pull request:

## The theme is under active construction

Mētis is being designed in the open, right now. Templates, patterns, template
parts and design tokens change substantially week to week as the design
develops. That has a practical consequence for contributions:

**Please open an issue (or comment on an existing one) before submitting
changes to templates, patterns, parts, `theme.json` or the stylesheets.**

Polish, accessibility and content refinements are genuinely valuable — but
applied mid-construction they usually land on layouts that are about to
change, and reconciling the overlap costs more than it saves on both sides.
When the structure stabilizes we will say so in the repository, and passes
of that kind will be very welcome (and easier to review).

## What helps right now

- **Bug reports** — anything broken on a fresh install: rendering errors,
  editor breakage, invalid markup. Open an issue with steps to reproduce.
- **Tooling and CI** — linting, validation, workflows. These do not collide
  with the design work.
- **Discussion** — questions and observations in issues are read and
  appreciated, and they inform the build.

## A note on structure

Templates are composed from the patterns in `patterns/` — in most cases a
template or section you see in the Site Editor originates in a pattern file,
which is the source of truth. If you spot a divergence between a template
and its pattern, that is worth an issue rather than a silent fix: knowing
*which side drifted* matters to us.

## Development environment

See the repository README for the `wp-env` setup and the available lint and
validation scripts.
