<?php

$user = wp_get_current_user();

global $wp_roles;
// remove capability $cap from role $role
$wp_roles->remove_cap( 'ace_staff', 'administrator' );
$wp_roles->remove_cap( 'ace_staff', 'ure_create_capabilities' );

// Remove side menu
function remove_default_post_type($user) {
    if ( $user->roles === 'ace_staff' ) {
        // Remove stuff from ace
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
        remove_menu_page('plugins.php');
        remove_menu_page('users.php');
        remove_menu_page('tools.php');
        remove_menu_page('options-general.php');
        remove_menu_page('admin.php');
    }
}
add_action( 'plugins_loaded', function() use ($user) {
    'remove_default_post_type' ( $user );
});

// Add Menu Theme Support
add_theme_support( 'menus' );
