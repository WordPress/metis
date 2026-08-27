<?php
/**
 * Title: Featured book, cover and blurb
 * Slug: metis/product-overview-a
 * Categories: Call to Action
 * Description: A single new title: a small label, the title as headline, a short blurb, a call to action, and a cover.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Featured book"},"align":"wide","anchor":"new-book","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-5","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="new-book" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-5);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e( 'NEW BOOK', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"2-x-large"} -->
<h2 class="wp-block-heading has-2-x-large-font-size"><?php esc_html_e( 'Ground Truth', 'metis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"small"} -->
<p class="has-theme-5-color has-text-color has-recursive-mono-font-family has-small-font-size"><?php esc_html_e( '2026 · Field Press', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'A surveyor’s term for the real condition of the ground, checked on foot against the drawing. Twelve essays on what you only learn by going — and what the map was never going to tell you.', 'metis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"className":"is-style-glossy"} -->
<div class="wp-block-button is-style-glossy"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Read an excerpt', 'metis' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e( 'Cover of Ground Truth, a contour map in two tones', 'metis' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
