<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );

add_action( 'after_setup_theme', 'mainMenu' );
add_theme_support( 'post-thumbnails' );
add_filter('xmlrpc_enabled', '__return_false');
add_filter( 'excerpt_length', function(){
    return 20;
} );
//remove_action( 'wp_head', 'rsd_link' );

function mainMenu() {
	register_nav_menu( 'main', 'Основное меню' );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );
function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css' );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array(), true, true );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.2.3', true );
}




