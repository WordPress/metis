<?php
/**
 * Title: 404
 * Slug: metis/404
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Masthead with Gradient"},"align":"full","className":"is-style-gradient-flow","style":{"spacing":{"blockGap":"0"},"border":{"top":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"},"left":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-gradient-flow" style="border-top-color:var(--wp--preset--color--theme-1);border-top-width:10px;border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px"><!-- wp:group {"metadata":{"name":"Header Wrapper"},"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:template-part {"slug":"header-a","theme":"metis"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"align":"wide","className":"is-style-eyebrow"} -->
<p class="alignwide is-style-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"align":"full","fitText":true} -->
<h1 class="wp-block-heading alignfull has-fit-text"><?php esc_html_e('Off the map', 'metis');?></h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"-10vh","bottom":"0"},"blockGap":"0"},"border":{"left":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"},"spacing":{"margin":{"top":"-15vh"}}},"@tablet":{"border":{"width":"0px","style":"none"},"spacing":{"margin":{"top":"-15vh"}}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px;margin-top:-10vh;margin-bottom:0"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"@tablet":{"spacing":{"padding":{"right":"0","left":"0"}}},"@mobile":{"spacing":{"padding":{"right":"0","left":"0"}}}},"backgroundColor":"theme-1"} -->
<div class="wp-block-column has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"404 Copy Wrapper"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4"},"@mobile":{"typography":{"fontSize":"var:preset|font-size|large"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="line-height:1.4"><?php esc_html_e('The page you wanted isn\'t here. It may have moved, or it never existed. Use the search below to find your way.', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php esc_attr_e('Search', 'metis');?>","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-c","theme":"metis"} /-->
