<?php
/**
 * Title: Footer, watermark on gradient
 * Slug: metis/footer-c
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer, watermark on gradient","patternName":"metis/footer-c"},"className":"clip-overflow","style":{"spacing":{"padding":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|80"},"background":{"gradient":"var:preset|gradient|gradient-8"}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group clip-overflow" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontWeight":"600"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e('About TT7', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Patterns', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Templates', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Variations', 'metis');?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":4,"fontSize":"large"} -->
<h4 class="wp-block-heading has-large-font-size"><?php esc_html_e('A place of your own, for work that keeps changing shape. You find your way without a complete map—reading the moment, making something from what’s at hand, and keeping the record where you can return to it.', 'metis');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Last line"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Top"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase">▲</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase"><a href="#top"><?php esc_html_e('Back to top', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Credits"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'metis' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"name":"Site Title + Fit Text"},"align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"0.5"},"spacing":{"margin":{"bottom":"-0.3em"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-4"}}}},"textColor":"theme-4","fontFamily":"openrunde","fitText":true} -->
<p class="alignfull has-fit-text has-theme-4-color has-text-color has-link-color has-openrunde-font-family" style="margin-bottom:-0.3em;font-style:normal;font-weight:600;line-height:0.5"><?php esc_html_e('Mētis', 'metis');?></p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group -->
