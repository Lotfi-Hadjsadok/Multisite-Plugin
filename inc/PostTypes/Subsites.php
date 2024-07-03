<?php
/**
 * Class Subsites
 * Generate subsites custom post type that handles all the subsites
 * in our multisite structure.
 */


namespace Inc\PostTypes;

use Inc\Abstracts\PostType;

class Subsites extends PostType {


	protected function post_type(): string {
		return 'subsite';
	}

	protected function name(): string {
		return 'Subsite';
	}

	protected function icon(): string {
		return 'dashicons-networking';
	}

	protected function supports(): array {
		return array( 'title' );
	}
}
