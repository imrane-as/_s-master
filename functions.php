<?php
/**
 * _s functions and definitions.
 *
 * @package _s
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '2.0.0' );
}

function _s_setup() {
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', '_s' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'_s_custom_background_args',
			array(
				'default-color' => '07111f',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', '_s_setup' );

function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 1240 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

function _s_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_s' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_s' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Charge toujours la dernière version du CSS.
 * filemtime évite que WordPress, le navigateur ou Coolify
 * conservent une ancienne version de style.css.
 */
function _s_scripts() {
	$style_file = get_stylesheet_directory() . '/style.css';
	$style_ver  = file_exists( $style_file )
		? (string) filemtime( $style_file )
		: _S_VERSION;

	wp_enqueue_style(
		'_s-style',
		get_stylesheet_uri(),
		array(),
		$style_ver
	);

	wp_style_add_data( '_s-style', 'rtl', 'replace' );

	wp_enqueue_script(
		'_s-navigation',
		get_template_directory_uri() . '/js/navigation.js',
		array(),
		_S_VERSION,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
