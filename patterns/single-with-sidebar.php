<?php
/**
 * Title: single-with-sidebar
 * Slug: metis/single-with-sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Masthead with Gradient"},"align":"full","className":"is-style-gradient-flow","style":{"spacing":{"blockGap":"0"},"border":{"top":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"},"left":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-gradient-flow" style="border-top-color:var(--wp--preset--color--theme-1);border-top-width:10px;border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px"><!-- wp:group {"metadata":{"name":"Header Wrapper"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:template-part {"slug":"header-a","theme":"metis"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Image Wrapper"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"align":"wide"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Content Wrapper"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Title and meta"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title /-->

<!-- wp:group {"metadata":{"name":"Meta Single Posts"},"className":"has-link-color","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Date"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:icon {"icon":"core/calendar","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"textColor":"theme-3"} /-->

<!-- wp:post-date {"datetime":"2026-09-01T19:17:42.289Z","format":"M j, Y","className":"no-stroke"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Time to read"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:icon {"icon":"core/scheduled","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"textColor":"theme-3"} /-->

<!-- wp:post-time-to-read {"displayAsRange":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Comments CTA","blockVisibility":{"viewport":{"mobile":false}}},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:post-comments-link {"className":"no-underline"} /-->

<!-- wp:paragraph {"metadata":{"name":"Comments CTA","bindings":{"content":{"source":"metis/comments-cta"}}},"style":{"typography":{"lineHeight":"1"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="line-height:1"><?php esc_html_e('Comment first', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"›"},"fontSize":"small"} -->
<p class="has-small-font-size">›</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"type":"constrained","justifyContent":"left"}} /-->

<!-- wp:group {"metadata":{"name":"About the article"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0"},"blockGap":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|theme-4","style":"dotted","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--theme-4);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:0"><!-- wp:group {"metadata":{"name":"Author and Categories"},"style":{"spacing":{"blockGap":{"left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Author Wrapper"},"style":{"spacing":{"blockGap":{"left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"Title Companion"},"style":{"typography":{"lineHeight":"1"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="line-height:1"><?php esc_html_e('Written by', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"className":"no-symbol","style":{"spacing":{"margin":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Categories Wrapper"},"style":{"spacing":{"blockGap":{"left":"0"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"Title Companion"},"style":{"typography":{"lineHeight":"1"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="line-height:1"><?php esc_html_e('on', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"textColor":"theme-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Related Topics"},"style":{"spacing":{"blockGap":{"left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"Title Companion"},"style":{"typography":{"lineHeight":"1"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="line-height:1"><?php esc_html_e('Related to', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","style":{"spacing":{"margin":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group -->

<!-- wp:jetpack/sharing-buttons {"styleType":"icon","size":"has-small-icon-size","iconColor":"theme-3","iconColorValue":"#1a1a1abf","iconBackgroundColor":"theme-1","iconBackgroundColorValue":"#FAFAFA","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-jetpack-sharing-buttons has-small-icon-size jetpack-sharing-buttons__services-list" style="margin-top:var(--wp--preset--spacing--20);margin-right:0;margin-bottom:0;margin-left:0" id="jetpack-sharing-serivces-list"><!-- wp:jetpack/sharing-button {"service":"mastodon","label":"<?php esc_attr_e('Mastodon', 'metis');?>"} /-->

<!-- wp:jetpack/sharing-button {"service":"bluesky","label":"<?php esc_attr_e('Bluesky', 'metis');?>"} /-->

<!-- wp:jetpack/sharing-button {"service":"linkedin","label":"<?php esc_attr_e('LinkedIn', 'metis');?>"} /-->

<!-- wp:jetpack/sharing-button {"service":"share","label":"<?php esc_attr_e('Share', 'metis');?>"} /--></ul>
<!-- /wp:jetpack/sharing-buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"comments","theme":"metis"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"name":"Meet the Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"},"width":"1px"}},"backgroundColor":"theme-6","borderColor":"theme-4","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-theme-4-border-color has-theme-6-background-color has-background" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:avatar {"size":94} /-->

<!-- wp:group {"metadata":{"name":"Card Wrapper"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40);text-transform:uppercase"><?php esc_html_e('Meet the author', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:post-author-name {"isLink":true,"className":"no-underline","fontSize":"medium"} /-->

<!-- wp:paragraph {"fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family"><?php esc_html_e('iris@iriscalder.com', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Related Posts"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"Card Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"},"width":"1px"}},"backgroundColor":"theme-6","borderColor":"theme-4","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-theme-4-border-color has-theme-6-background-color has-background" style="border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size"><?php esc_html_e('Related posts', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":7,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null},"metadata":{"name":"Posts, related sidebar","patternName":"metis/posts-e","description":"Small thumbnail rows of recent posts, for sidebars.","categories":["Posts"]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"metadata":{"name":"Related Post Columns"}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"90px"} -->
<div class="wp-block-column" style="flex-basis:90px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Title and Meta"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"@tablet":{"typography":{"fontSize":"var:preset|font-size|large"}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|large"}}},"fontSize":"medium"} /-->

<!-- wp:group {"metadata":{"name":"Meta: Date and more"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-date {"format":"M j Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"no-underline","style":{"css":"white-space: nowrap;"}} /-->

<!-- wp:read-more {"content":"+"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-c","theme":"metis"} /-->
