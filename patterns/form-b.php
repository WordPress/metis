<?php
/**
 * Title: Form, lead capture
 * Slug: metis/form-b
 * Categories: contact
 * Block Types: jetpack/contact-form
 * Description: Name and email with a consent note — a mailing list in two fields.
 */
?>
<!-- wp:jetpack/contact-form {"jetpackCRM":false,"salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"className":"is-style-animated"} -->
<div class="wp-block-jetpack-contact-form is-style-animated"><!-- wp:jetpack/field-name {"id":"","required":true,"fieldVariant":"name"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Name', 'metis');?>"} /-->

<!-- wp:jetpack/input {"style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-email {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Email', 'metis');?>"} /-->

<!-- wp:jetpack/input {"style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:jetpack/field-consent {"id":"","className":"is-style-list"} -->
<div><!-- wp:jetpack/option {"placeholder":"Add implicit consent message…","label":"<?php esc_attr_e('By submitting your information, you\'re giving us permission to email you. You may unsubscribe at any time.', 'metis');?>","hideInput":true,"isStandalone":true} /--></div>
<!-- /wp:jetpack/field-consent -->

<!-- wp:button {"tagName":"button","type":"submit","lock":{"move":false,"remove":true},"className":"is-style-glossy","style":{"dimensions":{"width":"var:preset|dimension|25"}}} -->
<div class="wp-block-button is-style-glossy"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e('Subscribe', 'metis');?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form -->
