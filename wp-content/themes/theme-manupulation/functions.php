<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */

/*
* Place includes, constant defines and $_GLOBAL settings here.
* Make sure they have appropriate docblocks to avoid phpDocumentor
* construing they are documented by the page-level docblock.
*/

/**
 * Short description for class
 *
 * Long description for class (if any)...
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      Class available since Release 1.2.0
 * @deprecated Class deprecated in Release 2.0.0
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'theme_manupulation_setup' ) ) :
	/**
	 * Get the ingredients
	 *
	 * This function calls a static fetching method against the Ingredient class
	 * and returns everything matching this recipe ID
	 *
	 * @return void
	 */
	function theme_manupulation_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on theme-manupulation,
		 * use a find and replace
		 * to change 'theme-manupulation' to the name of your theme
		 * in all the template files.
		 */
		load_theme_textdomain(
			'theme-manupulation',
			get_template_directory() . '/languages'
		);

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'theme-manupulation' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'theme_manupulation_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
endif;
add_action( 'after_setup_theme', 'theme_manupulation_setup' );

/**
 * Get the ingredients
 *
 * This function calls a static fetching method against the Ingredient class
 * and returns everything matching this recipe ID
 *
 * @return void
 */
function theme_manupulation_content_width() {
	$GLOBALS['content_width'] = apply_filters(
		'theme_manupulation_content_width',
		640
	);
}
add_action( 'after_setup_theme', 'theme_manupulation_content_width', 0 );

/**
 * Get the ingredients
 *
 * This function calls a static fetching method against the Ingredient class
 * and returns everything matching this recipe ID
 *
 * @return void
 */
function theme_manupulation_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theme-manupulation' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme-manupulation' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theme_manupulation_widgets_init' );

/**
 * Get the ingredients
 *
 * This function calls a static fetching method against the Ingredient class
 * and returns everything matching this recipe ID
 *
 * @return void
 */
function theme_manupulation_scripts() {
	wp_enqueue_style(
		'theme-manupulation-style',
		get_stylesheet_uri(),
		array(),
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-manupulation-style1',
		get_template_directory_uri() . '/css/fontawesome.css',
		array(),
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-manupulation-style2',
		get_template_directory_uri() . '/css/templatemo-stand-blog.css',
		array(),
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-manupulation-style3',
		get_template_directory_uri() . '/css/owl.css',
		array(),
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-manupulation-style4',
		'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap',
		array(),
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-manupulation-style5',
		get_template_directory_uri() . '/css/bootstrap.min.css',
		array(),
		_S_VERSION
	);
	wp_enqueue_script(
		'jquery-min',
		get_template_directory_uri() . '/js/jquery.min.js',
		array(),
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'bootstrap-bundle',
		get_template_directory_uri() . '/js/bootstrap.bundle.min.js',
		array(),
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'navigation-js',
		get_template_directory_uri() . '/js/navigation.js',
		array(),
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'custom-js',
		get_template_directory_uri() . '/js/custom.js',
		array(),
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'owl-js',
		get_template_directory_uri() . '/js/owl.js',
		array(),
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'slick-js',
		get_template_directory_uri() . '/js/slick.js',
		array(),
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'isotope-js',
		get_template_directory_uri() . '/js/isotope.js',
		array(),
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'accordions-js',
		get_template_directory_uri() . '/js/accordions.js',
		array(),
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'extra-footer-js',
		get_template_directory_uri() . '/js/extrafooter.js',
		array(),
		_S_VERSION,
		true
	);
	wp_style_add_data(
		'theme-manupulation-style',
		'rtl',
		'replace'
	);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_manupulation_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	include get_template_directory() . '/inc/jetpack.php';
}
/**
 * Get the ingredients
 * This function calls a static fetching method against the Ingredient class
 * and returns everything matching this recipe ID
 *
 * @param length $length length.
 *
 * @return array An array of Ingredient objects
 */
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
