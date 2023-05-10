<?php

function one_tone_theme_setup()
{

    //Add support for post thumbnails
    add_theme_support('post-thumbnails');

    //Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'one-tone-theme'),
        'secondary' => __('Secondary Menu', 'one-tone-theme'),
    ));

    //Add custom image sizes
    add_image_size('featured_image', 640, 360, true);
}

add_action('after_setup_theme', 'one_tone_theme_setup');

function one_tone_theme_scripts()
{
    
    $theme_version = wp_get_theme()->get("Version");
    //Enqueue styles
    wp_enqueue_style('one-tone-theme-style', get_stylesheet_uri(), [], $theme_version);

    //Enqueue scripts
    wp_enqueue_script('one-tone-theme-script', get_template_directory_uri() . '/js/main.js', [], $theme_version, true);
}

add_action('wp_enqueue_scripts', 'one_tone_theme_scripts');

function one_tone_theme_widgets_init(){
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'one-tone-theme'),
        'id' => 'primary-sidebar',
        'description' => __('Add widgets here to appear in the primary sidebar.', 'one-tone-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widget_init', 'one_tone_theme_widgets_init');

function one_tone_theme_meta_function(){
    echo '<span class="meta-data">' . get_the_date() . '</span>';
    echo '| <span class="meta-author">' . __('By', 'one-tone-theme') . ' ' . get_the_author() . '</span>';
    echo '| <span class="meta-categories">' . __('Filed under', 'one-tone-theme') . ' ' . get_the_category_list(', ') . '</span>';
    echo '| <span class="meta-tags">' . __('Tagged:', 'one-tone-theme') . ' ' . get_the_tag_list('', ', ') . '</span>';
}


function one_tone_theme_footer_function()
{
    $comments_count = get_comments_number();
    if ($comments_count == 1){
        $comments_text = __('1 Comment', 'one-tone-theme');
    } else{
        $comments_text = sprintf(__('%s Comments', 'one-tone-theme'), $comments_count);
    }
    echo '<div class="footer-meta">';
    echo '<span class="meta-comments"' . $comments_text . '</span>';
    echo '<span class="meta-edit"' . get_edit_post_link(__('Edit', 'one-tone-theme')) . '</span>';
    echo '</div>';
}