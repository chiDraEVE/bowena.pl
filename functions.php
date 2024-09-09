<?php
function child_theme_styles() {
    // Schriften und weitere Stylesheets laden
    wp_enqueue_style('additional-styles', get_stylesheet_directory_uri() . '/build/index.css');

    // Laden des Parent-Theme Styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Laden des Child-Theme Styles
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/build/style-index.css', array( 'parent-style' ) );
}

add_action( 'wp_enqueue_scripts', 'child_theme_styles' );