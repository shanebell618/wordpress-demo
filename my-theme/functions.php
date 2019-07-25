<?php

//Add css and js

function myThemeSetup() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Raleway&display=swap');
    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/56850bdd3d.js', NULL, microtime(), false);
}

add_action('wp_enqueue_scripts', 'myThemeSetup');

//Add theme support

function myThemeInit() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'myThemeInit');

//Custom Post Type

function myCustomPostType() {
    register_post_type('custom-posts',
        array(
            'rewrite' => array('slug' => 'custom-posts'),
            'labels' => array(
                'name' => 'Custom Posts', 
                'singular_name' => 'Custom Post',
                'add_new_item' => 'Add New Custom Post',
                'edit_item' => 'Edit Custom Post'
            ),
            'menu_icon' => 'dashicons-buddicons-tracking',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}

add_action('init', 'myCustomPostType');