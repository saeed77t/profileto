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

function profiletoSaveImage($userId , $Image  , $metakey){
    $target_dir = wp_upload_dir();

    $target_file = $target_dir['path'].DIRECTORY_SEPARATOR.basename($Image["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

    $check = getimagesize($Image["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {
        echo "فایل عکس نیست.";
        $uploadOk = 0;
    }


// Check if file already exists
    if (file_exists($target_file)) {
        echo "فایل وجود دارد";
        $uploadOk = 0;
    }

// Check file size
    if ($Image["size"] > 900000) {
        echo "خجم فایل عکس زیاد است";
        $uploadOk = 0;
    }

// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "فقط فرمت های عکس پشتیبانی میشوند";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "متاسفیم فایل آپلود نشد";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($Image["tmp_name"], $target_file)) {

            // echo "The file ". htmlspecialchars( basename( $Image["name"])). " has been uploaded.";
        } else {
            echo "مشکلی در هنگام آپلود فایل پیش آمده است";
        }
    }

    $file_url = $target_dir['url'].'/'.basename($Image["name"]) ;
    update_user_meta($userId, $metakey, $file_url);
}
add_action('wp_save_image_file','profiletoSaveImage');
