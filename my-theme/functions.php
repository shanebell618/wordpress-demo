<?php

//Defines
require 'vendor/autoload.php';

//Add css and js

function myThemeSetup() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Raleway&display=swap');
    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/56850bdd3d.js', NULL, microtime(), false);
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', NULL, microtime(), false);
    wp_enqueue_script('weather', get_theme_file_uri('/js/weather.js'), NULL, microtime(), true);
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




//Beaver Builder - Adding to Default Modules

//PHOTO
//Filter settings form for photo module
add_filter('fl_builder_register_settings_form', function($form, $form_slug) {
    if('photo' === $form_slug) {
        $form['general']['sections']['photo-title'] = [
            'title' => 'Photo Title',
            'fields' => [
                'photo_title_above' => [
                    'label' => 'Photo Title (Above Image)',
                    'type' => 'text'
                ]
            ]
        ];
    }
    
    return $form;
}, 10, 2);

//Filter HTML of photo module and add title element
add_filter('fl_builder_render_module_content', function($html, $module) {
    if('photo' !== $module->slug) {
        return $html;
    }

    $content = new \Wa72\HtmlPageDom\HtmlPageCrawler($html);
    $photoTitle = $module->settings->photo_title_above;

    if(isset($module->settings->photo_title_above) && strlen($module->settings->photo_title_above) !== 0) {
        $content->filter('.fl-photo-img')->before('<h2 class="photo-title-above">' . $photoTitle . '</h2>');
    }

    return $content;
}, 10, 2);
