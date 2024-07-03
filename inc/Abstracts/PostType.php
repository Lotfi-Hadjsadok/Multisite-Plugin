<?php

/**
 * PostType class
 * Abstract class to be extended by each PostType class.
 */

namespace Inc\Abstracts;

use Inc\Abstracts\Singleton;

abstract class PostType extends Singleton {


	/**
	 * Abstract method to get post type name.
	 *
	 * @return string
	 */
	abstract protected function post_type(): string;

	/**
	 * Abstract method to get post type name.
	 *
	 * @return string
	 */
	abstract protected function name(): string;

	/**
	 * Abstract method to get post type icon.
	 *
	 * @return string
	 */
	abstract protected function icon(): string;


	/**
	 * Method to get post type position.
	 *
	 * @return int
	 */
	protected function position(): int {
		return 5;
	}


	/**
	 * Method to get post type position.
	 *
	 * @return array
	 */
	protected function supports(): array {
		return array( 'title', 'content', 'thumbnail' );
	}




	/**
	 * Get post type args.
	 *
	 * @return string
	 */
	protected function args() {
		$labels = array(
			'name' => _x( 'Subsites', 'raysel' ),
		);
		$args   = array(
			'label'               => __( 'Subsite', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => $this->supports(),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_icon'           => $this->icon(),
			'menu_position'       => $this->position(),
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		return $args;
	}



	/**
	 * Constructor to initialize the post type.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'generate' ) );
	}

	/**
	 * Generate custom post type
	 */
	public function generate() {
		register_post_type( $this->post_type(), $this->args() );
	}
}
