<?php

if (!function_exists('ultima_qodef_search_opener_icon_size')) {

	function ultima_qodef_search_opener_icon_size()
	{

		if (ultima_qodef_options()->getOptionValue('header_search_icon_size')) {
			echo ultima_qodef_dynamic_css('.qodef-search-opener', array(
				'font-size' => ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('header_search_icon_size')) . 'px'
			));
		}

	}

	add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_opener_icon_size');

}

if (!function_exists('ultima_qodef_search_opener_icon_colors')) {

	function ultima_qodef_search_opener_icon_colors()
	{

		if (ultima_qodef_options()->getOptionValue('header_search_icon_color') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-search-opener', array(
				'color' => ultima_qodef_options()->getOptionValue('header_search_icon_color')
			));
		}

		if (ultima_qodef_options()->getOptionValue('header_search_icon_hover_color') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-search-opener:hover', array(
				'color' => ultima_qodef_options()->getOptionValue('header_search_icon_hover_color')
			));
		}

		if (ultima_qodef_options()->getOptionValue('header_light_search_icon_color') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-light-header .qodef-page-header > div:not(.qodef-sticky-header) .qodef-search-opener,
			.qodef-light-header.qodef-header-style-on-scroll .qodef-page-header .qodef-search-opener,
			.qodef-light-header .qodef-top-bar .qodef-search-opener', array(
				'color' => ultima_qodef_options()->getOptionValue('header_light_search_icon_color') . ' !important'
			));
		}

		if (ultima_qodef_options()->getOptionValue('header_light_search_icon_hover_color') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-light-header .qodef-page-header > div:not(.qodef-sticky-header) .qodef-search-opener:hover,
			.qodef-light-header.qodef-header-style-on-scroll .qodef-page-header .qodef-search-opener:hover,
			.qodef-light-header .qodef-top-bar .qodef-search-opener:hover', array(
				'color' => ultima_qodef_options()->getOptionValue('header_light_search_icon_hover_color') . ' !important'
			));
		}

		if (ultima_qodef_options()->getOptionValue('header_dark_search_icon_color') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-dark-header .qodef-page-header > div:not(.qodef-sticky-header) .qodef-search-opener,
			.qodef-dark-header.qodef-header-style-on-scroll .qodef-page-header .qodef-search-opener,
			.qodef-dark-header .qodef-top-bar .qodef-search-opener', array(
				'color' => ultima_qodef_options()->getOptionValue('header_dark_search_icon_color') . ' !important'
			));
		}
		if (ultima_qodef_options()->getOptionValue('header_dark_search_icon_hover_color') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-dark-header .qodef-page-header > div:not(.qodef-sticky-header) .qodef-search-opener:hover,
			.qodef-dark-header.qodef-header-style-on-scroll .qodef-page-header .qodef-search-opener:hover,
			.qodef-dark-header .qodef-top-bar .qodef-search-opener:hover', array(
				'color' => ultima_qodef_options()->getOptionValue('header_dark_search_icon_hover_color') . ' !important'
			));
		}

	}

	add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_opener_icon_colors');

}

if (!function_exists('ultima_qodef_search_opener_icon_background_colors')) {

	function ultima_qodef_search_opener_icon_background_colors()
	{

		if (ultima_qodef_options()->getOptionValue('search_icon_background_color') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-search-opener', array(
				'background-color' => ultima_qodef_options()->getOptionValue('search_icon_background_color')
			));
		}

		if (ultima_qodef_options()->getOptionValue('search_icon_background_hover_color') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-search-opener:hover', array(
				'background-color' => ultima_qodef_options()->getOptionValue('search_icon_background_hover_color')
			));
		}

	}

	add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_opener_icon_background_colors');
}

if (!function_exists('ultima_qodef_search_opener_text_styles')) {

	function ultima_qodef_search_opener_text_styles()
	{
		$text_styles = array();

		if (ultima_qodef_options()->getOptionValue('search_icon_text_color') !== '') {
			$text_styles['color'] = ultima_qodef_options()->getOptionValue('search_icon_text_color');
		}
		if (ultima_qodef_options()->getOptionValue('search_icon_text_fontsize') !== '') {
			$text_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_icon_text_fontsize')) . 'px';
		}
		if (ultima_qodef_options()->getOptionValue('search_icon_text_lineheight') !== '') {
			$text_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_icon_text_lineheight')) . 'px';
		}
		if (ultima_qodef_options()->getOptionValue('search_icon_text_texttransform') !== '') {
			$text_styles['text-transform'] = ultima_qodef_options()->getOptionValue('search_icon_text_texttransform');
		}
		if (ultima_qodef_options()->getOptionValue('search_icon_text_google_fonts') !== '-1') {
			$text_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('search_icon_text_google_fonts')) . ', sans-serif';
		}
		if (ultima_qodef_options()->getOptionValue('search_icon_text_fontstyle') !== '') {
			$text_styles['font-style'] = ultima_qodef_options()->getOptionValue('search_icon_text_fontstyle');
		}
		if (ultima_qodef_options()->getOptionValue('search_icon_text_fontweight') !== '') {
			$text_styles['font-weight'] = ultima_qodef_options()->getOptionValue('search_icon_text_fontweight');
		}

		if (!empty($text_styles)) {
			echo ultima_qodef_dynamic_css('.qodef-search-icon-text', $text_styles);
		}
		if (ultima_qodef_options()->getOptionValue('search_icon_text_color_hover') !== '') {
			echo ultima_qodef_dynamic_css('.qodef-search-opener:hover .qodef-search-icon-text', array(
				'color' => ultima_qodef_options()->getOptionValue('search_icon_text_color_hover')
			));
		}

	}

	add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_opener_text_styles');
}

if (!function_exists('ultima_qodef_search_opener_spacing')) {

	function ultima_qodef_search_opener_spacing()
	{
		$spacing_styles = array();

		if (ultima_qodef_options()->getOptionValue('search_padding_left') !== '') {
			$spacing_styles['padding-left'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_padding_left')) . 'px';
		}
		if (ultima_qodef_options()->getOptionValue('search_padding_right') !== '') {
			$spacing_styles['padding-right'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_padding_right')) . 'px';
		}
		if (ultima_qodef_options()->getOptionValue('search_margin_left') !== '') {
			$spacing_styles['margin-left'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_margin_left')) . 'px';
		}
		if (ultima_qodef_options()->getOptionValue('search_margin_right') !== '') {
			$spacing_styles['margin-right'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_margin_right')) . 'px';
		}

		if (!empty($spacing_styles)) {
			echo ultima_qodef_dynamic_css('.qodef-search-opener', $spacing_styles);
		}

	}

	add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_opener_spacing');
}

if (!function_exists('ultima_qodef_search_bar_background')) {

	function ultima_qodef_search_bar_background()
	{

		if (ultima_qodef_options()->getOptionValue('search_background_color') !== '') {
            echo ultima_qodef_dynamic_css('.qodef-fullscreen-search-holder .qodef-fullscreen-search-table', array(
				'background-color' => ultima_qodef_options()->getOptionValue('search_background_color')
			));
		}
	}

	add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_bar_background');
}

if (!function_exists('ultima_qodef_search_text_styles')) {

	function ultima_qodef_search_text_styles()
	{
		$text_styles = array();

		if (ultima_qodef_options()->getOptionValue('search_text_color') !== '') {
			$text_styles['color'] = ultima_qodef_options()->getOptionValue('search_text_color');
		}
		if (ultima_qodef_options()->getOptionValue('search_text_fontsize') !== '') {
			$text_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_text_fontsize')) . 'px';
		}
		if (ultima_qodef_options()->getOptionValue('search_text_texttransform') !== '') {
			$text_styles['text-transform'] = ultima_qodef_options()->getOptionValue('search_text_texttransform');
		}
		if (ultima_qodef_options()->getOptionValue('search_text_google_fonts') !== '-1') {
			$text_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('search_text_google_fonts')) . ', sans-serif';
		}
		if (ultima_qodef_options()->getOptionValue('search_text_fontstyle') !== '') {
			$text_styles['font-style'] = ultima_qodef_options()->getOptionValue('search_text_fontstyle');
		}
		if (ultima_qodef_options()->getOptionValue('search_text_fontweight') !== '') {
			$text_styles['font-weight'] = ultima_qodef_options()->getOptionValue('search_text_fontweight');
		}
		if (ultima_qodef_options()->getOptionValue('search_text_letterspacing') !== '') {
			$text_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_text_letterspacing')) . 'px';
		}

		if (!empty($text_styles)) {
            echo ultima_qodef_dynamic_css('.qodef-fullscreen-search .qodef-form-holder .qodef-search-field', $text_styles);
		}
		if (ultima_qodef_options()->getOptionValue('search_text_disabled_color') !== '') {
            echo ultima_qodef_dynamic_css('.qodef-fullscreen-search-holder .qodef-field-holder input[type=text]::-webkit-input-placeholder', array(
				'color' => ultima_qodef_options()->getOptionValue('search_text_disabled_color')
			));
            echo ultima_qodef_dynamic_css('.qodef-fullscreen-search-holder .qodef-field-holder input[type=text]:-moz-placeholder', array(
                'color' => ultima_qodef_options()->getOptionValue('search_text_disabled_color')
            ));
            echo ultima_qodef_dynamic_css('.qodef-fullscreen-search-holder .qodef-field-holder input[type=text]::-moz-placeholder', array(
                'color' => ultima_qodef_options()->getOptionValue('search_text_disabled_color')
            ));
            echo ultima_qodef_dynamic_css('.qodef-fullscreen-search-holder .qodef-field-holder input[type=text]:-ms-input-placeholder', array(
                'color' => ultima_qodef_options()->getOptionValue('search_text_disabled_color')
            ));
		}

	}

	add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_text_styles');
}

if (!function_exists('ultima_qodef_search_label_styles')) {

	function ultima_qodef_search_label_styles()
	{
		$text_styles = array();

		if (ultima_qodef_options()->getOptionValue('search_label_text_color') !== '') {
			$text_styles['color'] = ultima_qodef_options()->getOptionValue('search_label_text_color');
		}
		if (ultima_qodef_options()->getOptionValue('search_label_text_fontsize') !== '') {
			$text_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_label_text_fontsize')) . 'px';
		}
		if (ultima_qodef_options()->getOptionValue('search_label_text_texttransform') !== '') {
			$text_styles['text-transform'] = ultima_qodef_options()->getOptionValue('search_label_text_texttransform');
		}
		if (ultima_qodef_options()->getOptionValue('search_label_text_google_fonts') !== '-1') {
			$text_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('search_label_text_google_fonts')) . ', sans-serif';
		}
		if (ultima_qodef_options()->getOptionValue('search_label_text_fontstyle') !== '') {
			$text_styles['font-style'] = ultima_qodef_options()->getOptionValue('search_label_text_fontstyle');
		}
		if (ultima_qodef_options()->getOptionValue('search_label_text_fontweight') !== '') {
			$text_styles['font-weight'] = ultima_qodef_options()->getOptionValue('search_label_text_fontweight');
		}
		if (ultima_qodef_options()->getOptionValue('search_label_text_letterspacing') !== '') {
			$text_styles['letter-spacing'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('search_label_text_letterspacing')) . 'px';
		}

		if (!empty($text_styles)) {
			echo ultima_qodef_dynamic_css('.qodef-fullscreen-search-holder .qodef-search-label', $text_styles);
		}

	}

	add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_label_styles');
}

if (!function_exists('ultima_qodef_search_border_bottom_styles')) {

    function ultima_qodef_search_border_bottom_styles() {

        if (ultima_qodef_options()->getOptionValue('search_border_focus_color') !== '') {
            echo ultima_qodef_dynamic_css('.qodef-fullscreen-search-holder .qodef-field-holder .qodef-line', array(
                'background-color' => ultima_qodef_options()->getOptionValue('search_border_focus_color')
            ));
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_search_border_bottom_styles');
}
