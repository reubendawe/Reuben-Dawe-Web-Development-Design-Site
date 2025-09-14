<?php

function website_files() {
    wp_enqueue_script('main-js', get_theme_file_uri('/build/main.js'), NULL, '1.0', true);
    wp_enqueue_style('remix_icon', '//cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css');
    wp_enqueue_style('website_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('website_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'website_files');
add_theme_support('post-thumbnails');