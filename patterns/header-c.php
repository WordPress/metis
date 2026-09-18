<?php
/**
 * Title: Header, minimal with menu button
 * Slug: metis/header-c
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Header, minimal with menu button","patternName":"metis/header-c"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Minimal Wrapper"},"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Branding Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Menu Button"},"style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"theme-2","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:navigation {"textColor":"theme-1","overlayMenu":"always","layout":{"type":"flex"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e('About', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Patterns', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Templates', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Variations', 'metis');?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
