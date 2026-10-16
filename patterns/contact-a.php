<?php
/**
 * Title: Contact, closing band
 * Slug: metis/contact-a
 * Categories: contact
 * Description: A closing band — display heading, a short note, the address, email and phone in large type, and a photo row to wrap.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact"},"align":"full","anchor":"begin","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section id="begin" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Title and note"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"fontSize":"4-x-large"} -->
<h2 class="wp-block-heading has-4-x-large-font-size"><?php esc_html_e('Contact &amp; info', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Write, call, or come by. We read everything and answer within the week.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Address, email and phone"},"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"2-x-large"} -->
<p class="has-2-x-large-font-size"><?php esc_html_e('Glenwood Springs, CO', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"2-x-large"} -->
<p class="has-2-x-large-font-size"><?php esc_html_e('studio@example.com', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"2-x-large"} -->
<p class="has-2-x-large-font-size"><?php esc_html_e('(970) 945-5444', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:gallery {"columns":5,"linkTo":"none","align":"wide"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-5 is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></section>
<!-- /wp:group -->
