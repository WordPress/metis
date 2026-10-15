<?php
/**
 * Title: Testimonial, one quote
 * Slug: metis/testimonials-a
 * Categories: testimonials
 * Description: One client quote, large enough to carry a section.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Testimonial, one quote","patternName":"metis/testimonials-a","categories":["Testimonials"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"metadata":{"name":"Eyebrow"},"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e('In their words', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:quote {"align":"wide","className":"is-style-hanging-mark is-style-hanging"} -->
<blockquote class="wp-block-quote alignwide is-style-hanging-mark is-style-hanging"><!-- wp:heading {"level":3,"style":{"@tablet":{"typography":{"fontSize":"var:preset|font-size|2-x-large"}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|2-x-large"}}},"textColor":"theme-2","fontSize":"3-x-large"} -->
<h3 class="wp-block-heading has-theme-2-color has-text-color has-3-x-large-font-size"><?php esc_html_e('They asked better questions than we did, and the site is the least of what we left with.', 'metis');?></h3>
<!-- /wp:heading --><cite><?php esc_html_e('Helena Marsh, Field &amp; Form', 'metis');?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
