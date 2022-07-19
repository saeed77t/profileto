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
    if (!is_page('my-account')) {

        wp_enqueue_script('profileto-jquery.easing.1.3-theme', PROFILETO_THEME_URI . '/assets/js/jquery.easing.1.3.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-jbootstrapjs-theme', PROFILETO_THEME_URI . '/assets/js/bootstrap.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-modernizrcustom-theme', PROFILETO_THEME_URI . '/assets/js/modernizr.custom.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-toucheffects-theme', PROFILETO_THEME_URI . '/assets/js/toucheffects.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-prettifyjs-theme', PROFILETO_THEME_URI . '/assets/js/google-code-prettify/prettify.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-bxsliders-theme', PROFILETO_THEME_URI . '/assets/js/jquery.bxslider.min.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-camera-theme', PROFILETO_THEME_URI . '/assets/js/camera/camera.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-camerasetting-theme', PROFILETO_THEME_URI . '/assets/js/camera/setting.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-jqueryprettyPhoto-theme', PROFILETO_THEME_URI . '/assets/js/jquery.prettyPhoto.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-portfolio-quicksand-theme', PROFILETO_THEME_URI . '/assets/js/portfolio/jquery.quicksand.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-portfoliosetting-theme', PROFILETO_THEME_URI . '/assets/js/portfolio/setting.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-flexslider.js', PROFILETO_THEME_URI . '/assets/js/jquery.flexslider.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-animate-theme', PROFILETO_THEME_URI . '/assets/js/animate.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-inview-theme', PROFILETO_THEME_URI . '/assets/js/inview.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-custom-theme', PROFILETO_THEME_URI . '/assets/js/custom.js', array('jquery'), PROFILETO_THEME_VERSION, true);
        wp_enqueue_script('profileto-jquery-theme', PROFILETO_THEME_URI . '/assets/js/jquery.js', [], PROFILETO_THEME_VERSION, true);
    }

    wp_enqueue_script('profileto-main', PROFILETO_THEME_URI . '/js/main.js', [], PROFILETO_THEME_VERSION, true);
    wp_localize_script('profileto-main', 'postdata', array(
        'ajaxurl' => admin_url("admin-ajax.php"),
        'homeurl' => PROFILETO_THEME_URI,
        'nonce' => wp_create_nonce('ajax-nonce')
    ));
    if (!is_page('my-account')) {

    }
}

add_action('wp_enqueue_scripts', 'profiletoLoadScripts');


function profiletoLoadCustomizerScripts()
{
    wp_enqueue_script('profileto-custom', PROFILETO_THEME_URI . '/js/customizer.js', [], PROFILETO_THEME_VERSION, true);


}

add_action('customize_preview_init', 'profiletoLoadCustomizerScripts');


function profiletoLoadStyle()
{
    wp_enqueue_style('profileto-style', PROFILETO_THEME_URI . '/style.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-custom-style', PROFILETO_THEME_URI . '/assets/customStyle.css', array(), PROFILETO_THEME_VERSION);
    //load theme styles

    wp_enqueue_style('profileto-animate-style', PROFILETO_THEME_URI . '/assets/css/animate.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-bootstrap-style', PROFILETO_THEME_URI . '/assets/css/bootstrap.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-bootstrap-responsive-style', PROFILETO_THEME_URI . '/assets/css/bootstrap-responsive.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-camera-style', PROFILETO_THEME_URI . '/assets/css/camera.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-cslider-style', PROFILETO_THEME_URI . '/assets/css/cslider.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-flexslider-style', PROFILETO_THEME_URI . '/assets/css/flexslider.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-font-awesome-style', PROFILETO_THEME_URI . '/assets/css/font-awesome.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-font-awesome-ie7-style', PROFILETO_THEME_URI . '/assets/css/font-awesome-ie7.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-jquery.bxslider-style', PROFILETO_THEME_URI . '/assets/css/jquery.bxslider.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-jquery.overwrite-style', PROFILETO_THEME_URI . '/assets/css/overwrite.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-prettyPhoto-style', PROFILETO_THEME_URI . '/assets/css/prettyPhoto.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-shortcodes-style', PROFILETO_THEME_URI . '/assets/css/shortcodes.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-style-style', PROFILETO_THEME_URI . '/assets/css/style.css', array(), PROFILETO_THEME_VERSION);
    wp_enqueue_style('profileto-default-style', PROFILETO_THEME_URI . '/assets/css/default.css', array(), PROFILETO_THEME_VERSION);

}

add_action('wp_enqueue_scripts', 'profiletoLoadStyle');

function profiletoSaveImage($userId, $Image, $metakey)
{
    $target_dir = wp_upload_dir();

    $target_file = $target_dir['path'] . DIRECTORY_SEPARATOR . $userId . basename($Image["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

    $check = getimagesize($Image["tmp_name"]);
    if ($check !== false) {

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
    if ($Image["size"] > 100000000) {
        echo "خجم فایل عکس زیاد است";
        $uploadOk = 0;
    }

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "فقط فرمت های عکس پشتیبانی میشوند";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "متاسفیم فایل آپلود نشد";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($Image["tmp_name"], $target_file)) {

            //echo "The file ". htmlspecialchars( basename( $Image["name"])). " has been uploaded.";
        } else {
            echo "مشکلی در هنگام آپلود فایل پیش آمده است";
        }
    }

    $file_url = $target_dir['url'] . '/' . $userId . basename($Image["name"]);
    update_user_meta($userId, $metakey, $file_url);
}

add_action('wp_save_image_file', 'profiletoSaveImage');


function footer1_widgets_init()
{

    register_sidebar(array(
        'name' => 'footer 1 ',
        'id' => 'footer_1',
        'before_widget' => '<div class="widget link-list">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widgetheading">',
        'after_title' => '</h5>',
    ));

}

add_action('widgets_init', 'footer1_widgets_init');

/**
 * Register our footer widgret
 *
 */
function footer2_widgets_init()
{

    register_sidebar(array(
        'name' => 'footer 2 ',
        'id' => 'footer_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widgetheading">',
        'after_title' => '</h5>',
    ));

}

add_action('widgets_init', 'footer2_widgets_init');

/**
 * Register our footer widgret
 *
 */
function footer3_widgets_init()
{

    register_sidebar(array(
        'name' => 'footer 3 ',
        'id' => 'footer_3',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widgetheading">',
        'after_title' => '</h5>',
    ));

}

add_action('widgets_init', 'footer3_widgets_init');

/**
 * Register our sub footer widgret
 *
 */
function sub_footer_copyright_widgets_init()
{

    register_sidebar(array(
        'name' => 'sub footer copyright ',
        'id' => 'sub_footer_copyright',
        'before_widget' => '<div class="copyright">',
        'after_widget' => '</div>',
    ));

}

add_action('widgets_init', 'sub_footer_copyright_widgets_init');

