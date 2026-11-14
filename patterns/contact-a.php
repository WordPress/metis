<?php
/**
 * Title: Contact, closing band
 * Slug: metis/contact-a
 * Categories: contact, team
 * Description: A closing band — display heading, a short note, the address, email and phone in large type, and a photo row to wrap.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact and Info"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0"}},"@mobile":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:0"><!-- wp:group {"metadata":{"name":"Contact Stack"},"align":"wide","className":"on-top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide on-top"><!-- wp:columns {"align":"wide","style":{"@tablet":{"spacing":{"blockGap":{"top":"0"}}},"@mobile":{"spacing":{"blockGap":{"top":"0"}}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fitText":true} -->
<h2 class="wp-block-heading has-fit-text" style="font-style:normal;font-weight:300"><?php esc_html_e('Hello', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Write, call, or come by.', 'metis');?><br><?php esc_html_e('We read and answer within the week.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Glenwood Springs, CO, USA', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Portraits Row"},"align":"wide","className":"equal-widths","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"-8rem"}},"@tablet":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"@mobile":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide equal-widths" style="margin-top:-8rem"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-ada.webp" alt="<?php esc_attr_e('Portrait of Ada Fenn in a linen shirt, hair loosely pinned up, in soft window light', 'metis');?>" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-cora.webp" alt="<?php esc_attr_e('Cora Vale, black-and-white portrait in a dark turtleneck and pinstripe blazer', 'metis');?>" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"layout":{"selfStretch":"fit","flexSize":null},"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-iris.webp" alt="<?php esc_attr_e('Iris Calder smiling, her shoulder-length hair in loose curls', 'metis');?>" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
