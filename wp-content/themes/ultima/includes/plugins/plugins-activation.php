<?php

if ( ! function_exists( 'ultima_qodef_register_required_plugins' ) ) {
	/**
	 * Registers Visual Composer, Revolution Slider, Select Core, Select Instagram Feed, Select Twitter Feed, Event Schedule   as required plugins. Hooks to tgmpa_register hook
	 */
	function ultima_qodef_register_required_plugins() {
		$plugins = array(
			array(
				'name'               => esc_html__( 'WPBakery Page Builder', 'ultima' ),
				'slug'               => 'js_composer',
				'source'             => get_template_directory() . '/includes/plugins/js_composer.zip',
				'required'           => true,
				'version'            => '6.10.0',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'               => esc_html__( 'Revolution Slider', 'ultima' ),
				'slug'               => 'revslider',
				'source'             => get_template_directory() . '/includes/plugins/revslider.zip',
				'version'            => '6.6.11',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'               => esc_html__( 'Select Core', 'ultima' ),
				'slug'               => 'select-core',
				'source'             => get_template_directory() . '/includes/plugins/select-core.zip',
				'required'           => true,
				'version'            => '1.3.1',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'               => esc_html__( 'Select Instagram Feed', 'ultima' ),
				'slug'               => 'select-instagram-feed',
				'source'             => get_template_directory() . '/includes/plugins/select-instagram-feed.zip',
				'required'           => true,
				'version'            => '2.0.1',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'               => esc_html__( 'Select Twitter Feed', 'ultima' ),
				'slug'               => 'select-twitter-feed',
				'source'             => get_template_directory() . '/includes/plugins/select-twitter-feed.zip',
				'required'           => true,
				'version'            => '1.0.3',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'               => esc_html__( 'Event Schedule', 'ultima' ),
				'slug'               => '2code-event-schedule',
				'source'             => get_template_directory() . '/includes/plugins/2code-event-schedule.zip',
				'required'           => true,
				'version'            => '1.5',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'     => esc_html__( 'Envato Market', 'ultima' ),
				'slug'     => 'envato-market',
				'source'   => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
				'required' => false
			),
			array(
				'name'         => esc_html__( 'WooCommerce', 'ultima' ),
				'slug'         => 'woocommerce',
				'external_url' => 'https://wordpress.org/plugins/woocommerce/',
				'required'     => false
			),
			array(
				'name'         => esc_html__( 'Contact Form 7', 'ultima' ),
				'slug'         => 'contact-form-7',
				'external_url' => 'https://wordpress.org/plugins/contact-form-7/',
				'required'     => false
			)
		);

		$config = array(
			'domain'       => 'ultima',
			'default_path' => '',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'menu'         => 'install-required-plugins',
			'has_notices'  => true,
			'is_automatic' => false,
			'message'      => '',
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'ultima' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'ultima' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'ultima' ),
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'ultima' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'ultima' ),
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'ultima' ),
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'ultima' ),
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'ultima' ),
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'ultima' ),
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'ultima' ),
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'ultima' ),
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'ultima' ),
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'ultima' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'ultima' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'ultima' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'ultima' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'ultima' ),
				'nag_type'                        => 'updated'
			)
		);

		tgmpa( $plugins, $config );
	}

	add_action( 'tgmpa_register', 'ultima_qodef_register_required_plugins' );
}


