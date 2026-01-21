<?php
/**
 * Bizdomly Theme Functions
 *
 * @package Bizdomly
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BIZDOMLY_VERSION', '1.4.0' );
define( 'BIZDOMLY_DIR', get_template_directory() );
define( 'BIZDOMLY_URI', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 * @return void
 */
function bizdomly_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	add_theme_support( 'responsive-embeds' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	add_theme_support(
		'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'bizdomly_setup' );

/**
 * Enqueues Google Fonts as fallback if local fonts fail to load.
 *
 * @since 1.0.0
 * @return void
 */
function bizdomly_enqueue_fonts() {
	$fonts_url = 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&family=Instrument+Serif:ital@0;1&display=swap';

	wp_enqueue_style(
		'bizdomly-google-fonts',
		$fonts_url,
		array(),
		null
	);
}
add_action( 'wp_enqueue_scripts', 'bizdomly_enqueue_fonts' );
add_action( 'enqueue_block_editor_assets', 'bizdomly_enqueue_fonts' );

/**
 * Enqueues the theme stylesheet.
 *
 * @since 1.0.0
 * @return void
 */
function bizdomly_enqueue_styles() {
	wp_enqueue_style(
		'bizdomly-style',
		get_stylesheet_uri(),
		array(),
		BIZDOMLY_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'bizdomly_enqueue_styles' );

/**
 * Enqueues theme scripts for the front end.
 *
 * @since 1.0.0
 * @return void
 */
function bizdomly_enqueue_scripts() {
	// Dark mode script - loaded in head to prevent flash.
	wp_enqueue_script(
		'bizdomly-dark-mode',
		BIZDOMLY_URI . '/assets/js/dark-mode.js',
		array(),
		BIZDOMLY_VERSION,
		false
	);

	wp_enqueue_script(
		'bizdomly-header',
		BIZDOMLY_URI . '/assets/js/header.js',
		array(),
		BIZDOMLY_VERSION,
		true
	);

	// GSAP Core.
	wp_enqueue_script(
		'gsap',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
		array(),
		'3.12.5',
		true
	);

	// GSAP ScrollTrigger plugin.
	wp_enqueue_script(
		'gsap-scrolltrigger',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
		array( 'gsap' ),
		'3.12.5',
		true
	);

	// Theme animations.
	wp_enqueue_script(
		'bizdomly-animations',
		BIZDOMLY_URI . '/assets/js/animations.js',
		array( 'gsap', 'gsap-scrolltrigger' ),
		BIZDOMLY_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bizdomly_enqueue_scripts' );

/**
 * Registers the Bizdomly block patterns category.
 *
 * @since 1.0.0
 * @return void
 */
function bizdomly_register_pattern_category() {
	register_block_pattern_category(
		'bizdomly',
		array(
			'label'       => __( 'Bizdomly', 'bizdomly' ),
			'description' => __( 'Patterns for Bizdomly theme', 'bizdomly' ),
		)
	);
}
add_action( 'init', 'bizdomly_register_pattern_category' );

/**
 * Registers custom block styles for buttons and groups.
 *
 * @since 1.0.0
 * @return void
 */
function bizdomly_register_block_styles() {
	$button_styles = array(
		array(
			'name'  => 'bizdomly-primary',
			'label' => __( 'Primary', 'bizdomly' ),
		),
		array(
			'name'  => 'bizdomly-secondary',
			'label' => __( 'Secondary', 'bizdomly' ),
		),
		array(
			'name'  => 'bizdomly-large',
			'label' => __( 'Large', 'bizdomly' ),
		),
	);

	foreach ( $button_styles as $style ) {
		register_block_style( 'core/button', $style );
	}

	$group_styles = array(
		array(
			'name'  => 'bizdomly-hero',
			'label' => __( 'Hero Section', 'bizdomly' ),
		),
		array(
			'name'  => 'bizdomly-dark',
			'label' => __( 'Dark Section', 'bizdomly' ),
		),
		array(
			'name'  => 'bizdomly-service-card',
			'label' => __( 'Service Card', 'bizdomly' ),
		),
	);

	foreach ( $group_styles as $style ) {
		register_block_style( 'core/group', $style );
	}
}
add_action( 'init', 'bizdomly_register_block_styles' );

/**
 * Returns the CSS for custom block styles.
 *
 * @since 1.0.0
 * @return string The block styles CSS.
 */
function bizdomly_get_block_styles_css() {
	return <<<CSS
.wp-block-button.is-style-bizdomly-primary .wp-block-button__link {
	background: #1a1a1a;
	color: #fff;
	padding: 18px 36px;
	border-radius: 10px;
	font-size: 15px;
	font-weight: 500;
	transition: all 0.3s ease;
}

.wp-block-button.is-style-bizdomly-primary .wp-block-button__link:hover {
	transform: translateY(-2px);
	box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
}

.wp-block-button.is-style-bizdomly-secondary .wp-block-button__link {
	background: transparent;
	color: #1a1a1a;
	border: 1px solid rgba(0, 0, 0, 0.15);
	padding: 18px 36px;
	border-radius: 10px;
}

.wp-block-button.is-style-bizdomly-large .wp-block-button__link {
	padding: 20px 48px;
	border-radius: 12px;
	font-size: 16px;
}

.wp-block-group.is-style-bizdomly-hero {
	min-height: 100vh;
	display: flex;
	align-items: center;
	position: relative;
	overflow: hidden;
}

.wp-block-group.is-style-bizdomly-dark {
	background: #1a1a1a;
	color: #fff;
}

.wp-block-group.is-style-bizdomly-service-card {
	background: #fff;
	border: 1px solid rgba(0, 0, 0, 0.08);
	border-radius: 16px;
	padding: 40px;
	transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.wp-block-group.is-style-bizdomly-service-card:hover {
	transform: translateY(-4px);
	box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
	background: #fafaf9;
}
CSS;
}

/**
 * Adds custom block style CSS to the front end.
 *
 * @since 1.0.0
 * @return void
 */
function bizdomly_enqueue_block_styles_css() {
	wp_add_inline_style( 'global-styles', bizdomly_get_block_styles_css() );
}
add_action( 'wp_enqueue_scripts', 'bizdomly_enqueue_block_styles_css', 20 );

/**
 * Add WooCommerce support.
 *
 * @since 1.4.0
 * @return void
 */
function bizdomly_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 400,
			'single_image_width'    => 600,
			'product_grid'          => array(
				'default_rows'    => 3,
				'default_columns' => 3,
				'max_columns'     => 4,
			),
		)
	);

	// Product gallery features.
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'bizdomly_woocommerce_setup' );

/**
 * Modify WooCommerce wrapper markup.
 *
 * @since 1.4.0
 * @return void
 */
function bizdomly_woocommerce_wrapper_before() {
	echo '<main class="wp-block-group woocommerce-page" style="padding-top:0;padding-bottom:0">';
	echo '<div class="wp-block-group alignwide" style="max-width:1200px;margin:0 auto">';
}

/**
 * Close WooCommerce wrapper markup.
 *
 * @since 1.4.0
 * @return void
 */
function bizdomly_woocommerce_wrapper_after() {
	echo '</div>';
	echo '</main>';
}

// Only add wrapper hooks if WooCommerce is active.
if ( class_exists( 'WooCommerce' ) ) {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
	add_action( 'woocommerce_before_main_content', 'bizdomly_woocommerce_wrapper_before' );
	add_action( 'woocommerce_after_main_content', 'bizdomly_woocommerce_wrapper_after' );
}

/**
 * Shortcode to display product features from ACF fields.
 *
 * @since 1.4.0
 * @return string The features list HTML.
 */
function bizdomly_product_features_shortcode() {
	if ( ! function_exists( 'get_field' ) ) {
		return '';
	}

	$features = array();
	for ( $i = 1; $i <= 7; $i++ ) {
		$feature = get_field( 'feature_' . $i );
		if ( ! empty( $feature ) ) {
			$features[] = $feature;
		}
	}

	if ( empty( $features ) ) {
		return '';
	}

	$output = '<div class="wp-block-group product-features has-border-color has-background-background-color has-background" style="border-color:#e5e5e5;border-width:1px;border-radius:12px;margin-bottom:32px;padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px">';
	$output .= '<h4 class="wp-block-heading has-black-color has-text-color" style="margin-bottom:16px;font-size:15px;font-weight:600;letter-spacing:1px;text-transform:uppercase">What\'s Included</h4>';

	foreach ( $features as $index => $feature ) {
		$margin = $index < count( $features ) - 1 ? 'margin-bottom:12px' : '';
		$output .= '<div class="wp-block-group feature-item" style="display:flex;flex-wrap:nowrap;align-items:center;gap:12px;' . $margin . '">';
		$output .= '<p style="font-size:18px;margin:0">✓</p>';
		$output .= '<p class="has-gray-color has-text-color" style="font-size:15px;margin:0">' . esc_html( $feature ) . '</p>';
		$output .= '</div>';
	}

	$output .= '</div>';

	return $output;
}
add_shortcode( 'product_features', 'bizdomly_product_features_shortcode' );

