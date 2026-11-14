<?php
/**
 * Title: Tabs, sidebar and stage
 * Slug: metis/tabs-a
 * Categories: portfolio, text
 * Description: A Tabs block split into a sidebar of headings and a stage: the list becomes a vertical rail of titled rows, each panel holding its image.
 */
?>
<!-- wp:tabs {"align":"wide","className":"tabs-split","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-tabs alignwide tabs-split" style="padding-top:0;padding-bottom:0"><!-- wp:tab-list {"style":{"spacing":{"blockGap":"0"}}} -->
<div role="tablist" class="wp-block-tab-list"><button type="button" role="tab"><?php esc_html_e('Magazine Blog', 'metis');?></button><button type="button" role="tab"><?php esc_html_e('News Blog', 'metis');?></button><button type="button" role="tab"><?php esc_html_e('Personal Blog', 'metis');?></button><button type="button" role="tab"><?php esc_html_e('Portfolio', 'metis');?></button><button type="button" role="tab"><?php esc_html_e('Writer', 'metis');?></button><button type="button" role="tab"><?php esc_html_e('Business', 'metis');?></button></div>
<!-- /wp:tab-list -->

<!-- wp:tab-panels -->
<div class="wp-block-tab-panels"><!-- wp:tab-panel {"label":"<?php esc_attr_e('Magazine Blog', 'metis');?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"gradient-6","contentPosition":"bottom center","metadata":{"name":"Template Cover"},"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"spacing":{"padding":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-6-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"2px","bottomRight":"2px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--template-magazine.webp" alt="<?php esc_attr_e('Preview of the Magazine Blog template: a huge Almanac nameplate over a list of essays and a sidebar, in dark colours', 'metis');?>" class="" style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:2px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"<?php esc_attr_e('News Blog', 'metis');?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"gradient-4","contentPosition":"bottom center","metadata":{"name":"Template Cover"},"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"spacing":{"padding":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-4-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"2px","bottomRight":"2px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--template-news.webp" alt="<?php esc_attr_e('Preview of the News template: a big nameplate on yellow, a lead story, four story cards and an archive list', 'metis');?>" class="" style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:2px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"<?php esc_attr_e('Personal Blog', 'metis');?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"gradient-2","contentPosition":"bottom center","metadata":{"name":"Template Cover"},"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"spacing":{"padding":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-2-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"2px","bottomRight":"2px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--template-personal.webp" alt="<?php esc_attr_e('Preview of the Personal Blog template: a portrait beside a short bio, a list of selected builds, a three-post log', 'metis');?>" class="" style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:2px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"<?php esc_attr_e('Portfolio', 'metis');?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"gradient-1","contentPosition":"bottom center","metadata":{"name":"Template Cover"},"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"spacing":{"padding":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-1-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"2px","bottomRight":"2px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--template-portfolio.webp" alt="<?php esc_attr_e('Preview of the Portfolio template: Cora Vale’s bio over a grid of her spreads, book cover, logo, app and typeface', 'metis');?>" class="" style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:2px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"<?php esc_attr_e('Writer', 'metis');?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"gradient-5","contentPosition":"bottom center","metadata":{"name":"Template Cover"},"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"spacing":{"padding":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-5-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"2px","bottomRight":"2px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--template-writer.webp" alt="<?php esc_attr_e('Preview of the Writer template: Iris Calder’s intro by an illustration, her book Ground Truth, reviews and writings', 'metis');?>" class="" style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:2px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"<?php esc_attr_e('Business', 'metis');?>"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:cover {"isUserOverlayColor":true,"gradient":"gradient-3","contentPosition":"bottom center","metadata":{"name":"Template Cover"},"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"spacing":{"padding":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-3-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px","bottomLeft":"2px","bottomRight":"2px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--template-business.webp" alt="<?php esc_attr_e('Preview of the Business template: a studio hero with a phone mockup, three service cards and a client logo row', 'metis');?>" class="" style="border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:2px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:tab-panel --></div>
<!-- /wp:tab-panels --></div>
<!-- /wp:tabs -->
