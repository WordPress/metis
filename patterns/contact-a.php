<?php
/**
 * Title: Contact, closing band
 * Slug: metis/contact-a
 * Categories: contact
 * Description: A closing band — display heading, a short note, the address, email and phone in large type, and a photo row to wrap.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact and Info"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:0"><!-- wp:group {"metadata":{"name":"Contact Stack"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"300","lineHeight":"0.9"}},"fitText":true} -->
<h2 class="wp-block-heading has-fit-text" style="font-style:normal;font-weight:300;line-height:0.9;text-transform:uppercase"><?php esc_html_e('Contact &amp; info', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Write, call, or come by.', 'metis');?><br><?php esc_html_e('We read everything and answer within the week.', 'metis');?><br><?php esc_html_e('Glenwood Springs, CO', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Email and phone"},"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"name":"Info Caps"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"3-x-large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-3-x-large-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('studio@example.com', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Info Caps"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"3-x-large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-3-x-large-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase">(970) 945-5444</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","metadata":{"name":"XL"}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Portraits Row"},"align":"full","className":"equal-widths","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull equal-widths" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-iris.png" alt="" class="" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-cora.png" alt="" class="" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-ada.png" alt="" class="" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact-business-dog.jpg" alt="" class="" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
