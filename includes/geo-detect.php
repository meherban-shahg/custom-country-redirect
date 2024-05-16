<?php
function get_user_country() {
    // Check if a test IP is set for local testing
    $test_ip = get_option('ccr_test_ip');
    $ip = $test_ip ? $test_ip : $_SERVER['REMOTE_ADDR'];

    // Use GeoPlugin to get the country code
    $response = wp_remote_get("http://www.geoplugin.net/json.gp?ip={$ip}");

    if (is_wp_error($response)) {
        return null;
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body);

    return $data->geoplugin_countryCode ?? null;
}


