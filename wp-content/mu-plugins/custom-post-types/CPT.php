<?php

add_action('init', 'create_custom_post_type');

function create_custom_post_type()
{

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    // Courses
    $labels = array(
        'name' => _x('Courses', 'plural'),
        'singular_name' => _x('course', 'singular'),
        'menu_name' => _x('Courses', 'admin menu'),
        'name_admin_bar' => _x('courses', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Course'),
        'new_item' => __('New courses'),
        'edit_item' => __('Edit courses'),
        'view_item' => __('View courses'),
        'all_items' => __('All courses'),
        'search_items' => __('Search courses'),
        'not_found' => __('No courses found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'taxonomies' => array('category', 'post_tag'),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'courses'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-book',
    );
    register_post_type('courses', $args);



    // News and Notice
    $labels = array(
        'name' => _x('News & Notice', 'plural'),
        'singular_name' => _x('news & notice', 'singular'),
        'menu_name' => _x('News & Notice', 'admin menu'),
        'name_admin_bar' => _x('news & notice', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New News'),
        'new_item' => __('New news'),
        'edit_item' => __('Edit news'),
        'view_item' => __('View news'),
        'all_items' => __('All news'),
        'search_items' => __('Search news'),
        'not_found' => __('No news found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'taxonomies' => array('category', 'post_tag'),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'news'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-megaphone',
    );

    register_post_type('news', $args);
}
// Hooking up our function to theme setup