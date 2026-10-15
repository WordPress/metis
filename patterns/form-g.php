<?php
/**
 * Title: Form, Salesforce lead
 * Slug: metis/form-g
 * Categories: contact
 * Block Types: jetpack/contact-form
 * Description: A lead form mapped to Salesforce fields.
 */
?>
<!-- wp:jetpack/contact-form {"jetpackCRM":false,"formTitle":"Salesforce Lead Form","salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"className":"is-style-animated"} -->
<div class="wp-block-jetpack-contact-form is-style-animated"><!-- wp:jetpack/field-name {"id":"first_name","required":true,"fieldVariant":"name"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('First Name', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-name {"id":"last_name","required":true,"fieldVariant":"name"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Last Name', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-email {"id":"email","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Email', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:jetpack/field-telephone {"id":"phone","showCountrySelector":true,"default":"US"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Phone', 'metis');?>"} /-->

<!-- wp:jetpack/phone-input /--></div>
<!-- /wp:jetpack/field-telephone -->

<!-- wp:jetpack/field-text {"id":"company"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Company', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-text -->

<!-- wp:jetpack/field-text {"id":"title"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Job Title', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-text -->

<!-- wp:button {"tagName":"button","type":"submit","lock":{"move":false,"remove":true},"className":"is-style-glossy","style":{"dimensions":{"width":"var:preset|dimension|25"}}} -->
<div class="wp-block-button is-style-glossy"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e('Submit', 'metis');?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form -->
