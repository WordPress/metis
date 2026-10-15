<?php
/**
 * Title: Form, RSVP
 * Slug: metis/form-c
 * Categories: contact
 * Block Types: jetpack/contact-form
 * Description: An RSVP with a yes/no choice and room for details.
 */
?>
<!-- wp:jetpack/contact-form {"subject":"A new RSVP from your website","jetpackCRM":false,"salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"className":"is-style-animated"} -->
<div class="wp-block-jetpack-contact-form is-style-animated"><!-- wp:jetpack/field-name {"id":"","required":true,"fieldVariant":"name"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Name', 'metis');?>"} /-->

<!-- wp:jetpack/input {"style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-email {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Email', 'metis');?>"} /-->

<!-- wp:jetpack/input {"style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:jetpack/field-radio {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Attending?', 'metis');?>"} /-->

<!-- wp:jetpack/options -->
<ul class="wp-block-jetpack-options"><!-- wp:jetpack/option {"placeholder":"Add option…","label":"<?php esc_attr_e('Yes', 'metis');?>"} /-->

<!-- wp:jetpack/option {"placeholder":"Add option…","label":"<?php esc_attr_e('No', 'metis');?>"} /--></ul>
<!-- /wp:jetpack/options --></div>
<!-- /wp:jetpack/field-radio -->

<!-- wp:jetpack/field-textarea {"id":""} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Other Details', 'metis');?>"} /-->

<!-- wp:jetpack/input {"type":"textarea","style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-textarea -->

<!-- wp:button {"tagName":"button","type":"submit","lock":{"move":false,"remove":true},"className":"is-style-glossy","style":{"dimensions":{"width":"var:preset|dimension|25"}}} -->
<div class="wp-block-button is-style-glossy"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e('Send RSVP', 'metis');?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form -->
