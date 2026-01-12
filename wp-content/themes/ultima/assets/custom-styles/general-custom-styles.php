<?php
if(!function_exists('ultima_qodef_design_styles')) {
    /**
     * Generates general custom styles
     */
    function ultima_qodef_design_styles() {

        $preload_background_styles = array();

        if(ultima_qodef_options()->getOptionValue('preload_pattern_image') !== ""){
            $preload_background_styles['background-image'] = 'url('.ultima_qodef_options()->getOptionValue('preload_pattern_image').') !important';
        }else{
            $preload_background_styles['background-image'] = 'url('.esc_url(QODE_ASSETS_ROOT."/img/preload_pattern.png").') !important';
        }

        echo ultima_qodef_dynamic_css('.qodef-preload-background', $preload_background_styles);

		if (ultima_qodef_options()->getOptionValue('google_fonts')){
			$font_family = ultima_qodef_options()->getOptionValue('google_fonts');
			if(ultima_qodef_is_font_option_valid($font_family)) {
				echo ultima_qodef_dynamic_css('body', array('font-family' => ultima_qodef_get_font_option_val($font_family)));
			}
		}

        if(ultima_qodef_options()->getOptionValue('first_color') !== "") {
            $color_selector = array(
                '.qodef-comment-holder .qodef-comment-text .comment-edit-link:hover',
                '.qodef-comment-holder .qodef-comment-text .comment-reply-link:hover',
                '.qodef-comment-holder .qodef-comment-text .replay:hover',
                '.comment-respond .comment-reply-title #cancel-comment-reply-link:hover',
                '.comment-respond .logged-in-as a:hover',
                '.qodef-main-menu>ul>li.qodef-active-item>span>a',
                'body:not(.qodef-menu-item-first-level-bg-color) .qodef-main-menu>ul>li:hover>span>a',
                '.qodef-menu-area .qodef-featured-icon',
                '.qodef-sticky-nav .qodef-featured-icon',
                '.qodef-drop-down .second .inner ul li.sub ul li:hover>a',
                '.qodef-drop-down .second .inner>ul>li:hover>a',
                '.qodef-mobile-header .qodef-mobile-nav a:hover',
                '.qodef-mobile-header .qodef-mobile-nav h4:hover',
                '.qodef-mobile-header .qodef-mobile-menu-opener a:hover',
                '.qodef-title .qodef-title-holder .qodef-breadcrumbs a:hover',
                '.qodef-side-menu-button-opener:hover',
                '.qodef-side-menu .widget.qodef-sidearea.widget_search #searchform button[type=submit]:hover',
                '.qodef-side-menu .widget.qodef-sidearea.widget_search #searchform input[type=submit]:hover',
                '.qodef-side-menu .widget_rss li a.rsswidget:hover',
                '.qodef-side-menu a:not(.qbutton):hover',
                'nav.qodef-fullscreen-menu ul li a:hover',
                'nav.qodef-fullscreen-menu ul li ul li a',
                '.qodef-portfolio-single-nav span:hover',
                '.qodef-portfolio-single-nav .qodef-portfolio-back-btn .qodef-back-to-icon:hover',
                '.qodef-team .qodef-team-social-wrapp .qodef-icon-shortcode .icon-flip .qodef-icon-element',
                '.qodef-team-slider-holder.simple .qodef-team-social-wrapp .qodef-icon-shortcode .icon-flip .qodef-icon-element',
                '.qodef-icon-shortcode .qodef-icon-element',
                '.qodef-ordered-list ol>li:before',
                '.qodef-icon-list-item .qodef-icon-list-icon-holder-inner i',
                '.qodef-icon-list-item .qodef-icon-list-icon-holder-inner span',
                '.qodef-testimonials .qodef-testimonial-job',
                '.qodef-testimonials.cards .qodef-testimonial-job',
                '.qodef-testimonials.list .qodef-testimonial-job',
                '.qodef-pricing-tables .qodef-price-table .qodef-price-table-inner ul li.qodef-table-content ul li:before',
                '.qodef-tabs .qodef-tabs-nav li a .qodef-icon-frame',
                '.qodef-accordion-holder .qodef-title-holder .qodef-accordion-mark-icon .qodef-accordion-plus',
                '.qodef-blog-list-holder .qodef-item-info-section.qodef-section-top>div a',
                '.qodef-blog-list-holder .qodef-item-info-section.qodef-section-bottom .qodef-post-info-author a:hover',
                '.qodef-blog-list-holder .qodef-item-info-section.qodef-section-bottom .qodef-blog-like:hover i:first-child',
                '.qodef-blog-list-holder .qodef-item-info-section.qodef-section-bottom .qodef-blog-like:hover span:first-child',
                '.qodef-blog-list-holder .qodef-item-info-section.qodef-section-bottom .qodef-post-info-comments-holder:hover span:first-child',
                '.qodef-blog-list-holder.qodef-boxes .qodef-item-text-holder a.qodef-btn-solid.qodef-blog-list-button',
                '.qodef-btn.qodef-btn-outline',
                '.qodef-btn.qodef-btn-transparent',
                '.qodef-dropcaps',
                '.qodef-portfolio-slider-holder .qodef-portfolio-list-holder.owl-carousel .owl-nav .qodef-next-icon i',
                '.qodef-portfolio-slider-holder .qodef-portfolio-list-holder.owl-carousel .owl-nav .qodef-prev-icon i',
                '.qodef-social-share-holder.qodef-list li a span:hover',
                '.qodef-underline-icon-box-holder .qodef-underline-icon-box-icon-holder .qodef-icon-shortcode .qodef-icon-element',
                '.qodef-pricing-info .qodef-pricing-info-pricing .qodef-value',
                '.qodef-pricing-info .qodef-pricing-info-pricing .qodef-price',
                '.qodef-service-table table tbody td .qodef-mark.qodef-checked',
                '.qodef-process-holder .qodef-process-item:hover .qodef-process-number',
                '.qodef-process-holder.light-skin .qodef-process-item:hover .qodef-process-number',
                '.qodef-sidebar .widget ul li a:hover',
                '.qodef-sidebar .widget td a:hover',
                '.qodef-sidebar .widget.qodef-latest-posts-widget .qodef-blog-list-holder ul>li.qodef-blog-list-item a:hover',
                '.qodef-twitter-widget li .qodef-tweet-icon-holder .qodef-social-twitter',
                'footer .widget.widget_nav_menu a:before',
                'footer .widget.widget_qodef_twitter_widget a:hover',
                '.qodef-blog-holder article.sticky .qodef-post-title a',
                '.qodef-blog-holder article .qodef-post-info.qodef-section-top a:hover',
                '.qodef-blog-holder article .qodef-post-info.qodef-section-bottom .qodef-post-info-author a:hover',
                '.qodef-blog-holder article .qodef-post-info.qodef-section-bottom .qodef-blog-like:hover i:first-child',
                '.qodef-blog-holder article .qodef-post-info.qodef-section-bottom .qodef-blog-like:hover span:first-child',
                '.qodef-blog-holder article .qodef-post-info.qodef-section-bottom .qodef-post-info-comments-holder:hover span:first-child',
                '.qodef-blog-holder article.format-link .qodef-post-info a:hover',
                '.qodef-blog-holder article.format-quote .qodef-post-info a:hover',
                '.qodef-filter-blog-holder li.qodef-active',
                '.qodef-filter-blog-holder li:hover',
                '.qodef-blog-holder.qodef-blog-type-masonry article .qodef-section-bottom-left .qodef-post-info-author a:hover',
                '.qodef-blog-holder.qodef-blog-single .qodef-blog-single-navigation .qodef-blog-single-nav-title .qodef-blog-navigation-info:hover',
                '.woocommerce .star-rating',
                '.qodef-pl-holder .qodef-pli-inner .qodef-pl-buttons .added_to_cart:hover',
                '.qodef-pl-holder .qodef-pli-inner .qodef-pl-buttons .button:hover',
                '.qodef-plc-holder .owl-nav .owl-next:hover .qodef-next-icon',
                '.qodef-plc-holder .owl-nav .owl-next:hover .qodef-prev-icon',
                '.qodef-plc-holder .owl-nav .owl-prev:hover .qodef-next-icon',
                '.qodef-plc-holder .owl-nav .owl-prev:hover .qodef-prev-icon',
                '.qodef-plc-holder.qodef-standard-type .qodef-plc-item .qodef-pl-buttons .added_to_cart:hover',
                '.qodef-plc-holder.qodef-standard-type .qodef-plc-item .qodef-pl-buttons .button:hover',
                '.qodef-woo-single-page .woocommerce-tabs #reviews .comment-respond .comment-form-rating .stars span:after',
                '.qodef-woo-single-page .woocommerce-tabs #reviews .comment-respond .comment-form-rating .stars span a:after',
                '.qodef-woo-single-page .qodef-tabs .qodef-tabs-nav li.ui-state-active span.qodef-icon-woo-tab i',
                '.qodef-woo-single-page .qodef-tabs .qodef-tabs-nav li.ui-state-hover span.qodef-icon-woo-tab i',
                '.qodef-woo-single-page .qodef-woo-social-share-holder ul li:hover a .qodef-social-network-icon',
                '.qodef-woo-single-page .qodef-woo-social-share-holder ul li:hover a:after',
                '.qodef-single-product-summary .product_meta>span a:hover',
                'ul.products>.product .qodef-pl-text-wrapper .qodef-pl-categories-holder a:hover',
                '.qodef-woocommerce-page table.cart tr.cart_item td.product-name a:hover',
                '.qodef-woocommerce-page.woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a',
                '.qodef-woocommerce-page.woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover',
                '.qodef-woocommerce-page.woocommerce-account .woocommerce-MyAccount-content mark',
                '.qodef-woocommerce-page.woocommerce-account .woocommerce table.shop_table td.order-number a:hover',
                '.widget.woocommerce.widget_rating_filter a:hover .star-rating',
                '.widget.woocommerce.widget_products ul li a span:hover',
                '.widget.woocommerce.widget_recent_reviews ul li a span:hover',
                '.widget.woocommerce.widget_recently_viewed_products ul li a span:hover',
                '.widget.woocommerce.widget_top_rated_products ul li a span:hover',
                '.widget.woocommerce.widget_recent_reviews a:hover',
                '.qodef-shopping-cart-dropdown .qodef-item-info-holder .remove:hover',
                '.qodef-shopping-cart-dropdown .qodef-cart-bottom .qodef-subtotal-holder .qodef-total-amount',
                '.qodef-side-menu #lang_sel ul ul a:hover span'
            );

            $color_important_selector = array(
                '.qodef-btn.qodef-btn-transparent:not(.qodef-btn-custom-hover-color):hover'
            );

            $background_color_selector = array(
                '.qodef-st-loader .pulse',
                '.qodef-st-loader .double_pulse .double-bounce1',
                '.qodef-st-loader .double_pulse .double-bounce2',
                '.qodef-st-loader .cube',
                '.qodef-st-loader .rotating_cubes .cube1',
                '.qodef-st-loader .rotating_cubes .cube2',
                '.qodef-st-loader .stripes>div',
                '.qodef-st-loader .wave>div',
                '.qodef-st-loader .two_rotating_circles .dot1',
                '.qodef-st-loader .two_rotating_circles .dot2',
                '.qodef-st-loader .five_rotating_circles .container1>div',
                '.qodef-st-loader .five_rotating_circles .container2>div',
                '.qodef-st-loader .five_rotating_circles .container3>div',
                '.qodef-st-loader .atom .ball-1:before',
                '.qodef-st-loader .atom .ball-2:before',
                '.qodef-st-loader .atom .ball-3:before',
                '.qodef-st-loader .atom .ball-4:before',
                '.qodef-st-loader .clock .ball:before',
                '.qodef-st-loader .mitosis .ball',
                '.qodef-st-loader .lines .line1',
                '.qodef-st-loader .lines .line2',
                '.qodef-st-loader .lines .line3',
                '.qodef-st-loader .lines .line4',
                '.qodef-st-loader .fussion .ball',
                '.qodef-st-loader .fussion .ball-1',
                '.qodef-st-loader .fussion .ball-2',
                '.qodef-st-loader .fussion .ball-3',
                '.qodef-st-loader .fussion .ball-4',
                '.qodef-st-loader .wave_circles .ball',
                '.qodef-st-loader .pulse_circles .ball',
                'input.wpcf7-form-control.wpcf7-submit.qodef-submit-button',
                '.post-password-form input[type=submit]',
                'input.wpcf7-form-control.wpcf7-submit',
                '.qodef-header-vertical .qodef-vertical-menu>ul>li>a:before',
                '.qodef-header-vertical .qodef-vertical-menu>ul>li>a:after',
                '.qodef-fullscreen-search-cell input.qodef-submit-button',
                '.qodef-team.main-info-below-image .qodef-team-image .qodef-team-overlay-holder',
                '.qodef-team.main-info-on-hover .qodef-team-social-holder',
                '.qodef-team-slider-holder.simple .qodef-team-image .qodef-team-overlay-holder',
                '.qodef-icon-shortcode.circle',
                '.qodef-icon-shortcode.square',
                '.qodef-progress-bar .qodef-progress-content-outer .qodef-progress-content',
                '.qodef-pricing-tables .qodef-price-table .qodef-price-table-inner ul li.qodef-table-title',
                '.qodef-pie-chart-doughnut-holder .qodef-pie-legend ul li .qodef-pie-color-holder',
                '.qodef-pie-chart-pie-holder .qodef-pie-legend ul li .qodef-pie-color-holder',
                '.qodef-btn.qodef-btn-solid',
                '.qodef-btn.qodef-btn-outline .qodef-hover-background',
                '.qodef-btn[class*=qodef-btn-hover] .qodef-hover-background.qodef-btn-outline',
                '.qodef-dropcaps.qodef-circle',
                '.qodef-dropcaps.qodef-square',
                '.qodef-blog-share:hover .qodef-social-share-holder.qodef-dropdown .qodef-social-share-dropdown-opener',
                '.qodef-underline-icon-box-holder .qodef-underline-icon-box-line',
                '.qodef-underline-icon-box-holder.top-line-icon .qodef-top-line-icon-box-line',
                '.qodef-info-box-holder.info-box-icon-top .qodef-info-box-overlay',
                '.qodef-info-box-holder.info-box-icon-left .qodef-info-box-holder-hidden',
                '.event-schedule .scheduled-days .scheduled-day.active',
                '.event-schedule .scheduled-days .scheduled-day:hover',
                '.event-schedule .tcode-social-icon:hover',
                '.woocommerce-page .qodef-content a.added_to_cart',
                '.woocommerce-page .qodef-content a.button',
                '.woocommerce-page .qodef-content button[type=submit]',
                '.woocommerce-page .qodef-content input[type=submit]',
                'div.woocommerce a.added_to_cart',
                'div.woocommerce a.button',
                'div.woocommerce button[type=submit]',
                'div.woocommerce input[type=submit]',
                '.woocommerce-page .qodef-content .qodef-quantity-buttons .qodef-quantity-minus:hover',
                '.woocommerce-page .qodef-content .qodef-quantity-buttons .qodef-quantity-plus:hover',
                'div.woocommerce .qodef-quantity-buttons .qodef-quantity-minus:hover',
                'div.woocommerce .qodef-quantity-buttons .qodef-quantity-plus:hover',
                '.qodef-pl-holder .qodef-pli-inner .qodef-pli-image .qodef-pli-new-product',
                '.qodef-plc-holder .qodef-plc-item .qodef-plc-add-to-cart.qodef-default-skin .added_to_cart',
                '.qodef-plc-holder .qodef-plc-item .qodef-plc-add-to-cart.qodef-default-skin .button',
                'ul.products>.product .added_to_cart:hover',
                'ul.products>.product .button:hover',
                '.widget.woocommerce.widget_price_filter .price_slider_amount .button',
                '.qodef-shopping-cart-holder .qodef-header-cart .qodef-cart-count',
                '.qodef-shopping-cart-dropdown .qodef-cart-bottom .qodef-view-cart',
                '.slick-slider .slick-dots li.slick-active button:before'
            );

            $background_color_important_selector = array(
                '.qodef-pricing-tables .qodef-price-table .qodef-price-table-inner ul li.qodef-price-button .qodef-btn.qodef-btn-solid:not(.qodef-btn-custom-border-hover):hover',
                '.qodef-btn.qodef-btn-outline:not(.qodef-btn-custom-hover-bg):not([class*=qodef-btn-hover]):hover',
                '.carousel .carousel-indicators:not(.thumbnails) li.active'
            );

            $border_color_selector = array(
                '.qodef-st-loader .pulse_circles .ball',
                '#respond input[type=text]:focus',
                '#respond textarea:focus',
                '.post-password-form input[type=password]:focus',
                '.wpcf7-form-control.wpcf7-date:focus',
                '.wpcf7-form-control.wpcf7-number:focus',
                '.wpcf7-form-control.wpcf7-quiz:focus',
                '.wpcf7-form-control.wpcf7-select:focus',
                '.wpcf7-form-control.wpcf7-text:focus',
                '.wpcf7-form-control.wpcf7-textarea:focus',
                'input.wpcf7-form-control.wpcf7-submit.qodef-submit-button',
                '.post-password-form input[type=submit]',
                'input.wpcf7-form-control.wpcf7-submit',
                '.qodef-fullscreen-search-cell input.qodef-submit-button',
                '.qodef-icon-shortcode.circle',
                '.qodef-icon-shortcode.square',
                '.qodef-btn.qodef-btn-solid',
                '.qodef-btn.qodef-btn-outline',
                '.qodef-btn.qodef-btn-outline .qodef-hover-background',
                '.qodef-btn[class*=qodef-btn-hover] .qodef-hover-background.qodef-btn-outline',
                '.qodef-portfolio-slider-holder .qodef-portfolio-list-holder.owl-carousel .owl-nav .qodef-next-icon',
                '.qodef-portfolio-slider-holder .qodef-portfolio-list-holder.owl-carousel .owl-nav .qodef-prev-icon',
                '.qodef-process-holder .qodef-process-item:hover .qodef-process-item-number-holder',
                '.woocommerce-page .qodef-content a.added_to_cart',
                '.woocommerce-page .qodef-content a.button',
                '.woocommerce-page .qodef-content button[type=submit]',
                '.woocommerce-page .qodef-content input[type=submit]',
                'div.woocommerce a.added_to_cart',
                'div.woocommerce a.button',
                'div.woocommerce button[type=submit]',
                'div.woocommerce input[type=submit]',
                '.widget.woocommerce.widget_price_filter .price_slider_amount .button'
            );

            $border_color_important_selector = array(
                '.qodef-pricing-tables .qodef-price-table .qodef-price-table-inner ul li.qodef-price-button .qodef-btn.qodef-btn-solid:not(.qodef-btn-custom-border-hover):hover',
                '.qodef-btn.qodef-btn-outline:not(.qodef-btn-custom-border-hover):not([class*=qodef-btn-hover]):hover'
            );

            $border_bottom_color = array(
                '.qodef-pie-chart-holder .qodef-pie-chart-text .qodef-pie-chart-separator-holder .qodef-pie-chart-separator',
                '.qodef-interactive-banner .qodef-interactive-banner-separator'
            );

            echo ultima_qodef_dynamic_css($border_bottom_color, array(
                    'border-bottom-color' =>  ultima_qodef_options()->getOptionValue('first_color')
                )
            );

            $border_top_color = array(
                '.qodef-drop-down .second'
            );

            echo ultima_qodef_dynamic_css($border_top_color, array(
                    'border-top-color' =>  ultima_qodef_options()->getOptionValue('first_color')
                )
            );

            $border_top_color_important = array(
                '.tcode-event-schedule .scheduled-days .scheduled-day.active:before'
            );

            echo ultima_qodef_dynamic_css($border_top_color_important, array(
                    'border-top-color' =>  ultima_qodef_options()->getOptionValue('first_color') . '!important'
                )
            );

            echo ultima_qodef_dynamic_css($color_selector, array('color' => ultima_qodef_options()->getOptionValue('first_color')));
            echo ultima_qodef_dynamic_css($color_important_selector, array('color' => ultima_qodef_options()->getOptionValue('first_color').'!important'));
            echo ultima_qodef_dynamic_css('::selection', array('background' => ultima_qodef_options()->getOptionValue('first_color')));
            echo ultima_qodef_dynamic_css('::-moz-selection', array('background' => ultima_qodef_options()->getOptionValue('first_color')));
            echo ultima_qodef_dynamic_css($background_color_selector, array('background-color' => ultima_qodef_options()->getOptionValue('first_color')));
            echo ultima_qodef_dynamic_css($background_color_important_selector, array('background-color' => ultima_qodef_options()->getOptionValue('first_color').'!important'));
            echo ultima_qodef_dynamic_css($border_color_selector, array('border-color' => ultima_qodef_options()->getOptionValue('first_color')));
            echo ultima_qodef_dynamic_css($border_color_important_selector, array('border-color' => ultima_qodef_options()->getOptionValue('first_color').'!important'));
        }

		if (ultima_qodef_options()->getOptionValue('page_background_color')) {
			$background_color_selector = array(
                '.qodef-content .qodef-content-inner > .qodef-container',
                '.qodef-content .qodef-content-inner > .qodef-full-width'
			);
			echo ultima_qodef_dynamic_css($background_color_selector, array('background-color' => ultima_qodef_options()->getOptionValue('page_background_color')));
		}

		if (ultima_qodef_options()->getOptionValue('selection_color')) {
			echo ultima_qodef_dynamic_css('::selection', array('background' => ultima_qodef_options()->getOptionValue('selection_color')));
			echo ultima_qodef_dynamic_css('::-moz-selection', array('background' => ultima_qodef_options()->getOptionValue('selection_color')));
		}

		$boxed_background_style = array();
		if (ultima_qodef_options()->getOptionValue('page_background_color_in_box')) {
			$boxed_background_style['background-color'] = ultima_qodef_options()->getOptionValue('page_background_color_in_box');
		}

		if (ultima_qodef_options()->getOptionValue('boxed_background_image')) {
			$boxed_background_style['background-image'] = 'url('.esc_url(ultima_qodef_options()->getOptionValue('boxed_background_image')).')';
			$boxed_background_style['background-position'] = 'center 0px';
			$boxed_background_style['background-repeat'] = 'no-repeat';
		}

		if (ultima_qodef_options()->getOptionValue('boxed_pattern_background_image')) {
			$boxed_background_style['background-image'] = 'url('.esc_url(ultima_qodef_options()->getOptionValue('boxed_pattern_background_image')).')';
			$boxed_background_style['background-position'] = '0px 0px';
			$boxed_background_style['background-repeat'] = 'repeat';
		}

		if (ultima_qodef_options()->getOptionValue('boxed_background_image_attachment')) {
			$boxed_background_style['background-attachment'] = (ultima_qodef_options()->getOptionValue('boxed_background_image_attachment'));
		}

		echo ultima_qodef_dynamic_css('.qodef-boxed .qodef-wrapper', $boxed_background_style);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_design_styles');
}

if (!function_exists('ultima_qodef_h1_styles')) {

    function ultima_qodef_h1_styles() {

        $h1_styles = array();

        if(ultima_qodef_options()->getOptionValue('h1_color') !== '') {
            $h1_styles['color'] = ultima_qodef_options()->getOptionValue('h1_color');
        }
        if(ultima_qodef_options()->getOptionValue('h1_google_fonts') !== '-1') {
            $h1_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('h1_google_fonts'));
        }
        if(ultima_qodef_options()->getOptionValue('h1_fontsize') !== '') {
            $h1_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h1_fontsize')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h1_lineheight') !== '') {
            $h1_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h1_lineheight')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h1_texttransform') !== '') {
            $h1_styles['text-transform'] = ultima_qodef_options()->getOptionValue('h1_texttransform');
        }
        if(ultima_qodef_options()->getOptionValue('h1_fontstyle') !== '') {
            $h1_styles['font-style'] = ultima_qodef_options()->getOptionValue('h1_fontstyle');
        }
        if(ultima_qodef_options()->getOptionValue('h1_fontweight') !== '') {
            $h1_styles['font-weight'] = ultima_qodef_options()->getOptionValue('h1_fontweight');
        }
        if(ultima_qodef_options()->getOptionValue('h1_letterspacing') !== '') {
            $h1_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h1_letterspacing')).'px';
        }

        $h1_selector = array(
            'h1'
        );

        if (!empty($h1_styles)) {
            echo ultima_qodef_dynamic_css($h1_selector, $h1_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_h1_styles');
}

if (!function_exists('ultima_qodef_h2_styles')) {

    function ultima_qodef_h2_styles() {

        $h2_styles = array();

        if(ultima_qodef_options()->getOptionValue('h2_color') !== '') {
            $h2_styles['color'] = ultima_qodef_options()->getOptionValue('h2_color');
        }
        if(ultima_qodef_options()->getOptionValue('h2_google_fonts') !== '-1') {
            $h2_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('h2_google_fonts'));
        }
        if(ultima_qodef_options()->getOptionValue('h2_fontsize') !== '') {
            $h2_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h2_fontsize')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h2_lineheight') !== '') {
            $h2_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h2_lineheight')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h2_texttransform') !== '') {
            $h2_styles['text-transform'] = ultima_qodef_options()->getOptionValue('h2_texttransform');
        }
        if(ultima_qodef_options()->getOptionValue('h2_fontstyle') !== '') {
            $h2_styles['font-style'] = ultima_qodef_options()->getOptionValue('h2_fontstyle');
        }
        if(ultima_qodef_options()->getOptionValue('h2_fontweight') !== '') {
            $h2_styles['font-weight'] = ultima_qodef_options()->getOptionValue('h2_fontweight');
        }
        if(ultima_qodef_options()->getOptionValue('h2_letterspacing') !== '') {
            $h2_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h2_letterspacing')).'px';
        }

        $h2_selector = array(
            'h2'
        );

        if (!empty($h2_styles)) {
            echo ultima_qodef_dynamic_css($h2_selector, $h2_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_h2_styles');
}

if (!function_exists('ultima_qodef_h3_styles')) {

    function ultima_qodef_h3_styles() {

        $h3_styles = array();

        if(ultima_qodef_options()->getOptionValue('h3_color') !== '') {
            $h3_styles['color'] = ultima_qodef_options()->getOptionValue('h3_color');
        }
        if(ultima_qodef_options()->getOptionValue('h3_google_fonts') !== '-1') {
            $h3_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('h3_google_fonts'));
        }
        if(ultima_qodef_options()->getOptionValue('h3_fontsize') !== '') {
            $h3_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h3_fontsize')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h3_lineheight') !== '') {
            $h3_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h3_lineheight')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h3_texttransform') !== '') {
            $h3_styles['text-transform'] = ultima_qodef_options()->getOptionValue('h3_texttransform');
        }
        if(ultima_qodef_options()->getOptionValue('h3_fontstyle') !== '') {
            $h3_styles['font-style'] = ultima_qodef_options()->getOptionValue('h3_fontstyle');
        }
        if(ultima_qodef_options()->getOptionValue('h3_fontweight') !== '') {
            $h3_styles['font-weight'] = ultima_qodef_options()->getOptionValue('h3_fontweight');
        }
        if(ultima_qodef_options()->getOptionValue('h3_letterspacing') !== '') {
            $h3_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h3_letterspacing')).'px';
        }

        $h3_selector = array(
            'h3'
        );

        if (!empty($h3_styles)) {
            echo ultima_qodef_dynamic_css($h3_selector, $h3_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_h3_styles');
}

if (!function_exists('ultima_qodef_h4_styles')) {

    function ultima_qodef_h4_styles() {

        $h4_styles = array();

        if(ultima_qodef_options()->getOptionValue('h4_color') !== '') {
            $h4_styles['color'] = ultima_qodef_options()->getOptionValue('h4_color');
        }
        if(ultima_qodef_options()->getOptionValue('h4_google_fonts') !== '-1') {
            $h4_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('h4_google_fonts'));
        }
        if(ultima_qodef_options()->getOptionValue('h4_fontsize') !== '') {
            $h4_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h4_fontsize')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h4_lineheight') !== '') {
            $h4_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h4_lineheight')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h4_texttransform') !== '') {
            $h4_styles['text-transform'] = ultima_qodef_options()->getOptionValue('h4_texttransform');
        }
        if(ultima_qodef_options()->getOptionValue('h4_fontstyle') !== '') {
            $h4_styles['font-style'] = ultima_qodef_options()->getOptionValue('h4_fontstyle');
        }
        if(ultima_qodef_options()->getOptionValue('h4_fontweight') !== '') {
            $h4_styles['font-weight'] = ultima_qodef_options()->getOptionValue('h4_fontweight');
        }
        if(ultima_qodef_options()->getOptionValue('h4_letterspacing') !== '') {
            $h4_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h4_letterspacing')).'px';
        }

        $h4_selector = array(
            'h4'
        );

        if (!empty($h4_styles)) {
            echo ultima_qodef_dynamic_css($h4_selector, $h4_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_h4_styles');
}

if (!function_exists('ultima_qodef_h5_styles')) {

    function ultima_qodef_h5_styles() {

        $h5_styles = array();

        if(ultima_qodef_options()->getOptionValue('h5_color') !== '') {
            $h5_styles['color'] = ultima_qodef_options()->getOptionValue('h5_color');
        }
        if(ultima_qodef_options()->getOptionValue('h5_google_fonts') !== '-1') {
            $h5_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('h5_google_fonts'));
        }
        if(ultima_qodef_options()->getOptionValue('h5_fontsize') !== '') {
            $h5_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h5_fontsize')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h5_lineheight') !== '') {
            $h5_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h5_lineheight')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h5_texttransform') !== '') {
            $h5_styles['text-transform'] = ultima_qodef_options()->getOptionValue('h5_texttransform');
        }
        if(ultima_qodef_options()->getOptionValue('h5_fontstyle') !== '') {
            $h5_styles['font-style'] = ultima_qodef_options()->getOptionValue('h5_fontstyle');
        }
        if(ultima_qodef_options()->getOptionValue('h5_fontweight') !== '') {
            $h5_styles['font-weight'] = ultima_qodef_options()->getOptionValue('h5_fontweight');
        }
        if(ultima_qodef_options()->getOptionValue('h5_letterspacing') !== '') {
            $h5_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h5_letterspacing')).'px';
        }

        $h5_selector = array(
            'h5'
        );

        if (!empty($h5_styles)) {
            echo ultima_qodef_dynamic_css($h5_selector, $h5_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_h5_styles');
}

if (!function_exists('ultima_qodef_h6_styles')) {

    function ultima_qodef_h6_styles() {

        $h6_styles = array();

        if(ultima_qodef_options()->getOptionValue('h6_color') !== '') {
            $h6_styles['color'] = ultima_qodef_options()->getOptionValue('h6_color');
        }
        if(ultima_qodef_options()->getOptionValue('h6_google_fonts') !== '-1') {
            $h6_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('h6_google_fonts'));
        }
        if(ultima_qodef_options()->getOptionValue('h6_fontsize') !== '') {
            $h6_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h6_fontsize')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h6_lineheight') !== '') {
            $h6_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h6_lineheight')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('h6_texttransform') !== '') {
            $h6_styles['text-transform'] = ultima_qodef_options()->getOptionValue('h6_texttransform');
        }
        if(ultima_qodef_options()->getOptionValue('h6_fontstyle') !== '') {
            $h6_styles['font-style'] = ultima_qodef_options()->getOptionValue('h6_fontstyle');
        }
        if(ultima_qodef_options()->getOptionValue('h6_fontweight') !== '') {
            $h6_styles['font-weight'] = ultima_qodef_options()->getOptionValue('h6_fontweight');
        }
        if(ultima_qodef_options()->getOptionValue('h6_letterspacing') !== '') {
            $h6_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('h6_letterspacing')).'px';
        }

        $h6_selector = array(
            'h6'
        );

        if (!empty($h6_styles)) {
            echo ultima_qodef_dynamic_css($h6_selector, $h6_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_h6_styles');
}

if (!function_exists('ultima_qodef_text_styles')) {

    function ultima_qodef_text_styles() {

        $text_styles = array();

        if(ultima_qodef_options()->getOptionValue('text_color') !== '') {
            $text_styles['color'] = ultima_qodef_options()->getOptionValue('text_color');
        }
        if(ultima_qodef_options()->getOptionValue('text_google_fonts') !== '-1') {
            $text_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('text_google_fonts'));
        }
        if(ultima_qodef_options()->getOptionValue('text_fontsize') !== '') {
            $text_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('text_fontsize')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('text_lineheight') !== '') {
            $text_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('text_lineheight')).'px';
        }
        if(ultima_qodef_options()->getOptionValue('text_texttransform') !== '') {
            $text_styles['text-transform'] = ultima_qodef_options()->getOptionValue('text_texttransform');
        }
        if(ultima_qodef_options()->getOptionValue('text_fontstyle') !== '') {
            $text_styles['font-style'] = ultima_qodef_options()->getOptionValue('text_fontstyle');
        }
        if(ultima_qodef_options()->getOptionValue('text_fontweight') !== '') {
            $text_styles['font-weight'] = ultima_qodef_options()->getOptionValue('text_fontweight');
        }
        if(ultima_qodef_options()->getOptionValue('text_letterspacing') !== '') {
            $text_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('text_letterspacing')).'px';
        }

        $text_selector = array(
            'p'
        );

        if (!empty($text_styles)) {
            echo ultima_qodef_dynamic_css($text_selector, $text_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_text_styles');
}

if (!function_exists('ultima_qodef_link_styles')) {

    function ultima_qodef_link_styles() {

        $link_styles = array();

        if(ultima_qodef_options()->getOptionValue('link_color') !== '') {
            $link_styles['color'] = ultima_qodef_options()->getOptionValue('link_color');
        }
        if(ultima_qodef_options()->getOptionValue('link_fontstyle') !== '') {
            $link_styles['font-style'] = ultima_qodef_options()->getOptionValue('link_fontstyle');
        }
        if(ultima_qodef_options()->getOptionValue('link_fontweight') !== '') {
            $link_styles['font-weight'] = ultima_qodef_options()->getOptionValue('link_fontweight');
        }
        if(ultima_qodef_options()->getOptionValue('link_fontdecoration') !== '') {
            $link_styles['text-decoration'] = ultima_qodef_options()->getOptionValue('link_fontdecoration');
        }

        $link_selector = array(
            'a',
            'p a'
        );

        if (!empty($link_styles)) {
            echo ultima_qodef_dynamic_css($link_selector, $link_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_link_styles');
}

if (!function_exists('ultima_qodef_link_hover_styles')) {

    function ultima_qodef_link_hover_styles() {

        $link_hover_styles = array();

        if(ultima_qodef_options()->getOptionValue('link_hovercolor') !== '') {
            $link_hover_styles['color'] = ultima_qodef_options()->getOptionValue('link_hovercolor');
        }
        if(ultima_qodef_options()->getOptionValue('link_hover_fontdecoration') !== '') {
            $link_hover_styles['text-decoration'] = ultima_qodef_options()->getOptionValue('link_hover_fontdecoration');
        }

        $link_hover_selector = array(
            'a:hover',
            'p a:hover'
        );

        if (!empty($link_hover_styles)) {
            echo ultima_qodef_dynamic_css($link_hover_selector, $link_hover_styles);
        }

        $link_heading_hover_styles = array();

        if(ultima_qodef_options()->getOptionValue('link_hovercolor') !== '') {
            $link_heading_hover_styles['color'] = ultima_qodef_options()->getOptionValue('link_hovercolor');
        }

        $link_heading_hover_selector = array(
            'h1 a:hover',
            'h2 a:hover',
            'h3 a:hover',
            'h4 a:hover',
            'h5 a:hover',
            'h6 a:hover'
        );

        if (!empty($link_heading_hover_styles)) {
            echo ultima_qodef_dynamic_css($link_heading_hover_selector, $link_heading_hover_styles);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_link_hover_styles');
}

if (!function_exists('ultima_qodef_smooth_page_transition_styles')) {

    function ultima_qodef_smooth_page_transition_styles() {
        
        $loader_style = array();

        if(ultima_qodef_options()->getOptionValue('smooth_pt_bgnd_color') !== '') {
            $loader_style['background-color'] = ultima_qodef_options()->getOptionValue('smooth_pt_bgnd_color');
        }

        $loader_selector = array('.qodef-smooth-transition-loader');

        if (!empty($loader_style)) {
            echo ultima_qodef_dynamic_css($loader_selector, $loader_style);
        }

        $spinner_style = array();

        if(ultima_qodef_options()->getOptionValue('smooth_pt_spinner_color') !== '') {
            $spinner_style['background-color'] = ultima_qodef_options()->getOptionValue('smooth_pt_spinner_color');
        }

        $spinner_selectors = array(
            '.qodef-st-loader .pulse', 
            '.qodef-st-loader .double_pulse .double-bounce1', 
            '.qodef-st-loader .double_pulse .double-bounce2', 
            '.qodef-st-loader .cube', 
            '.qodef-st-loader .rotating_cubes .cube1', 
            '.qodef-st-loader .rotating_cubes .cube2', 
            '.qodef-st-loader .stripes > div', 
            '.qodef-st-loader .wave > div', 
            '.qodef-st-loader .two_rotating_circles .dot1', 
            '.qodef-st-loader .two_rotating_circles .dot2', 
            '.qodef-st-loader .five_rotating_circles .container1 > div', 
            '.qodef-st-loader .five_rotating_circles .container2 > div', 
            '.qodef-st-loader .five_rotating_circles .container3 > div', 
            '.qodef-st-loader .atom .ball-1:before', 
            '.qodef-st-loader .atom .ball-2:before', 
            '.qodef-st-loader .atom .ball-3:before', 
            '.qodef-st-loader .atom .ball-4:before', 
            '.qodef-st-loader .clock .ball:before', 
            '.qodef-st-loader .mitosis .ball', 
            '.qodef-st-loader .lines .line1', 
            '.qodef-st-loader .lines .line2', 
            '.qodef-st-loader .lines .line3', 
            '.qodef-st-loader .lines .line4', 
            '.qodef-st-loader .fussion .ball', 
            '.qodef-st-loader .fussion .ball-1', 
            '.qodef-st-loader .fussion .ball-2', 
            '.qodef-st-loader .fussion .ball-3', 
            '.qodef-st-loader .fussion .ball-4', 
            '.qodef-st-loader .wave_circles .ball', 
            '.qodef-st-loader .pulse_circles .ball' 
        );

        if (!empty($spinner_style)) {
            echo ultima_qodef_dynamic_css($spinner_selectors, $spinner_style);
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_smooth_page_transition_styles');
}