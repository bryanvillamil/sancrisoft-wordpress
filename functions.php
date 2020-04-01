<?php

function sancrisoft_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  // wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0', 'all' );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js');
}

add_action('wp_enqueue_scripts', 'sancrisoft_files');

function sancrisoft_features() {
  // add custom logo
  add_theme_support('custom-logo');
  
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sancrisoft_features');