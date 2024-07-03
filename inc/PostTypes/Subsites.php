<?php
/**
 * Class Subsites
 * Generate subsites custom post type that handles all the subsites
 * in our multisite structure.
 */


namespace Inc\PostTypes;
use Inc\Abstracts\PostType;

class Subsites extends PostType {
	protected function get_args() {
		$labels = array(
			'name'                  => _x( 'Subsites', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Subsite', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Subsites', 'text_domain' ),
			'name_admin_bar'        => __( 'Subsite', 'text_domain' ),
			'archives'              => __( 'Subsite Archives', 'text_domain' ),
			'attributes'            => __( 'Subsite Attributes', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Subsite:', 'text_domain' ),
			'all_items'             => __( 'All Subsites', 'text_domain' ),
			'add_new_item'          => __( 'Add New Subsite', 'text_domain' ),
			'add_new'               => __( 'Add New', 'text_domain' ),
			'new_item'              => __( 'New Subsite', 'text_domain' ),
			'edit_item'             => __( 'Edit Subsite', 'text_domain' ),
			'update_item'           => __( 'Update Subsite', 'text_domain' ),
			'view_item'             => __( 'View Subsite', 'text_domain' ),
			'view_items'            => __( 'View Subsites', 'text_domain' ),
			'search_items'          => __( 'Search Subsite', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into subsite', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this subsite', 'text_domain' ),
			'items_list'            => __( 'Subsites list', 'text_domain' ),
			'items_list_navigation' => __( 'Subsites list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter subsites list', 'text_domain' ),
		);
		$args   = array(
			'label'               => __( 'Subsite', 'text_domain' ),
			'description'         => __( 'Custom post type for subsites', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		return $args;
	}


	protected function get_name() {
		return 'subsite';
	}
}
