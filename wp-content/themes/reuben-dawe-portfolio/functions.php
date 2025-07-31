<?php

function website_files() {
    wp_enqueue_style('website_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'website_files');