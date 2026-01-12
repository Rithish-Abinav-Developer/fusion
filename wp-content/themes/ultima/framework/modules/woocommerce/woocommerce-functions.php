<?php
/**
 * Woocommerce helper functions
 */

if ( ! function_exists( 'ultima_qodef_woocommerce_body_class' ) ) {
	/**
	 * Function that adds class on body for Woocommerce
	 *
	 * @param $classes
	 *
	 * @return array
	 */
	function ultima_qodef_woocommerce_body_class( $classes ) {
		if ( ultima_qodef_is_woocommerce_page() ) {
			$classes[] = 'qodef-woocommerce-page';

			if ( function_exists( 'is_shop' ) && is_shop() ) {
				$classes[] = 'qodef-woo-main-page';
			}

			if ( is_singular( 'product' ) ) {
				$classes[] = 'qodef-woo-single-page';
			}
		}

		return $classes;
	}

	add_filter( 'body_class', 'ultima_qodef_woocommerce_body_class' );
}

if ( ! function_exists( 'ultima_qodef_woocommerce_columns_class' ) ) {
	/**
	 * Function that adds number of columns class to header tag
	 *
	 * @param array array of classes from main filter
	 *
	 * @return array array of classes with added woocommerce class
	 */
	function ultima_qodef_woocommerce_columns_class( $classes ) {

		if ( ultima_qodef_is_woocommerce_installed() ) {

			$products_list_number = ultima_qodef_options()->getOptionValue( 'qodef_woo_product_list_columns' );
			$classes[]            = $products_list_number;

		}

		return $classes;
	}

	add_filter( 'body_class', 'ultima_qodef_woocommerce_columns_class' );
}

if ( ! function_exists( 'ultima_qodef_is_woocommerce_page' ) ) {
	/**
	 * Function that checks if current page is woocommerce shop, product or product taxonomy
	 * @return bool
	 *
	 * @see is_woocommerce()
	 */
	function ultima_qodef_is_woocommerce_page() {
		if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
			return is_woocommerce();
		} elseif ( function_exists( 'is_cart' ) && is_cart() ) {
			return is_cart();
		} elseif ( function_exists( 'is_checkout' ) && is_checkout() ) {
			return is_checkout();
		} elseif ( function_exists( 'is_account_page' ) && is_account_page() ) {
			return is_account_page();
		}
	}
}

if ( ! function_exists( 'ultima_qodef_is_woocommerce_shop' ) ) {
	/**
	 * Function that checks if current page is shop or product page
	 * @return bool
	 *
	 * @see is_shop()
	 */
	function ultima_qodef_is_woocommerce_shop() {
		return function_exists( 'is_shop' ) && ( is_shop() || is_product() );
	}
}

if ( ! function_exists( 'ultima_qodef_get_woo_shop_page_id' ) ) {
	/**
	 * Function that returns shop page id that is set in WooCommerce settings page
	 * @return int id of shop page
	 */
	function ultima_qodef_get_woo_shop_page_id() {
		if ( ultima_qodef_is_woocommerce_installed() ) {
			return get_option( 'woocommerce_shop_page_id' );
		}
	}
}

if ( ! function_exists( 'ultima_qodef_is_product_category' ) ) {
	function ultima_qodef_is_product_category() {
		return function_exists( 'is_product_category' ) && is_product_category();
	}
}

if ( ! function_exists( 'ultima_qodef_is_product_tag' ) ) {
	function ultima_qodef_is_product_tag() {
		return function_exists( 'is_product_tag' ) && is_product_tag();
	}
}

if ( ! function_exists( 'ultima_qodef_load_woo_assets' ) ) {
	/**
	 * Function that checks whether WooCommerce assets needs to be loaded.
	 *
	 * @return bool
	 * @see ultima_qodef_has_woocommerce_shortcode()
	 * @see ultima_qodef_has_woocommerce_widgets()
	 * @see ultima_qodef_is_woocommerce_page()
	 */

	function ultima_qodef_load_woo_assets() {
		return ultima_qodef_is_woocommerce_installed() && ( ultima_qodef_is_woocommerce_page() || ultima_qodef_has_woocommerce_shortcode() || ultima_qodef_has_woocommerce_widgets() );
	}
}

if ( ! function_exists( 'ultima_qodef_return_woocommerce_global_variable' ) ) {
	function ultima_qodef_return_woocommerce_global_variable() {
		if ( ultima_qodef_is_woocommerce_installed() ) {
			global $product;

			return $product;
		}
	}
}

if ( ! function_exists( 'ultima_qodef_has_woocommerce_shortcode' ) ) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return bool
	 */
	function ultima_qodef_has_woocommerce_shortcode() {
		$woocommerce_shortcodes = array(
			'add_to_cart',
			'add_to_cart_url',
			'product_page',
			'product',
			'products',
			'product_categories',
			'product_category',
			'recent_products',
			'featured_products',
			'sale_products',
			'best_selling_products',
			'top_rated_products',
			'product_attribute',
			'related_products',
			'woocommerce_messages',
			'woocommerce_cart',
			'woocommerce_checkout',
			'woocommerce_order_tracking',
			'woocommerce_my_account',
			'woocommerce_edit_address',
			'woocommerce_change_password',
			'woocommerce_view_order',
			'woocommerce_pay',
			'woocommerce_thankyou',
			'qodef_product_list'
		);

		foreach ( $woocommerce_shortcodes as $woocommerce_shortcode ) {
			$has_shortcode = ultima_qodef_has_shortcode( $woocommerce_shortcode );

			if ( $has_shortcode ) {
				return true;
			}
		}

		return false;
	}
}

if ( ! function_exists( 'ultima_qodef_has_woocommerce_widgets' ) ) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return bool
	 */
	function ultima_qodef_has_woocommerce_widgets() {
		$widgets_array = array(
			'qodef_woocommerce_dropdown_cart',
			'woocommerce_widget_cart',
			'woocommerce_layered_nav',
			'woocommerce_layered_nav_filters',
			'woocommerce_price_filter',
			'woocommerce_product_categories',
			'woocommerce_product_search',
			'woocommerce_product_tag_cloud',
			'woocommerce_products',
			'woocommerce_recent_reviews',
			'woocommerce_recently_viewed_products',
			'woocommerce_top_rated_products'
		);

		foreach ( $widgets_array as $widget ) {
			$active_widget = is_active_widget( false, false, $widget );

			if ( $active_widget ) {
				return true;
			}
		}

		return false;
	}
}

if ( ! function_exists( 'ultima_qodef_add_woocommerce_shortcode_class' ) ) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return string
	 */
	function ultima_qodef_add_woocommerce_shortcode_class( $classes ) {
		$woocommerce_shortcodes = array(
			'woocommerce_order_tracking'
		);

		foreach ( $woocommerce_shortcodes as $woocommerce_shortcode ) {
			$has_shortcode = ultima_qodef_has_shortcode( $woocommerce_shortcode );

			if ( $has_shortcode ) {
				$classes[] = 'qodef-woocommerce-page woocommerce-account qodef-' . str_replace( '_', '-', $woocommerce_shortcode );
			}
		}

		return $classes;
	}

	add_filter( 'body_class', 'ultima_qodef_add_woocommerce_shortcode_class' );
}

if ( ! function_exists( 'ultima_qodef_get_woocommerce_pages' ) ) {
	/**
	 * Function that returns all url woocommerce pages
	 * @return array array of WooCommerce pages
	 *
	 * @version 0.1
	 */
	function ultima_qodef_get_woocommerce_pages() {
		$woo_pages_array = array();

		if ( ultima_qodef_is_woocommerce_installed() ) {
			if ( get_option( 'woocommerce_shop_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( 'woocommerce_shop_page_id' ) );
			}
			if ( get_option( 'woocommerce_cart_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( 'woocommerce_cart_page_id' ) );
			}
			if ( get_option( 'woocommerce_checkout_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( 'woocommerce_checkout_page_id' ) );
			}
			if ( get_option( 'woocommerce_pay_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( ' woocommerce_pay_page_id ' ) );
			}
			if ( get_option( 'woocommerce_thanks_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( ' woocommerce_thanks_page_id ' ) );
			}
			if ( get_option( 'woocommerce_myaccount_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( ' woocommerce_myaccount_page_id ' ) );
			}
			if ( get_option( 'woocommerce_edit_address_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( ' woocommerce_edit_address_page_id ' ) );
			}
			if ( get_option( 'woocommerce_view_order_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( ' woocommerce_view_order_page_id ' ) );
			}
			if ( get_option( 'woocommerce_terms_page_id' ) != '' ) {
				$woo_pages_array[] = get_permalink( get_option( ' woocommerce_terms_page_id ' ) );
			}

			$woo_products = get_posts( array(
				'post_type'      => 'product',
				'post_status'    => 'publish',
				'posts_per_page' => '-1'
			) );

			foreach ( $woo_products as $product ) {
				$woo_pages_array[] = get_permalink( $product->ID );
			}
		}

		return $woo_pages_array;
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_share' ) ) {
	/**
	 * Function that social share for product page
	 * Return array array of WooCommerce pages
	 */
	function ultima_qodef_woocommerce_share() {
		if ( ultima_qodef_is_woocommerce_installed() ) {

			if ( ultima_qodef_core_installed()
			     && ultima_qodef_options()->getOptionValue( 'enable_social_share' ) == 'yes'
			     && ultima_qodef_options()->getOptionValue( 'enable_social_share_on_product' ) == 'yes' ) :
				print '<div class="qodef-woo-social-share-holder">';
				echo ultima_qodef_get_social_share_html();
				print '</div>';
			endif;
		}
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_price_html_part' ) ) {
	/**
	 * Function for adding Price html part for shortcodes
	 *
	 * @return string
	 */
	function ultima_qodef_woocommerce_price_html_part( $class_name = '' ) {
		global $product;

		$html = '';

		if ( $price_html = $product->get_price_html() ) {
			$html = '<div class="qodef-' . esc_attr( $class_name ) . '-price">' . $price_html . '</div>';
		}

		return $html;
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_rating_html_part' ) ) {
	/**
	 * Function for adding Rating html part for shortcodes
	 *
	 * @return string
	 */
	function ultima_qodef_woocommerce_rating_html_part( $class_name = '' ) {
		global $product;

		$html = '';

		if ( get_option( 'woocommerce_enable_review_rating' ) !== 'no' ) {
			$average = $product->get_average_rating();

			$html = '<div class="qodef-' . esc_attr( $class_name ) . '-rating-holder"><div class="qodef-' . esc_attr( $class_name ) . '-rating" title="' . sprintf( esc_attr__( "Rated %s out of 5", "ultima" ), $average ) . '"><span style="width:' . ( ( $average / 5 ) * 100 ) . '%"></span></div></div>';
		}

		return $html;
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_no_products_found_html_part' ) ) {
	/**
	 * Function for adding No products were found html part for shortcodes
	 *
	 * @return string
	 */
	function ultima_qodef_woocommerce_no_products_found_html_part( $class_name = '' ) {

		$html = '<div class="qodef-' . esc_attr( $class_name ) . '-messsage"><p>' . esc_html__( "No products were found!", "ultima" ) . '</p></div>';

		return $html;
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_image_html_part' ) ) {
	/**
	 * Function for adding Image html part for shortcodes
	 *
	 * @return string
	 */
	function ultima_qodef_woocommerce_image_html_part( $class_name = '', $image_size = '', $new_layout = '' ) {
		global $product;

		$html = '';

		if ( $product->is_on_sale() ) {
			$html .= '<span class="qodef-' . esc_attr( $class_name ) . '-onsale">' . esc_html__( "SALE", "ultima" ) . '</span>';
		}
		if ( ! $product->is_in_stock() ) {
			$html .= '<span class="qodef-' . esc_attr( $class_name ) . '-out-of-stock">' . esc_html__( "OUT OF STOCK", "ultima" ) . '</span>';
		}
		if ( $new_layout === 'yes' ) {
			$html .= '<span class="qodef-' . esc_attr( $class_name ) . '-new-product">' . esc_html__( "NEW", "ultima" ) . '</span>';
		}

		$product_image_size = 'shop_catalog';
		if ( $image_size === 'full' ) {
			$product_image_size = 'full';
		} else if ( $image_size === 'square' ) {
			$product_image_size = 'ultima_qodef_image_square';
		} else if ( $image_size === 'landscape' ) {
			$product_image_size = 'ultima_qodef_image_landscape';
		} else if ( $image_size === 'portrait' ) {
			$product_image_size = 'ultima_qodef_image_portrait';
		} else if ( $image_size === 'medium' ) {
			$product_image_size = 'medium';
		} else if ( $image_size === 'large' ) {
			$product_image_size = 'large';
		}

		$html .= get_the_post_thumbnail( get_the_ID(), apply_filters( 'ultima_qodef_product_list_image_size', $product_image_size ) );

		return $html;
	}
}
