<?php
/**
 * Title: Footer, studio contact grid
 * Slug: metis/footer-b
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer, studio contact grid"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:site-logo {"width":120,"shouldSyncIcon":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"textTransform":"uppercase","fontWeight":"600"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600","lineHeight":"1.6"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600;line-height:1.6;text-transform:uppercase"><a href="#"><?php esc_html_e('Instagram', 'metis');?></a><br><a href="#"><?php esc_html_e('TikTok', 'metis');?></a><br><a href="#"><?php esc_html_e('LinkedIn', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"bottom","align":"wide"} -->
<div class="wp-block-columns are-vertically-aligned-bottom alignwide"><!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('51027 Hwy 6 and 24', 'metis');?><br><?php esc_html_e('Glenwood Springs, CO', 'metis');?><br><?php esc_html_e('81601, USA', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-weight:600"><?php esc_html_e('E.', 'metis');?> <a href="mailto:cora@landmark.studio">cora@landmark.studio</a><br><?php esc_html_e('P.', 'metis');?> <?php esc_html_e('(970) 945-5444', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:social-links {"iconColor":"theme-2","iconColorValue":"#1A1A1A","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"behance"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-weight:600;text-transform:uppercase"><a href="#top">&#9650; <?php esc_html_e('Back to top', 'metis');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-weight:600;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'metis' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
