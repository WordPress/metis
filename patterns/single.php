<?php
/**
 * Title: single
 * Slug: metis/single
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Masthead with Gradient"},"align":"full","className":"is-style-gradient-flow","style":{"spacing":{"blockGap":"0"},"border":{"top":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"},"left":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-gradient-flow" style="border-top-color:var(--wp--preset--color--theme-1);border-top-width:10px;border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px"><!-- wp:group {"metadata":{"name":"Header Wrapper"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:template-part {"slug":"header"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Image Wrapper"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Title Block Wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Meta Group A"},"className":"has-link-color","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group has-link-color"><!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:icon {"icon":"core/people"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'By', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"className":"no-underline","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Time to read"},"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:icon {"icon":"core/scheduled"} /-->

<!-- wp:post-time-to-read /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"align":"wide","style":{"typography":{"textAlign":"center"}},"fontSize":"4-x-large"} /-->

<!-- wp:group {"metadata":{"name":"Meta Group B"},"className":"has-link-color","style":{"spacing":{"blockGap":"0.2em","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-link-color" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"Date and categories"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"datetime":"2026-09-01T19:17:42.289Z","format":"M j, Y"} /-->

<!-- wp:post-terms {"term":"category","prefix":"+ ","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Comments"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-comments-count /-->

<!-- wp:paragraph {"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size"><?php esc_html_e( 'comments', 'metis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Content Wrapper"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->

<!-- wp:group {"metadata":{"name":"Like and Share"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"width":"1px","style":"dotted"},"bottom":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;border-bottom-style:dotted;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Like Button Element', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/sharing-buttons {"styleType":"icon","iconColor":"theme-2","iconColorValue":"#1A1A1A","iconBackgroundColor":"theme-1","iconBackgroundColorValue":"#FAFAFA"} -->
<ul class="wp-block-jetpack-sharing-buttons has-normal-icon-size jetpack-sharing-buttons__services-list" id="jetpack-sharing-serivces-list"><!-- wp:jetpack/sharing-button {"service":"mastodon","label":"Mastodon"} /-->

<!-- wp:jetpack/sharing-button {"service":"bluesky","label":"Bluesky"} /-->

<!-- wp:jetpack/sharing-button {"service":"linkedin","label":"LinkedIn"} /-->

<!-- wp:jetpack/sharing-button {"service":"mail","label":"Mail"} /-->

<!-- wp:jetpack/sharing-button {"service":"share","label":"Share"} /--></ul>
<!-- /wp:jetpack/sharing-buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Related Topics"},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e( 'Related Topics', 'metis' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:post-terms {"term":"post_tag","separator":"  "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e( 'Comments', 'metis' ); ?></h6>
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

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
