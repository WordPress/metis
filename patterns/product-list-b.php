<?php
/**
 * Title: Talks, video cards
 * Slug: metis/product-list-b
 * Categories: Portfolio
 * Description: Recorded talks as a row of cards — thumbnail, title, and where it was given. Opened by a terse heading and an inline link.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Talks"},"align":"wide","anchor":"talks","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-5","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="talks" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-5);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Header"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Talks', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( '%1$sAll talks →%2$s', 'metis' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('Still from a recorded talk', 'metis');?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Reading Ground You’ve Never Walked', 'metis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-5-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Cartography Society · 2025', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('Still from a recorded talk', 'metis');?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e('The Last Reliable Map', 'metis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-5-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Long Walk Assembly · 2024', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('Still from a recorded talk', 'metis');?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e('On Getting Lost on Purpose', 'metis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"theme-5","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-5-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Field Notes Festival · 2023', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
