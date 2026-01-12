<?php

if(!function_exists('ultima_qodef_general_meta_box_settings_map')) {
    
    function ultima_qodef_general_meta_box_settings_map() {

        $general_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('General', 'ultima'),
                'name'  => 'general_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_boxed_meta',
                'type'        => 'select',
                'label'       => esc_html__('Boxed Layout', 'ultima'),
                'description' => esc_html__('Enabling this option will show boxed layout', 'ultima'),
                'parent'      => $general_meta_box,
                'options'     => array(
                    ''    => '',
                    'yes' => esc_html__('Yes', 'ultima'),
                    'no'  => esc_html__('No', 'ultima')
                )
            )
        );


        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_page_background_color_meta',
                'type'          => 'color',
                'default_value' => '',
                'label'         => esc_html__('Page Background Color', 'ultima'),
                'description'   => esc_html__('Choose background color for page content', 'ultima'),
                'parent'        => $general_meta_box
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_page_padding_meta',
                'type'          => 'text',
                'default_value' => '',
                'label'         => esc_html__('Page Padding', 'ultima'),
                'description'   => esc_html__('Insert padding in format 10px 10px 10px 10px', 'ultima'),
                'parent'        => $general_meta_box
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_predefined_font_style_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Predefined Font Style', 'ultima'),
                'description'   => esc_html__('Choose a predefined font style for this page', 'ultima'),
                'parent'        => $general_meta_box,
                'options'       => array(
                    ''                  => esc_html__('Default', 'ultima'),
                    'predefined-style1' => esc_html__('Style 1', 'ultima'),
                    'predefined-style2' => esc_html__('Style 2', 'ultima'),
                    'predefined-style3' => esc_html__('Style 3', 'ultima'),
                    'predefined-style4' => esc_html__('Style 4', 'ultima')
                )
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_predefined_color_style_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Predefined Color Style', 'ultima'),
                'description'   => esc_html__('Choose a predefined color style for this page', 'ultima'),
                'parent'        => $general_meta_box,
                'options'       => array(
                    ''                  => esc_html__('Default', 'ultima'),
                    'predefined-color1' => esc_html__('Navy Blue', 'ultima'),
                    'predefined-color2' => esc_html__('Yellow', 'ultima'),
                    'predefined-color3' => esc_html__('Purple', 'ultima'),
                    'predefined-color4' => esc_html__('Magenta', 'ultima'),
                    'predefined-color5' => esc_html__('Green', 'ultima'),
                    'predefined-color6' => esc_html__('Black', 'ultima')
                )
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_page_slider_meta',
                'type'          => 'text',
                'default_value' => '',
                'label'         => esc_html__('Slider Shortcode', 'ultima'),
                'description'   => esc_html__('Paste your slider shortcode here', 'ultima'),
                'parent'        => $general_meta_box
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_page_transition_type',
                'type'          => 'selectblank',
                'label'         => esc_html__('Page Transition', 'ultima'),
                'description'   => esc_html__('Choose the type of transition to this page', 'ultima'),
                'parent'        => $general_meta_box,
                'default_value' => '',
                'options'       => array(
                    'no-animation' => esc_html__('No animation', 'ultima'),
                    'fade'         => esc_html__('Fade', 'ultima')
                )
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_page_comments_meta',
                'type'        => 'selectblank',
                'label'       => esc_html__('Show Comments', 'ultima'),
                'description' => esc_html__('Enabling this option will show comments on your page', 'ultima'),
                'parent'      => $general_meta_box,
                'options'     => array(
                    'yes' => esc_html__('Yes', 'ultima'),
                    'no'  => esc_html__('No', 'ultima'),
                )
            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_general_meta_box_settings_map');
}