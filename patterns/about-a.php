<?php
/**
 * Title: About, portrait and bio
 * Slug: metis/about-a
 * Categories: About
 * Description: A portrait beside a short, plain-spoken biography opened by a one-word heading.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"About"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"},"anchor":"about"} -->
<section class="wp-block-group alignwide" id="about" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:38%"><!-- wp:image {"width":"800px","aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--avatar-iris.png" alt="" class="" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:3/4;object-fit:cover;width:800px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"metadata":{"name":"Column Stack"},"align":"wide","style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="min-height:100%"><!-- wp:group {"metadata":{"name":"Section title and heading"},"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"style":{"typography":{"letterSpacing":"0.01rem","lineHeight":1.6000000000000001,"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.01rem;line-height:1.6;text-transform:uppercase"><?php esc_html_e('About', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"2-x-large"} -->
<h2 class="wp-block-heading has-2-x-large-font-size"><?php esc_html_e('Iris Calder surveyed the shoreline and backcountry for two decades before she wrote a book of her own. The maps were exact and, she will tell you, never quite true—the ground always kept something back.', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Copy and link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph -->
<p><?php esc_html_e('Her books and essays are about that gap: the distance between the drawing and the walk, and how people find their way across it anyway. She writes plainly and at her own pace, from a house at the edge of a survey she never finished.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|theme-3"},":hover":{"color":{"text":"var:preset|color|theme-2"}}}}},"textColor":"theme-3","fontSize":"small","fontFamily":"openrunde"} -->
<p class="no-underline has-theme-3-color has-text-color has-link-color has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><a href="#"><?php esc_html_e('+ Meet Iris Calder', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
