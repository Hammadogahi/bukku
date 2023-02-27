<?php
/// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'bukku' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'bukku' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'bukku' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'bukku' ),
		'archives' => __( 'Testimonial Archives', 'bukku' ),
		'attributes' => __( 'Testimonial Attributes', 'bukku' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'bukku' ),
		'all_items' => __( 'All Testimonials', 'bukku' ),
		'add_new_item' => __( 'Add New Testimonial', 'bukku' ),
		'add_new' => __( 'Add New', 'bukku' ),
		'new_item' => __( 'New Testimonial', 'bukku' ),
		'edit_item' => __( 'Edit Testimonial', 'bukku' ),
		'update_item' => __( 'Update Testimonial', 'bukku' ),
		'view_item' => __( 'View Testimonial', 'bukku' ),
		'view_items' => __( 'View Testimonials', 'bukku' ),
		'search_items' => __( 'Search Testimonial', 'bukku' ),
		'not_found' => __( 'Not found', 'bukku' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'bukku' ),
		'featured_image' => __( 'Featured Image', 'bukku' ),
		'set_featured_image' => __( 'Set featured image', 'bukku' ),
		'remove_featured_image' => __( 'Remove featured image', 'bukku' ),
		'use_featured_image' => __( 'Use as featured image', 'bukku' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'bukku' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'bukku' ),
		'items_list' => __( 'Testimonials list', 'bukku' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'bukku' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'bukku' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'bukku' ),
		'description' => __( '', 'bukku' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array('title', 'thumbnail', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );