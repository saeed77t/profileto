<?php
/**
 * profileto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package profileto
 */


if ( ! defined( 'PROFILETO_DOMAIN_NAME' ) ) {
    // Replace the version number of the theme on each release.
    define( 'PROFILETO_DOMAIN_NAME', 'PROFILETO' );
}

if ( ! defined( 'PROFILETO_THEME_DIR' ) ) {
    define( 'PROFILETO_THEME_DIR', get_template_directory() );
}

if ( ! defined( 'PROFILETO_THEME_URI' ) ) {
    define( 'PROFILETO_THEME_URI', get_template_directory_uri() );

}

if ( ! defined( 'PROFILETO_THEME_VERSION' ) ) {
    $my_theme = wp_get_theme();
    $theme_vr = $my_theme->get( 'Version' );
    define( 'PROFILETO_THEME_VERSION', $theme_vr );
}



if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'profileto_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function profileto_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on profileto, use a find and replace
		* to change 'profileto' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'profileto', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'profileto' ),
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
			'profileto_custom_background_args',
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
add_action( 'after_setup_theme', 'profileto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function profileto_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'profileto_content_width', 640 );
}
add_action( 'after_setup_theme', 'profileto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function profileto_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'profileto' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'profileto' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'profileto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function profileto_scripts() {
	wp_enqueue_style( 'profileto-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'profileto-style', 'rtl', 'replace' );

	wp_enqueue_script( 'profileto-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'profileto_scripts' );

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
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/**
 * Load ACF compatibility file.
 */
if ( class_exists( 'ACF' ) ) {
    require get_template_directory() . '/inc/acf-functions.php';
}
//if ( class_exists( 'ACF' ) ) {
//    require get_template_directory() . '/inc/userform-action.php';
//}


add_action( 'woocommerce_account_content', 'action_woocommerce_account_content' );
function action_woocommerce_account_content(  ) {
    global $current_user; // The WP_User Object

    echo '<p>' . __("This is an addition…", "woocommerce") . '</p>';
};


