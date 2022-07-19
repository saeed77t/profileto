<?php
function register_slider_block() {

    // Check function exists.
    if( function_exists('register_slider_block') ) {

        // register home slider  block.
        acf_register_block_type(array(
            'name'              => 'home-slider',
            'title'             => __('home-slider'),
            'description'       => __('slider block for hme page'),
            'render_template'   => 'template-parts/block/homeSlider.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'slider', 'quote' ),
        ));
    }
}
add_action('acf/init', 'register_slider_block');

function register_icon_content() {

    // Check function exists.
    if( function_exists('register_slider_block') ) {

        // register home slider  block.
        acf_register_block_type(array(
            'name'              => 'icon-content',
            'title'             => __('icon-content'),
            'description'       => __('explain'),
            'render_template'   => 'template-parts/block/icon-content.php',
            'category'          => 'formatting',
            'icon'              => 'cubes',
            'keywords'          => array( 'icon', 'content' ),
        ));
    }
}
add_action('acf/init', 'register_icon_content');


function register_testemonials() {

    // Check function exists.
    if( function_exists('register_slider_block') ) {

        // register home slider  block.
        acf_register_block_type(array(
            'name'              => 'testemonials',
            'title'             => __('testemonials'),
            'description'       => __('what people say about us'),
            'render_template'   => 'template-parts/block/testemonials.php',
            'category'          => 'formatting',
            'icon'              => 'users',
            'keywords'          => array( 'testemonials', 'people' ),
        ));
    }
}
add_action('acf/init', 'register_testemonials');

