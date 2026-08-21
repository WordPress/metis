<?php
/**
 * Title: Contact, closing band
 * Slug: metis/contact-a
 * Categories: Contact
 * Description: A full-width closing band with one invitation to get in touch.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Begin"},"align":"full","anchor":"begin","className":"metis-day-night","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<section id="begin" class="wp-block-group alignfull metis-day-night" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Intro"},"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('BEGIN', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"anchor":"tell-us-what-you-are-making"} -->
<h2 id="tell-us-what-you-are-making" class="wp-block-heading"><?php esc_html_e('Tell us what you are making.', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('A sentence or two is enough. We read everything and answer within the week.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"className":"is-style-glossy"} -->
<div class="wp-block-button is-style-glossy"><a class="wp-block-button__link wp-element-button" href="mailto:studio@example.com"><?php esc_html_e('Start a conversation', 'metis');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"wide","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="alignwide has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Prefer plain email? studio@example.com works.', 'metis');?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
