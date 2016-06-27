<?php
/**
 * Theme loader class
 */
final class WipiChildThemeLoader {

	/**
	 * WipiChildLoader constructor.
	 */
	public function __construct() {
		$this->load_dependencies();
		$this->init_hooks();
	}

	/**
	 * Load file dependencies
	 */
	protected function load_dependencies() {
		require_once 'classes/class-child-theme.php';
	}

	/**
	 * Initialize WordPress hooks
	 */
	protected function init_hooks() {
		add_action( 'wp_enqueue_scripts', 'WipiChildTheme::enqueue_scripts', 1000 );
	}
}
return new WipiChildThemeLoader();
