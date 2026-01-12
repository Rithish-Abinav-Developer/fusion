<?php

if(!function_exists('ultima_qodef_mobile_header_general_styles')) {
    /**
     * Generates general custom styles for mobile header
     */
    function ultima_qodef_mobile_header_general_styles() {
        $mobile_header_styles = array();
        if(ultima_qodef_options()->getOptionValue('mobile_header_height') !== '') {
            $mobile_header_styles['height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('mobile_header_height')).'px';
        }

        if(ultima_qodef_options()->getOptionValue('mobile_header_background_color')) {
            $mobile_header_styles['background-color'] = ultima_qodef_options()->getOptionValue('mobile_header_background_color');
        }

        echo ultima_qodef_dynamic_css('.qodef-mobile-header .qodef-mobile-header-inner', $mobile_header_styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_mobile_header_general_styles');
}

if(!function_exists('ultima_qodef_mobile_navigation_styles')) {
    /**
     * Generates styles for mobile navigation
     */
    function ultima_qodef_mobile_navigation_styles() {
        $mobile_nav_styles = array();
        if(ultima_qodef_options()->getOptionValue('mobile_menu_background_color')) {
            $mobile_nav_styles['background-color'] = ultima_qodef_options()->getOptionValue('mobile_menu_background_color');
        }

        echo ultima_qodef_dynamic_css('.qodef-mobile-header .qodef-mobile-nav', $mobile_nav_styles);

        $mobile_nav_item_styles = array();
        if(ultima_qodef_options()->getOptionValue('mobile_menu_separator_color') !== '') {
            $mobile_nav_item_styles['border-bottom-color'] = ultima_qodef_options()->getOptionValue('mobile_menu_separator_color');
        }

        if(ultima_qodef_options()->getOptionValue('mobile_text_color') !== '') {
            $mobile_nav_item_styles['color'] = ultima_qodef_options()->getOptionValue('mobile_text_color');
        }

        if(ultima_qodef_is_font_option_valid(ultima_qodef_options()->getOptionValue('mobile_font_family'))) {
            $mobile_nav_item_styles['font-family'] = ultima_qodef_get_formatted_font_family(ultima_qodef_options()->getOptionValue('mobile_font_family'));
        }

        if(ultima_qodef_options()->getOptionValue('mobile_font_size') !== '') {
            $mobile_nav_item_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('mobile_font_size')).'px';
        }

        if(ultima_qodef_options()->getOptionValue('mobile_line_height') !== '') {
            $mobile_nav_item_styles['line-height'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('mobile_line_height')).'px';
        }

        if(ultima_qodef_options()->getOptionValue('mobile_text_transform') !== '') {
            $mobile_nav_item_styles['text-transform'] = ultima_qodef_options()->getOptionValue('mobile_text_transform');
        }

        if(ultima_qodef_options()->getOptionValue('mobile_font_style') !== '') {
            $mobile_nav_item_styles['font-style'] = ultima_qodef_options()->getOptionValue('mobile_font_style');
        }

        if(ultima_qodef_options()->getOptionValue('mobile_font_weight') !== '') {
            $mobile_nav_item_styles['font-weight'] = ultima_qodef_options()->getOptionValue('mobile_font_weight');
        }

        $mobile_nav_item_selector = array(
            '.qodef-mobile-header .qodef-mobile-nav a',
            '.qodef-mobile-header .qodef-mobile-nav h4'
        );

        echo ultima_qodef_dynamic_css($mobile_nav_item_selector, $mobile_nav_item_styles);

        $mobile_nav_item_hover_styles = array();
        if(ultima_qodef_options()->getOptionValue('mobile_text_hover_color') !== '') {
            $mobile_nav_item_hover_styles['color'] = ultima_qodef_options()->getOptionValue('mobile_text_hover_color');
        }

        $mobile_nav_item_selector_hover = array(
            '.qodef-mobile-header .qodef-mobile-nav a:hover',
            '.qodef-mobile-header .qodef-mobile-nav h4:hover'
        );

        echo ultima_qodef_dynamic_css($mobile_nav_item_selector_hover, $mobile_nav_item_hover_styles);
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_mobile_navigation_styles');
}

if(!function_exists('ultima_qodef_mobile_logo_styles')) {
    /**
     * Generates styles for mobile logo
     */
    function ultima_qodef_mobile_logo_styles() {
        if(ultima_qodef_options()->getOptionValue('mobile_logo_height') !== '') { ?>
            @media only screen and (max-width: 1000px) {
            <?php echo ultima_qodef_dynamic_css(
                '.qodef-mobile-header .qodef-mobile-logo-wrapper a',
                array('height' => ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('mobile_logo_height')).'px !important')
            ); ?>
            }
        <?php }

        if(ultima_qodef_options()->getOptionValue('mobile_logo_height_phones') !== '') { ?>
            @media only screen and (max-width: 480px) {
            <?php echo ultima_qodef_dynamic_css(
                '.qodef-mobile-header .qodef-mobile-logo-wrapper a',
                array('height' => ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('mobile_logo_height_phones')).'px !important')
            ); ?>
            }
        <?php }

        if(ultima_qodef_options()->getOptionValue('mobile_header_height') !== '') {
            $max_height = intval(ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('mobile_header_height')) * 0.9).'px';
            echo ultima_qodef_dynamic_css('.qodef-mobile-header .qodef-mobile-logo-wrapper a', array('max-height' => $max_height));
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_mobile_logo_styles');
}

if(!function_exists('ultima_qodef_mobile_icon_styles')) {
    /**
     * Generates styles for mobile icon opener
     */
    function ultima_qodef_mobile_icon_styles() {
        $mobile_icon_styles = array();
        if(ultima_qodef_options()->getOptionValue('mobile_icon_color') !== '') {
            $mobile_icon_styles['color'] = ultima_qodef_options()->getOptionValue('mobile_icon_color');
        }

        if(ultima_qodef_options()->getOptionValue('mobile_icon_size') !== '') {
            $mobile_icon_styles['font-size'] = ultima_qodef_filter_px(ultima_qodef_options()->getOptionValue('mobile_icon_size')).'px';
        }

        echo ultima_qodef_dynamic_css('.qodef-mobile-header .qodef-mobile-menu-opener a', $mobile_icon_styles);

        if(ultima_qodef_options()->getOptionValue('mobile_icon_hover_color') !== '') {
            echo ultima_qodef_dynamic_css(
                '.qodef-mobile-header .qodef-mobile-menu-opener a:hover',
                array('color' => ultima_qodef_options()->getOptionValue('mobile_icon_hover_color')));
        }
    }

    add_action('ultima_qodef_style_dynamic', 'ultima_qodef_mobile_icon_styles');
}