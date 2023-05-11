<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewprt" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('info'); ?> | <?php is_front_page() ? bloginfo('descripton') : wp_title(''); ?> </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="custom-cursor"> </div>
    <header>
        
        <nav>
            <?php
            wp_nav_menu(array(
                //'theme_location' => 'primary',
                'menu_class' => 'primary-menu',
            ));
            ?> 
        </nav>
        <a href="/ju-tawk-wp/#"> One Tone </a>
        <nav>
            <?php
            wp_nav_menu(array(
                //'theme_location' => 'primary',
                'menu_class' => 'primary-menu',
            ));
            ?> 
        </nav>
    </header>

