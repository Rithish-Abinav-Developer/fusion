<?php

if(!function_exists('ultima_qodef_contact_form_7_options_map')) {

    function ultima_qodef_contact_form_7_options_map() {

        ultima_qodef_add_admin_page(array(
            'slug'  => '_contact_form7_page',
            'title' => esc_html__('Contact Form 7', 'ultima'),
            'icon'  => 'fa fa-envelope-o'
        ));

        $panel_contact_form_style_1 = ultima_qodef_add_admin_panel(array(
            'page'  => '_contact_form7_page',
            'name'  => 'panel_contact_form_style_1',
            'title' => esc_html__('Custom Style 1', 'ultima')
        ));

        //Text Typography

        $typography_text_group = ultima_qodef_add_admin_group(array(
            'name'        => 'typography_text_group',
            'title'       => esc_html__('Form Text Typography', 'ultima'),
            'description' => esc_html__('Setup typography for form elements text', 'ultima'),
            'parent'      => $panel_contact_form_style_1
        ));

        $typography_text_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_text_row1',
            'parent' => $typography_text_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_text_color',
            'default_value' => '',
            'label'         => esc_html__('Text Color', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_focus_text_color',
            'default_value' => '',
            'label'         => esc_html__('Focus Text Color', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_text_font_size',
            'default_value' => '',
            'label'         => esc_html__('Font Size', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_text_line_height',
            'default_value' => '',
            'label'         => esc_html__('Line Height', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        $typography_text_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_text_row2',
            'next'   => true,
            'parent' => $typography_text_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row2,
            'type'          => 'fontsimple',
            'name'          => 'cf7_style_1_text_font_family',
            'default_value' => '',
            'label'         => esc_html__('Font Family', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_text_font_style',
            'default_value' => '',
            'label'         => esc_html__('Font Style', 'ultima'),
            'options'       => ultima_qodef_get_font_style_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_text_font_weight',
            'default_value' => '',
            'label'         => esc_html__('Font Weight', 'ultima'),
            'options'       => ultima_qodef_get_font_weight_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_text_text_transform',
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'ultima'),
            'options'       => ultima_qodef_get_text_transform_array()
        ));

        $typography_text_row3 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_text_row3',
            'next'   => true,
            'parent' => $typography_text_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_text_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Labels Typography

        $typography_label_group = ultima_qodef_add_admin_group(array(
            'name'        => 'typography_label_group',
            'title'       => esc_html__('Form Label Typography', 'ultima'),
            'description' => esc_html__('Setup typography for form elements label', 'ultima'),
            'parent'      => $panel_contact_form_style_1
        ));

        $typography_label_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_label_row1',
            'parent' => $typography_label_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_label_color',
            'default_value' => '',
            'label'         => esc_html__('Text Color', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_label_font_size',
            'default_value' => '',
            'label'         => esc_html__('Font Size', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_label_line_height',
            'default_value' => '',
            'label'         => esc_html__('Line Height', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row1,
            'type'          => 'fontsimple',
            'name'          => 'cf7_style_1_label_font_family',
            'default_value' => '',
            'label'         => esc_html__('Font Family', 'ultima'),
        ));

        $typography_label_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_label_row2',
            'next'   => true,
            'parent' => $typography_label_group
        ));


        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_label_font_style',
            'default_value' => '',
            'label'         => esc_html__('Font Style', 'ultima'),
            'options'       => ultima_qodef_get_font_style_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_label_font_weight',
            'default_value' => '',
            'label'         => esc_html__('Font Weight', 'ultima'),
            'options'       => ultima_qodef_get_font_weight_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_label_text_transform',
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'ultima'),
            'options'       => ultima_qodef_get_text_transform_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_label_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Form Elements Background and Border

        $background_border_group = ultima_qodef_add_admin_group(array(
            'name'        => 'background_border_group',
            'title'       => esc_html__('Form Elements Background and Border', 'ultima'),
            'description' => esc_html__('Setup form elements background and border style', 'ultima'),
            'parent'      => $panel_contact_form_style_1
        ));

        $background_border_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'background_border_row1',
            'parent' => $background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_background_color',
            'default_value' => '',
            'label'         => esc_html__('Background Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_background_transparency',
            'default_value' => '',
            'label'         => esc_html__('Background Transparency', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_focus_background_color',
            'default_value' => '',
            'label'         => esc_html__('Focus Background Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_focus_background_transparency',
            'default_value' => '',
            'label'         => esc_html__('Focus Background Transparency', 'ultima')
        ));

        $background_border_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'background_border_row2',
            'next'   => true,
            'parent' => $background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row2,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_border_color',
            'default_value' => '',
            'label'         => esc_html__('Border Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_border_transparency',
            'default_value' => '',
            'label'         => esc_html__('Border Transparency', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row2,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_focus_border_color',
            'default_value' => '',
            'label'         => esc_html__('Focus Border Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_focus_border_transparency',
            'default_value' => '',
            'label'         => esc_html__('Focus Border Transparency', 'ultima')
        ));

        $background_border_row3 = ultima_qodef_add_admin_row(array(
            'name'   => 'background_border_row3',
            'next'   => true,
            'parent' => $background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_border_width',
            'default_value' => '',
            'label'         => esc_html__('Border Width', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_border_radius',
            'default_value' => '',
            'label'         => esc_html__('Border Radius', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Form Elements Padding

        $padding_group = ultima_qodef_add_admin_group(array(
            'name'        => 'padding_group',
            'title'       => esc_html__('Elements Padding', 'ultima'),
            'description' => esc_html__('Setup form elements padding', 'ultima'),
            'parent'      => $panel_contact_form_style_1
        ));

        $padding_row = ultima_qodef_add_admin_row(array(
            'name'   => 'padding_row',
            'parent' => $padding_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $padding_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_padding_top',
            'default_value' => '',
            'label'         => esc_html__('Padding Top', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $padding_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_padding_right',
            'default_value' => '',
            'label'         => esc_html__('Padding Right', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $padding_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_padding_bottom',
            'default_value' => '',
            'label'         => esc_html__('Padding Bottom', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $padding_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_padding_left',
            'default_value' => '',
            'label'         => esc_html__('Padding Left', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Form Elements Margin

        $margin_group = ultima_qodef_add_admin_group(array(
            'name'        => 'margin_group',
            'title'       => esc_html__('Elements Margin', 'ultima'),
            'description' => esc_html__('Setup form elements margin', 'ultima'),
            'parent'      => $panel_contact_form_style_1
        ));

        $margin_row = ultima_qodef_add_admin_row(array(
            'name'   => 'margin_row',
            'parent' => $margin_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $margin_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_margin_top',
            'default_value' => '',
            'label'         => esc_html__('Margin Top', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $margin_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_margin_bottom',
            'default_value' => '',
            'label'         => esc_html__('Margin Bottom', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Textarea

        ultima_qodef_add_admin_field(array(
            'parent'        => $panel_contact_form_style_1,
            'type'          => 'text',
            'name'          => 'cf7_style_1_textarea_height',
            'default_value' => '',
            'label'         => esc_html__('Textarea Height', 'ultima'),
            'description'   => esc_html__('Enter height for textarea form element', 'ultima'),
            'args'          => array(
                'col_width' => '3',
                'suffix'    => 'px'
            )
        ));

        // Button Typography

        $button_typography_group = ultima_qodef_add_admin_group(array(
            'name'        => 'button_typography_group',
            'title'       => esc_html__('Button Typography', 'ultima'),
            'description' => esc_html__('Setup button text typography', 'ultima'),
            'parent'      => $panel_contact_form_style_1
        ));

        $button_typography_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_typography_row1',
            'parent' => $button_typography_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_button_color',
            'default_value' => '',
            'label'         => esc_html__('Text Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_button_hover_color',
            'default_value' => '',
            'label'         => esc_html__('Text Hover Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_button_font_size',
            'default_value' => '',
            'label'         => esc_html__('Font Size', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row1,
            'type'          => 'fontsimple',
            'name'          => 'cf7_style_1_button_font_family',
            'default_value' => '',
            'label'         => esc_html__('Font Family', 'ultima')
        ));

        $button_typography_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_typography_row2',
            'next'   => true,
            'parent' => $button_typography_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_button_font_style',
            'default_value' => '',
            'label'         => esc_html__('Font Style', 'ultima'),
            'options'       => ultima_qodef_get_font_style_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_button_font_weight',
            'default_value' => '',
            'label'         => esc_html__('Font Weight', 'ultima'),
            'options'       => ultima_qodef_get_font_weight_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_1_button_text_transform',
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'ultima'),
            'options'       => ultima_qodef_get_text_transform_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_button_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Button Background and Border

        $button_background_border_group = ultima_qodef_add_admin_group(array(
            'name'        => 'button_background_border_group',
            'title'       => esc_html__('Button Background and Border', 'ultima'),
            'description' => esc_html__('Setup button background and border style', 'ultima'),
            'parent'      => $panel_contact_form_style_1
        ));

        $button_background_border_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_background_border_row1',
            'parent' => $button_background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_button_background_color',
            'default_value' => '',
            'label'         => esc_html__('Background Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_button_background_transparency',
            'default_value' => '',
            'label'         => esc_html__('Background Transparency', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_button_hover_bckg_color',
            'default_value' => '',
            'label'         => esc_html__('Background Hover Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_button_hover_bckg_transparency',
            'default_value' => '',
            'label'         => esc_html__('Background Hover Transparency', 'ultima')
        ));

        $button_background_border_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_background_border_row2',
            'next'   => true,
            'parent' => $button_background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row2,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_button_border_color',
            'default_value' => '',
            'label'         => esc_html__('Border Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_button_border_transparency',
            'default_value' => '',
            'label'         => esc_html__('Border Transparency', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row2,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_1_button_hover_border_color',
            'default_value' => '',
            'label'         => esc_html__('Border Hover Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_button_hover_border_transparency',
            'default_value' => '',
            'label'         => esc_html__('Border Hover Transparency', 'ultima')
        ));

        $button_background_border_row3 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_background_border_row3',
            'next'   => true,
            'parent' => $button_background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_button_border_width',
            'default_value' => '',
            'label'         => esc_html__('Border Width', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_1_button_border_radius',
            'default_value' => '',
            'label'         => esc_html__('Border Radius', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Button Height

        ultima_qodef_add_admin_field(array(
            'parent'        => $panel_contact_form_style_1,
            'type'          => 'text',
            'name'          => 'cf7_style_1_button_height',
            'default_value' => '',
            'label'         => esc_html__('Button Height', 'ultima'),
            'description'   => esc_html__('Insert form button height', 'ultima'),
            'args'          => array(
                'col_width' => '3',
                'suffix'    => 'px'
            )
        ));

        // Button Padding

        ultima_qodef_add_admin_field(array(
            'parent'        => $panel_contact_form_style_1,
            'type'          => 'text',
            'name'          => 'cf7_style_1_button_padding',
            'default_value' => '',
            'label'         => esc_html__('Button Left/Right Padding', 'ultima'),
            'description'   => esc_html__('Enter value for button left and right padding', 'ultima'),
            'args'          => array(
                'col_width' => '3',
                'suffix'    => 'px'
            )
        ));

        $panel_contact_form_style_2 = ultima_qodef_add_admin_panel(array(
            'page'  => '_contact_form7_page',
            'name'  => 'panel_contact_form_style_2',
            'title' => esc_html__('Custom Style 2', 'ultima')
        ));

        //Text Typography

        $typography_text_group = ultima_qodef_add_admin_group(array(
            'name'        => 'typography_text_group',
            'title'       => esc_html__('Form Text Typography', 'ultima'),
            'description' => esc_html__('Setup typography for form elements text', 'ultima'),
            'parent'      => $panel_contact_form_style_2
        ));

        $typography_text_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_text_row1',
            'parent' => $typography_text_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_text_color',
            'default_value' => '',
            'label'         => esc_html__('Text Color', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_focus_text_color',
            'default_value' => '',
            'label'         => esc_html__('Focus Text Color', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_text_font_size',
            'default_value' => '',
            'label'         => esc_html__('Font Size', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_text_line_height',
            'default_value' => '',
            'label'         => esc_html__('Line Height', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        $typography_text_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_text_row2',
            'next'   => true,
            'parent' => $typography_text_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row2,
            'type'          => 'fontsimple',
            'name'          => 'cf7_style_2_text_font_family',
            'default_value' => '',
            'label'         => esc_html__('Font Family', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_text_font_style',
            'default_value' => '',
            'label'         => esc_html__('Font Style', 'ultima'),
            'options'       => ultima_qodef_get_font_style_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_text_font_weight',
            'default_value' => '',
            'label'         => esc_html__('Font Weight', 'ultima'),
            'options'       => ultima_qodef_get_font_weight_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_text_text_transform',
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'ultima'),
            'options'       => ultima_qodef_get_text_transform_array()
        ));

        $typography_text_row3 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_text_row3',
            'next'   => true,
            'parent' => $typography_text_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_text_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_text_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Labels Typography

        $typography_label_group = ultima_qodef_add_admin_group(array(
            'name'        => 'typography_label_group',
            'title'       => esc_html__('Form Label Typography', 'ultima'),
            'description' => esc_html__('Setup typography for form elements label', 'ultima'),
            'parent'      => $panel_contact_form_style_2
        ));

        $typography_label_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_label_row1',
            'parent' => $typography_label_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_label_color',
            'default_value' => '',
            'label'         => esc_html__('Text Color', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_label_font_size',
            'default_value' => '',
            'label'         => esc_html__('Font Size', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_label_line_height',
            'default_value' => '',
            'label'         => esc_html__('Line Height', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row1,
            'type'          => 'fontsimple',
            'name'          => 'cf7_style_2_label_font_family',
            'default_value' => '',
            'label'         => esc_html__('Font Family', 'ultima'),
        ));

        $typography_label_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_label_row2',
            'next'   => true,
            'parent' => $typography_label_group
        ));


        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_label_font_style',
            'default_value' => '',
            'label'         => esc_html__('Font Style', 'ultima'),
            'options'       => ultima_qodef_get_font_style_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_label_font_weight',
            'default_value' => '',
            'label'         => esc_html__('Font Weight', 'ultima'),
            'options'       => ultima_qodef_get_font_weight_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_label_text_transform',
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'ultima'),
            'options'       => ultima_qodef_get_text_transform_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_label_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_label_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Form Elements Background and Border

        $background_border_group = ultima_qodef_add_admin_group(array(
            'name'        => 'background_border_group',
            'title'       => esc_html__('Form Elements Background and Border', 'ultima'),
            'description' => esc_html__('Setup form elements background and border style', 'ultima'),
            'parent'      => $panel_contact_form_style_2
        ));

        $background_border_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'background_border_row1',
            'parent' => $background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_background_color',
            'default_value' => '',
            'label'         => esc_html__('Background Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_background_transparency',
            'default_value' => '',
            'label'         => esc_html__('Background Transparency', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_focus_background_color',
            'default_value' => '',
            'label'         => esc_html__('Focus Background Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_focus_background_transparency',
            'default_value' => '',
            'label'         => esc_html__('Focus Background Transparency', 'ultima')
        ));

        $background_border_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'background_border_row2',
            'next'   => true,
            'parent' => $background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row2,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_border_color',
            'default_value' => '',
            'label'         => esc_html__('Border Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_border_transparency',
            'default_value' => '',
            'label'         => esc_html__('Border Transparency', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row2,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_focus_border_color',
            'default_value' => '',
            'label'         => esc_html__('Focus Border Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_focus_border_transparency',
            'default_value' => '',
            'label'         => esc_html__('Focus Border Transparency', 'ultima')
        ));

        $background_border_row3 = ultima_qodef_add_admin_row(array(
            'name'   => 'background_border_row3',
            'next'   => true,
            'parent' => $background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_border_width',
            'default_value' => '',
            'label'         => esc_html__('Border Width', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $background_border_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_border_radius',
            'default_value' => '',
            'label'         => esc_html__('Border Radius', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Form Elements Padding

        $padding_group = ultima_qodef_add_admin_group(array(
            'name'        => 'padding_group',
            'title'       => esc_html__('Elements Padding', 'ultima'),
            'description' => esc_html__('Setup form elements padding', 'ultima'),
            'parent'      => $panel_contact_form_style_2
        ));

        $padding_row = ultima_qodef_add_admin_row(array(
            'name'   => 'padding_row',
            'parent' => $padding_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $padding_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_padding_top',
            'default_value' => '',
            'label'         => esc_html__('Padding Top', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $padding_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_padding_right',
            'default_value' => '',
            'label'         => esc_html__('Padding Right', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $padding_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_padding_bottom',
            'default_value' => '',
            'label'         => esc_html__('Padding Bottom', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $padding_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_padding_left',
            'default_value' => '',
            'label'         => esc_html__('Padding Left', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Form Elements Margin

        $margin_group = ultima_qodef_add_admin_group(array(
            'name'        => 'margin_group',
            'title'       => esc_html__('Elements Margin', 'ultima'),
            'description' => esc_html__('Setup form elements margin', 'ultima'),
            'parent'      => $panel_contact_form_style_2
        ));

        $margin_row = ultima_qodef_add_admin_row(array(
            'name'   => 'margin_row',
            'parent' => $margin_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $margin_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_margin_top',
            'default_value' => '',
            'label'         => esc_html__('Margin Top', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $margin_row,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_margin_bottom',
            'default_value' => '',
            'label'         => esc_html__('Margin Bottom', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Textarea

        ultima_qodef_add_admin_field(array(
            'parent'        => $panel_contact_form_style_2,
            'type'          => 'text',
            'name'          => 'cf7_style_2_textarea_height',
            'default_value' => '',
            'label'         => esc_html__('Textarea Height', 'ultima'),
            'description'   => esc_html__('Enter height for textarea form element', 'ultima'),
            'args'          => array(
                'col_width' => '3',
                'suffix'    => 'px'
            )
        ));

        // Button Typography

        $button_typography_group = ultima_qodef_add_admin_group(array(
            'name'        => 'button_typography_group',
            'title'       => esc_html__('Button Typography', 'ultima'),
            'description' => esc_html__('Setup button text typography', 'ultima'),
            'parent'      => $panel_contact_form_style_2
        ));

        $button_typography_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_typography_row1',
            'parent' => $button_typography_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_button_color',
            'default_value' => '',
            'label'         => esc_html__('Text Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_button_hover_color',
            'default_value' => '',
            'label'         => esc_html__('Text Hover Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_button_font_size',
            'default_value' => '',
            'label'         => esc_html__('Font Size', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row1,
            'type'          => 'fontsimple',
            'name'          => 'cf7_style_2_button_font_family',
            'default_value' => '',
            'label'         => esc_html__('Font Family', 'ultima')
        ));

        $button_typography_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_typography_row2',
            'next'   => true,
            'parent' => $button_typography_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_button_font_style',
            'default_value' => '',
            'label'         => esc_html__('Font Style', 'ultima'),
            'options'       => ultima_qodef_get_font_style_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_button_font_weight',
            'default_value' => '',
            'label'         => esc_html__('Font Weight', 'ultima'),
            'options'       => ultima_qodef_get_font_weight_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row2,
            'type'          => 'selectsimple',
            'name'          => 'cf7_style_2_button_text_transform',
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'ultima'),
            'options'       => ultima_qodef_get_text_transform_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_typography_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_button_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Button Background and Border

        $button_background_border_group = ultima_qodef_add_admin_group(array(
            'name'        => 'button_background_border_group',
            'title'       => esc_html__('Button Background and Border', 'ultima'),
            'description' => esc_html__('Setup button background and border style', 'ultima'),
            'parent'      => $panel_contact_form_style_2
        ));

        $button_background_border_row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_background_border_row1',
            'parent' => $button_background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_button_background_color',
            'default_value' => '',
            'label'         => esc_html__('Background Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_button_background_transparency',
            'default_value' => '',
            'label'         => esc_html__('Background Transparency', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row1,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_button_hover_bckg_color',
            'default_value' => '',
            'label'         => esc_html__('Background Hover Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row1,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_button_hover_bckg_transparency',
            'default_value' => '',
            'label'         => esc_html__('Background Hover Transparency', 'ultima')
        ));

        $button_background_border_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_background_border_row2',
            'next'   => true,
            'parent' => $button_background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row2,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_button_border_color',
            'default_value' => '',
            'label'         => 'Border Color'
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_button_border_transparency',
            'default_value' => '',
            'label'         => esc_html__('Border Transparency', 'ultima'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row2,
            'type'          => 'colorsimple',
            'name'          => 'cf7_style_2_button_hover_border_color',
            'default_value' => '',
            'label'         => esc_html__('Border Hover Color', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row2,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_button_hover_border_transparency',
            'default_value' => '',
            'label'         => esc_html__('Border Hover Transparency', 'ultima')
        ));

        $button_background_border_row3 = ultima_qodef_add_admin_row(array(
            'name'   => 'button_background_border_row3',
            'next'   => true,
            'parent' => $button_background_border_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_button_border_width',
            'default_value' => '',
            'label'         => esc_html__('Border Width', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $button_background_border_row3,
            'type'          => 'textsimple',
            'name'          => 'cf7_style_2_button_border_radius',
            'default_value' => '',
            'label'         => esc_html__('Border Radius', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        // Button Height

        ultima_qodef_add_admin_field(array(
            'parent'        => $panel_contact_form_style_2,
            'type'          => 'text',
            'name'          => 'cf7_style_2_button_height',
            'default_value' => '',
            'label'         => esc_html__('Button Height', 'ultima'),
            'description'   => esc_html__('Insert form button height', 'ultima'),
            'args'          => array(
                'col_width' => '3',
                'suffix'    => 'px'
            )
        ));

        // Button Padding

        ultima_qodef_add_admin_field(array(
            'parent'        => $panel_contact_form_style_2,
            'type'          => 'text',
            'name'          => 'cf7_style_2_button_padding',
            'default_value' => '',
            'label'         => esc_html__('Button Left/Right Padding', 'ultima'),
            'description'   => esc_html__('Enter value for button left and right padding', 'ultima'),
            'args'          => array(
                'col_width' => '3',
                'suffix'    => 'px'
            )
        ));

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_contact_form_7_options_map', 10);

}