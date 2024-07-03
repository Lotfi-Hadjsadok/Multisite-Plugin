<?php

/**
 * Class Loader
 * This class loads all the classes needed to run this plugin.
 */

namespace Inc;

use Inc\Abstracts\Singleton;

class Loader extends Singleton {


	/**
	 * Loads all needed classes
	 *
	 * @return void
	 */
	public function load(): void {
		// Utility classes.
		Subsite::getInstance();
		// Post types.
		PostTypes\Subsites::getInstance();
	}
}
