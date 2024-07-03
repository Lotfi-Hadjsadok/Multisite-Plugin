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
	abstract protected function get_name();

	/**
	 * Abstract method to get post type args.
	 *
	 * @return string
	 */
	abstract protected function get_args();


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
		register_post_type( $this->get_name(), $this->get_args() );
	}
}
