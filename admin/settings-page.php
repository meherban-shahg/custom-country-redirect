<?php
// Add Admin Menu
function ccr_add_admin_menu() {
    add_options_page(
        'Country Redirect Settings',
        'Country Redirect',
        'manage_options',
        'country-redirect',
        'ccr_settings_page'
    );
}

// Create Settings Page
function ccr_settings_page() {
    ?>
    <div class="wrap">
        <h1>Country Redirect Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('ccr_settings_group');
            do_settings_sections('ccr_settings_group');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Redirection Rules</th>
                    <td>
                        <textarea name="ccr_redirection_rules" rows="10" cols="50"><?php echo esc_textarea(get_option('ccr_redirection_rules')); ?></textarea>
                        <p class="description">Enter redirection rules in JSON format. Example: {"US":"https://us.example.com","CA":"https://ca.example.com","GB":"https://uk.example.com","AE":"https://uae.example.com"}</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Test IP</th>
                    <td>
                        <input type="text" name="ccr_test_ip" value="<?php echo esc_attr(get_option('ccr_test_ip')); ?>" />
                        <p class="description">Enter a test IP address for local testing.</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// Register Settings
function ccr_register_settings() {
    register_setting('ccr_settings_group', 'ccr_redirection_rules');
    register_setting('ccr_settings_group', 'ccr_test_ip');
}
