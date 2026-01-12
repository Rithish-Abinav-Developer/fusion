<?php
if(!function_exists('ultima_qodef_underline_icon_box_icon_color')) {
    function ultima_qodef_underline_icon_box_icon_color() {
        $selector = '.qodef-underline-icon-box-holder .qodef-underline-icon-box-icon-holder .qodef-icon-shortcode .qodef-icon-element';
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('underline_icon_box_icon_color')) {
            $styles['color'] = ultima_qodef_options()->getOptionValue('underline_icon_box_icon_color');
        }

        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_underline_icon_box_icon_color');
}

if(!function_exists('ultima_qodef_underline_icon_box_box_styles')) {
    function ultima_qodef_underline_icon_box_box_styles() {
        $selector = '.qodef-underline-icon-box-holder';
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('underline_icon_box_box_color')) {
            $styles['background-color'] = ultima_qodef_options()->getOptionValue('underline_icon_box_box_color');
        }

        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_underline_icon_box_box_styles');
}

if(!function_exists('ultima_qodef_underline_icon_box_line_styles')) {
    function ultima_qodef_underline_icon_box_line_styles() {
        $selector = '.qodef-underline-icon-box-holder .qodef-underline-icon-box-line';
        $styles   = array();

        if(ultima_qodef_options()->getOptionValue('underline_icon_box_line_color')) {
            $styles['background-color'] = ultima_qodef_options()->getOptionValue('underline_icon_box_line_color');
        }

        echo ultima_qodef_dynamic_css($selector, $styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_underline_icon_box_line_styles');
}