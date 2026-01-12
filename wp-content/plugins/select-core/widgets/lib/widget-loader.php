<?php

if ( ! function_exists( 'ultima_qodef_register_widgets' ) ) {
	function ultima_qodef_register_widgets() {
		$widgets = array(
			'UltimaQodefFullScreenMenuOpener',
			'UltimaQodefLatestPosts',
			'UltimaQodefSearchOpener',
			'UltimaQodefSeparatorWidget',
			'UltimaQodefSideAreaOpener',
			'UltimaQodefSocialIconWidget',
		);

		if ( ultima_qodef_is_woocommerce_installed() ) {
			$widgets[] = 'UltimaQodefWoocommerceDropdownCart';
		}

		foreach ( $widgets as $widget ) {
			register_widget( $widget );
		}
	}
}

add_action( 'widgets_init', 'ultima_qodef_register_widgets' );