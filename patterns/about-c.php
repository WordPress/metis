<?php
/**
 * Title: About, builder portrait
 * Slug: metis/about-c
 * Categories: about
 * Description: A portrait beside a short, plain-spoken biography of the one who builds, opened by a one-word heading.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"About"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"},"anchor":"about"} -->
<section class="wp-block-group alignwide" id="about" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom","width":"","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"metadata":{"name":"Column Stack"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Section title and heading"},"align":"wide","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e('About', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"text-balance","fontSize":"2-x-large"} -->
<h2 class="wp-block-heading text-balance has-2-x-large-font-size"><?php esc_html_e('Ada Feen builds the tools others use and would rather fix the drawer than talk about the desk.', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Copy and link"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size"><?php esc_html_e('Her work is the kind you notice only when it fails, which is why it rarely does: pages that assemble themselves, archives that stay findable, notes that survive the walk home. She builds slowly, tests on bad connections, and ships nothing she wouldn’t keep using herself.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"},":hover":{"color":{"text":"var:preset|color|theme-2"}}}}},"textColor":"theme-3","fontSize":"small","fontFamily":"openrunde"} -->
<p class="no-underline has-theme-3-color has-text-color has-link-color has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e('+ Meet Ada Fenn', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":""} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact\u002d\u002davatar-ada.png","dimRatio":0,"isUserOverlayColor":true,"contentPosition":"center center","isDark":false,"sizeSlug":"full","metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}},"className":"fill-cover","style":{"dimensions":{"aspectRatio":"3/4"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light fill-cover" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-ada.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Portrait Stack"},"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Detail Wrapper"},"className":"on-top","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"layout":{"selfStretch":"fixed","flexSize":"40%"},"@mobile":{"layout":{"selfStretch":"fixed","flexSize":"60%"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"@tablet":{"layout":{"selfStretch":"fixed","flexSize":"30%"}}},"textColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group on-top has-theme-1-color has-text-color has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Detail Card"},"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":{"top":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|40"}},"border":{"width":"1px","radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"theme-2","textColor":"theme-5","borderColor":"theme-4","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-border-color has-theme-4-border-color has-theme-5-color has-theme-2-background-color has-text-color has-background" style="border-width:1px;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Build with', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|theme-6"}}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|small"}}},"textColor":"theme-6","fontSize":"medium","fontFamily":"openrunde"} -->
<p class="has-theme-6-color has-text-color has-link-color has-openrunde-font-family has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('WordPress', 'metis');?><br><?php esc_html_e('HTML &amp; CSS', 'metis');?><br><?php esc_html_e('Git', 'metis');?><br><?php esc_html_e('SQLite', 'metis');?><br><?php esc_html_e('Leaflet', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Detail Wrapper"},"className":"on-top","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"40%"},"@mobile":{"layout":{"selfStretch":"fixed","flexSize":"60%"}},"@tablet":{"layout":{"selfStretch":"fixed","flexSize":"30%"}}},"textColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"right","verticalAlignment":"bottom"}} -->
<div class="wp-block-group on-top has-theme-1-color has-text-color has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Detail Card"},"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":{"top":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|40"}},"border":{"width":"1px","radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"theme-2","textColor":"theme-5","borderColor":"theme-4","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-border-color has-theme-4-border-color has-theme-5-color has-theme-2-background-color has-text-color has-background" style="border-width:1px;border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|theme-6"}}}},"textColor":"theme-6","fontSize":"2-x-large","fontFamily":"openrunde"} -->
<p class="has-theme-6-color has-text-color has-link-color has-openrunde-font-family has-2-x-large-font-size" style="font-style:normal;font-weight:600">🐈</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Cat person', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Portrait Stack Mob","blockVisibility":{"viewport":{"desktop":false}}},"style":{"spacing":{"blockGap":{"left":"2px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Detail Card"},"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"},"spacing":{"blockGap":{"top":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"width":"1px","radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"theme-2","textColor":"theme-5","borderColor":"theme-4","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-border-color has-theme-4-border-color has-theme-5-color has-theme-2-background-color has-text-color has-background" style="border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Build with', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|theme-6"}}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|small"}},"layout":{"selfStretch":"fill","flexSize":null}},"textColor":"theme-6","fontSize":"medium","fontFamily":"openrunde"} -->
<p class="has-theme-6-color has-text-color has-link-color has-openrunde-font-family has-medium-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('WordPress', 'metis');?><br><?php esc_html_e('HTML &amp; CSS', 'metis');?><br><?php esc_html_e('Git', 'metis');?><br><?php esc_html_e('SQLite', 'metis');?><br><?php esc_html_e('Leaflet', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|theme-6"}}}},"textColor":"theme-6","fontSize":"2-x-large","fontFamily":"openrunde"} -->
<p class="has-theme-6-color has-text-color has-link-color has-openrunde-font-family has-2-x-large-font-size" style="font-style:normal;font-weight:600">🐈</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"@tablet":{"dimensions":{"aspectRatio":"4/3","objectFit":"cover"},"layout":{"selfStretch":"fill","flexSize":null}},"@mobile":{"dimensions":{"aspectRatio":"4/3","objectFit":"cover"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-ada.png" alt="" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
