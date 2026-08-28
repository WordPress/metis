<?php
/**
 * Title: Selected work, portfolio grid
 * Slug: metis/features-d
 * Categories: Portfolio
 * Description: A two-by-two grid of projects — image, title, one line, and a short credit. A glanceable index of the work.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Selected work"},"align":"wide","anchor":"work-grid","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="work-grid" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e('Selected work', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Grid"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('The cover of Almanac', 'metis');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e('Almanac', 'metis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('The studio’s long-form seasonal quarterly.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Design · 2022 – ongoing', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('A front page of Parallel', 'metis');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e('Parallel', 'metis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('A weekly paper, in print and on screen.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Design · 2023 – ongoing', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('The jacket of Ground Truth', 'metis');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e('Ground Truth', 'metis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Iris Calder’s book of essays.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Design · 2024', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('A screen from The Coast Atlas', 'metis');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e('The Coast Atlas', 'metis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('An interactive atlas you can walk.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Design · 2025', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
