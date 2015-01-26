<?php 
function theme_setup() {

    load_theme_textdomain( 'textdomain', get_template_directory() . '/languages' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

//    add_theme_support( 'title-tag' ); //4.1


    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );

    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link',
    ) );

    add_theme_support("post-thumbnails");
  
}

add_action( 'after_setup_theme', 'theme_setup' );

function register_my_menus(){
    register_nav_menus(
            array('header-menu' => __('Header Menu'))
            );
}

add_action('init', 'register_my_menus');

function my_widget_init(){
    register_sidebar( array(
        'name'  => __('Sidebar', 'first_one'),
        'id' => "widget1"
    )
            
            );
}

add_action('init', 'my_widget_init');
?>