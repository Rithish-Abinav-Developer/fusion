<?php

if(!function_exists('ultima_qodef_content_bottom_meta_box_settings_map')) {
    
    function ultima_qodef_content_bottom_meta_box_settings_map() {

        $content_bottom_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('Content Bottom', 'ultima'),
                'name'  => 'content_bottom_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_enable_content_bottom_area_meta',
                'type'          => 'selectblank',
                'default_value' => '',
                'label'         => esc_html__('Enable Content Bottom Area', 'ultima'),
                'description'   => esc_html__('This option will enable Content Bottom area on pages', 'ultima'),
                'parent'        => $content_bottom_meta_box,
                'options'       => array(
                    'no'  => esc_html__('No', 'ultima'),
                    'yes' => esc_html__('Yes', 'ultima')
                ),
                'args'          => array(
                    'dependence' => true,
                    'hide'       => array(
                        ''   => '#qodef_qodef_show_content_bottom_meta_container',
                        'no' => '#qodef_qodef_show_content_bottom_meta_container'
                    ),
                    'show'       => array(
                        'yes' => '#qodef_qodef_show_content_bottom_meta_container'
                    )
                )
            )
        );

        $show_content_bottom_meta_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $content_bottom_meta_box,
                'name'            => 'qodef_show_content_bottom_meta_container',
                'hidden_property' => 'qodef_enable_content_bottom_area_meta',
                'hidden_value'    => '',
                'hidden_values'   => array('', 'no')
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_content_bottom_sidebar_custom_display_meta',
                'type'          => 'selectblank',
                'default_value' => '',
                'label'         => esc_html__('Sidebar to Display', 'ultima'),
                'description'   => esc_html__('Choose a Content Bottom sidebar to display', 'ultima'),
                'options'       => ultima_qodef_get_custom_sidebars(),
                'parent'        => $show_content_bottom_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'type'          => 'selectblank',
                'name'          => 'qodef_content_bottom_in_grid_meta',
                'default_value' => '',
                'label'         => esc_html__('Display in Grid', 'ultima'),
                'description'   => esc_html__('Enabling this option will place Content Bottom in grid', 'ultima'),
                'options'       => array(
                    'no'  => esc_html__('No', 'ultima'),
                    'yes' => esc_html__('Yes', 'ultima')
                ),
                'parent'        => $show_content_bottom_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'type'          => 'color',
                'name'          => 'qodef_content_bottom_background_color_meta',
                'default_value' => '',
                'label'         => esc_html__('Background Color', 'ultima'),
                'description'   => esc_html__('Choose a background color for Content Bottom area', 'ultima'),
                'parent'        => $show_content_bottom_meta_container
            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_content_bottom_meta_box_settings_map');
}