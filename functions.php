<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Funktion für MENU
function register_my_menus() {
  register_nav_menus(
    array('menu' => __( 'Header Menu' ) )
  );
}
// Funktion für MENU ENDE

add_action ('init', 'register_my_menus');

// Funktion für Widges
function widgets_init() {

    register_sidebar( array(
        'name' => __( 'Sidebar'),
        'id' => 'sidebar-widget-area',
        'description' => __( 'Bereich für Widgets innerhalb der Sidebar' ),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<strong class="widget-title">',
        'after_title' => '</strong>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer'),
        'id' => 'footer-widget-area',
        'description' => __( 'Bereich für Widgets innerhalb des Footer'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<strong class="widget-title">',
        'after_title' => '</strong>',
    ) );
}

add_action( 'widgets_init', 'widgets_init' );
// Funktion für Widges ENDE


function add_my_own_js() {
  wp_enqueue_script( 'jquery min js', get_stylesheet_directory_uri() . '/assets/js/jquery-3.1.1.js' );
  wp_enqueue_script( 'boot min js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js' );
  wp_enqueue_script( 'boot min js', get_stylesheet_directory_uri() . '/assets/analytics/analytics.js' );
}
add_action( 'wp_enqueue_scripts', 'add_my_own_js' );
