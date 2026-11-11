<?php
/**
 * Title: Infos, story
 * Slug: metis/infos-a
 * Categories: about
 * Description: The studio's story beside its contact details: two short paragraphs, then the address, phone and email.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Infos, story and people"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Paragraphs Stack"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Eyebrow and Title"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e('Company', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"4-x-large"} -->
<h2 class="wp-block-heading has-4-x-large-font-size"><?php esc_html_e('Landmark calls Glenwood Springs, Colorado home.', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Content"},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Established in 2013, Landmark is a studio that holds many things at once: identities, publications, websites, and the odd end a project needs to feel whole.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Working with new and established ventures alike, we keep the approach flexible. Whatever we are tackling, we favor plain-spoken ideas—grounded in research, carefully made.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"name":"Details Stack"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e('Contact', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php esc_html_e('For project inquiries or a quick chat, please call, write, or email us. Thanks for stopping by.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Bold Paragraph"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><strong><?php esc_html_e('Landmark,', 'metis');?></strong> <?php esc_html_e('LLC', 'metis');?><br><?php esc_html_e('51027 Hwy 6 and 24', 'metis');?><br><?php esc_html_e('Suite Nº 2', 'metis');?><br><?php esc_html_e('Glenwood Springs, CO 81601', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Bold Paragraph"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('(970) 945-5444', 'metis');?><br><?php esc_html_e('studio@example.com', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
