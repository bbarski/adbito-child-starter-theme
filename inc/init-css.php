<?php

add_action('wp_enqueue_scripts', 'load_custom_stylesheets');
function load_custom_stylesheets() {
	
		wp_enqueue_style('header-styles', get_stylesheet_directory_uri() . '/assets/css/header.css');
    	wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('footer-styles', get_stylesheet_directory_uri() . '/assets/css/footer.css');

    if (is_front_page()) {
        wp_enqueue_style('front-page-styles', get_stylesheet_directory_uri() . '/assets/css/main-page/front-page.css');
    }
	
    if (is_single()) {
        wp_enqueue_style('single-post-styles', get_stylesheet_directory_uri() . '/assets/css/blog/post.css');
    }
	
	if (is_home()) {
        wp_enqueue_style('single-post-styles', get_stylesheet_directory_uri() . '/assets/css/blog/blog.css');
    }

    if (is_archive()) {
        wp_enqueue_style('archive-styles', get_stylesheet_directory_uri() . '/assets/css/archive.css');
    }

}

?>
