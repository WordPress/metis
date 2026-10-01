<?php
/**
 * Title: Post cards, staggered grid
 * Slug: metis/news-c
 * Categories: posts
 * Description: A three-column grid of post cards — cover, meta, title, excerpt — under a small heading and an inline link; the middle card steps down on desktop.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Post cards, staggered grid","patternName":"metis/news-c","description":"A three-column grid of post cards — cover, meta, title, excerpt — under a small heading and an inline link; the middle card steps down on desktop.","categories":["Posts"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"},"anchor":"log"} -->
<section class="wp-block-group alignwide" id="log" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"Section title and read more"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.01rem","lineHeight":1.6000000000000001}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.01rem;line-height:1.6;text-transform:uppercase"><?php esc_html_e('The log', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"},":hover":{"color":{"text":"var:preset|color|theme-2"}}}}},"textColor":"theme-3","fontSize":"small","fontFamily":"openrunde"} -->
<p class="no-underline has-theme-3-color has-text-color has-link-color has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e('+ Learn more', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":71,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null},"metadata":{"name":"Posts, latest three"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"stagger-middle","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /-->

<!-- wp:group {"metadata":{"name":"Post Template Date and Title"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:0"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:group {"metadata":{"name":"Meta: Date"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date {"format":"M j Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"no-underline","style":{"css":"white-space: nowrap;"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read more","showMoreOnNewLine":false,"excerptLength":25} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
