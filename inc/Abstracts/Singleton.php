<?php
/**
 * Singleton class
 * Abstract class to be extended by each singleton class.
 */

namespace Inc\Abstracts;

abstract class Singleton {

	/**
	 * Protected constructor to prevent creating a new instance of the Singleton
	 * via the `new` operator from outside this class.
	 */
	protected function __construct() {}

	/**
	 * Protected clone method to prevent cloning of the instance of the Singleton instance.
	 */
	protected function __clone() {}

	/**
	 * Method to prevent unserializing of the Singleton instance.
	 */
	public function __wakeup() {
		throw new \Exception( 'Cannot unserialize singleton' );
	}

	/**
	 * Contains instances of all singleton classes.
	 *
	 * @var array
	 */
	private static $instances;

	public static function getInstance() {
		$cls = static::class;
		if ( ! isset( self::$instances[ $cls ] ) ) {
			self::$instances[ $cls ] = new static();
		}
		return self::$instances[ $cls ];
	}
}
