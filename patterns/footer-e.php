<?php
/**
 * Title: Footer, newsletter and columns
 * Slug: metis/footer-e
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer, newsletter and columns"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Newsletter Card"},"align":"wide","backgroundColor":"theme-6","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-theme-6-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"textColor":"theme-3","fontSize":"large"} -->
<p class="has-theme-3-color has-text-color has-large-font-size"><?php esc_html_e('Newsletter', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-weight:600"><?php esc_html_e('Join our mailing list and stay in the know.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"theme-2","textColor":"theme-1"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"bottom","align":"wide"} -->
<div class="wp-block-columns are-vertically-aligned-bottom alignwide"><!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"level":0,"fontSize":"3-x-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Menu', 'metis');?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontWeight":"600"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"medium","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} /-->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--50);font-weight:600;text-transform:uppercase"><a href="#top">&#9650; <?php esc_html_e('Back to top', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Social', 'metis');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.6"><a href="#"><?php esc_html_e('Instagram', 'metis');?></a><br><a href="#"><?php esc_html_e('YouTube', 'metis');?></a><br><a href="#"><?php esc_html_e('LinkedIn', 'metis');?></a><br><a href="#"><?php esc_html_e('Facebook', 'metis');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--50);font-weight:600;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'metis' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></footer>
<!-- /wp:group -->
