<?php
// Theme setup
function EduFlexion_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'EduFlexion_setup');

// Enqueue styles and scripts
function EduFlexion_enqueue_scripts() {
    wp_enqueue_style('EduFlexion-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'EduFlexion_enqueue_scripts');
?>
function EduFlexion_widgets_init() {
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'EduFlexion'), // Sidebar name
        'id'            => 'main-sidebar',                 // Unique ID for the sidebar
        'description'   => __('Widgets in this area will be shown on the sidebar.', 'EduFlexion'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">', // Wrapper for each widget
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',            // Title wrapper
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'EduFlexion_widgets_init');
