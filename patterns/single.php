<?php
/**
 * Title: single
 * Slug: metis/single
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Masthead with Gradient"},"align":"full","className":"is-style-gradient-flow","style":{"spacing":{"blockGap":"0"},"border":{"top":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"},"left":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-gradient-flow" style="border-top-color:var(--wp--preset--color--theme-1);border-top-width:10px;border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px"><!-- wp:group {"metadata":{"name":"Header Wrapper"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:template-part {"slug":"header-a","theme":"metis"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Image Wrapper"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Title Block Wrapper"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"level":1,"align":"wide","style":{"typography":{"textAlign":"center"},"@tablet":{"typography":{"textAlign":"left"}},"@mobile":{"typography":{"textAlign":"left"}}},"fontSize":"4-x-large"} /-->

<!-- wp:group {"metadata":{"name":"Meta Single Posts"},"className":"has-link-color","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group has-link-color" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"Date"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Content Wrapper"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->

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

<!-- wp:template-part {"slug":"comments","theme":"metis"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-c","theme":"metis"} /-->
