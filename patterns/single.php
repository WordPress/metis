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

<!-- wp:group {"metadata":{"name":"Title Block Wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":1,"align":"full","style":{"typography":{"textAlign":"center"}},"fontSize":"4-x-large"} /-->

<!-- wp:group {"metadata":{"name":"Meta"},"className":"has-link-color","style":{"spacing":{"blockGap":"0.2em","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group has-link-color" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Written by ', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'in', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Content Wrapper"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Tags and Comments"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","separator":"  ","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:group {"tagName":"nav","align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"ariaLabel":"Post navigation"} -->
<nav class="wp-block-group alignwide" aria-label="Post navigation"><!-- wp:post-navigation-link {"type":"previous","arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"arrow":"arrow"} /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Comments', 'metis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":3,"fontSize":"large"} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":50} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:comment-date /-->

<!-- wp:comment-author-name /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-edit-link /-->

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
<!-- /wp:comments --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
