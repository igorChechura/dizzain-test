<?php
add_action( 'init', 'experience_post_type_init' );
 
function experience_post_type_init() {
	$labels = array(
		'name' => 'Experience',
		'singular_name' => 'Experience',
		'add_new' => 'Add experience',
		'add_new_item' => 'Add experience',
		'edit_item' => 'Edit experience',
		'new_item' => 'New experience',
		'all_items' => 'All experiences',
		'view_item' => 'View experience',
		'search_items' => 'Search experiences',
		'not_found' =>  'Experiences not found',
		'not_found_in_trash' => 'Experiences not found in Trash',
		'menu_name' => 'Experiences'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'has_archive' => true, 
		'menu_position' => 4,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array( 'title', 'editor')
	);
	register_post_type('experience', $args);
}