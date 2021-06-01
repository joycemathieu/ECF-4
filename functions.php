<?php 

    // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );

    //ajouter la gestion des menus
    add_theme_support('menus');

    // localisation du menu
    register_nav_menu('header', 'Entête du menu');

    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support( 'title-tag' );

    // Chargement BULMA sur WordPress
    function wpbulma_styles_scripts(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('bulma', "https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css");
    }
    add_action('wp_enqueue_scripts', 'wpbulma_styles_scripts');