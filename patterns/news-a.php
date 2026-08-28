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
<p class="has-x-small-font-size"><?php esc_html_e('NOTES FROM THE STUDIO', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"anchor":"written-down-between-projects"} -->
<h2 id="written-down-between-projects" class="wp-block-heading"><?php esc_html_e('Written down, between projects.', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('What we learn on the way ends up here: notes on craft, tools, and the slow parts nobody bills for.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":27,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[]},"metadata":{"name":"Studio Notes"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"fontSize":"x-small"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":40} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
