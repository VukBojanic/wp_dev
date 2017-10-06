<?php

function kinetic_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/kinetic.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/kinetic.js', array(), '1.0.0', true);
	
}
add_action( 'wp_enqueue_scripts', 'kinetic_script_enqueue');

function kinetic_theme_setup() {

  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'kinetic_theme_setup');
