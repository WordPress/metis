<?php
/**
 * Title: Post cards, staggered grid
 * Slug: metis/news-c
 * Categories: Posts
 * Description: A three-column grid of post cards — cover, meta, title, excerpt — under a small heading and an inline link; the middle card steps down on desktop.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Post cards, staggered grid"},"align":"wide","anchor":"log","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="log" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Header"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'The log', 'metis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( '%1$sAll notes →%2$s', 'metis' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"metis/posts-h"} /--></section>
<!-- /wp:group -->
