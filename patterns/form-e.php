<?php
/**
 * Title: Form, appointment
 * Slug: metis/form-e
 * Categories: contact
 * Block Types: jetpack/contact-form
 * Description: Booking form with date, time of day and notes.
 */
?>
<!-- wp:jetpack/contact-form {"subject":"A new appointment booked from your website","jetpackCRM":false,"salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"className":"is-style-animated"} -->
<div class="wp-block-jetpack-contact-form is-style-animated"><!-- wp:jetpack/field-name {"id":"","required":true,"fieldVariant":"name"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Name', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-email {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Email', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:jetpack/field-telephone {"id":"","required":true,"showCountrySelector":true,"default":"US"} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Phone', 'metis');?>"} /-->

<!-- wp:jetpack/phone-input /--></div>
<!-- /wp:jetpack/field-telephone -->

<!-- wp:jetpack/field-date {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Date', 'metis');?>"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-date -->

<!-- wp:jetpack/field-radio {"id":"","required":true} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Time', 'metis');?>"} /-->

<!-- wp:jetpack/options -->
<ul class="wp-block-jetpack-options"><!-- wp:jetpack/option {"placeholder":"Add option…","label":"<?php esc_attr_e('Morning', 'metis');?>"} /-->

<!-- wp:jetpack/option {"placeholder":"Add option…","label":"<?php esc_attr_e('Afternoon', 'metis');?>"} /--></ul>
<!-- /wp:jetpack/options --></div>
<!-- /wp:jetpack/field-radio -->

<!-- wp:jetpack/field-textarea {"id":""} -->
<div><!-- wp:jetpack/label {"label":"<?php esc_attr_e('Notes', 'metis');?>"} /-->

<!-- wp:jetpack/input {"type":"textarea"} /--></div>
<!-- /wp:jetpack/field-textarea -->

<!-- wp:button {"tagName":"button","type":"submit","lock":{"move":false,"remove":true},"className":"is-style-glossy","style":{"dimensions":{"width":"var:preset|dimension|25"}}} -->
<div class="wp-block-button is-style-glossy"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e('Book Appointment', 'metis');?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form -->
