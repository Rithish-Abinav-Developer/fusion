(function($) {
	'use strict';

	var woocommerce = {};
	qodef.modules.woocommerce = woocommerce;

	woocommerce.qodefInitQuantityButtons = qodefInitQuantityButtons;
	woocommerce.qodefInitSelect2 = qodefInitSelect2;

	woocommerce.qodefOnDocumentReady = qodefOnDocumentReady;
	woocommerce.qodefOnWindowLoad = qodefOnWindowLoad;
	woocommerce.qodefOnWindowResize = qodefOnWindowResize;
	woocommerce.qodefOnWindowScroll = qodefOnWindowScroll;

	$(document).ready(qodefOnDocumentReady);
	$(window).on('load', qodefOnWindowLoad);
	$(window).resize(qodefOnWindowResize);
	$(window).scroll(qodefOnWindowScroll);

	/*
	 All functions to be called on $(document).ready() should be in this function
	 */
	function qodefOnDocumentReady() {
		qodefInitQuantityButtons();
		qodefInitSelect2();
		qodefReInitSelect2CartAjax();
		qodefInitProductListCarousel();
        qodefInitSingleProductLightbox();
	}

	/*
	 All functions to be called on $(window).load() should be in this function
	 */
	function qodefOnWindowLoad() {
		qodefInitProductListMasonryShortcode();
	}

	/*
	 All functions to be called on $(window).resize() should be in this function
	 */
	function qodefOnWindowResize() {
		qodefInitProductListMasonryShortcode();
	}

	/*
	 All functions to be called on $(window).scroll() should be in this function
	 */
	function qodefOnWindowScroll() {

	}

	/*
	 ** Init quantity buttons to increase/decrease products for cart
	 */
	function qodefInitQuantityButtons() {

		$(document).on('click', '.qodef-quantity-minus, .qodef-quantity-plus', function(e) {
			e.stopPropagation();

			var button = $(this),
				inputField = button.siblings('.qodef-quantity-input'),
				step = parseFloat(inputField.attr('step')),
				max = parseFloat(inputField.attr('max')),
				minus = false,
				inputValue = parseFloat(inputField.val()),
				newInputValue;

			if(button.hasClass('qodef-quantity-minus')) {
				minus = true;
			}

			if(minus) {
				newInputValue = inputValue - step;
				if(newInputValue >= 1) {
					inputField.val(newInputValue);
				} else {
					inputField.val(1);
				}
			} else {
				newInputValue = inputValue + step;
				if(max === undefined) {
					inputField.val(newInputValue);
				} else {
					if(newInputValue >= max) {
						inputField.val(max);
					} else {
						inputField.val(newInputValue);
					}
				}
			}

			inputField.trigger('change');
		});
	}

	/*
	 ** Init select2 script for select html dropdowns
	 */
	function qodefInitSelect2() {

		if($('.woocommerce-ordering .orderby').length || $('#calc_shipping_country').length) {

			$('.woocommerce-ordering .orderby').select2({
				minimumResultsForSearch: Infinity
			});

			$('#calc_shipping_country').select2();
		}
	}

	/*
	 ** Re Init select2 script for select html dropdowns
	 */
	function qodefReInitSelect2CartAjax() {

		$(document).ajaxComplete(function() {
			if($('#calc_shipping_country').length) {

				$('#calc_shipping_country').select2();
			}
		});
	}

	/*
	 ** Init Product List Masonry Shortcode Layout
	 */
	function qodefInitProductListMasonryShortcode() {

		var container = $('.qodef-pl-holder.qodef-masonry-layout .qodef-pl-outer');

		if(container.length) {
			container.each(function() {
				var thisContainer = $(this);

				thisContainer.waitForImages(function() {
					thisContainer.isotope({
						itemSelector: '.qodef-pli',
						resizable: false,
						masonry: {
							columnWidth: '.qodef-pl-sizer',
							gutter: '.qodef-pl-gutter'
						}
					});

					thisContainer.isotope('layout');

					thisContainer.css('opacity', 1);
				});
			});
		}
	}

	/*
	 ** Init Product List Carousel Shortcode
	 */
	function qodefInitProductListCarousel() {

		var carouselHolder = $('.qodef-plc-holder');

		if(carouselHolder.length) {
			carouselHolder.each(function() {
				var thisCarousels = $(this),
					carousel = thisCarousels.children('.qodef-plc-outer'),
					numberOfItems = (thisCarousels.data('number-of-visible-items') !== '') ? parseInt(thisCarousels.data('number-of-visible-items')) : 3,
					autoplay = (thisCarousels.data('autoplay') === 'yes') ? true : false,
					autoplayTimeout = (thisCarousels.data('autoplay-timeout') !== '') ? parseInt(thisCarousels.data('autoplay-timeout')) : 5000,
					loop = (thisCarousels.data('loop') === 'yes') ? true : false,
					speed = (thisCarousels.data('speed') !== '') ? parseInt(thisCarousels.data('speed')) : 650,
					navigation = (thisCarousels.data('navigation') === 'yes') ? true : false,
					pagination = (thisCarousels.data('pagination') === 'yes') ? true : false;

				var margin = 30;
				if(thisCarousels.hasClass('qodef-small-space')) {
					margin = 10;
				} else if(thisCarousels.hasClass('qodef-no-space')) {
					margin = 0;
				}

				var responsiveItems1 = numberOfItems;
				var responsiveItems2 = 3;
				var responsiveItems3 = 2;

				if(numberOfItems > 4) {
					responsiveItems1 = 4;
				}

				if(numberOfItems < 3) {
					responsiveItems2 = numberOfItems;
					responsiveItems3 = numberOfItems;
				}

				if(numberOfItems === 1) {
					margin = 0;
				}

				carousel.owlCarousel({
					items: numberOfItems,
					autoplay: autoplay,
					autoplayTimeout: autoplayTimeout,
					autoplayHoverPause: true,
					loop: loop,
					smartSpeed: speed,
					margin: margin,
					nav: navigation,
					navText: [
						'<span class="qodef-prev-icon"><span class="qodef-icon-arrow fa-angle-left"></span></span>',
						'<span class="qodef-next-icon"><span class="qodef-icon-arrow fa-angle-right"></span></span>'
					],
					dots: pagination,
					mouseDrag: true,
					touchDrag: true,
					responsive: {
						1200: {
							items: numberOfItems
						},
						1024: {
							items: responsiveItems1
						},
						769: {
							items: responsiveItems2
						},
						601: {
							items: responsiveItems3
						},
						0: {
							items: 1
						}
					}
				});

				carousel.css({'visibility': 'visible'});
			});
		}
	}

    /*
     ** Init Product Single Pretty Photo attributes
     */
    function qodefInitSingleProductLightbox() {
        var item = $('.qodef-woo-single-page .images .woocommerce-product-gallery__image');

        if(item.length) {
            item.children('a').attr('data-rel', 'prettyPhoto[woo_single_pretty_photo]');

            if (typeof qodef.modules.common.qodefPrettyPhoto === "function") {
                qodef.modules.common.qodefPrettyPhoto();
            }
        }
    }

})(jQuery);