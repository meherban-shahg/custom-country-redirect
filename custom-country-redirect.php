<?php
/*
Plugin Name: Custom Country Redirect
Description: Redirects users based on their country with a configurable interface.
Version: 1.0
Author: Meherban Shah
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/geo-detect.php';
require_once plugin_dir_path(__FILE__) . 'includes/redirect.php';
require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';

// Register settings
add_action('admin_init', 'ccr_register_settings');

// Add admin menu
add_action('admin_menu', 'ccr_add_admin_menu');

// Hook into template_redirect
add_action('template_redirect', 'redirect_based_on_country');


add_action('wp_footer', 'print_current_country_code');
