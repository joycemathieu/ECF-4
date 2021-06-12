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

    // register custom post type to work with
 function lc_create_post_type() {
    // set up labels
    $labels = array (
    'name' => 'Events',
    'singular_name' => 'Event',
    'add_new' => 'Add New Event',
    'add_new_item' => 'Add New Event',
    'edit_item' => 'Edit Event',
    'new_item' => 'New Event',
    'all_items' => 'All Events',
    'view_item' => 'View Event',
    'search_items' => 'Search Events',
    'not_found' => 'No Events Found',
    'not_found_in_trash' => 'No Events found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Events',
    );
    //register post type
    register_post_type ( 'event', array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'taxonomies' => array( 'post_tag', 'category' ),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'events' ),
    )
    );
    }
    add_action( 'init', 'lc_create_post_type' );

    /* Custom Login Logo */
function wpc_custom_login_logo() {
	$custom_logo_url = get_stylesheet_directory_uri() . '/img/le_pays_logo.JPG';
	$custom_logo_width = 260;
	$custom_logo_height = 130;

	if ($custom_logo_url) {
		echo
		'<style>
			h1 a{
				background-image:url("'.$custom_logo_url.'")!important;
				background-size:'.$custom_logo_width.'px '.$custom_logo_height.'px!important;
			}
			.login h1 a {
				height:'.$custom_logo_height.'px;
				width:'.$custom_logo_width.'px;
			} 
		</style>';
	}
}
add_action('login_head', 'wpc_custom_login_logo');

