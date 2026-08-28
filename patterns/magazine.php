<?php
/**
 * Title: magazine
 * Slug: metis/magazine
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"tagName":"section","metadata":{"name":"Masthead"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<section class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Nameplate"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"align":"wide","fitText":true} -->
<h1 class="wp-block-heading alignwide has-fit-text"><?php esc_html_e('Almanac', 'metis');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":6,"textColor":"theme-3"} -->
<h6 class="wp-block-heading has-theme-3-color has-text-color"><?php esc_html_e('Issue No. 12 · Winter · A quarterly from Landmark', 'metis');?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Departments"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-3-x-large-font-size"><?php esc_html_e('All,', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-3-x-large-font-size"><?php esc_html_e('Field Notes,', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-3-x-large-font-size"><?php esc_html_e('Essays,', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-3-x-large-font-size"><?php esc_html_e('Maps,', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-3-x-large-font-size"><?php esc_html_e('Interviews,', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"openrunde"} -->
<p class="has-openrunde-font-family has-3-x-large-font-size"><?php esc_html_e('Reviews', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Features C","patternName":"metis/features-c","categories":["Featured"]},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"},"anchor":"pieces"} -->
<section class="wp-block-group alignwide" id="pieces"><!-- wp:heading {"level":6,"align":"wide"} -->
<h6 class="wp-block-heading alignwide"><?php esc_html_e('Featured pieces', 'metis');?></h6>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Piece 1"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"stretch","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:32%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('Illustration for What the Contour Leaves Out', 'metis');?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"metadata":{"name":"Title and detail"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Title"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"3-x-large"} -->
<h3 class="wp-block-heading has-3-x-large-font-size"><?php esc_html_e('What the Contour Leaves Out', 'metis');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Detail"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"3-x-large"} -->
<p class="has-3-x-large-font-size"><?php esc_html_e('December 2025', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"recursive-mono"} -->
<p class="has-recursive-mono-font-family has-3-x-large-font-size"><?php esc_html_e('Iris Calder → Essay', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Piece 2"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"stretch","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:32%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('Illustration for What the Contour Leaves Out', 'metis');?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"metadata":{"name":"Title and detail"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Title"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"3-x-large"} -->
<h3 class="wp-block-heading has-3-x-large-font-size"><?php esc_html_e('Drawing the Coast Twice', 'metis');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Detail"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"3-x-large"} -->
<p class="has-3-x-large-font-size"><?php esc_html_e('January 2026', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"recursive-mono"} -->
<p class="has-recursive-mono-font-family has-3-x-large-font-size"><?php esc_html_e('Cora Vale → Maps', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Piece 3"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"stretch","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:32%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('Illustration for What the Contour Leaves Out', 'metis');?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"metadata":{"name":"Title and detail"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Title"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"3-x-large"} -->
<h3 class="wp-block-heading has-3-x-large-font-size"><?php esc_html_e('The Tide Tables', 'metis');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Detail"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"3-x-large"} -->
<p class="has-3-x-large-font-size"><?php esc_html_e('February 2026', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"recursive-mono"} -->
<p class="has-recursive-mono-font-family has-3-x-large-font-size"><?php esc_html_e('Ada Fenn → Tools', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Piece 4"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"stretch","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:32%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-img-4-3.png" alt="<?php esc_attr_e('Illustration for What the Contour Leaves Out', 'metis');?>" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"metadata":{"name":"Title and detail"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Title"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"3-x-large"} -->
<h3 class="wp-block-heading has-3-x-large-font-size"><?php esc_html_e('The Weather in Other People’s Maps', 'metis');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Detail"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"3-x-large"} -->
<p class="has-3-x-large-font-size"><?php esc_html_e('March 2026', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"3-x-large","fontFamily":"recursive-mono"} -->
<p class="has-recursive-mono-font-family has-3-x-large-font-size"><?php esc_html_e('Nadia Okonkwo → Dispatch', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Product List C","patternName":"metis/product-list-c","categories":["Call","to","Action"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"},"anchor":"archive"} -->
<section class="wp-block-group alignwide" id="archive" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e('Archive', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":51,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[]},"metadata":{"name":"Articles"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-terms {"term":"category","textColor":"theme-3","fontSize":"x-small","fontFamily":"recursive-mono"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->