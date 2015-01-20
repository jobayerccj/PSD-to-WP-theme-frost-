<?php 
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