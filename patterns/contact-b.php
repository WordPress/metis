<?php
/**
 * Title: Contact, display heading
 * Slug: metis/contact-b
 * Categories: contact
 * Description: A contact ledger in three dotted rows — e-mail, studio and social, each with its outbound mark.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"},"anchor":"contact"} -->
<section class="wp-block-group alignwide" id="contact" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Links on Columns"},"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"border":{"bottom":{"color":"var:preset|color|theme-4","width":"1px","style":"dotted"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center" style="border-bottom-color:var(--wp--preset--color--theme-4);border-bottom-style:dotted;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3%"><!-- wp:heading {"level":5,"fontSize":"large"} -->
<h5 class="wp-block-heading has-large-font-size"><?php esc_html_e('E-mail', 'metis');?></h5>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.6%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.6%"><!-- wp:group {"metadata":{"name":"Links Row"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-link-color has-openrunde-font-family has-large-font-size"><?php esc_html_e('cora@landmark.studio', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-link-color has-openrunde-font-family has-large-font-size">↗</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"border":{"bottom":{"color":"var:preset|color|theme-4","width":"1px","style":"dotted"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center" style="border-bottom-color:var(--wp--preset--color--theme-4);border-bottom-style:dotted;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3%"><!-- wp:heading {"level":5,"fontSize":"large"} -->
<h5 class="wp-block-heading has-large-font-size"><?php esc_html_e('Studio', 'metis');?></h5>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.6%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.6%"><!-- wp:group {"metadata":{"name":"Links Row"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-link-color has-openrunde-font-family has-large-font-size"><?php esc_html_e('infocora@landmark.studioteam.com', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-link-color has-openrunde-font-family has-large-font-size">↗</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"border":{"bottom":{"color":"var:preset|color|theme-4","width":"1px","style":"dotted"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center" style="border-bottom-color:var(--wp--preset--color--theme-4);border-bottom-style:dotted;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3%"><!-- wp:heading {"level":5,"fontSize":"large"} -->
<h5 class="wp-block-heading has-large-font-size"><?php esc_html_e('Social', 'metis');?></h5>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.6%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.6%"><!-- wp:group {"metadata":{"name":"Links Row"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Links"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-link-color has-openrunde-font-family has-large-font-size"><a href="#"><?php esc_html_e('/Behance', 'metis');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-link-color has-openrunde-font-family has-large-font-size"><a href="#"><?php esc_html_e('/Dribbble', 'metis');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-link-color has-openrunde-font-family has-large-font-size"><a href="#"><?php esc_html_e('/Instagram', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-link-color has-openrunde-font-family has-large-font-size">↗</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
