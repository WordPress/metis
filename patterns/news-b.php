<?php
/**
 * Title: Writings, essay list
 * Slug: metis/news-b
 * Categories: posts
 * Description: The latest essays in three columns — date, title, and a short excerpt, no images. Opened by a terse heading and an inline link.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Writings"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"},"anchor":"writings"} -->
<section class="wp-block-group alignwide" id="writings" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Section title and read more"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.01rem","lineHeight":1.6000000000000001}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.01rem;line-height:1.6;text-transform:uppercase"><?php esc_html_e('Writings', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"},":hover":{"color":{"text":"var:preset|color|theme-2"}}}}},"textColor":"theme-3","fontSize":"small","fontFamily":"openrunde"} -->
<p class="no-underline has-theme-3-color has-text-color has-link-color has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e('+ All essays', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":6,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null},"metadata":{"name":"Posts, essay list","patternName":"metis/posts-g","description":"Recent posts as an inline essay list with dates and excerpts.","categories":["Posts"]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"metadata":{"name":"Post Template Date and Title"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|30","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:0"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:group {"metadata":{"name":"Meta: Date and more"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date {"format":"M j Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"no-underline","style":{"css":"white-space: nowrap;"}} /-->

<!-- wp:read-more {"content":"+"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":25} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
