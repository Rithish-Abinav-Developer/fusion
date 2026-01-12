<?php

if ( ! function_exists( 'ultima_qodef_load_shortcode_interface' ) ) {
	function ultima_qodef_load_shortcode_interface() {
		include_once QODE_CORE_ABS_PATH . '/shortcodes/lib/shortcode-interface.php';
	}

	add_action( 'ultima_qodef_before_options_map', 'ultima_qodef_load_shortcode_interface' );
}

if ( ! function_exists( 'ultima_qodef_load_shortcodes' ) ) {
	/**
	 * Loades all shortcodes by going through all folders that are placed directly in shortcodes folder
	 * and loads load.php file in each. Hooks to ultima_qodef_after_options_map action
	 *
	 * @see http://php.net/manual/en/function.glob.php
	 */
	function ultima_qodef_load_shortcodes() {
		foreach ( glob( QODE_CORE_ABS_PATH . '/shortcodes/*/load.php' ) as $shortcode_load ) {
			include_once $shortcode_load;
		}

		do_action( 'ultima_qodef_shortcode_loader' );
	}

	add_action( 'ultima_qodef_before_options_map', 'ultima_qodef_load_shortcodes' );
}