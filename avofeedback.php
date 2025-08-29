<?php
/**
 * Plugin Name: AvoFeedBack
 * Description: A human feedback board for WordPress—fresh, honest, inspired by LogChimp.
 * Version: 0.1
 * Author: [Your Name or Business]
 * Text Domain: avofeedback
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'init', 'avofeedback_register_post_type' );

function avofeedback_register_post_type() {
    $labels = [
        'name'                  => 'Feedback',
        'singular_name'         => 'Feedback',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Feedback',
        'edit_item'             => 'Edit Feedback',
        'new_item'              => 'New Feedback',
        'all_items'             => 'All Feedback',
        'view_item'             => 'View Feedback',
        'search_items'          => 'Search Feedback',
        'not_found'             => 'No feedback found',
        'not_found_in_trash'    => 'No feedback found in Trash',
        'menu_name'             => 'AvoFeedBack',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-testimonial',
        'supports'           => ['title', 'editor', 'author', 'comments'],
        'rewrite'            => ['slug' => 'feedback'],
    ];

    register_post_type( 'avofeedback', $args );
}
