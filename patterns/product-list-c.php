<?php
/**
 * Title: Articles, archive grid
 * Slug: metis/product-list-c
 * Categories: Posts
 * Description: A thumbnail grid of the full archive — featured image, title, and department, from a query.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Archive"},"align":"wide","anchor":"archive","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="archive" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Archive', 'metis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"metis/posts-i"} /--></section>
<!-- /wp:group -->
