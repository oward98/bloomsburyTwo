<?php
add_action('admin_menu', 'add_options_menu');

function add_options_menu() {
    add_theme_page("Theme Options", "Theme Options", "administrator", "options", "options_page");
};

function options_page() {
    $setting_args = array('type' => 'string', 'description' => 'Site Logo', 'show_in_rest' => true);
    register_setting('media', 'logo', $setting_args);
    ?>
    <h1>HI</h1>
    <?php
}