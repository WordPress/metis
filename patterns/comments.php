<?php
/**
 * Title: Comments
 * Slug: metis/comments
 * Inserter: no
 */
?>
<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Comments', 'metis');?></h6>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":3} /-->

<!-- wp:comment-template -->
<!-- wp:group {"metadata":{"name":"Comment Template Wrapper"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:comment-content /-->

<!-- wp:group {"metadata":{"name":"Comment Author Columns"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":64} /-->

<!-- wp:group {"metadata":{"name":"Comment Author Details"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"className":"no-underline"} /-->

<!-- wp:group {"metadata":{"name":"Comment Date and Buttons"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-date {"className":"no-underline"} /-->

<!-- wp:comment-edit-link /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} /--></div>
<!-- /wp:comments -->
