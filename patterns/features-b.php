<?php
/**
 * Title: Selected work, accordion list
 * Slug: metis/features-b
 * Categories: Portfolio
 * Description: Selected projects as an expandable list — each row opens to a short account, credits, and a link. No thumbnails.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Selected work"},"align":"wide","anchor":"work","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="work" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e('Selected work', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Projects"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e('Almanac — The studio’s long-form seasonal quarterly.', 'metis');?></summary><!-- wp:paragraph -->
<p><?php esc_html_e('Every issue runs on a single text size, so a long essay never earns importance just by getting bigger. I built a baseline grid deep enough to carry both full-bleed photography and a footnoted column without either one re-flowing the other. The stock shifts with the season — heavier in the winter issue, thinner and brighter in summer. It’s the studio’s quarterly, long-form and printed, set season by season with words by Iris Calder.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Design · 2022 – ongoing · Words, Iris Calder · Print, quarterly', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sRead the issue →%2$s', 'metis' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e('Parallel — A weekly paper, in print and on screen.', 'metis');?></summary><!-- wp:paragraph -->
<p><?php esc_html_e('One measure has to read the same folded on a table and scrolled on a phone. I drew it to hold across the broadsheet and collapse to a single column on screen without a headline being reset by hand. The headline type is drawn a little heavier than the screen needs, so it still reads once it’s on cheap newsprint and handled all day; Ada Fenn built the screen edition against that grid. It goes out every week, so the layout has to stand up without me in the room.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Design · 2023 – ongoing · Build, Ada Fenn · Print + screen', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sRead this week’s →%2$s', 'metis' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e('Ground Truth — Iris Calder’s book of essays.', 'metis');?></summary><!-- wp:paragraph -->
<p><?php esc_html_e('The essays kept naming places, so I drew small maps to sit inside the text instead of collected at the back. They print in a single ink so they stay under the words — marking where an essay is standing, not where to look. The book is sewn rather than glued so it opens flat and those maps can run across the gutter without breaking. I designed the jacket and set the type throughout; Iris Calder wrote it, and Field Press published it.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Design — jacket, maps, typesetting · 2024 · Author, Iris Calder · Field Press', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sAbout the book →%2$s', 'metis' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e('The Coast Atlas — An interactive atlas you can walk.', 'metis');?></summary><!-- wp:paragraph -->
<p><?php esc_html_e('The problem was letting someone move along a coastline without losing track of where they stood. I designed the interface and a legend where a few marks hold their meaning at every zoom, so a coastline never competes with a road for your eye. As you move in, labels thin out rather than stacking. Ada Fenn built it, and you read it by walking the coast, not by searching an index.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Design — interface, cartography · 2025 · Build, Ada Fenn · Web, interactive', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sWalk the atlas →%2$s', 'metis' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
