<?php function portfolio_post_types() {
    register_post_type('event', array(
        'public' => true, 
        'labels' => array(
            'name' => 'Portfolio',
            'add_new_item' => 'Add New Portfolio Entry',
            'edit_item' => 'Edit Portfolio Entry',
            'all_items' => 'All Portfolio Entries',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-portfolio'
    ));
}

add_action('init', 'portfolio_post_types');