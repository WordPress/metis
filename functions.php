<?php
/**
 * Mētis functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Metis
 * @since Metis 1.0
 */

if ( ! function_exists( 'metis_editor_style' ) ) :
	function metis_editor_style() {
		add_editor_style(
			array(
				'assets/css/editor-style.css',
				'assets/css/glossy-button.css',
				'assets/css/animated-gradient.css',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'metis_editor_style' );

if ( ! function_exists( 'metis_styles' ) ) :
	function metis_styles() {
		wp_register_style(
			'metis-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_enqueue_style( 'metis-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'metis_styles' );

/*
 * "Glossy" button style — a CSS-only, fully-editable glossy effect for buttons.
 * Registers a block style for core/button. The CSS is loaded on the front end
 * here, and in the editor via add_editor_style() above, so the gloss shows in
 * both places. Colour, radius, padding, size, and type stay Editor-controlled;
 * the style only adds a translucent gloss + springy press.
 */
if ( ! function_exists( 'metis_glossy_button_style' ) ) :
	function metis_glossy_button_style() {
		register_block_style(
			'core/button',
			array(
				'name'  => 'glossy',
				'label' => __( 'Glossy', 'metis' ),
			)
		);
	}
endif;
add_action( 'init', 'metis_glossy_button_style' );

if ( ! function_exists( 'metis_glossy_button_assets' ) ) :
	function metis_glossy_button_assets() {
		wp_enqueue_style(
			'metis-glossy-button',
			get_stylesheet_directory_uri() . '/assets/css/glossy-button.css',
			array(),
			'0.1.4'
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'metis_glossy_button_assets' );

/*
 * "Animated Gradient" section style — a CSS-only background gradient from the Rule
 * colour (theme-7) to the Base colour (theme-1) that gently drifts. Registers a
 * block style for core/group; the CSS loads on the front end here and in the editor
 * via add_editor_style() above, so it renders (and animates) in both. Motion is
 * disabled under prefers-reduced-motion.
 */
if ( ! function_exists( 'metis_gradient_style' ) ) :
	function metis_gradient_style() {
		register_block_style(
			'core/group',
			array(
				'name'  => 'gradient-flow',
				'label' => __( 'Gradient', 'metis' ),
			)
		);
	}
endif;
add_action( 'init', 'metis_gradient_style' );

if ( ! function_exists( 'metis_gradient_assets' ) ) :
	function metis_gradient_assets() {
		wp_enqueue_style(
			'metis-animated-gradient',
			get_stylesheet_directory_uri() . '/assets/css/animated-gradient.css',
			array(),
			'0.8.0'
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'metis_gradient_assets' );

/*
 * Register the pattern categories the theme's patterns declare, so every pattern
 * groups under a labelled tab in the inserter instead of scattering or hiding.
 * Slugs match the `Categories:` headers the patterns already use.
 */
if ( ! function_exists( 'metis_pattern_categories' ) ) :
	function metis_pattern_categories() {
		$categories = array(
			'About'          => __( 'About', 'metis' ),
			'Call to Action' => __( 'Call to Action', 'metis' ),
			'Clients'        => __( 'Clients', 'metis' ),
			'Contact'        => __( 'Contact', 'metis' ),
			'Portfolio'      => __( 'Portfolio', 'metis' ),
			'Posts'          => __( 'Posts', 'metis' ),
			'Services'       => __( 'Services', 'metis' ),
			'Team'           => __( 'Team', 'metis' ),
			'Testimonials'   => __( 'Testimonials', 'metis' ),
			'Text'           => __( 'Text', 'metis' ),
		);
		foreach ( $categories as $slug => $label ) {
			register_block_pattern_category( $slug, array( 'label' => $label ) );
		}
	}
endif;
add_action( 'init', 'metis_pattern_categories' );
