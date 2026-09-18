<?php
/**
 * Title: Header, uppercase title and search bar
 * Slug: metis/header-a
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Header, uppercase title and search bar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"style":{"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:search {"showLabel":false,"placeholder":"","width":40,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"100px"}}} /-->

<!-- wp:group {"metadata":{"name":"Menu"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600;text-transform:uppercase"><?php esc_html_e('Menu', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"icon":"menu","overlayMenu":"always","layout":{"type":"flex"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
