<?php
/**
 * Title: About, portrait and bio
 * Slug: metis/about-a
 * Categories: About
 * Description: A portrait beside a short, plain-spoken biography opened by a one-word heading.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"About"},"align":"wide","anchor":"about","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="about" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('About', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:38%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('Portrait of Iris Calder', 'metis');?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('Iris Calder surveyed shoreline and back-country for two decades before she wrote a book of her own. The maps were exact and, she will tell you, never quite true — the ground always kept something back.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Her books and essays are about that gap: the distance between the drawing and the walk, and how people find their way across it anyway. She writes plainly and at her own pace, from a house at the edge of a survey she never finished.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
