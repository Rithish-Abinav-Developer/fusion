<?php

if ( ! function_exists( 'ultima_qodef_woocommerce_products_per_page' ) ) {
	/**
	 * Function that sets number of products per page. Default is 12
	 * @return int number of products to be shown per page
	 */
	function ultima_qodef_woocommerce_products_per_page() {

		$products_per_page = 12;

		if ( ultima_qodef_options()->getOptionValue( 'qodef_woo_products_per_page' ) ) {
			$products_per_page = ultima_qodef_options()->getOptionValue( 'qodef_woo_products_per_page' );
		}
		if ( isset( $_GET['woo-products-count'] ) && $_GET['woo-products-count'] === 'view-all' ) {
			$products_per_page = 9999;
		}

		return $products_per_page;
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_related_products_args' ) ) {
	/**
	 * Function that sets number of displayed related products. Hooks to woocommerce_output_related_products_args filter
	 *
	 * @param $args array array of args for the query
	 *
	 * @return mixed array of changed args
	 */
	function ultima_qodef_woocommerce_related_products_args( $args ) {

		if ( ultima_qodef_options()->getOptionValue( 'qodef_woo_product_list_columns' ) ) {

			$related = ultima_qodef_options()->getOptionValue( 'qodef_woo_product_list_columns' );
			switch ( $related ) {
				case 'qodef-woocommerce-columns-4':
					$args['posts_per_page'] = 4;
					break;
				case 'qodef-woocommerce-columns-3':
					$args['posts_per_page'] = 3;
					break;
				default:
					$args['posts_per_page'] = 3;
			}

		} else {
			$args['posts_per_page'] = 3;
		}

		return $args;
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_template_loop_product_title' ) ) {
	/**
	 * Function for overriding product title template in Product List Loop
	 */
	function ultima_qodef_woocommerce_template_loop_product_title() {

		$tag = ultima_qodef_options()->getOptionValue( 'qodef_products_list_title_tag' );
		if ( $tag === '' ) {
			$tag = 'h4';
		}
		the_title( '<' . $tag . ' class="qodef-product-list-title"><a href="' . get_the_permalink() . '">', '</a></' . $tag . '>' );
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_template_single_title' ) ) {
	/**
	 * Function for overriding product title template in Single Product template
	 */
	function ultima_qodef_woocommerce_template_single_title() {

		$tag = ultima_qodef_options()->getOptionValue( 'qodef_single_product_title_tag' );
		if ( $tag === '' ) {
			$tag = 'h1';
		}
		the_title( '<' . $tag . '  itemprop="name" class="qodef-single-product-title">', '</' . $tag . '>' );
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_sale_flash' ) ) {
	/**
	 * Function for overriding Sale Flash Template
	 *
	 * @return string
	 */
	function ultima_qodef_woocommerce_sale_flash() {

		return '<span class="qodef-onsale">' . esc_html__( 'Sale', 'ultima' ) . '</span>';
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_product_out_of_stock' ) ) {
	/**
	 * Function for adding Out Of Stock Template
	 *
	 * @return string
	 */
	function ultima_qodef_woocommerce_product_out_of_stock() {

		global $product;

		if ( ! $product->is_in_stock() ) {
			print '<span class="qodef-out-of-stock">' . esc_html__( 'Out of stock', 'ultima' ) . '</span>';
		}
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_shop_loop_categories' ) ) {
	/**
	 * Function that prints html with product categories
	 */
	function ultima_qodef_woocommerce_shop_loop_categories() {

		global $product;

		$html = '<div class="qodef-pl-categories-holder">';
		$html .= wc_get_product_category_list( $product->get_id() );
		$html .= '</div>';

		print ultima_qodef_get_module_part( $html );
	}
}

if ( ! function_exists( 'ultima_qodef_get_woocommerce_pagination' ) ) {
	/**
	 * Function that returns args for woocommerce pagination
	 */
	function ultima_qodef_get_woocommerce_pagination() {
		global $wp_query;
		$navigation = array(
			'base'               => esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) ),
			'format'             => '',
			'add_args'           => false,
			'current'            => max( 1, get_query_var( 'paged' ) ),
			'total'              => $wp_query->max_num_pages,
			'prev_text'          => '<span class="qodef-pagination-arrow fa fa-angle-left"></span>',
			'next_text'          => '<span class="qodef-pagination-arrow fa fa-angle-right"></span>',
			'type'               => 'list',
			'end_size'           => 3,
			'mid_size'           => 3,
			'before_page_number' => '<span class="qodef-pagination-number">',
			'after_page_number'  => '</span>'
		);

		return $navigation;
	}
}

if ( ! function_exists( 'ultima_qodef_woo_view_all_pagination_additional_tag_before' ) ) {
	function ultima_qodef_woo_view_all_pagination_additional_tag_before() {

		print '<div class="qodef-woo-pagination-holder"><div class="qodef-woo-pagination-inner">';
	}
}

if ( ! function_exists( 'ultima_qodef_woo_view_all_pagination_additional_tag_after' ) ) {
	function ultima_qodef_woo_view_all_pagination_additional_tag_after() {

		print '</div></div>';
	}
}

if ( ! function_exists( 'ultima_qodef_single_product_content_additional_tag_before' ) ) {
	function ultima_qodef_single_product_content_additional_tag_before() {

		print '<div class="qodef-single-product-content">';
	}
}

if ( ! function_exists( 'ultima_qodef_single_product_content_additional_tag_after' ) ) {
	function ultima_qodef_single_product_content_additional_tag_after() {

		print '</div>';
	}
}

if ( ! function_exists( 'ultima_qodef_single_product_summary_additional_tag_before' ) ) {
	function ultima_qodef_single_product_summary_additional_tag_before() {

		print '<div class="qodef-single-product-summary">';
	}
}

if ( ! function_exists( 'ultima_qodef_single_product_summary_additional_tag_after' ) ) {
	function ultima_qodef_single_product_summary_additional_tag_after() {

		print '</div>';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_holder_additional_tag_before' ) ) {
	function ultima_qodef_pl_holder_additional_tag_before() {

		print '<div class="qodef-pl-main-holder">';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_holder_additional_tag_after' ) ) {
	function ultima_qodef_pl_holder_additional_tag_after() {

		print '</div>';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_image_additional_tag_before' ) ) {
	function ultima_qodef_pl_image_additional_tag_before() {
		print '<div class="qodef-pl-image">';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_image_additional_tag_after' ) ) {
	function ultima_qodef_pl_image_additional_tag_after() {
		print '</div>';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_text_wrapper_additional_tag_before' ) ) {
	function ultima_qodef_pl_text_wrapper_additional_tag_before() {

		print '<div class="qodef-pl-text-wrapper">';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_text_wrapper_additional_tag_after' ) ) {
	function ultima_qodef_pl_text_wrapper_additional_tag_after() {

		print '</div>';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_rating_additional_tag_before' ) ) {
	function ultima_qodef_pl_rating_additional_tag_before() {
		global $product;

		if ( get_option( 'woocommerce_enable_review_rating' ) !== 'no' ) {

			$rating_html = wc_get_rating_html( $product->get_average_rating() );

			if ( $rating_html !== '' ) {
				print '<div class="qodef-pl-rating-holder">';
			}
		}
	}
}

if ( ! function_exists( 'ultima_qodef_pl_rating_additional_tag_after' ) ) {
	function ultima_qodef_pl_rating_additional_tag_after() {
		global $product;

		if ( get_option( 'woocommerce_enable_review_rating' ) !== 'no' ) {

			$rating_html = wc_get_rating_html( $product->get_average_rating() );

			if ( $rating_html !== '' ) {
				print '</div>';
			}
		}
	}
}

if ( ! function_exists( 'ultima_qodef_pl_original_image_tag_before' ) ) {
	function ultima_qodef_pl_original_image_tag_before() {

		print '<span class="qodef-original-image">';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_original_image_tag_after' ) ) {
	function ultima_qodef_pl_original_image_tag_after() {

		print '</span>';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_button_before' ) ) {
	function ultima_qodef_pl_button_before() {

		print '<div class="qodef-pl-button-holder">';
		print '<div class="qodef-pl-button-holder-inner">';
		print '<div class="qodef-pl-button-holder-inner-ovelay"></div>';
	}
}

if ( ! function_exists( 'ultima_qodef_pl_button_after' ) ) {
	function ultima_qodef_pl_button_after() {

		print '</div>';
		print '</div>';
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_template_loop_product_title' ) ) {
	/**
	 * Function for overriding product title template in Product List Loop
	 */
	function ultima_qodef_woocommerce_template_loop_product_title() {

		$tag = ultima_qodef_options()->getOptionValue( 'qodef_products_list_title_tag' );
		if ( $tag === '' ) {
			$tag = 'h4';
		}

		$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

		if ( $product_cats && ! is_wp_error( $product_cats ) ) {
			$single_cat = array_shift( $product_cats );
		}

		the_title( '<' . $tag . ' class="qodef-product-list-title"><a href="' . get_the_permalink() . '">', '</a></' . $tag . '>' );
		echo '<a class="qodef-category-shop-link" href="' . get_term_link( $single_cat ) . '">' . $single_cat->name . '</a>';
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_add_to_cart_html_part' ) ) {
	/**
	 * Function for adding Add To Cart Button html part for shortcodes
	 *
	 * @return string
	 */
	function ultima_qodef_woocommerce_add_to_cart_html_part( $class_name = '' ) {
		global $product;

		if ( ! $product->is_in_stock() ) {
			$button_classes = 'button ajax_add_to_cart qodef-button';
		} else if ( $product->get_type() === 'variable' ) {
			$button_classes = 'button product_type_variable add_to_cart_button qodef-button';
		} else if ( $product->get_type() === 'external' ) {
			$button_classes = 'button product_type_external qodef-button';
		} else {
			$button_classes = 'button add_to_cart_button ajax_add_to_cart qodef-button';
		}
		$html = '';

		$html .= '<div class="qodef-' . esc_attr( $class_name ) . '-add-to-cart">';
		$html .= apply_filters( 'ultima_qodef_product_list_add_to_cart_link',
			sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( isset( $quantity ) ? $quantity : 1 ),
				esc_attr( $product->get_id() ),
				esc_attr( $product->get_sku() ),
				esc_attr( $button_classes ),
				esc_html( $product->add_to_cart_text() )
			),
			$product );
		$html .= '</div>';

		return $html;
	}
}

if ( ! function_exists( 'ultima_qodef_woocommerce_title_html_part' ) ) {
	/**
	 * Function for adding Title html part for shortcodes
	 *
	 * @return string
	 */
	function ultima_qodef_woocommerce_title_html_part( $class_name = '', $has_link = '' ) {

		if ( $has_link === 'yes' ) {
			$html = '<h3' . ' itemprop="name" class="entry-title qodef-' . esc_attr( $class_name ) . '-title"><a itemprop="url" href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
		} else {
			$html = '<h3' . ' itemprop="name" class="entry-title qodef-' . esc_attr( $class_name ) . '-title">' . get_the_title() . '</h3>';
		}

		return $html;
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
