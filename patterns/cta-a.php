<?php
/**
 * Title: Newsletter, closing block
 * Slug: metis/cta-a
 * Categories: call-to-action
 * Description: A closing invitation — the newsletter heading beside a one-field subscribe form.
 */
?>
<!-- wp:group {"metadata":{"name":"Newsletter, closing block"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"tagName":"section","metadata":{"name":"Newsletter Wrapper","categories":["Contact"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"shadow":"var:preset|shadow|shadow-1"},"backgroundColor":"theme-6","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide has-theme-6-background-color has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);box-shadow:var(--wp--preset--shadow--shadow-1)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Title and subtitle"},"style":{"spacing":{"blockGap":{"top":"0"},"padding":{"right":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"textColor":"theme-2","fontSize":"2-x-large","anchor":"newsletter"} -->
<h2 id="newsletter" class="wp-block-heading has-theme-2-color has-text-color has-link-color has-2-x-large-font-size"><?php esc_html_e('Newsletter', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"className":"text-balance","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-3"}}}},"textColor":"theme-3","fontSize":"2-x-large"} -->
<h2 class="wp-block-heading text-balance has-theme-3-color has-text-color has-link-color has-2-x-large-font-size"><?php esc_html_e('Join our mailing list and stay in the know.', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:jetpack/contact-form {"jetpackCRM":false,"variationName":"lead-capture-form","salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"className":"is-style-animated","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-jetpack-contact-form is-style-animated" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:jetpack/field-email {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Email', 'metis');?>"} /-->

<!-- wp:jetpack/input {"style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:button {"tagName":"button","type":"submit","lock":{"move":false,"remove":true},"className":"is-style-glossy","style":{"dimensions":{"width":"var:preset|dimension|25"}}} -->
<div class="wp-block-button is-style-glossy"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e('Subscribe', 'metis');?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->
