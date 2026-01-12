<?php
if(!function_exists('ultima_qodef_accordions_map')) {
    /**
     * Add Accordion options to elements panel
     */
    function ultima_qodef_accordions_map() {

        $panel = ultima_qodef_add_admin_panel(array(
            'title' => esc_html__('Accordions', 'select-core'),
            'name'  => 'panel_accordions',
            'page'  => '_elements_page'
        ));

        //Typography options
        ultima_qodef_add_admin_section_title(array(
            'name'   => 'typography_section_title',
            'title'  => esc_html__('Typography', 'select-core'),
            'parent' => $panel
        ));

        $typography_group = ultima_qodef_add_admin_group(array(
            'name'        => 'typography_group',
            'title'       => esc_html__('Typography', 'select-core'),
            'description' => 'Setup typography for accordions navigation',
            'parent'      => $panel
        ));

        $typography_row = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_row',
            'next'   => true,
            'parent' => $typography_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_row,
            'type'          => 'fontsimple',
            'name'          => 'accordions_font_family',
            'default_value' => '',
            'label'         => esc_html__('Font Family', 'select-core'),
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_row,
            'type'          => 'selectsimple',
            'name'          => 'accordions_text_transform',
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'select-core'),
            'options'       => ultima_qodef_get_text_transform_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_row,
            'type'          => 'selectsimple',
            'name'          => 'accordions_font_style',
            'default_value' => '',
            'label'         => esc_html__('Font Style', 'select-core'),
            'options'       => ultima_qodef_get_font_style_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_row,
            'type'          => 'textsimple',
            'name'          => 'accordions_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'select-core'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        $typography_row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'typography_row2',
            'next'   => true,
            'parent' => $typography_group
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_row2,
            'type'          => 'selectsimple',
            'name'          => 'accordions_font_weight',
            'default_value' => '',
            'label'         => esc_html__('Font Weight', 'select-core'),
            'options'       => ultima_qodef_get_font_weight_array()
        ));

        ultima_qodef_add_admin_field(array(
            'parent'        => $typography_row2,
            'type'          => 'textsimple',
            'name'          => 'accordions_font_size',
            'default_value' => '',
            'label'         => esc_html__('Font Size', 'select-core'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        //Initial Accordion Color Styles

        ultima_qodef_add_admin_section_title(array(
            'name'   => 'accordion_color_section_title',
            'title'  => esc_html__('Accordions Color Styles', 'select-core'),
            'parent' => $panel
        ));

        $accordions_color_group = ultima_qodef_add_admin_group(array(
            'name'        => 'accordions_color_group',
            'title'       => esc_html__('Accordion Title Color Styles', 'select-core'),
            'description' => esc_html__('Set color styles for accordion title', 'select-core'),
            'parent'      => $panel
        ));
        $accordions_color_row   = ultima_qodef_add_admin_row(array(
            'name'   => 'accordions_color_row',
            'next'   => true,
            'parent' => $accordions_color_group
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $accordions_color_row,
            'type'          => 'colorsimple',
            'name'          => 'accordions_title_color',
            'default_value' => '',
            'label'         => esc_html__('Title Color', 'select-core')
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $accordions_color_row,
            'type'          => 'colorsimple',
            'name'          => 'accordions_title_background_color',
            'default_value' => '',
            'label'         => esc_html__('Title Background Color', 'select-core')
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $accordions_color_row,
            'type'          => 'colorsimple',
            'name'          => 'accordions_icon_color',
            'default_value' => '',
            'label'         => esc_html__('Icon Color', 'select-core')
        ));

        //Active Accordion Color Styles

        $active_accordions_color_group = ultima_qodef_add_admin_group(array(
            'name'        => 'active_accordions_color_group',
            'title'       => esc_html__('Active and Hover Accordion Title Color Styles', 'select-core'),
            'description' => esc_html__('Set color styles for active and hover accordions title', 'select-core'),
            'parent'      => $panel
        ));
        $active_accordions_color_row   = ultima_qodef_add_admin_row(array(
            'name'   => 'active_accordions_color_row',
            'next'   => true,
            'parent' => $active_accordions_color_group
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $active_accordions_color_row,
            'type'          => 'colorsimple',
            'name'          => 'accordions_title_color_active',
            'default_value' => '',
            'label'         => esc_html__('Title Color', 'select-core')
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $active_accordions_color_row,
            'type'          => 'colorsimple',
            'name'          => 'accordions_title_background_color_active',
            'default_value' => '',
            'label'         => esc_html__('Title Background Color', 'select-core')
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $active_accordions_color_row,
            'type'          => 'colorsimple',
            'name'          => 'accordions_icon_color_active',
            'default_value' => '',
            'label'         => esc_html__('Icon Color', 'select-core')
        ));

        //Content color styles

        $accordions_content_color_group = ultima_qodef_add_admin_group(array(
            'name'        => 'accordions_content_color_group',
            'title'       => esc_html__('Accordion Content Color Styles', 'select-core'),
            'description' => esc_html__('Set color styles for accordions content', 'select-core'),
            'parent'      => $panel
        ));
        $accordions_content_color_row   = ultima_qodef_add_admin_row(array(
            'name'   => 'accordions_content_color_row',
            'next'   => true,
            'parent' => $accordions_content_color_group
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $accordions_content_color_row,
            'type'          => 'colorsimple',
            'name'          => 'accordions_content_background_color',
            'default_value' => '',
            'label'         => esc_html__('Content Background Color', 'select-core')
        ));
        ultima_qodef_add_admin_field(array(
            'parent'        => $accordions_content_color_row,
            'type'          => 'colorsimple',
            'name'          => 'accordions_content_color',
            'default_value' => '',
            'label'         => esc_html__('Content Text Color', 'select-core')
        ));

    }

    add_action('ultima_qodef_options_elements_map', 'ultima_qodef_accordions_map');
}