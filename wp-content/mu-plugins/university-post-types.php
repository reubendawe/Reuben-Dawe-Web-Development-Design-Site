<?php function portfolio_post_types() {
    register_post_type('event', array(
        'public' => true, 
        'labels' => array(
            'name' => 'Portfolio'
        ),
        'menu_icon' => 'dashicons-portfolio'
    ));
}

add_action('init', 'portfolio_post_types');