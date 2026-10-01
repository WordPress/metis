<?php
/**
 * Title: Praise, short quotes
 * Slug: metis/testimonials-b
 * Categories: Testimonials
 * Description: Short review blurbs for a book, three across, each with its source.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Praise, short quotes","patternName":"metis/testimonials-b","description":"Short review blurbs for a book, three across, each with its source.","categories":["Testimonials"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"},"anchor":"praise"} -->
<section class="wp-block-group alignwide" id="praise" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Column Stack"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e('Reviews', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e('on ‘Ground Truth’, by Iris Calder', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Quotes Row"},"style":{"@tablet":{"layout":{"justifyContent":"stretch","orientation":"vertical"}},"@mobile":{"layout":{"justifyContent":"left","orientation":"vertical"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php esc_html_e('A book about maps that turns out to be about attention. I read it twice.', 'metis');?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e('The Marginal Review', 'metis');?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php esc_html_e('Iris Calder writes the way a good map reads: nothing wasted, everything placed.', 'metis');?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e('Ordnance Quarterly', 'metis');?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
