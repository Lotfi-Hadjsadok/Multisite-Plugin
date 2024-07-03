<?php
/**
 * Class Loader
 * This class loads all the classes needed to run this plugin.
 */

namespace Inc;

use Inc\Abstracts\Singleton;
use Inc\PostTypes\Subsites;

class Loader extends Singleton {

	/**
	 * Loads all needed classes
	 *
	 * @return void
	 */
	public function load() {
        // Post types.
        Subsites::getInstance();
	}
}
