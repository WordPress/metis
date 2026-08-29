<?php
/**
 * Title: Books, cover grid
 * Slug: metis/product-list-a
 * Categories: Portfolio
 * Description: The backlist as a four-up grid of covers with title and imprint. Opened by a terse heading and an inline link.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Books"},"align":"wide","anchor":"books","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-5","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="books" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-5);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Header"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Books', 'metis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( '%1$sAll books →%2$s', 'metis' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'Book cover', 'metis' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'The Long Way Round', 'metis' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-5-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e( '2023 · Field Press', 'metis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'Book cover', 'metis' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Contour', 'metis' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-5-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e( '2021 · Ordnance House', 'metis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'Book cover', 'metis' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'What the Water Keeps', 'metis' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-5-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e( '2019 · Field Press', 'metis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'Book cover', 'metis' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Waymarks', 'metis' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-5-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e( '2017 · Small Ridge', 'metis' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
