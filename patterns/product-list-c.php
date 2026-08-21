<?php
/**
 * Title: Articles, archive grid
 * Slug: metis/product-list-c
 * Categories: Posts
 * Description: A thumbnail grid of the full archive — featured image, title, and department, from a query.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Archive"},"align":"wide","anchor":"archive","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-5","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="archive" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-5);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e('Archive', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":51,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[]},"metadata":{"name":"Articles"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-terms {"term":"category","textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
