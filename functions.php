<?php
function theme_support(){
  // Adds dynamic title tag support
  add_theme_support('title-tag');
}

add_action('after_theme_setup', 'theme_support');

function load_stylesheets(){
  
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('foundation','https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css', array(), '6.7.4', 'all');
  wp_enqueue_style('sliderstyle', get_template_directory_uri() . '/assets/css/slider.css', array(), false, 'all');
  wp_enqueue_style('mystyle', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'load_stylesheets'); 

function foundation_scripts() {

  wp_deregister_script('jquery');
  
  wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', 
  true );
  wp_register_script('foundation-script','https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js', 
  true );
  wp_register_script('what-input','https://cdnjs.cloudflare.com/ajax/libs/what-input/2.1.1/what-input.min.js', 
  true );
  wp_enqueue_script('jquery');
  wp_enqueue_script('what-input');
  wp_enqueue_script('foundation-script');


     }

add_action('wp_enqueue_scripts', 'foundation_scripts'); 


?>

