<?php
/**
 * Title: Footer, tagline and pill bar
 * Slug: metis/footer-a
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer, tagline and pill bar"},"gradient":"gradient-7","style":{"border":{"right":{"color":"var:preset|color|theme-1","width":"10px"},"bottom":{"color":"var:preset|color|theme-1","width":"10px"},"left":{"color":"var:preset|color|theme-1","width":"10px"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|70"},"@tablet":{"border":{"width":"0px","style":"none"}},"@mobile":{"border":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group has-gradient-7-gradient-background has-background" style="border-right-color:var(--wp--preset--color--theme-1);border-right-width:10px;border-bottom-color:var(--wp--preset--color--theme-1);border-bottom-width:10px;border-left-color:var(--wp--preset--color--theme-1);border-left-width:10px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Identity"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"textColor":"theme-3","fontSize":"large"} /-->

<!-- wp:site-tagline {"style":{"typography":{"fontWeight":"600"}},"fontSize":"x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Pill Bar"},"align":"wide","backgroundColor":"theme-6","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide has-theme-6-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":32,"shouldSyncIcon":true} /-->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-weight:600;text-transform:uppercase"><a href="#top">&#9650; <?php esc_html_e('Back to top', 'metis');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-weight:600;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'metis' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
