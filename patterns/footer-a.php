<?php
/**
 * Title: Footer, tagline and pill bar
 * Slug: metis/footer-a
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer, tagline and pill bar","patternName":"metis/footer-a"},"style":{"border":{"right":{"color":"var:preset|color|theme-1","width":"10px"},"bottom":{"color":"var:preset|color|theme-1","width":"10px"},"left":{"color":"var:preset|color|theme-1","width":"10px"}},"spacing":{"blockGap":"var:preset|spacing|80","padding":{"bottom":"var:preset|spacing|50"}},"@tablet":{"border":{"width":"0px","style":"none"}},"@mobile":{"border":{"width":"0px","style":"none"}},"background":{"gradient":"var:preset|gradient|gradient-8"}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group" style="border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-bottom-color:var(--wp--preset--color--theme-1);border-bottom-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Title Wrapper"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"textColor":"theme-3","fontSize":"large"} /-->

<!-- wp:heading {"level":4,"fontSize":"large"} -->
<h4 class="wp-block-heading has-large-font-size"><?php esc_html_e('A place of your own, for work that keeps changing shape. You find your way without a complete map—reading the moment, making something from what’s at hand, and keeping the record where you can return to it.', 'metis');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Pill Bar"},"align":"wide","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"},":hover":{"color":{"text":"var:preset|color|theme-2"}}}},"shadow":"var:preset|shadow|shadow-1"},"backgroundColor":"theme-6","textColor":"theme-3","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide has-theme-3-color has-theme-6-background-color has-text-color has-background has-link-color" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--shadow-1)"><!-- wp:group {"metadata":{"name":"Logo and nav"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /-->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e('About', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Patterns', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Templates', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Variations', 'metis');?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Last line"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Top"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase">▲</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase"><a href="#top"><?php esc_html_e('Back to top', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Credits"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase">·</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'metis' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
