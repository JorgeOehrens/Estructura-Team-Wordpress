<?php
function styles() {
    // Register theme stylesheet.
    $theme_version = wp_get_theme()->get( 'Version' );
    $version_string = is_string( $theme_version ) ? $theme_version : false;
    wp_register_style(
        'style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        $version_string
    );
    wp_enqueue_style( 'style' );


    }
    
add_action( 'wp_enqueue_scripts', 'styles' );


function scripts(){

    $theme_version = wp_get_theme()->get( 'Version' );
    $version_string = is_string( $theme_version ) ? $theme_version : false;
    wp_register_script(
        'script',
        get_template_directory_uri() . '/js/script.js',
        array(),
        $version_string,
        true
    );
    wp_enqueue_script( 'script' );

}
add_action( 'wp_enqueue_scripts', 'scripts' );
