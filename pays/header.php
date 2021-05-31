<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <header class="header"> 
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a href="<?php echo home_url( '/' ); ?>">
            <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/le_pays_logo.jpg" alt="Logo">
        </a> 
        <a class="navbar-item">
            <?php wp_nav_menu(['theme_location' => 'header', 'container' => false]) ?>
        </a>
        <a class="navbar-item">
            <?php wp_nav_menu(['theme_location' => 'header', 'container' => false]) ?>
        </a>
    </div>
  </header>