<?php
/**
 * Title: Footer, dark with link pills
 * Slug: metis/footer-d
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer, dark with link pills"},"align":"full","backgroundColor":"theme-2","textColor":"theme-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-theme-1-color has-theme-2-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:site-logo {"width":280,"shouldSyncIcon":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Menu', 'metis');?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"theme-1","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Contact', 'metis');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Reach out for collaborations or just say Hello.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"theme-1","width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-theme-1-color has-text-color wp-element-button" href="#"><?php esc_html_e('Email', 'metis');?> &#8599;</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"textColor":"theme-1","width":25,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-25 is-style-outline"><a class="wp-block-button__link has-theme-1-color has-text-color wp-element-button" href="#"><?php esc_html_e('Bluesky', 'metis');?> &#8599;</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"theme-1","width":25,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-25 is-style-outline"><a class="wp-block-button__link has-theme-1-color has-text-color wp-element-button" href="#"><?php esc_html_e('LinkedIn', 'metis');?> &#8599;</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"theme-1","width":25,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-25 is-style-outline"><a class="wp-block-button__link has-theme-1-color has-text-color wp-element-button" href="#"><?php esc_html_e('GitHub', 'metis');?> &#8599;</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"theme-1","width":25,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-25 is-style-outline"><a class="wp-block-button__link has-theme-1-color has-text-color wp-element-button" href="#"><?php esc_html_e('Mastodon', 'metis');?> &#8599;</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-weight:600;text-transform:uppercase"><a href="#top">&#9650; <?php esc_html_e('Back to top', 'metis');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-weight:600;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'metis' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
