<?php
/**
 * Title: Contact, display heading
 * Slug: metis/contact-b
 * Categories: Contact
 * Description: A closing call to action — an oversized Contact heading that links to email, with a short open-to-work line.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact"},"align":"wide","anchor":"contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="contact" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide","fontSize":"4-x-large"} -->
<h2 class="wp-block-heading alignwide has-4-x-large-font-size"><?php echo sprintf( esc_html__( '%1$sContact ↘%2$s', 'metis' ), '<a href="' . esc_url( 'mailto:cora@landmark.studio' ) . '">', '</a>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontFamily":"recursive-mono"} -->
<p class="has-recursive-mono-font-family"><?php esc_html_e('cora@landmark.studio', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontSize":"small"} -->
<p class="has-theme-3-color has-text-color has-small-font-size"><?php esc_html_e('Open to new work. She reads everything.', 'metis');?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
