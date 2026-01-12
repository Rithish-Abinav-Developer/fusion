<?php

if(!function_exists('ultima_qodef_underline_icon_box_map')) {
    function ultima_qodef_underline_icon_box_map() {

        $panel = ultima_qodef_add_admin_panel(array(
            'title' => esc_html__('Underline Icon Box', 'select-core'),
            'name'  => 'panel_underline_icon_box',
            'page'  => '_elements_page'
        ));

        //Color options
        ultima_qodef_add_admin_section_title(array(
            'name'   => 'underline_icon_box_section_colors',
            'title'  => esc_html__('Underline Icon Box Colors', 'select-core'),
            'parent' => $panel
        ));

        $color_group = ultima_qodef_add_admin_group(array(
            'name'        => 'color_group',
            'title'       => esc_html__('Underline Icon Box Colors', 'select-core'),
            'description' => esc_html__('Setup colors for underline icon box', 'select-core'),
            'parent'      => $panel
        ));

        $color_row = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_row',
            'next'   => true,
            'parent' => $color_group
        ));


        ultima_qodef_add_admin_field(array(
            'parent'        => $color_row,
            'type'          => 'colorsimple',
            'name'          => 'underline_icon_box_icon_color',
            'default_value' => '',
            'label'         => esc_html__('Icon Color', 'select-core')
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $color_row,
            'type'          => 'colorsimple',
            'name'          => 'underline_icon_box_box_color',
            'default_value' => '',
            'label'         => esc_html__('Box Color', 'select-core')
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $color_row,
            'type'          => 'colorsimple',
            'name'          => 'underline_icon_box_line_color',
            'default_value' => '',
            'label'         => esc_html__('Line Color', 'select-core')
        ));


    }

    add_action('ultima_qodef_options_elements_map', 'ultima_qodef_underline_icon_box_map');
}