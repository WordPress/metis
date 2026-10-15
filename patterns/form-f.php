<?php
/**
 * Title: Form, feedback
 * Slug: metis/form-f
 * Categories: contact
 * Block Types: jetpack/contact-form
 * Description: A rating scale and one open question.
 */
?>
<!-- wp:jetpack/contact-form {"subject":"New feedback received from your website","jetpackCRM":false,"salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"className":"is-style-animated"} -->
<div class="wp-block-jetpack-contact-form is-style-animated"><!-- wp:jetpack/field-name {"id":"","required":true,"fieldVariant":"name"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Name', 'metis');?>"} /-->

<!-- wp:jetpack/input {"style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-email {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Email', 'metis');?>"} /-->

<!-- wp:jetpack/input {"style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:jetpack/field-rating {"required":true,"default":5} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Please rate our website', 'metis');?>"} /-->

<!-- wp:jetpack/input-rating {"fontSize":"large"} /--></div>
<!-- /wp:jetpack/field-rating -->

<!-- wp:jetpack/field-textarea {"id":""} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('How could we improve?', 'metis');?>"} /-->

<!-- wp:jetpack/input {"type":"textarea","style":{"border":{"style":"solid"}}} /--></div>
<!-- /wp:jetpack/field-textarea -->

<!-- wp:button {"tagName":"button","type":"submit","lock":{"move":false,"remove":true},"className":"is-style-glossy","style":{"dimensions":{"width":"var:preset|dimension|25"}}} -->
<div class="wp-block-button is-style-glossy"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e('Send Feedback', 'metis');?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form -->
