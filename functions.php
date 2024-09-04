<?php
function child_theme_styles() {
    // Libre-Franklin-Schrift laden
    wp_enqueue_style('libre-franklin', get_template_directory_uri() . '/libre-franklin.css');

    // Laden des Parent-Theme Styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Laden des Child-Theme Styles
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}

add_action( 'wp_enqueue_scripts', 'child_theme_styles' );