<?php
function redirect_based_on_country() {
    if (is_admin() || wp_doing_ajax()) {
        return;
    }

    $country = get_user_country();

    if (!$country) {
        return;
    }

    // Get redirection rules from database
    $rules = get_option('ccr_redirection_rules');

    if (!$rules) {
        return;
    }

    $redirect_rules = json_decode($rules, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        return;
    }

    if (array_key_exists($country, $redirect_rules)) {
        wp_redirect($redirect_rules[$country]);
        exit;
    }
}
