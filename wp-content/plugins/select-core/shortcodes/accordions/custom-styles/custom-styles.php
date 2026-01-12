<?php

if(!function_exists('ultima_qodef_accordions_typography_styles')) {
    function ultima_qodef_accordions_typography_styles() {
        $selector = '.qodef-accordion-holder .qodef-title-holder';
        $styles   = array();

        $font_family = ultima_qodef_options()->getOptionValue('accordions_font_family');
        if(ultima_qodef_is_font_option_valid($font_family)) {
            $styles['font-family'] = ultima_qodef_get_font_option_val($font_family);
        }

        $text_transform = ultima_qodef_options()->getOptionValue('accordions_text_transform');
        if(!empty($text_transform)) {
            $styles['text-transform'] = $text_transform;
        }

        $font_style = ultima_qodef_options()->getOptionValue('accordions_font_style');
        if(!empty($font_style)) {
            $styles['font-style'] = $font_style;
        }

        $letter_spacing = ultima_qodef_options()->getOptionValue('accordions_letter_spacing');
        if($letter_spacing !== '') {
            $styles['letter-spacing'] = ultima_qodef_filter_px($letter_spacing).'px';
        }

        $font_weight = ultima_qodef_options()->getOptionValue('accordions_font_weight');
        if(!empty($font_weight)) {
            $styles['font-weight'] = $font_weight;
        }

        $font_size = ultima_qodef_options()->getOptionValue('accordions_font_size');
        if(!empty($font_weight)) {
            $styles['font-size'] = ultima_qodef_filter_px($font_size).'px';
        }

        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_accordions_typography_styles');
}

if(!function_exists('ultima_qodef_accordions_inital_title_color_styles')) {
    function ultima_qodef_accordions_inital_title_color_styles() {
        $selector = '.qodef-accordion-holder.qodef-initial .qodef-title-holder';
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('accordions_title_color')) {
            $styles['color'] = ultima_qodef_options()->getOptionValue('accordions_title_color');
        }
        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_accordions_inital_title_color_styles');
}

if(!function_exists('ultima_qodef_accordions_inital_title_background_color_styles')) {
    function ultima_qodef_accordions_inital_title_background_color_styles() {
        $selector = '.qodef-accordion-holder .qodef-title-holder';
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('accordions_title_background_color')) {
            $styles['background-color'] = ultima_qodef_options()->getOptionValue('accordions_title_background_color');
        }
        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_accordions_inital_title_background_color_styles');
}

if(!function_exists('ultima_qodef_accordions_active_title_color_styles')) {

    function ultima_qodef_accordions_active_title_color_styles() {
        $selector = array(
            '.qodef-accordion-holder.qodef-initial .qodef-title-holder.ui-state-active',
            '.qodef-accordion-holder.qodef-initial .qodef-title-holder.ui-state-hover'
        );
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('accordions_title_color_active')) {
            $styles['color'] = ultima_qodef_options()->getOptionValue('accordions_title_color_active');
        }

        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_accordions_active_title_color_styles');
}

if(!function_exists('ultima_qodef_accordions_active_title_background_color_styles')) {

    function ultima_qodef_accordions_active_title_background_color_styles() {
        $selector = array(
            '.qodef-accordion-holder.qodef-initial .qodef-title-holder.ui-state-active',
            '.qodef-accordion-holder.qodef-initial .qodef-title-holder.ui-state-hover'
        );
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('accordions_title_background_color_active')) {
            $styles['background-color'] = ultima_qodef_options()->getOptionValue('accordions_title_background_color_active');
        }

        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_accordions_active_title_background_color_styles');
}

if(!function_exists('ultima_qodef_accordions_inital_icon_color_styles')) {

    function ultima_qodef_accordions_inital_icon_color_styles() {
        $selector = '.qodef-accordion-holder.qodef-initial .qodef-title-holder .qodef-accordion-mark .qodef-accordion-plus';
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('accordions_icon_color')) {
            $styles['color'] = ultima_qodef_options()->getOptionValue('accordions_icon_color');
        }

        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_accordions_inital_icon_color_styles');
}
if(!function_exists('ultima_qodef_accordions_active_icon_color_styles')) {

    function ultima_qodef_accordions_active_icon_color_styles() {
        $selector = array(
            '.qodef-accordion-holder.qodef-initial .qodef-title-holder.ui-state-active .qodef-accordion-mark .qodef-accordion-minus',
            '.qodef-accordion-holder.qodef-initial .qodef-title-holder.ui-state-hover .qodef-accordion-mark .qodef-accordion-minus',
            '.qodef-accordion-holder.qodef-initial .qodef-title-holder.ui-state-hover .qodef-accordion-mark .qodef-accordion-plus',
            '.qodef-accordion-holder.qodef-initial .qodef-title-holder.ui-state-hover .qodef-accordion-mark .qodef-accordion-plus'
        );
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('accordions_icon_color_active')) {
            $styles['color'] = ultima_qodef_options()->getOptionValue('accordions_icon_color_active');
        }

        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_accordions_active_icon_color_styles');
}

if(!function_exists('ultima_qodef_accordions_content_color_styles')) {
    function ultima_qodef_accordions_content_color_styles() {
        $selector = '.qodef-accordion-holder .qodef-accordion-content';
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('accordions_content_background_color')) {
            $styles['background-color'] = ultima_qodef_options()->getOptionValue('accordions_content_background_color');
        }
        if(ultima_qodef_options()->getOptionValue('accordions_content_color')) {
            $styles['color'] = ultima_qodef_options()->getOptionValue('accordions_content_color');
        }
        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_accordions_content_color_styles');
}