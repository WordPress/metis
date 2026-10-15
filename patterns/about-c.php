<?php
/**
 * Title: About, builder portrait
 * Slug: metis/about-c
 * Categories: about
 * Description: A portrait beside a short, plain-spoken biography of the one who builds, opened by a one-word heading.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"About"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"},"anchor":"about"} -->
<section class="wp-block-group alignwide" id="about" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:38%"><!-- wp:image {"width":"800px","aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-ada.png" alt="" class="" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:3/4;object-fit:cover;width:800px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"metadata":{"name":"Column Stack"},"align":"wide","style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="min-height:100%"><!-- wp:group {"metadata":{"name":"Section title and heading"},"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e('About', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"2-x-large"} -->
<h2 class="wp-block-heading has-2-x-large-font-size"><?php esc_html_e('Ada Fenn builds the tools the others work with—the templates, the archives, the app that works where the signal doesn\'t. She would rather fix the drawer than talk about the desk.', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Copy and link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph -->
<p><?php esc_html_e('Her work is the kind you only notice when it fails, which is why it rarely does: pages that assemble themselves, archives that stay findable, notes that survive the walk home. She builds slowly, tests on bad connections, and ships nothing she would not keep using herself.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"},":hover":{"color":{"text":"var:preset|color|theme-2"}}}}},"textColor":"theme-3","fontSize":"small","fontFamily":"openrunde"} -->
<p class="no-underline has-theme-3-color has-text-color has-link-color has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e('+ Meet Ada Fenn', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
