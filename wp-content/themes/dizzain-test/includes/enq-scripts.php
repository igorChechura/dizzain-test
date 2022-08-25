<?php
add_action('wp_enqueue_scripts', 'dizzain_test_scripts');
function dizzain_test_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/styles/main.min.css', array(), filemtime( get_stylesheet_directory() . '/assets/styles/main.min.css' ));
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/scripts/main.min.js', array(), filemtime( get_stylesheet_directory() . '/assets/scripts/main.min.js' ), true);
}
