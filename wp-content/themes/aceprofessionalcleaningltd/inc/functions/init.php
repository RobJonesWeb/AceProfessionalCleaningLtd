<?php

// Remove side menu
function remove_default_post_type() {
    if ( !current_user_can( 'update_core' ) ) {
        // Remove stuff from ace
    }
}
add_action( 'admin_menu', 'remove_default_post_type' );

// Add Menu Theme Support
add_theme_support( 'menus' );

if(false) {
    $roles = [
        'removal' => [
            'wpseo_editor',
            'wpseo_manager',
            'subscriber',
            'contributor',
            'author',
            'editor',
            'robjonesweb',
            'ace_staff',
        ],
        'addition' => [
            'ace' => [
                'role' => 'ace_staff',
                'display_name' => __('Ace Staff'),
                'capabilities' => [
                    'administrator'          => false,
                    'delete_others_pages'    => true,
                    'delete_others_posts'    => true,
                    'delete_pages'           => true,
                    'delete_posts'           => true,
                    'delete_private_pages'   => true,
                    'delete_private_posts'   => true,
                    'delete_published_pages' => true,
                    'delete_published_posts' => true,
                    'edit_dashboard'         => true,
                    'edit_others_pages'      => true,
                    'edit_others_posts'      => true,
                    'edit_pages'             => true,
                    'edit_posts'             => true,
                    'edit_private_pages'     => true,
                    'edit_private_posts'     => true,
                    'edit_published_pages'   => true,
                    'edit_published_posts'   => true,
                    'edit_theme_options'     => true,
                    'list_users'             => true,
                    'manage_categories'      => true,
                    'manage_links'           => true,
                    'manage_options'         => true,
                    'manage_comments'        => true,
                    'promote_users'          => true,
                    'publish_pages'          => true,
                    'publish_posts'          => true,
                    'read_private_pages'     => true,
                    'read_private_posts'     => true,
                    'read'                   => true,
                    'remove_users'           => true,
                    'switch_themes'          => true,
                    'upload_files'           => true,
                    'customize'              => true,
                    'delete_site'            => true,
                ]
            ]
        ]
    ];

    if (!empty($roles['removal'])) {
        foreach ($roles['removal'] as $role) {
            remove_role( $role );
        }
    }

    if (!empty($roles['addition'])) {
        foreach ($roles['addition'] as $role) {
            add_role( $role['role'], $role['display_name'], $role['capabilities'] );
        }
    }
}


