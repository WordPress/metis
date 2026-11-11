<?php
/**
 * Mētis functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Metis
 * @since Metis 1.0
 */

/*
 * Two stylesheets: style.css for the site and assets/css/editor-style.css for
 * the Editor. They follow the same sections; change a rule in both. The
 * design itself lives in theme.json.
 */
if ( ! function_exists( 'metis_editor_style' ) ) :
	function metis_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'metis_editor_style' );

if ( ! function_exists( 'metis_styles' ) ) :
	function metis_styles() {
		wp_register_style(
			'metis-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style( 'metis-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'metis_styles' );

/*
 * Block styles, picked in the Editor from a block's Styles panel.
 *
 * - Button, Glossy: a see-through sheen over the colours you choose (CSS in style.css).
 * - Group, Gradient: a breathing fade into the page background (CSS in style.css).
 * - Quote, Hanging: the ❝ sits beside the text, testimonial-style (CSS in theme.json).
 * - Quote, Blank: keeps the bubble without the mark (CSS in theme.json).
 * - Paragraph, Heading and the overlay's Close button, Eyebrow: the small
 *   uppercase line that opens sections. Built from style_data, so the Editor
 *   renders it natively and every property stays editable per block.
 */
if ( ! function_exists( 'metis_block_styles' ) ) :
	function metis_block_styles() {
		register_block_style(
			'core/button',
			array(
				'name'  => 'glossy',
				'label' => __( 'Glossy', 'metis' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'gradient-flow',
				'label' => __( 'Gradient', 'metis' ),
			)
		);
		register_block_style(
			'core/quote',
			array(
				'name'  => 'hanging',
				'label' => __( 'Hanging', 'metis' ),
			)
		);
		register_block_style(
			'core/quote',
			array(
				'name'  => 'blank',
				'label' => __( 'Blank', 'metis' ),
			)
		);
		register_block_style(
			array( 'core/paragraph', 'core/heading', 'core/navigation-overlay-close' ),
			array(
				'name'       => 'eyebrow',
				'label'      => __( 'Eyebrow', 'metis' ),
				'style_data' => array(
					'typography' => array(
						'fontFamily'    => 'var:preset|font-family|openrunde',
						'fontSize'      => 'var:preset|font-size|small',
						'fontStyle'     => 'normal',
						'fontWeight'    => '600',
						'lineHeight'    => '1.6',
						'letterSpacing' => '0.01rem',
						'textTransform' => 'uppercase',
					),
				),
			)
		);
	}
endif;
add_action( 'init', 'metis_block_styles' );

/*
 * The SVG filter behind the metis-motion-blur class (see style.css): 12px of
 * blur along x and none along y, so a Cover's image streaks sideways. Printed
 * in the page because CSS filters only reach SVG in the same document; the
 * element is invisible. Core prints duotone filters the same way.
 */
if ( ! function_exists( 'metis_motion_blur_svg' ) ) :
	function metis_motion_blur_svg() {
		echo '<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false"><filter id="metis-motion-blur" x="-20%" y="-20%" width="140%" height="140%"><feGaussianBlur stdDeviation="12 0" /></filter></svg>';
	}
endif;
add_action( 'wp_body_open', 'metis_motion_blur_svg' );

/*
 * Register the pattern categories the theme's patterns declare, so every pattern
 * groups under a labelled tab in the inserter instead of scattering or hiding.
 * Slugs match the `Categories:` headers the patterns already use.
 */
if ( ! function_exists( 'metis_pattern_categories' ) ) :
	function metis_pattern_categories() {
		$categories = array(
			'about'          => __( 'About', 'metis' ),
			'call-to-action' => __( 'Call to Action', 'metis' ),
			'clients'        => __( 'Clients', 'metis' ),
			'contact'        => __( 'Contact', 'metis' ),
			'portfolio'      => __( 'Portfolio', 'metis' ),
			'posts'          => __( 'Posts', 'metis' ),
			'services'       => __( 'Services', 'metis' ),
			'team'           => __( 'Team', 'metis' ),
			'testimonials'   => __( 'Testimonials', 'metis' ),
			'text'           => __( 'Text', 'metis' ),
		);
		foreach ( $categories as $slug => $label ) {
			register_block_pattern_category( $slug, array( 'label' => $label ) );
		}
	}
endif;
add_action( 'init', 'metis_pattern_categories' );

/*
 * Comments call-to-action binding source. Bind a paragraph's content to
 * "metis/comments-cta" and it renders "Comment first" when the post has no
 * comments, "Join in" once it has some - meant
 * to sit beside the Comments Link block, which keeps showing the count.
 */
if ( ! function_exists( 'metis_comments_cta_binding' ) ) :
	function metis_comments_cta_binding() {
		register_block_bindings_source(
			'metis/comments-cta',
			array(
				'label'              => __( 'Comments CTA', 'metis' ),
				'uses_context'       => array( 'postId' ),
				'get_value_callback' => function ( $args, $block ) {
					$post_id = isset( $block->context['postId'] ) ? $block->context['postId'] : get_the_ID();
					if ( ! $post_id ) {
						return '';
					}
					$label = ( 0 === (int) get_comments_number( $post_id ) )
						? __( 'Comment first', 'metis' )
						: __( 'Join in', 'metis' );
					return '<a href="' . esc_url( get_comments_link( $post_id ) ) . '">' . esc_html( $label ) . '</a>';
				},
			)
		);
	}
endif;
add_action( 'init', 'metis_comments_cta_binding' );

/**
 * Let file-based Playlist tracks render on the front end.
 *
 * The Playlist block's render callback skips any track without an
 * attachment id and returns nothing when no tracks survive — but a
 * theme pattern can only ship file URLs, never media-library ids.
 * Give id-less tracks with a source a placeholder id; the callback
 * only checks that it is non-empty, and every rendered value comes
 * from the track's own attributes. Remove once fixed upstream:
 * https://github.com/WordPress/gutenberg/issues/83857
 */
if ( ! function_exists( 'metis_playlist_track_placeholder_id' ) ) :
	function metis_playlist_track_placeholder_id( $parsed_block ) {
		if ( ! empty( $parsed_block['innerBlocks'] ) ) {
			foreach ( $parsed_block['innerBlocks'] as $i => $inner_block ) {
				$parsed_block['innerBlocks'][ $i ] = metis_playlist_track_placeholder_id( $inner_block );
			}
		}
		if (
			'core/playlist-track' === $parsed_block['blockName'] &&
			empty( $parsed_block['attrs']['id'] ) &&
			! empty( $parsed_block['attrs']['src'] )
		) {
			$parsed_block['attrs']['id'] = -1;
		}
		return $parsed_block;
	}
endif;
add_filter( 'render_block_data', 'metis_playlist_track_placeholder_id' );

/*
 * Core bundles its generic Query Loop patterns under a category that is
 * also labelled "Posts", so the inserter shows two Posts groups beside
 * the theme's own. The theme's Posts collection covers that ground, so
 * core's are dropped and the heading collapses back to one.
 */
if ( ! function_exists( 'metis_collapse_posts_patterns' ) ) :
	function metis_collapse_posts_patterns() {
		foreach ( WP_Block_Patterns_Registry::get_instance()->get_all_registered() as $pattern ) {
			$categories = (array) ( $pattern['categories'] ?? array() );
			if ( 0 === strpos( $pattern['name'], 'core/' ) && array_intersect( array( 'query', 'posts' ), $categories ) ) {
				unregister_block_pattern( $pattern['name'] );
			}
		}
	}
endif;
add_action( 'init', 'metis_collapse_posts_patterns', 20 );

/**
 * Dark Mode switch: a per-visitor switch to the colours of the Cimmeria style.
 *
 * Add the class metis-mode-toggle to a Group, such as one holding an Icon, to
 * make it the switch; this filter gives it the role, focus and label of a
 * button. A click sets a flag on <html> that swaps the palette for that
 * visitor only and stays on across every page until the next click, including
 * pages without the switch. Turning it off brings back the site's own style.
 * Colours are read from styles/cimmeria.json.
 */
if ( ! function_exists( 'metis_mode_toggle_render' ) ) :
	function metis_mode_toggle_render( $block_content, $block ) {
		if ( ! str_contains( $block['attrs']['className'] ?? '', 'metis-mode-toggle' ) ) {
			return $block_content;
		}
		$tags = new WP_HTML_Tag_Processor( $block_content );
		if ( $tags->next_tag() ) {
			$tags->set_attribute( 'role', 'button' );
			$tags->set_attribute( 'tabindex', '0' );
			$tags->set_attribute( 'aria-pressed', 'false' );
			$tags->set_attribute( 'aria-label', __( 'Dark mode', 'metis' ) );
		}
		return $tags->get_updated_html();
	}
endif;
add_filter( 'render_block_core/group', 'metis_mode_toggle_render', 10, 2 );

if ( ! function_exists( 'metis_mode_toggle_colors' ) ) :
	function metis_mode_toggle_colors() {
		$style = wp_json_file_decode( get_theme_file_path( 'styles/cimmeria.json' ), array( 'associative' => true ) );
		return $style['settings']['color'] ?? array();
	}
endif;

if ( ! function_exists( 'metis_mode_toggle_head' ) ) :
	function metis_mode_toggle_head() {
		$colors = metis_mode_toggle_colors();
		$css    = 'color-scheme:dark;--wp--preset--duotone--duotone-2:url(#metis-mode-artwork);';
		foreach ( $colors['palette'] ?? array() as $color ) {
			$css .= "--wp--preset--color--{$color['slug']}:{$color['color']};";
		}
		foreach ( $colors['gradients'] ?? array() as $gradient ) {
			$css .= "--wp--preset--gradient--{$gradient['slug']}:{$gradient['gradient']};";
		}
		echo '<style id="metis-mode-toggle">html[data-metis-mode="dark"]{' . wp_strip_all_tags( $css ) . "}</style>\n";
		wp_print_inline_script_tag(
			"(function(){var k='metis-mode',h=document.documentElement,s='.metis-mode-toggle';" .
			"function sync(){document.querySelectorAll(s).forEach(function(b){b.setAttribute('aria-pressed',h.dataset.metisMode?'true':'false')})}" .
			"function toggle(){if(h.dataset.metisMode){delete h.dataset.metisMode}else{h.dataset.metisMode='dark'}sync();" .
			"try{if(h.dataset.metisMode){localStorage.setItem(k,'dark')}else{localStorage.removeItem(k)}}catch(e){}}" .
			"try{if(localStorage.getItem(k)==='dark'){h.dataset.metisMode='dark'}}catch(e){}" .
			"document.addEventListener('DOMContentLoaded',sync);" .
			"document.addEventListener('click',function(e){if(e.target.closest(s)){toggle()}});" .
			"document.addEventListener('keydown',function(e){if((e.key==='Enter'||e.key===' ')&&!e.repeat&&e.target.matches(s)){e.preventDefault();toggle()}})})();"
		);
	}
endif;
add_action( 'wp_head', 'metis_mode_toggle_head' );

/**
 * Keeps the dark logos and icons (the Artwork duotone) visible in Dark Mode:
 * a filter that paints them in Cimmeria's Artwork colour and keeps their alpha.
 */
if ( ! function_exists( 'metis_mode_toggle_svg' ) ) :
	function metis_mode_toggle_svg() {
		$duotone = wp_list_filter( metis_mode_toggle_colors()['duotone'] ?? array(), array( 'slug' => 'duotone-2' ) );
		$hex     = reset( $duotone )['colors'][1] ?? '#FFFFFF';
		list( $r, $g, $b ) = array_map(
			static function ( $channel ) {
				return round( $channel / 255, 3 );
			},
			sscanf( $hex, '#%02x%02x%02x' )
		);
		printf(
			'<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false"><filter id="metis-mode-artwork" color-interpolation-filters="sRGB"><feColorMatrix type="matrix" values="0 0 0 0 %1$s 0 0 0 0 %2$s 0 0 0 0 %3$s 0 0 0 1 0" /></filter></svg>',
			esc_attr( $r ),
			esc_attr( $g ),
			esc_attr( $b )
		);
	}
endif;
add_action( 'wp_body_open', 'metis_mode_toggle_svg' );
