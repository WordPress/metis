<?php
/**
 * Title: Featured book, cover and blurb
 * Slug: metis/product-overview-a
 * Categories: call-to-action
 * Description: A single new title: a small label, the title as headline, a short blurb, a call to action, and a cover.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Featured Book, Cover and Blurb","patternName":"metis/product-overview-a","description":"A single new title: a small label, the title as headline, a short blurb, a call to action, and a cover.","categories":["Call","to","Action"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"},"anchor":"new-book"} -->
<section class="wp-block-group alignwide" id="new-book" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"Featured Book Wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"background":{"gradient":"var:preset|gradient|gradient-12"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:cover {"dimRatio":0,"overlayColor":"theme-1","isUserOverlayColor":true,"isDark":false,"metadata":{"name":"Book Cover Wrapper"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"width":"1px","radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"shadow":"var:preset|shadow|shadow-3","dimensions":{"aspectRatio":"3/4"}},"borderColor":"theme-4","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-border-color has-theme-4-border-color" style="border-width:1px;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--shadow-3)"><span aria-hidden="true" class="wp-block-cover__background has-theme-1-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"width":"800px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact-book-1.png" alt="" style="width:800px;height:auto"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Column Stack"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"},"padding":{"right":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Book Details"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"New Content Toast"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"background":{"gradient":"var:preset|gradient|gradient-7"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"textColor":"theme-3","fontSize":"x-small","fontFamily":"openrunde"} -->
<p class="has-theme-3-color has-text-color has-link-color has-openrunde-font-family has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('NEW BOOK', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"textColor":"theme-3","fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-theme-3-color has-text-color has-link-color has-openrunde-font-family has-small-font-size"><?php esc_html_e('Field Press, 2026', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Copy and Buttons"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"4-x-large"} -->
<h2 class="wp-block-heading has-4-x-large-font-size"><?php esc_html_e('Ground Truth', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"textColor":"theme-3"} -->
<p class="has-theme-3-color has-text-color has-link-color"><?php esc_html_e('A surveyor\'s term for the real condition of the ground, checked on foot against the drawing. Twelve essays on what you only learn by going—and what the map was never going to tell you.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-glossy"} -->
<div class="wp-block-button is-style-glossy"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Buy Now', 'metis');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read an excerpt', 'metis');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
