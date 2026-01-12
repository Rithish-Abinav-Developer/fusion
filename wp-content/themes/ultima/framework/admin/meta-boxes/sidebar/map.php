<?php

if(!function_exists('ultima_qodef_sidebar_meta_box_settings_map')) {

    function ultima_qodef_sidebar_meta_box_settings_map() {

        $custom_sidebars = ultima_qodef_get_custom_sidebars();

        $sidebar_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('Sidebar', 'ultima'),
                'name'  => 'sidebar_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_sidebar_meta',
                'type'        => 'select',
                'label'       => esc_html__('Layout', 'ultima'),
                'description' => esc_html__('Choose the sidebar layout', 'ultima'),
                'parent'      => $sidebar_meta_box,
                'options'     => array(
                    ''                 => esc_html__('Default', 'ultima'),
                    'no-sidebar'       => esc_html__('No Sidebar', 'ultima'),
                    'sidebar-33-right' => esc_html__('Sidebar 1/3 Right', 'ultima'),
                    'sidebar-25-right' => esc_html__('Sidebar 1/4 Right', 'ultima'),
                    'sidebar-33-left'  => esc_html__('Sidebar 1/3 Left', 'ultima'),
                    'sidebar-25-left'  => esc_html__('Sidebar 1/4 Left', 'ultima'),
                )
            )
        );

        if(count($custom_sidebars) > 0) {
            ultima_qodef_create_meta_box_field(array(
                'name'        => 'qodef_custom_sidebar_meta',
                'type'        => 'selectblank',
                'label'       => esc_html__('Choose Widget Area in Sidebar', 'ultima'),
                'description' => esc_html__('Choose Custom Widget area to display in Sidebar"', 'ultima'),
                'parent'      => $sidebar_meta_box,
                'options'     => $custom_sidebars
            ));
        }

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_sidebar_meta_box_settings_map');
}
