<?php
/**
 * Title: 404
 * Slug: metis/404
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Masthead with Gradient"},"align":"full","className":"is-style-gradient-flow","style":{"spacing":{"blockGap":"0"},"border":{"top":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"},"left":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"border":{"width":"0px","style":"none"}},"@tablet":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-gradient-flow" style="border-top-color:var(--wp--preset--color--theme-1);border-top-width:10px;border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px"><!-- wp:group {"metadata":{"name":"Header Wrapper"},"align":"wide","className":"on-top","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide on-top" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:template-part {"slug":"header-a","theme":"metis"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}},"typography":{"lineHeight":"0.65"}},"textColor":"theme-1","fitText":true} -->
<h2 class="wp-block-heading alignwide has-fit-text has-theme-1-color has-text-color has-link-color" style="line-height:0.65">404</h2>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"-25vh","bottom":"10vh"},"blockGap":"0"},"border":{"left":{"color":"var:preset|color|theme-1","width":"10px"},"right":{"color":"var:preset|color|theme-1","width":"10px"}},"@mobile":{"spacing":{"margin":{"top":"-15vh"}}},"@tablet":{"border":{"width":"0px","style":"none"},"spacing":{"margin":{"top":"-25vh"}}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px;margin-top:-25vh;margin-bottom:10vh"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"@tablet":{"spacing":{"padding":{"right":"0","left":"0"}}},"@mobile":{"spacing":{"padding":{"right":"0","left":"0"}}}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"404 Copy Wrapper"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4"},"@mobile":{"typography":{"fontSize":"var:preset|font-size|large"}}},"fontSize":"4-x-large"} -->
<h2 class="wp-block-heading has-4-x-large-font-size" style="line-height:1.4"><?php esc_html_e('Page Not Found', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"<?php esc_attr_e('Search', 'metis');?>","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-c","theme":"metis"} /-->
