<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wppb.me/
 * @since      1.0.0
 *
 * @package    Wpwcdevelopment
 * @subpackage Wpwcdevelopment/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wpwcdevelopment
 * @subpackage Wpwcdevelopment/includes
 * @author     Dhaval <dhaval.parejia@multidots.com>
 */
class Wpwcdevelopment_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wpwcdevelopment',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
