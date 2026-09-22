<?php
/**
 * Title: Latest posts, grid
 * Slug: metis/news-a
 * Categories: Posts
 * Description: The three most recent posts in a grid, with image, date, and excerpt.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Notes"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Intro"},"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'NOTES FROM THE STUDIO', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"anchor":"written-down-between-projects"} -->
<h2 id="written-down-between-projects" class="wp-block-heading"><?php esc_html_e( 'Written down, between projects.', 'metis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'What we learn on the way ends up here: notes on craft, tools, and the slow parts nobody bills for.', 'metis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"metis/posts-f"} /--></section>
<!-- /wp:group -->
