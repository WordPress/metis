<?php
/**
 * Title: Footer, dark with link pills
 * Slug: metis/footer-d
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer, dark with link pills","patternName":"metis/footer-d"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"},"@mobile":{"spacing":{"blockGap":"var:preset|spacing|60"}}},"backgroundColor":"theme-2","textColor":"theme-1","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-theme-1-color has-theme-2-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}},"@tablet":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}}} -->
<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"metadata":{"name":"Site Title + Fit Text"},"align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"-1rem","lineHeight":"0.9"}},"fontFamily":"openrunde","fitText":true} -->
<p class="alignfull has-fit-text has-openrunde-font-family" style="font-style:normal;font-weight:600;letter-spacing:-1rem;line-height:0.9"><?php esc_html_e('Mētis', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"metadata":{"name":"Title and Nav Wrapper"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}},"fontSize":"x-small"} -->
<h6 class="wp-block-heading has-x-small-font-size"><?php esc_html_e('Menu', 'metis');?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontWeight":"600","lineHeight":"1.2"},"spacing":{"blockGap":"0"},"@tablet":{"layout":{"orientation":"horizontal"},"spacing":{"blockGap":"var:preset|spacing|40"}},"@mobile":{"layout":{"orientation":"horizontal"},"spacing":{"blockGap":"var:preset|spacing|40"}}},"fontSize":"x-large","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e('About', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Matches', 'metis');?>","url":"#"} /-->

<!-- wp:navigation-link {"label":"<?php esc_attr_e('Notes', 'metis');?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"metadata":{"name":"Title and Newsletter Wrapper"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"metadata":{"blockVisibility":{"viewport":{"tablet":false,"mobile":false}}},"fontSize":"x-small"} -->
<h6 class="wp-block-heading has-x-small-font-size"><?php esc_html_e('Contact', 'metis');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family"><?php esc_html_e('Reach out for collaborations or just say Hello.', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Link Toast Outer Wrapper"},"style":{"background":{"gradient":"var:preset|gradient|gradient-9"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"metadata":{"name":"Link Toast Inner Wrapper"},"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"theme-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-theme-3-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"metadata":{"name":"Label"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"@tablet":{"typography":{"fontSize":"var:preset|font-size|small"}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|small"}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('E-mail', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Arrow"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"backgroundColor":"theme-1","textColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-color has-theme-1-background-color has-text-color has-background has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:icon {"icon":"core/arrow-up-right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Link Toasts"},"align":"wide","style":{"@tablet":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"@mobile":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Link Toast Outer Wrapper"},"style":{"background":{"gradient":"var:preset|gradient|gradient-9"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"metadata":{"name":"Link Toast Inner Wrapper"},"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"layout":{"selfStretch":"fill","flexSize":null},"@mobile":{"layout":{"justifyContent":"center"}}},"backgroundColor":"theme-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-theme-3-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"metadata":{"name":"Label"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"@tablet":{"typography":{"fontSize":"var:preset|font-size|small"}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|small","textAlign":"center"}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Bluesky', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Arrow","blockVisibility":{"viewport":{"mobile":false}}},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"backgroundColor":"theme-1","textColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-color has-theme-1-background-color has-text-color has-background has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:icon {"icon":"core/arrow-up-right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link Toast Outer Wrapper"},"style":{"background":{"gradient":"var:preset|gradient|gradient-9"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"metadata":{"name":"Link Toast Inner Wrapper"},"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"layout":{"selfStretch":"fill","flexSize":null},"@mobile":{"layout":{"justifyContent":"center"}}},"backgroundColor":"theme-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-theme-3-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"metadata":{"name":"Label"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"@tablet":{"typography":{"fontSize":"var:preset|font-size|small"}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|small"}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Linkedin', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Arrow","blockVisibility":{"viewport":{"mobile":false}}},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"backgroundColor":"theme-1","textColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-color has-theme-1-background-color has-text-color has-background has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:icon {"icon":"core/arrow-up-right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link Toast Outer Wrapper"},"style":{"background":{"gradient":"var:preset|gradient|gradient-9"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"metadata":{"name":"Link Toast Inner Wrapper"},"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"layout":{"selfStretch":"fill","flexSize":null},"@mobile":{"layout":{"justifyContent":"center"}}},"backgroundColor":"theme-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-theme-3-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"metadata":{"name":"Label"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"@tablet":{"typography":{"fontSize":"var:preset|font-size|small"}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|small"}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('GitHub', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Arrow","blockVisibility":{"viewport":{"mobile":false}}},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"backgroundColor":"theme-1","textColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-color has-theme-1-background-color has-text-color has-background has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:icon {"icon":"core/arrow-up-right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link Toast Outer Wrapper"},"style":{"background":{"gradient":"var:preset|gradient|gradient-9"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"metadata":{"name":"Link Toast Inner Wrapper"},"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"layout":{"selfStretch":"fill","flexSize":null},"@mobile":{"layout":{"justifyContent":"center"}}},"backgroundColor":"theme-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-theme-3-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"metadata":{"name":"Label"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"@tablet":{"typography":{"fontSize":"var:preset|font-size|small"}},"@mobile":{"typography":{"fontSize":"var:preset|font-size|small"}}},"fontSize":"large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Mastodon', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Arrow","blockVisibility":{"viewport":{"mobile":false}}},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"backgroundColor":"theme-1","textColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-color has-theme-1-background-color has-text-color has-background has-link-color" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:icon {"icon":"core/arrow-up-right"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Last line"},"align":"wide","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Top"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:uppercase">▲</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1","fontSize":"x-small"} -->
<p class="has-theme-1-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><a href="#top"><?php esc_html_e('Back to top', 'metis');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Credits"},"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1","fontSize":"x-small"} -->
<p class="has-theme-1-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
printf( esc_html__( 'Designed with %1$sWordPress%2$s', 'metis' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
