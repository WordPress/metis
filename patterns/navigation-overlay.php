<?php
/**
 * Title: Navigation Overlay
 * Slug: metis/navigation-overlay
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Navigation Overlay"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"dimensions":{"minHeight":"100vh"},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"backgroundColor":"theme-6","textColor":"theme-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-theme-2-color has-theme-6-background-color has-text-color has-background has-link-color" style="min-height:100vh;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Nav Overlay Action Bar"},"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation-overlay-close /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Nav Overlay Wrapper"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Branding"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":64,"isLink":false,"align":"center","className":"is-style-rounded"} /-->

<!-- wp:site-title {"style":{"typography":{"textAlign":"center"}},"fontSize":"2-x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Nav Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:navigation {"showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"never","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-large","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e('About TT7', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Patterns', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Templates', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Variations', 'metis');?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"More"},"style":{"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center"><?php esc_html_e('Landmark is a studio that holds many things at once.', 'metis');?> <a href="#"><?php esc_html_e('About the studio', 'metis');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="text-transform:uppercase"><?php esc_html_e('Start a conversation', 'metis');?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
