<?php
/**
 * Title: Form, registration
 * Slug: metis/form-d
 * Categories: contact
 * Block Types: jetpack/contact-form
 * Description: Registration with phone, a referral dropdown and extra details.
 */
?>
<!-- wp:jetpack/contact-form {"subject":"<?php esc_attr_e('A new registration from your website', 'metis');?>","jetpackCRM":false,"salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"className":"is-style-animated"} -->
<div class="wp-block-jetpack-contact-form is-style-animated"><!-- wp:jetpack/field-name {"id":"","required":true,"fieldVariant":"name"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Name', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-email {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Email', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:jetpack/field-telephone {"id":"","showCountrySelector":true,"default":"US"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Phone Number', 'metis');?>"} /-->

<!-- wp:jetpack/phone-input /--></div>
<!-- /wp:jetpack/field-telephone -->

<!-- wp:jetpack/field-select {"id":"","options":["<?php esc_attr_e('Search Engine', 'metis');?>","<?php esc_attr_e('Social Media', 'metis');?>","<?php esc_attr_e('TV', 'metis');?>","<?php esc_attr_e('Radio', 'metis');?>","<?php esc_attr_e('Friend or Family', 'metis');?>"]} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('How did you hear about us?', 'metis');?>"} /-->

<!-- wp:jetpack/input {"placeholder":"<?php esc_attr_e('Select one option', 'metis');?>","type":"dropdown"} /--></div>
<!-- /wp:jetpack/field-select -->

<!-- wp:jetpack/field-textarea {"id":""} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Other Details', 'metis');?>"} /-->

<!-- wp:jetpack/input {"type":"textarea"} /--></div>
<!-- /wp:jetpack/field-textarea -->

<!-- wp:button {"tagName":"button","type":"submit","lock":{"move":false,"remove":true},"className":"is-style-glossy","style":{"dimensions":{"width":"var:preset|dimension|25"}}} -->
<div class="wp-block-button is-style-glossy"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e('Send', 'metis');?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form -->
