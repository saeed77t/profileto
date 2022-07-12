<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package profileto
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function profileto_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}

add_filter('body_class', 'profileto_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function profileto_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'profileto_pingback_header');


/**
 * Proper way to enqueue scripts and styles.
 */
function profiletoLoadScripts()
{
    wp_enqueue_script('profileto-main', PROFILETO_THEME_URI . '/js/main.js', [], PROFILETO_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'profiletoLoadScripts');


function profiletoLoadCustomizerScripts()
{
    wp_enqueue_script('profileto-custom', PROFILETO_THEME_URI . '/js/customizer.js', [], PROFILETO_THEME_VERSION, true);
}
add_action('customize_preview_init', 'profiletoLoadCustomizerScripts');



function profiletoLoadStyle()
{
     wp_enqueue_style( 'resourceboy-style', PROFILETO_THEME_URI . '/style.css', array(), PROFILETO_THEME_VERSION );
     wp_enqueue_style( 'resourceboy-custom-style', PROFILETO_THEME_URI . '/assets/customStyle.css', array(), PROFILETO_THEME_VERSION );
}

add_action('wp_enqueue_scripts', 'profiletoLoadStyle');

