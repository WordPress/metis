<?php
/**
 * Title: Newsletter, branded block
 * Slug: metis/cta-b
 * Categories: call-to-action
 * Description: A branded newsletter invitation — the masthead mark beside a weekly promise and the subscribe form.
 */
?>
<!-- wp:group {"metadata":{"name":"Newsletter, branded","categories":["Call","to","Action"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"name":"Brand"}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact-p-logo.png" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"metadata":{"name":"Title and subtitle"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"textColor":"theme-2","fontSize":"x-large","anchor":"newsletter"} -->
<h3 id="newsletter" class="wp-block-heading has-theme-2-color has-text-color has-link-color has-x-large-font-size"><?php esc_html_e('Parallel, every Friday', 'metis');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-balance","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"openrunde"} -->
<p class="text-balance has-openrunde-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e('One email. The week’s dispatches, and nothing we would not read ourselves.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"tagName":"section","metadata":{"name":"Card Wrapper","categories":["Contact"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"shadow":"var:preset|shadow|shadow-1"},"backgroundColor":"theme-6","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide has-theme-6-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--shadow-1)"><!-- wp:jetpack/contact-form {"jetpackCRM":false,"variationName":"lead-capture-form","salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"className":"is-style-animated","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-jetpack-contact-form is-style-animated"><!-- wp:jetpack/field-email {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Email', 'metis');?>"} /-->

<!-- wp:jetpack/input {"style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:button {"tagName":"button","type":"submit","lock":{"move":false,"remove":true},"className":"is-style-glossy","style":{"dimensions":{"width":"var:preset|dimension|25"}}} -->
<div class="wp-block-button is-style-glossy"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e('Subscribe', 'metis');?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form --></section>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
