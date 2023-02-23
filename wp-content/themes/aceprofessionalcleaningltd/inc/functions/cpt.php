<?php

function createServices() {
    $cpt = [
        'singular' => 'service',
        'plural' => 'services',
    ];
    $labels = array(
        'name'               => _x( ucwords($cpt['plural']), 'post type general name' ),
        'singular_name'      => _x( ucwords($cpt['singular']), 'post type singular name' ),
        'add_new'            => _x( 'Add New', ucwords($cpt['singular']) ),
        'add_new_item'       => __( "Add New " . ucwords($cpt['singular'])),
        'edit_item'          => __( "Edit " . ucwords($cpt['singular'])),
        'new_item'           => __( "New " . ucwords($cpt['singular'])),
        'all_items'          => __( "All " . ucwords($cpt['plural'])),
        'view_item'          => __( "View " . ucwords($cpt['singular'])),
        'search_items'       => __( "Search " . ucwords($cpt['plural'])),
        'not_found'          => __( "No {$cpt['plural']} found" ),
        'not_found_in_trash' => __( "No {$cpt['plural']} found in the trash" ),
        //'parent_item_colon'  => ’,
        'menu_name'          => 'Services'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => "Holds our {$cpt['singular']} and {$cpt['singular']} specific data",
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( "{$cpt['singular']}", $args );
}
add_action( 'init', 'createServices' );