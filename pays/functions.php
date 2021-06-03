<?php 

    // Add support for featured images
    add_theme_support( 'post-thumbnails' );

    //add menu management
    add_theme_support('menus');

    // menu location
    register_nav_menu('header', 'Entête du menu');

    // Automatically add site title in site header
    add_theme_support( 'title-tag' );

    // Charge BULMA for WordPress
    function wpbulma_styles_scripts(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('bulma', "https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css");
    }
    add_action('wp_enqueue_scripts', 'wpbulma_styles_scripts');

    // offset the main query on the home page 
    function tutsplus_offset_main_query ( $query ) {
        if ( $query->is_home() && $query->is_main_query() ) {
            $query->set( 'offset', '1' );
        }
    }
    add_action( 'pre_get_posts', 'tutsplus_offset_main_query' );