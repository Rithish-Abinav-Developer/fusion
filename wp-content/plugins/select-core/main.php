<?php
/*
Plugin Name: Select Core
Description: Plugin that adds all post types needed by our theme
Author: Select Themes
Version: 1.3.1
*/

require_once 'load.php';

use QodeCore\PostTypes;
use QodeCore\Lib;

add_action( 'after_setup_theme', array( PostTypes\PostTypesRegister::getInstance(), 'register' ) );

Lib\ShortcodeLoader::getInstance()->load();

if ( ! function_exists( 'qode_core_activation' ) ) {
	/**
	 * Triggers when plugin is activated. It calls flush_rewrite_rules
	 * and defines ultima_qodef_core_on_activate action
	 */
	function qode_core_activation() {
		do_action( 'ultima_qodef_core_on_activate' );

		QodeCore\PostTypes\PostTypesRegister::getInstance()->register();
		flush_rewrite_rules();
	}

	register_activation_hook( __FILE__, 'qode_core_activation' );
}

if ( ! function_exists( 'qode_core_text_domain' ) ) {
	/**
	 * Loads plugin text domain so it can be used in translation
	 */
	function qode_core_text_domain() {
		load_plugin_textdomain( 'select-core', false, QODE_CORE_REL_PATH . '/languages' );
	}

	add_action( 'plugins_loaded', 'qode_core_text_domain' );
}

if ( ! function_exists( 'qode_core_ultima_theme_menu' ) ) {
	/**
	 * Function that generates admin menu for options page.
	 * It generates one admin page per options page.
	 */
	function qode_core_ultima_theme_menu() {
		if ( qode_core_theme_installed() ) {

			global $ultima_qodef_Framework;
			ultima_qodef_init_theme_options();

			$page_hook_suffix = add_menu_page(
				esc_html__( 'Select Options', 'select-core' ),                   // The value used to populate the browser's title bar when the menu page is active
				esc_html__( 'Select Options', 'select-core' ),                   // The text of the menu in the administrator's sidebar
				'administrator',                  // What roles are able to access the menu
				'ultima_qodef_theme_menu',                // The ID used to bind submenu items to this menu
				array(
					$ultima_qodef_Framework->getSkin(),
					'renderOptions'
				), // The callback function used to render this menu
				$ultima_qodef_Framework->getSkin()->getMenuIcon( 'options' ),             // Icon For menu Item
				$ultima_qodef_Framework->getSkin()->getMenuItemPosition( 'options' )            // Position
			);

			foreach ( $ultima_qodef_Framework->qodeOptions->adminPages as $key => $value ) {
				$slug = "";

				if ( ! empty( $value->slug ) ) {
					$slug = "_tab" . $value->slug;
				}

				$subpage_hook_suffix = add_submenu_page(
					'ultima_qodef_theme_menu',
					'Select Options - ' . $value->title,                   // The value used to populate the browser's title bar when the menu page is active
					$value->title,                   // The text of the menu in the administrator's sidebar
					'administrator',                  // What roles are able to access the menu
					'ultima_qodef_theme_menu' . $slug,                // The ID used to bind submenu items to this menu
					array( $ultima_qodef_Framework->getSkin(), 'renderOptions' )
				);

				add_action( 'admin_print_scripts-' . $subpage_hook_suffix, 'ultima_qodef_enqueue_admin_scripts' );
				add_action( 'admin_print_styles-' . $subpage_hook_suffix, 'ultima_qodef_enqueue_admin_styles' );
			};

			add_action( 'admin_print_scripts-' . $page_hook_suffix, 'ultima_qodef_enqueue_admin_scripts' );
			add_action( 'admin_print_styles-' . $page_hook_suffix, 'ultima_qodef_enqueue_admin_styles' );

		}
	}

	add_action( 'admin_menu', 'qode_core_ultima_theme_menu' );
}

if ( ! function_exists( 'qode_core_ultima_theme_setup' ) ) {
	function qode_core_ultima_theme_setup() {

		add_filter( 'widget_text', 'do_shortcode' );
	}

	add_action( 'after_setup_theme', 'qode_core_ultima_theme_setup' );
}

if ( ! function_exists( 'qode_core_vc_custom_style' ) ) {

    /**
     * Function that print custom page style
     */

    function qode_core_vc_custom_style() {
        if ( ultima_qodef_visual_composer_installed() ) {
            $id = ultima_qodef_get_page_id();
            if ( is_page() || is_single() || is_singular( 'portfolio-item' ) ) {

                $shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
                if ( ! empty( $shortcodes_custom_css ) ) {
                    echo '<style type="text/css" data-type="vc_shortcodes-custom-css-' . esc_attr( $id ) . '">';
                    echo get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
                    echo '</style>';
                }

                $post_custom_css = get_post_meta( $id, '_wpb_post_custom_css', true );
                if ( ! empty( $post_custom_css ) ) {
                    echo '<style type="text/css" data-type="vc_custom-css-' . esc_attr( $id ) . '">';
                    echo get_post_meta( $id, '_wpb_post_custom_css', true );
                    echo '</style>';
                }
            }
        }
    }

}

if ( ! function_exists( 'qode_core_register_vc_custom_style' ) ) {

    /**
     * Function that print custom page style
     */

    function qode_core_register_vc_custom_style() {
        if ( ultima_qodef_is_ajax_enabled() && ultima_qodef_is_ajax_request() ) {
            add_action( 'ultima_qodef_ajax_meta', 'qode_core_vc_custom_style' );
        }

    }

    add_action( 'ultima_qodef_after_options_map', 'qode_core_register_vc_custom_style' );
}