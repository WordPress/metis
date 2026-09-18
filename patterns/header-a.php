<?php
/**
 * Title: Header, uppercase title and search bar
 * Slug: metis/header-a
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Header, uppercase title and search bar","patternName":"metis/header-a"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Header Uppercase Wrapper"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Branding Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Search Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:search {"showLabel":false,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"className":"search-inset","style":{"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Nav Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"always","icon":"menu","hasIcon":false,"style":{"typography":{"textTransform":"uppercase"}},"layout":{"type":"flex"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e('About TT7', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Patterns', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Templates', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Variations', 'metis');?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
