<?php

function sancrisoft_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  // wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0', 'all' );

  wp_register_style( 'flexslider', get_template_directory_uri() . '/slider/flexslider.css', array(), '2.1');
  wp_enqueue_style('flexslider');

  wp_register_script( 'flexslider', get_template_directory_uri() . '/slider/jquery.flexslider.min.js', array('jquery'), '2.1');
  wp_enqueue_script('flexslider');

  wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js');
}

add_action('wp_enqueue_scripts', 'sancrisoft_files');

function sancrisoft_features() {
  // add custom logo
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_image_size( 'example_name_3', 50, 50, true );
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sancrisoft_features');

add_action('get_header', 'my_filter_head');
function my_filter_head() {
remove_action('wp_head', '_admin_bar_bump_cb');
}
