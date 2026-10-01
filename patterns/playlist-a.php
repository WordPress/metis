<?php
/**
 * Title: Sound, playlist
 * Slug: metis/playlist-a
 * Categories: Portfolio
 * Description: The listening section on ink — the core Playlist block with the theme's three sample tracks, covers, and waveform.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Sound, playlist","patternName":"metis/playlist-a","description":"A static stand-in for the core Playlist block — cover, waveform, now-playing bar, and a numbered tracklist. Swap for the real Playlist block once audio and covers exist.","categories":["Portfolio"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"},"anchor":"sound"} -->
<section class="wp-block-group alignwide" id="sound" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%"><!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.01rem","lineHeight":1.6000000000000001}},"fontSize":"small"} -->
<h2 class="wp-block-heading alignwide has-small-font-size" style="letter-spacing:0.01rem;line-height:1.6;text-transform:uppercase"><?php esc_html_e('Music', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"fontSize":"3-x-large"} -->
<h2 class="wp-block-heading has-3-x-large-font-size"><?php esc_html_e('When the drawing’s done, I make things you listen to instead of look at—voice, field recordings, the odd remix, mostly gathered from the same coasts I spend the day surveying.', 'metis');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:playlist {"showPlayButtonArtwork":true,"showArtists":false,"showNumbers":false,"waveformColor":"#fafafa","waveformBackgroundColor":"#0a0a0a40","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1"} -->
<figure class="wp-block-playlist alignwide has-theme-1-color has-text-color has-link-color"><ol class="wp-block-playlist__tracklist wp-block-playlist__tracklist-artist-is-hidden"><!-- wp:playlist-track {"src":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/audio/1-small-things.mp3","album":"Unknown album","artist":"3xBlast","image":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--audio-track-1.jpg","imageAlt":"","length":"1:03","title":"Small Things"} /-->

<!-- wp:playlist-track {"src":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/audio/2-near-and-far.mp3","album":"Unknown album","artist":"Joth","image":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--audio-track-2.jpg","imageAlt":"","length":"0:54","title":"Near and Far"} /-->

<!-- wp:playlist-track {"src":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/audio/3-long-journey.mp3","album":"Unknown album","artist":"Sudocolon","image":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/metis-artifact--audio-track-3.jpg","imageAlt":"","length":"0:52","title":"Long Journey"} /--></ol></figure>
<!-- /wp:playlist --></section>
<!-- /wp:group -->
