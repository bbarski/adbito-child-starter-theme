<?php
// This is the child theme for Starter Theme.

add_action('wp_enqueue_scripts', 'child_starter_theme_enqueue_scripts');
function child_starter_theme_enqueue_scripts() {
    wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', [], null, true);
}

add_action('wp_head', 'custom_meta_tags', 1);
function custom_meta_tags() {
    ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3b3b2e" id="theme-color-meta">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.bunny.net/css?family=eb-garamond:400,700" rel="stylesheet">
    <?php
}

define('CREATOR_LINK', 'https://adbito.pl');
define('CREATOR_NAME', 'ADBITO.PL');

function get_data_for_template($template_name) {
    global $customizer_sections_config;
    $section_data = get_section_data(["mytheme_{$template_name}_section" => $customizer_sections_config["mytheme_{$template_name}_section"]]);

    return $section_data;
}


add_action('customize_controls_enqueue_scripts', 'mytheme_enqueue_customizer_js');
function mytheme_enqueue_customizer_js() {
    wp_enqueue_script(
        'mytheme-customizer-js',
        get_stylesheet_directory_uri() . '/assets/js/customizer.js',
        ['customize-controls'],
        false,
        true
    );
}


require_once get_stylesheet_directory() . '/inc/init-css.php';
require_once get_stylesheet_directory() . '/inc/mock-img.php';
require_once get_stylesheet_directory() . '/inc/customizer/builder.php';
require_once get_stylesheet_directory() . '/inc/customizer/init.php';
