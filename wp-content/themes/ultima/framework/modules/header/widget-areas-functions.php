<?php

if ( ! function_exists( 'ultima_qodef_register_top_header_areas' ) ) {
	/**
	 * Registers widget areas for top header bar when it is enabled
	 */
	function ultima_qodef_register_top_header_areas() {
		if ( ultima_qodef_core_installed() ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Top Bar Left', 'ultima' ),
				'id'            => 'qodef-top-bar-left',
				'before_widget' => '<div id="%1$s" class="widget %2$s qodef-top-bar-widget">',
				'after_widget'  => '</div>',
				'description'   => esc_html__( 'Widgets added here will appear on the left hand side in the top bar', 'ultima' ),
			) );

			register_sidebar( array(
				'name'          => esc_html__( 'Top Bar Center', 'ultima' ),
				'id'            => 'qodef-top-bar-center',
				'before_widget' => '<div id="%1$s" class="widget %2$s qodef-top-bar-widget">',
				'after_widget'  => '</div>',
				'description'   => esc_html__( 'Widgets added here will appear in the center in the top bar', 'ultima' ),
			) );

			register_sidebar( array(
				'name'          => esc_html__( 'Top Bar Right', 'ultima' ),
				'id'            => 'qodef-top-bar-right',
				'before_widget' => '<div id="%1$s" class="widget %2$s qodef-top-bar-widget">',
				'after_widget'  => '</div>',
				'description'   => esc_html__( 'Widgets added here will appear on the right hand side in the top bar', 'ultima' ),
			) );
		}
	}

	add_action( 'widgets_init', 'ultima_qodef_register_top_header_areas' );
}

if ( ! function_exists( 'ultima_qodef_header_standard_widget_areas' ) ) {
	/**
	 * Registers widget areas for standard header type
	 */
	function ultima_qodef_header_standard_widget_areas() {
		if ( ultima_qodef_core_installed() ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Right From Main Menu', 'ultima' ),
				'id'            => 'qodef-right-from-main-menu',
				'before_widget' => '<div id="%1$s" class="widget %2$s qodef-right-from-main-menu-widget">',
				'after_widget'  => '</div>',
				'description'   => esc_html__( 'Widgets added here will appear on the right hand side from the main menu', 'ultima' ),
			) );
		}
	}

	add_action( 'widgets_init', 'ultima_qodef_header_standard_widget_areas' );
}

if ( ! function_exists( 'ultima_qodef_header_vertical_widget_areas' ) ) {
	/**
	 * Registers widget areas for vertical header
	 */
	function ultima_qodef_header_vertical_widget_areas() {
		if ( ultima_qodef_core_installed() ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Vertical Area', 'ultima' ),
				'id'            => 'qodef-vertical-area',
				'before_widget' => '<div id="%1$s" class="widget %2$s qodef-vertical-area-widget">',
				'after_widget'  => '</div>',
				'description'   => esc_html__( 'Widgets added here will appear on the bottom of vertical menu', 'ultima' )
			) );
		}
	}

	add_action( 'widgets_init', 'ultima_qodef_header_vertical_widget_areas' );
}


if ( ! function_exists( 'ultima_qodef_register_mobile_header_areas' ) ) {
	/**
	 * Registers widget areas for mobile header
	 */
	function ultima_qodef_register_mobile_header_areas() {
		if ( ultima_qodef_is_responsive_on() && ultima_qodef_core_installed() ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Right From Mobile Logo', 'ultima' ),
				'id'            => 'qodef-right-from-mobile-logo',
				'before_widget' => '<div id="%1$s" class="widget %2$s qodef-right-from-mobile-logo">',
				'after_widget'  => '</div>',
				'description'   => esc_html__( 'Widgets added here will appear on the right hand side from the mobile logo', 'ultima' )
			) );
		}
	}

	add_action( 'widgets_init', 'ultima_qodef_register_mobile_header_areas' );
}

if ( ! function_exists( 'ultima_qodef_register_sticky_header_areas' ) ) {
	/**
	 * Registers widget area for sticky header
	 */
	function ultima_qodef_register_sticky_header_areas() {
		if ( ultima_qodef_core_installed() ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Sticky Right', 'ultima' ),
				'id'            => 'qodef-sticky-right',
				'before_widget' => '<div id="%1$s" class="widget %2$s qodef-sticky-right">',
				'after_widget'  => '</div>',
				'description'   => esc_html__( 'Widgets added here will appear on the right hand side in sticky menu', 'ultima' )
			) );
		}
	}

	add_action( 'widgets_init', 'ultima_qodef_register_sticky_header_areas' );
}