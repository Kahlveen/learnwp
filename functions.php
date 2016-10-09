<?php

function learningWP_resources() {
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWP_resources');

//Navigation menus
//Create where the navigation menus are location
//Then go wordpress to choose which links appear in which menu
register_nav_menus(array(
	'header' => __('Header Menu'),
	'footer' => __('Footer Menu'),
));
?>