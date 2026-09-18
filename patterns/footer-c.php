<?php
/**
 * Title: Footer, watermark on gradient
 * Slug: metis/footer-c
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer, watermark on gradient"},"className":"clip-overflow","style":{"spacing":{"padding":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group clip-overflow" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontWeight":"600"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:site-tagline {"style":{"typography":{"fontWeight":"600"}},"fontSize":"x-large"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-weight:600;text-transform:uppercase"><a href="#top">&#9650; <?php esc_html_e('Back to top', 'metis');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-weight:600;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'metis' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:site-title {"level":0,"align":"full","textColor":"theme-4","style":{"typography":{"fontSize":"clamp(4rem, 16vw, 18rem)","fontWeight":"600","lineHeight":"0.8"},"spacing":{"margin":{"bottom":"-0.2em"}}}} /--></footer>
<!-- /wp:group -->
