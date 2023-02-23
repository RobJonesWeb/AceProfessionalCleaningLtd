<?php

$user = get_current_user();

global $wp_roles;
// remove capability $cap from role $role
$wp_roles->remove_cap( 'ace_staff', 'administrator' );
$wp_roles->remove_cap( 'ace_staff', 'ure_create_capabilities' );

// Remove side menu
function remove_default_post_type() {
    if ( in_array( 'ace_staff', (array) $user->roles ) ) {
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
add_action( 'plugins_loaded', 'remove_default_post_type' );

// hide ACF menus for all users except those specified
function show_hide_acf_menu( $show ) {
    if ( !in_array( 'ace_staff', (array) $user->roles ) ) {
        return true;
    } else {
        return false;
    }
}
add_filter('acf/settings/show_admin', 'show_hide_acf_menu');

// Add Menu Theme Support
add_theme_support( 'menus' );


