<?php
/**
 * Title: Navigation Overlay
 * Slug: metis/navigation-overlay
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Navigation Overlay"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"dimensions":{"minHeight":"100vh"},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"backgroundColor":"theme-6","textColor":"theme-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-theme-2-color has-theme-6-background-color has-text-color has-background has-link-color" style="min-height:100vh;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Nav Overlay Action Bar"},"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Nav Overlay and DM Wrapper"},"style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}},"spacing":{"blockGap":{"left":"0"}}},"backgroundColor":"theme-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-theme-2-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px"><!-- wp:group {"metadata":{"name":"Dark Mode Button"},"className":"metis-mode-toggle","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group metis-mode-toggle has-theme-2-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:icon {"icon":"core/shadow","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Nav Overlay Button Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:navigation-overlay-close {"displayMode":"text","className":"is-style-eyebrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Nav Overlay Wrapper"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Branding"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":64,"isLink":false,"align":"center","className":"is-style-rounded"} /-->

<!-- wp:site-title {"style":{"typography":{"textAlign":"center"}},"fontSize":"2-x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Nav Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:navigation {"showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"never","style":{"typography":{"textTransform":"uppercase","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"0"}},"fontSize":"3-x-large","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e('About', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Patterns', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Templates', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Variations', 'metis');?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"More"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php esc_html_e('Landmark is a studio that holds many things at once.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-glossy","style":{"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-glossy"><a class="wp-block-button__link wp-element-button" style="text-transform:uppercase"><?php esc_html_e('About the Studio', 'metis');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
