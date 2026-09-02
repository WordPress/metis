# Changes since the wireframe handoff

Tracking every change made to `tt7-wire` after the version Maggie Cabrera received
(the V1-presentation baseline, 2026-08-21). Written to double as PR descriptions
when this work merges into the Mētis repository.

---

## 1 · V1 palette ported into `theme.json` (2026-08-24)

Replaced the 6-colour wireframe palette with the 12-colour palette approved in the
V1 review. Slugs stay numbered (`theme-N`) per project convention; `name` fields
are editor labels only (hue names are provisional).

| Slug | Colour | Name |
|---|---|---|
| theme-1 | `#FAFAFA` | Snow |
| theme-2 | `#1A1A1A` | Black |
| theme-3 | `#1A1A1ABF` | Black 75% |
| theme-4 | `#1A1A1A0D` | Black 5% |
| theme-5 | `#FAFAFABF` | Snow 75% |
| theme-6 | `#FFFFFF` | White |
| theme-7 | `#FFC844` | Gold |
| theme-8 | `#FFA080` | Coral |
| theme-9 | `#81DF6E` | Green |
| theme-10 | `#66A6FF` | Blue |
| theme-11 | `#A8AEF0` | Periwinkle |
| theme-12 | `#EC86F9` | Pink |

**Numbering decision:** the V1 Figma cards collided (neutrals card used 1–6; hues
card used 6–10 with gold unassigned). Resolution applied: neutrals keep the
neutrals-card numbering 1–6; hues follow as 7–12 in the hue card's order with
gold first. Renumbering is a mechanical remap if a different assignment is wanted.

## 2 · Role-preserving slug remap, theme-wide (2026-08-24)

The old slugs' *meanings* moved, so every reference was remapped to the token
carrying its old role — appearance is preserved (two deliberate shifts noted below).

| Old slug (wireframe) | Was | New slug | Now |
|---|---|---|---|
| theme-1 | `#ffffff` white | theme-6 | `#FFFFFF` White |
| theme-2 | `#0a0a0a` ink | theme-2 | `#1A1A1A` Black |
| theme-3 | `#979cd3` periwinkle | theme-11 | `#A8AEF0` Periwinkle |
| theme-4 | `#FFC844` gold | theme-7 | `#FFC844` Gold |
| theme-5 | `#0a0a0a40` ink alpha | theme-3 | `#1A1A1ABF` Black 75% |
| theme-6 | `#fafafa` page bg | theme-1 | `#FAFAFA` Snow |

Applied to (regex `theme-([1-6])(?!\d)` with placeholder two-pass, no cascades):
- `theme.json` internal style references (24)
- `patterns/*.php`, `parts/*.html`, `templates/*.html`, `assets/css/*.css`,
  `functions.php`, `style.css` — **440 references across 40 files**

**Deliberate appearance shifts** (toward the approved palette, not regressions):
- Ink deepens everywhere: `#0a0a0a` → `#1A1A1A`.
- Muted text darkens: old ink-alpha was 25%; the V1 muted token is Black 75%.

**Gradient / Day-Night CSS** (`assets/css/animated-gradient.css`): day accent now
`theme-7` (Gold), night accent `theme-11` (Periwinkle), base `theme-1` (Snow).
Verified served with zero stale refs.

**Verification run:** `theme.json` parses; no dangling preset refs; PHP lint clean
on heaviest patterns; served page defines all 12 presets at the correct hexes;
rendered homepage uses only new-slug classes (the `has-theme-5-*` rules present
are WordPress's auto-generated utilities for the new Snow-75% token — correct).

**Not swept (out of scope, by design):**
- Database content (posts/pages). Demo posts carry no theme colour classes; one
  legacy page (`full-width-gallery`, pre-project) does and was left alone.
- Where the four new hues (Coral, Green, Blue, Pink) should *appear* is a design
  pass, not a remap — pending.

## Backups
- `theme.json` pre-port and full theme tarball pre-sweep, in the session scratchpad.

## 3 · `.nowrap` utility class (2026-08-24)

Added `.nowrap { white-space: nowrap }` to `style.css` and `assets/css/editor-style.css`
(joins the existing utility set: `.no-underline`, `.indent-first-line`, order/grow helpers).

**Why:** in the front-page "Posts Text Only" query (Row model), the Post Date rendered
with `word-break: break-word`, which collapses its min-content width to ~1 character —
so the flex row crushed the date's container (to as little as 45px) and the date wrapped
one glyph per line. Non-breaking spaces in the date format cannot fix this (break-word
splits inside any run). `white-space: nowrap` restores the true min-content width, the
flex `min-width: auto` floor holds, and the excerpt absorbs the squeeze instead.
Applied by adding the `nowrap` class to Post Date blocks in the Editor.

## 3 · Post Date: never wraps, never underlined — via Global Styles (2026-08-24)

**Decision:** date behaviour is a design-system rule, so it lives in **Global Styles →
Blocks → Date → Additional CSS** (`white-space: nowrap` + link underline removal),
not in per-instance utility classes. Set by Henrique in the Editor; lands in
`theme.json` (`styles.blocks.core/post-date.css`) on the next CBT save.

**Why:** in flex rows the Post Date computed `word-break: break-word`, which collapses
its min-content width to ~1 character, letting the row crush its container (dates
rendered one glyph per line). NBSPs in the date format can't prevent break-word splits;
`white-space: nowrap` restores the true min-content floor so the excerpt yields instead.

**History:** a `.nowrap` stylesheet utility was added earlier the same day and reverted
in favour of this approach (commits `6acdbe2` → revert). The `.no-underline` utility
class remains for non-date uses.

## 4 · `.no-underline` utility: underline restored on hover/focus (2026-08-24)

The utility now matches default link affordance in reverse: hidden at rest,
shown on `:hover` and `:focus-visible`. Applied in both `style.css` and
`assets/css/editor-style.css`.

```css
.no-underline a { text-decoration: none; }
.no-underline a:hover,
.no-underline a:focus-visible { text-decoration: underline; }
```

## 5 · `.wrap-on-small` utility — responsive Row wrapping (2026-08-24)

Added to `style.css` and `assets/css/editor-style.css`:

```css
@media (max-width: 1079px) {
	.wrap-on-small.wrap-on-small { flex-wrap: wrap; }
}
```

**Why:** the Row block's Wrapping toggle applies at all widths — there is no
responsive wrap in the UI. Usage: leave the Row's Wrapping toggle OFF and add
`wrap-on-small` in Advanced → Additional CSS class(es). The doubled class
(0,2,0) outscores Gutenberg's per-instance `flex-wrap: nowrap` layout rule
(0,1,0), which prints after theme and user CSS, without resorting to
`!important`. First consumers: the front-page "Excerpt and Date Row" and the
Archive "Post Template Archive Rows" meta row (Rows chosen over Columns there
so a missing Featured Image collapses instead of leaving an empty first column).

## 6 · `.media-column` utility — hide imageless media columns (2026-08-24)

Added to `style.css` (frontend-only, deliberately not mirrored in
editor-style.css so the placeholder column stays selectable in the editor):

```css
.media-column:not(:has(.wp-block-post-featured-image)) {
	display: none;
}
```

**Why:** the Archive list returns to the Columns model (native stack-on-mobile)
instead of the Row + `wrap-on-small` approach. A post with no Featured Image
renders no block markup, so the classed column hides itself and flexible
sibling columns absorb the space — solving the empty-first-column problem
that motivated the Row experiment. Usage: add `media-column` in the column's
Advanced → Additional CSS class(es).

**Addendum:** mirrored into `assets/css/editor-style.css` at Henrique's request
so imageless columns hide in the editor too. The editor variant keys on the
absence of an `<img>` (`.media-column:not(:has(img))`) because the editor
renders a placeholder that still carries the block class.

## 7 · `.stack-on-small` replaces `.wrap-on-small` (2026-08-24)

The Archive list settled on the Columns model (entry 6), so the Row-wrapping
utility is retired and replaced by a Columns one in both `style.css` and
`assets/css/editor-style.css`:

```css
@media (max-width: 1079px) {
	.wp-block-columns.stack-on-small { flex-wrap: wrap !important; }
	.wp-block-columns.stack-on-small > .wp-block-column { flex-basis: 100% !important; }
}
```

**Why:** design call — 1080px is the maximum width before column stacking;
core only stacks below 782px and pins `flex-wrap`/`flex-basis` with
`!important` above that, so the overrides carry `!important` and rely on the
theme sheet loading after core block CSS. Scoped to a class (not all Columns)
so other Columns layouts keep core behaviour. Usage: add `stack-on-small` to
the Columns block, leave "Stack on mobile" ON. `.wrap-on-small` was removed
(Henrique removed its instance classes; the Row approach is abandoned).

## 8 · Read More "+" label: repair CBT serialization (2026-08-24)

`patterns/front-page.php` — a Read More block whose label is the single glyph
`+` came out of a Create Block Theme save as:

```
<!-- wp:read-more {"content":"<?php esc_attr_e('+', 'tt7-wireframe');?>"} /-->
```

CBT injected its translation wrapper into the block's JSON but with the PHP
tags unicode-escaped (`<?php`), so PHP never executes it and the literal
source string becomes the block content, which breaks the block. Replaced with
the plain attribute `{"content":"+"}` — a glyph needs no translation call.

**Known risk:** the next CBT save of this template may re-emit the broken
form; re-check this line after front-page CBT saves. Worth reporting upstream
to Create Block Theme.

**Correction to entry 7:** `.wrap-on-small` is reinstated (same rule, same
1079px breakpoint) — the Homepage "Posts Text Only" QL's "Excerpt and Date
Row" still consumes it. Entry 7's removal assumed no consumers remained; the
two utilities now coexist: `wrap-on-small` for Rows, `stack-on-small` for
Columns.

## 9 · CBT save: archive rebuild, meta system, Global Styles export (2026-08-24)

Henrique's Editor work saved into the theme via Create Block Theme:

**`patterns/archive.php`** — list rebuilt as "Post Template Archive Columns":
outer Columns (border-bottom theme-4) with the inner Columns carrying
`stack-on-small`, media column carrying `media-column`. Meta simplified from
symbol-paragraph groups to bare Date / Author Name / Categories blocks
(`no-underline`, terms prefix "+ "); symbols now come from Global Styles
`::before` rules.

**`patterns/front-page.php`** — "Posts with Featured Images" grid switched to
`autoFit` with 16rem minimum column width (responsive, replaces fixed
columnCount 4); dates drop the ⊹ from the format string (now ::before),
gain `no-underline`; one date carries per-instance `white-space: nowrap`;
excerpt moreText emptied (suppresses the excerpt's own link — the separate
"+" Read More is the affordance).

**`theme.json`** — Global Styles export: Date/Author/Terms/Read More styled as
a meta system (Open Runde, Small, 500, no uppercase, lineHeight 1, text
theme-3, link rest theme-3 / hover theme-2); ::before symbol css on date (⊹)
and author (¬); Read More side borders theme-4 + spacing-20 padding;
site-level css holds the post-template hover rules (Read More borders →
theme-3, excerpt → theme-2). CBT also lowercased palette hex values
(cosmetic) and dropped the post-title fontSize override.

**Repairs applied on top (same CBT bug as entry 8, recurred as predicted):**
the save re-mangled `read-more` `{"content":"+"}` and newly mangled
`post-excerpt` `{"moreText":""}` into escaped-PHP (`<?php…`), which
never executes. Both restored to plain attributes; verified rendering
(+ label present, no excerpt more-link). Note the *unescaped* form CBT wrote
in archive/index/search (`"moreText":"<?php esc_attr_e('Read more',…)?>"`)
is valid and untouched — the bug is specifically the `<` escaping.

**Still missing in Global Styles (regressed/never landed):** date & author
`white-space: nowrap` and terms `word-break: normal` at the top level of
their Additional CSS boxes — the export carries only the ::before rules.

## 10 · `.alternate-ratios` utility — alternating Featured Image ARs (2026-08-24)

Added to `style.css` + editor mirror:

```css
.alternate-ratios > li:nth-child(odd) .wp-block-post-featured-image { aspect-ratio: 3/4 !important; }
.alternate-ratios > li:nth-child(even) .wp-block-post-featured-image { aspect-ratio: 1/1 !important; }
```

**Why:** the Homepage "Posts with Featured Images" QL alternates portrait
(3:4) and square (1:1) images per Henrique's reference. One Query Loop with
`nth-child` replaces the four offset QLs this would otherwise take.
`!important` is required because the Featured Image block emits its ratio as
an inline style; the block's own `[style*=aspect-ratio]` cover rules still
match, so cropping behaves. Usage: class `alternate-ratios` on the Post
Template block. Alternation follows DOM order, so it stays consistent as the
auto-fit grid drops columns.

**Addendum:** with the AR removed from the blocks (Henrique), core's
fill-and-crop no longer applies — it keys on the *inline* aspect-ratio style.
The utility now replicates it: `.alternate-ratios .wp-block-post-featured-image
img { width:100%; height:100%; object-fit:cover }` (both stylesheets).
Verified live: figures 384px (3:4) / 288px (1:1) alternating, images filling
their boxes with cover cropping.

## 11 · CBT save: Snow frame, front-page restructure, protections land (2026-08-24)

Henrique's Editor work:

**Frame borders** — masthead/main (`front-page.php`) and footer now carry a
10px `theme-1` (Snow) border frame; disabled via responsive style props
(`@tablet`/`@mobile` border 0) — first use of Gutenberg's responsive styles
in the theme. Footer's old 1px theme-3 top border removed.

**`patterns/front-page.php`** — Featured Image drops `aspectRatio` + margin
(`.alternate-ratios` utility now owns ratios); Blog/Patterns sections re-gap
to spacing-60; Patterns section loses its dotted top border; heading gains
`text-wrap: balance` per-instance css; Patterns columns restructured
(66.66% + centered flexible column, small-paragraph captions removed);
spacer S→XS.

**`theme.json`** — the text-protection rules are now exported: date & author
`css` keys carry top-level `white-space: nowrap` ahead of the `::before`
symbol (terms `word-break: normal` likewise); minor `core/tabs` spacing.

**Repairs applied on top:** same two CBT manglings as entries 8–9 (read-more
`+`, excerpt `moreText:""`) — restored to plain attributes. Verified zero
`<?php` remnants.

**Addendum (editor parity):** the editor canvas renders a hidden duplicate
`<li>` for the active Post Template item, which shifts plain `nth-child`
parity — in the canvas all items read as "odd". The editor mirror of
`.alternate-ratios` now uses `:nth-child(odd/even of li:not([style*="none"]))`
to count visible items only. Frontend rules unchanged (its markup is clean).

## 12 · CBT save: masthead system rolls out to secondary templates (2026-08-24)

Henrique's Editor work — the front-page masthead treatment (gradient section,
10px Snow frame with `@tablet`/`@mobile` disable, title inside the masthead)
now applied to **archive, index, search and 404**:

- Each opens with "Masthead with Gradient" (header wrapper + page title
  inside the gradient section) instead of a bare header template part;
  `main` carries the Snow side borders.
- **404 rebuilt:** small "404" H1, fit-text "Off the map" H2 in the masthead,
  copy as H3 in a 33/66 column layout, search switched to button-inside.
- `templates/404.html` updated accordingly; index/search simplified to match
  the archive structure; `theme.json` drops the query-title bottom margin.

**Repairs on top:** the recurring CBT mangles (read-more `+`, excerpt
`moreText`) restored again in `front-page.php`; zero `<?php` remnants across
patterns verified.

## 13 · New template: Single with Sidebar (2026-08-24)

New custom template for posts, per Henrique's Figma design (deliberately
close to stock — visual pass to follow in the Editor):

- `templates/single-with-sidebar.html` → `patterns/single-with-sidebar.php`;
  registered in `theme.json` `customTemplates` (postType `post`).
- Shell reuses the single template: gradient masthead with header + full
  featured image, Snow-framed `main`, footer.
- Body is a wide 66/33 Columns: content column holds left-aligned title,
  date/author meta row, post content, categories + tags, comments (same
  comment structure as single, minus the extra "Comments" heading);
  sidebar (`<aside>`) holds "Meet the author" (avatar + name + bio) and
  "Related posts" — a 4-post Query Loop of 96px square thumb + date + title
  rows, recent posts, sticky excluded.
- Pattern-files transient cleared so the new pattern registers.

## 14 · CBT save: masthead on single/page; Single-with-Sidebar refined (2026-08-24)

- `patterns/single.php` + `templates/page.html`: the gradient masthead +
  Snow frame treatment applied (completing the rollout from entry 12).
- `patterns/single-with-sidebar.php` refined in the Editor: featured image
  16:9 wide inside the masthead, content wrapped and constrained left at
  medium size, comment title level default; structure otherwise as entry 13.

## 15 · CBT save: single templates deepened, comment system styled (2026-09-02)

**`patterns/single.php`** — title now 4-x-large centered wide; meta rebuilt
("Meta Group B"): no-underline links, reading time added, categories with
"+ " prefix.

**`patterns/single-with-sidebar.php`** — content column matured: meta row
with icon glyphs (people/clock) beside author and a Time-to-Read block;
"Like and Share" band (placeholder Like element + Jetpack sharing buttons:
Mastodon, Bluesky, LinkedIn, Mail, Share) between dotted rules; "Related
Topics" (H6 + tags); comments rebuilt content-first (speech-bubble comment,
then avatar/author/date/actions row); featured image back to natural ratio,
wide.

**`theme.json`** — the comment system styled as a design piece:
comment-content as a speech bubble (White bg, asymmetric 20/20/5/20 radii,
spacing-30 padding), Open Runde 600 author names, comment date/edit/reply
links and pagination typography, post-time-to-read styling.

**Plugin-dependent blocks now in the theme (deliberate, wireframe-phase):**
`jetpack/sharing-buttons`, `core/post-time-to-read` (Gutenberg plugin),
`wp:icon` — plus a "Like Button Element" placeholder paragraph. To resolve
before release (tracked "along the way", cf. repo issue #8 territory).

**Milestone:** first CBT save with ZERO string manglings — the CSS-based
Read More "+" (entry 12's durable fix) held.
