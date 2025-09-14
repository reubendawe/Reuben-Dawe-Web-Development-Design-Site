<?php

function website_files() {
    wp_enqueue_script('main-js', get_theme_file_uri('/build/main.js'), NULL, '1.0', true);
    wp_enqueue_style('remix_icon', '//cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css');
    wp_enqueue_style('website_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('website_main_styles', get_theme_file_uri('/dist/css/style.min.css'));
    wp_enqueue_style('website_extra_styles', get_theme_file_uri('/build/index.css'));
}

function add_category_column_to_portfolio($columns) {
    $columns['project_category'] = 'Category'; // Label
    return $columns;
}

function show_project_category_column_content($column, $post_id) {
    if ($column == 'project_category') {
        $terms = get_the_terms($post_id, 'project_category');

        if (!empty($terms) && !is_wp_error($terms)) {
            $term_names = wp_list_pluck($terms, 'name');
            echo implode(', ', $term_names);
        } else {
            echo '-'; // No category
        }
    }
}

function make_category_column_sortable($columns) {
    $columns['post_category'] = 'category';
    return $columns;
}

add_action('wp_enqueue_scripts', 'website_files');
add_theme_support('post-thumbnails');
add_filter('manage_portfolio_posts_columns', 'add_category_column_to_portfolio');
add_action('manage_portfolio_posts_custom_column', 'show_project_category_column_content', 10, 2);
add_filter('manage_edit-post_sortable_columns', 'make_category_column_sortable');