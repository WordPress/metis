<?php
/**
 * Title: Testimonial, one quote
 * Slug: metis/testimonials-a
 * Categories: Testimonials
 * Description: One client quote, large enough to carry a section.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Testimonial"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-5","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-5);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Intro"},"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('IN THEIR WORDS', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:quote {"align":"wide"} -->
<blockquote class="wp-block-quote alignwide"><!-- wp:paragraph {"fontSize":"2-x-large"} -->
<p class="has-2-x-large-font-size"><?php esc_html_e('They asked better questions than we did. The site is the least of what we left with.', 'metis');?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e('Helena Marsh, Field & Form', 'metis');?></cite></blockquote>
<!-- /wp:quote --></section>
<!-- /wp:group -->
