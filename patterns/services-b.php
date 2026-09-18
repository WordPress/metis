<?php
/**
 * Title: Selected builds, accordions
 * Slug: metis/services-b
 * Categories: Portfolio
 * Description: An expandable list of builds — each opens to a short line and two screens. The items bleed into one another until one is opened.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Selected builds"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|70"}},"backgroundColor":"theme-1","layout":{"type":"constrained"},"anchor":"builds"} -->
<section class="wp-block-group alignwide has-theme-1-background-color has-background" id="builds" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"align":"wide","fontSize":"medium"} -->
<h2 class="wp-block-heading alignwide has-medium-font-size"><?php esc_html_e( 'Selected builds', 'metis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:accordion {"align":"wide","backgroundColor":"theme-1"} -->
<div role="group" class="wp-block-accordion alignwide has-theme-1-background-color has-background"><!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"-40px","bottom":"0"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"theme-1"} -->
<div class="wp-block-accordion-item has-theme-1-background-color has-background" style="border-top-style:dotted;border-top-width:1px;margin-top:-40px;margin-bottom:0"><!-- wp:accordion-heading {"fontSize":"4-x-large"} -->
<h3 class="wp-block-accordion-heading has-4-x-large-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'The Almanac Press', 'metis' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"backgroundColor":"theme-1"} -->
<div role="region" class="wp-block-accordion-panel has-theme-1-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'The system behind the studio’s magazine.', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'A screen from The Almanac Press', 'metis' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'A detail from The Almanac Press', 'metis' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"-40px","bottom":"0"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"theme-1"} -->
<div class="wp-block-accordion-item has-theme-1-background-color has-background" style="border-top-style:dotted;border-top-width:1px;margin-top:-40px;margin-bottom:0"><!-- wp:accordion-heading {"fontSize":"4-x-large"} -->
<h3 class="wp-block-accordion-heading has-4-x-large-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Parallel', 'metis' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"backgroundColor":"theme-1"} -->
<div role="region" class="wp-block-accordion-panel has-theme-1-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'A newsroom and a reader, for the weekly paper.', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'A screen from Parallel', 'metis' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'A detail from Parallel', 'metis' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"-40px","bottom":"0"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"theme-1"} -->
<div class="wp-block-accordion-item has-theme-1-background-color has-background" style="border-top-style:dotted;border-top-width:1px;margin-top:-40px;margin-bottom:0"><!-- wp:accordion-heading {"fontSize":"4-x-large"} -->
<h3 class="wp-block-accordion-heading has-4-x-large-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'The Coast Atlas', 'metis' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"backgroundColor":"theme-1"} -->
<div role="region" class="wp-block-accordion-panel has-theme-1-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'An interactive atlas you can walk.', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'A screen from The Coast Atlas', 'metis' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'A detail from The Coast Atlas', 'metis' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item -->

<!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"-40px","bottom":"0"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"theme-1"} -->
<div class="wp-block-accordion-item has-theme-1-background-color has-background" style="border-top-style:dotted;border-top-width:1px;margin-top:-40px;margin-bottom:0"><!-- wp:accordion-heading {"fontSize":"4-x-large"} -->
<h3 class="wp-block-accordion-heading has-4-x-large-font-size"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Field Kit', 'metis' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
<!-- /wp:accordion-heading -->

<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"backgroundColor":"theme-1"} -->
<div role="region" class="wp-block-accordion-panel has-theme-1-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'The small tools Iris and Cora reach for.', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'A screen from Field Kit', 'metis' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'A detail from Field Kit', 'metis' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:accordion-panel --></div>
<!-- /wp:accordion-item --></div>
<!-- /wp:accordion --></section>
<!-- /wp:group -->
