<?php

require __DIR__ . '/vendor/autoload.php';

use BikeHaven\PostTypes\Service;
use BikeHaven\Admin\AdminController;
use BikeHaven\Inc\PageBuilder;

add_theme_support( 'post-thumbnails' );
show_admin_bar(false);

Service::register([
  'supports' => array( 'title', 'editor', 'custom-fields', 'excerpt', 'thumbnail' ),
]);
  
new AdminController();

function add_bikehaven_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/resources/assets/dist/css/main.css', false ,'1.1','all' );
 
  wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/resources/assets/dist/js/bundle.js', array ( 'jquery' ), null, true);
 
}
add_action( 'wp_enqueue_scripts', 'add_bikehaven_scripts', 100 );
