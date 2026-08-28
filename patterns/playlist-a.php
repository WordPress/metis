<?php
/**
 * Title: Sound, playlist
 * Slug: metis/playlist-a
 * Categories: Portfolio
 * Description: A static stand-in for the core Playlist block — cover, waveform, now-playing bar, and a numbered tracklist. Swap for the real Playlist block once audio and covers exist.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Sound"},"align":"wide","anchor":"sound","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|theme-3","style":"dotted","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<section id="sound" class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Intro"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('Also, sound', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e('Coastwork', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('When the drawing’s done, I make things you listen to instead of look at — voice, field recordings, the odd remix, mostly gathered from the same coasts I spend the day surveying.', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Player"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"104px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:104px"><!-- wp:group {"backgroundColor":"theme-2","style":{"dimensions":{"minHeight":"96px"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-background-color has-background" style="min-height:96px"><!-- wp:paragraph {"textColor":"theme-1","fontSize":"large"} -->
<p class="has-theme-1-color has-text-color has-large-font-size">&#9654;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/waveform-placeholder.svg" alt="<?php esc_attr_e('Audio waveform', 'metis');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Northing', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Cora Vale', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"120px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:120px"><!-- wp:paragraph {"align":"right","textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-text-align-right has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('0:00 / 4:11', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Tracklist"},"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Track"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|theme-3","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"6%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:6%"><!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family"><?php esc_html_e('1', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Northing', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Cora Vale', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"14%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:14%"><!-- wp:paragraph {"align":"right","textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-text-align-right has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('4:11', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Track"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|theme-3","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"6%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:6%"><!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family"><?php esc_html_e('2', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Tide, Recorded Twice', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Cora Vale', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"14%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:14%"><!-- wp:paragraph {"align":"right","textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-text-align-right has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('5:36', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Track"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|theme-3","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"6%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:6%"><!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family"><?php esc_html_e('3', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Reading the Coast Aloud', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Cora Vale (feat. Iris Calder)', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"14%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:14%"><!-- wp:paragraph {"align":"right","textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-text-align-right has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('3:20', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Track"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|theme-3","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--theme-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"6%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:6%"><!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family"><?php esc_html_e('4', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Contour (Ada Fenn Remix)', 'metis');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('Cora Vale', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"14%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:14%"><!-- wp:paragraph {"align":"right","textColor":"theme-3","fontFamily":"recursive-mono","fontSize":"x-small"} -->
<p class="has-text-align-right has-theme-3-color has-text-color has-recursive-mono-font-family has-x-small-font-size"><?php esc_html_e('6:04', 'metis');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
