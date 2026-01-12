<?php

if(!function_exists('ultima_qodef_search_options_map')) {

    function ultima_qodef_search_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_search_page',
                'title' => esc_html__('Search', 'ultima'),
                'icon'  => 'fa fa-search'
            )
        );

        $search_panel = ultima_qodef_add_admin_panel(
            array(
                'title' => esc_html__('Search', 'ultima'),
                'name'  => 'search',
                'page'  => '_search_page'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_panel,
                'type'          => 'select',
                'name'          => 'search_icon_pack',
                'default_value' => 'font_awesome',
                'label'         => esc_html__('Search Icon Pack', 'ultima'),
                'description'   => esc_html__('Choose icon pack for search icon', 'ultima'),
                'options'       => ultima_qodef_icon_collections()->getIconCollectionsExclude(array(
                    'linea_icons',
                    'simple_line_icons',
                    'dripicons'
                ))
            )
        );

        ultima_qodef_add_admin_section_title(
            array(
                'parent' => $search_panel,
                'name'   => 'initial_header_icon_title',
                'title'  => 'Initial Search Icon in Header'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_panel,
                'type'          => 'text',
                'name'          => 'header_search_icon_size',
                'default_value' => '',
                'label'         => esc_html__('Icon Size', 'ultima'),
                'description'   => esc_html__('Set size for icon in header', 'ultima'),
                'args'          => array(
                    'col_width' => 3,
                    'suffix'    => 'px'
                )
            )
        );

        $search_icon_color_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $search_panel,
                'title'       => esc_html__('Icon Colors', 'ultima'),
                'description' => esc_html__('Define color style for icon', 'ultima'),
                'name'        => 'search_icon_color_group'
            )
        );

        $search_icon_color_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_icon_color_group,
                'name'   => 'search_icon_color_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $search_icon_color_row,
                'type'   => 'colorsimple',
                'name'   => 'header_search_icon_color',
                'label'  => esc_html__('Color', 'ultima')
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'parent' => $search_icon_color_row,
                'type'   => 'colorsimple',
                'name'   => 'header_search_icon_hover_color',
                'label'  => esc_html__('Hover Color', 'ultima')
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'parent' => $search_icon_color_row,
                'type'   => 'colorsimple',
                'name'   => 'header_light_search_icon_color',
                'label'  => esc_html__('Light Header Icon Color', 'ultima')
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'parent' => $search_icon_color_row,
                'type'   => 'colorsimple',
                'name'   => 'header_light_search_icon_hover_color',
                'label'  => esc_html__('Light Header Icon Hover Color', 'ultima')
            )
        );

        $search_icon_color_row2 = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_icon_color_group,
                'name'   => 'search_icon_color_row2',
                'next'   => true
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $search_icon_color_row2,
                'type'   => 'colorsimple',
                'name'   => 'header_dark_search_icon_color',
                'label'  => esc_html__('Dark Header Icon Color', 'ultima')
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'parent' => $search_icon_color_row2,
                'type'   => 'colorsimple',
                'name'   => 'header_dark_search_icon_hover_color',
                'label'  => esc_html__('Dark Header Icon Hover Color', 'ultima')
            )
        );


        $search_icon_background_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $search_panel,
                'title'       => esc_html__('Icon Background Style', 'ultima'),
                'description' => esc_html__('Define background style for icon', 'ultima'),
                'name'        => 'search_icon_background_group'
            )
        );

        $search_icon_background_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_icon_background_group,
                'name'   => 'search_icon_background_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_icon_background_row,
                'type'          => 'colorsimple',
                'name'          => 'search_icon_background_color',
                'default_value' => '',
                'label'         => esc_html__('Background Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_icon_background_row,
                'type'          => 'colorsimple',
                'name'          => 'search_icon_background_hover_color',
                'default_value' => '',
                'label'         => esc_html__('Background Hover Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_panel,
                'type'          => 'yesno',
                'name'          => 'enable_search_icon_text',
                'default_value' => 'no',
                'label'         => esc_html__('Enable Search Icon Text', 'ultima'),
                'description'   => esc_html__("Enable this option to show 'Search' text next to search icon in header", 'ultima'),
                'args'          => array(
                    'dependence'             => true,
                    'dependence_hide_on_yes' => '',
                    'dependence_show_on_yes' => '#qodef_enable_search_icon_text_container'
                )
            )
        );

        $enable_search_icon_text_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $search_panel,
                'name'            => 'enable_search_icon_text_container',
                'hidden_property' => 'enable_search_icon_text',
                'hidden_value'    => 'no'
            )
        );

        $enable_search_icon_text_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $enable_search_icon_text_container,
                'title'       => esc_html__('Search Icon Text', 'ultima'),
                'name'        => 'enable_search_icon_text_group',
                'description' => esc_html__('Define Style for Search Icon Text', 'ultima')
            )
        );

        $enable_search_icon_text_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $enable_search_icon_text_group,
                'name'   => 'enable_search_icon_text_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row,
                'type'          => 'colorsimple',
                'name'          => 'search_icon_text_color',
                'label'         => esc_html__('Text Color', 'ultima'),
                'default_value' => ''
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row,
                'type'          => 'colorsimple',
                'name'          => 'search_icon_text_color_hover',
                'label'         => esc_html__('Text Hover Color', 'ultima'),
                'default_value' => ''
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row,
                'type'          => 'textsimple',
                'name'          => 'search_icon_text_fontsize',
                'label'         => esc_html__('Font Size', 'ultima'),
                'default_value' => '',
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row,
                'type'          => 'textsimple',
                'name'          => 'search_icon_text_lineheight',
                'label'         => esc_html__('Line Height', 'ultima'),
                'default_value' => '',
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        $enable_search_icon_text_row2 = ultima_qodef_add_admin_row(
            array(
                'parent' => $enable_search_icon_text_group,
                'name'   => 'enable_search_icon_text_row2',
                'next'   => true
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row2,
                'type'          => 'selectblanksimple',
                'name'          => 'search_icon_text_texttransform',
                'label'         => esc_html__('Text Transform', 'ultima'),
                'default_value' => '',
                'options'       => ultima_qodef_get_text_transform_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row2,
                'type'          => 'fontsimple',
                'name'          => 'search_icon_text_google_fonts',
                'label'         => esc_html__('Font Family', 'ultima'),
                'default_value' => '-1',
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row2,
                'type'          => 'selectblanksimple',
                'name'          => 'search_icon_text_fontstyle',
                'label'         => esc_html__('Font Style', 'ultima'),
                'default_value' => '',
                'options'       => ultima_qodef_get_font_style_array(),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row2,
                'type'          => 'selectblanksimple',
                'name'          => 'search_icon_text_fontweight',
                'label'         => esc_html__('Font Weight', 'ultima'),
                'default_value' => '',
                'options'       => ultima_qodef_get_font_weight_array(),
            )
        );

        $enable_search_icon_text_row3 = ultima_qodef_add_admin_row(
            array(
                'parent' => $enable_search_icon_text_group,
                'name'   => 'enable_search_icon_text_row3',
                'next'   => true
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $enable_search_icon_text_row3,
                'type'          => 'textsimple',
                'name'          => 'search_icon_text_letterspacing',
                'label'         => esc_html__('Letter Spacing', 'ultima'),
                'default_value' => '',
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        $search_icon_spacing_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $search_panel,
                'title'       => esc_html__('Icon Spacing', 'ultima'),
                'description' => esc_html__('Define padding and margins for Search icon', 'ultima'),
                'name'        => 'search_icon_spacing_group'
            )
        );

        $search_icon_spacing_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_icon_spacing_group,
                'name'   => 'search_icon_spacing_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_icon_spacing_row,
                'type'          => 'textsimple',
                'name'          => 'search_padding_left',
                'default_value' => '',
                'label'         => esc_html__('Padding Left', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_icon_spacing_row,
                'type'          => 'textsimple',
                'name'          => 'search_padding_right',
                'default_value' => '',
                'label'         => esc_html__('Padding Right', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_icon_spacing_row,
                'type'          => 'textsimple',
                'name'          => 'search_margin_left',
                'default_value' => '',
                'label'         => esc_html__('Margin Left', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_icon_spacing_row,
                'type'          => 'textsimple',
                'name'          => 'search_margin_right',
                'default_value' => '',
                'label'         => esc_html__('Margin Right', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_section_title(
            array(
                'parent' => $search_panel,
                'name'   => 'search_form_title',
                'title'  => esc_html__('Full Screen Search Options', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_panel,
                'type'          => 'color',
                'name'          => 'search_background_color',
                'default_value' => '',
                'label'         => esc_html__('Background Color', 'ultima'),
                'description'   => esc_html__('Choose a background color for Full Screen Search', 'ultima')
            )
        );

        $search_input_text_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $search_panel,
                'title'       => esc_html__('Search Input Text', 'ultima'),
                'description' => esc_html__('Define style for search text', 'ultima'),
                'name'        => 'search_input_text_group'
            )
        );

        $search_input_text_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_input_text_group,
                'name'   => 'search_input_text_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_input_text_row,
                'type'          => 'colorsimple',
                'name'          => 'search_text_color',
                'default_value' => '',
                'label'         => esc_html__('Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_input_text_row,
                'type'          => 'colorsimple',
                'name'          => 'search_text_disabled_color',
                'default_value' => '',
                'label'         => esc_html__('Disabled Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_input_text_row,
                'type'          => 'textsimple',
                'name'          => 'search_text_fontsize',
                'default_value' => '',
                'label'         => 'Font Size',
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_input_text_row,
                'type'          => 'selectblanksimple',
                'name'          => 'search_text_texttransform',
                'default_value' => '',
                'label'         => esc_html__('Text Transform', 'ultima'),
                'options'       => ultima_qodef_get_text_transform_array()
            )
        );

        $search_input_text_row2 = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_input_text_group,
                'name'   => 'search_input_text_row2'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_input_text_row2,
                'type'          => 'fontsimple',
                'name'          => 'search_text_google_fonts',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_input_text_row2,
                'type'          => 'selectblanksimple',
                'name'          => 'search_text_fontstyle',
                'default_value' => '',
                'label'         => esc_html__('Font Style', 'ultima'),
                'options'       => ultima_qodef_get_font_style_array(),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_input_text_row2,
                'type'          => 'selectblanksimple',
                'name'          => 'search_text_fontweight',
                'default_value' => '',
                'label'         => esc_html__('Font Weight', 'ultima'),
                'options'       => ultima_qodef_get_font_weight_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_input_text_row2,
                'type'          => 'textsimple',
                'name'          => 'search_text_letterspacing',
                'default_value' => '',
                'label'         => esc_html__('Letter Spacing', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        $search_label_text_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $search_panel,
                'title'       => esc_html__('Search Label Text', 'ultima'),
                'description' => esc_html__('Define style for search label text', 'ultima'),
                'name'        => 'search_label_text_group'
            )
        );

        $search_label_text_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_label_text_group,
                'name'   => 'search_label_text_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_label_text_row,
                'type'          => 'colorsimple',
                'name'          => 'search_label_text_color',
                'default_value' => '',
                'label'         => esc_html__('Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_label_text_row,
                'type'          => 'textsimple',
                'name'          => 'search_label_text_fontsize',
                'default_value' => '',
                'label'         => esc_html__('Font Size', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_label_text_row,
                'type'          => 'selectblanksimple',
                'name'          => 'search_label_text_texttransform',
                'default_value' => '',
                'label'         => esc_html__('Text Transform', 'ultima'),
                'options'       => ultima_qodef_get_text_transform_array()
            )
        );

        $search_label_text_row2 = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_label_text_group,
                'name'   => 'search_label_text_row2',
                'next'   => true
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_label_text_row2,
                'type'          => 'fontsimple',
                'name'          => 'search_label_text_google_fonts',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_label_text_row2,
                'type'          => 'selectblanksimple',
                'name'          => 'search_label_text_fontstyle',
                'default_value' => '',
                'label'         => esc_html__('Font Style', 'ultima'),
                'options'       => ultima_qodef_get_font_style_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_label_text_row2,
                'type'          => 'selectblanksimple',
                'name'          => 'search_label_text_fontweight',
                'default_value' => '',
                'label'         => esc_html__('Font Weight', 'ultima'),
                'options'       => ultima_qodef_get_font_weight_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_label_text_row2,
                'type'          => 'textsimple',
                'name'          => 'search_label_text_letterspacing',
                'default_value' => '',
                'label'         => esc_html__('Letter Spacing', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        $search_bottom_border_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $search_panel,
                'title'       => esc_html__('Search Bottom Border', 'ultima'),
                'description' => esc_html__('Define style for Search text input bottom border', 'ultima'),
                'name'        => 'search_bottom_border_group'
            )
        );

        $search_bottom_border_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $search_bottom_border_group,
                'name'   => 'search_icon_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $search_bottom_border_row,
                'type'          => 'colorsimple',
                'name'          => 'search_border_focus_color',
                'label'         => esc_html__('Border Focus Color', 'ultima'),
                'default_value' => ''
            )
        );

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_search_options_map', 11);

}