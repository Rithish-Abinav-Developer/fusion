<?php

if(!function_exists('ultima_qodef_sidebar_options_map')) {

    function ultima_qodef_sidebar_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_sidebar_page',
                'title' => esc_html__('Sidebar', 'ultima'),
                'icon'  => 'fa fa-bars'
            )
        );

        $panel_widgets = ultima_qodef_add_admin_panel(
            array(
                'page'  => '_sidebar_page',
                'name'  => 'panel_widgets',
                'title' => esc_html__('Widgets', 'ultima')
            )
        );

        /**
         * Navigation style
         */
        ultima_qodef_add_admin_field(array(
            'type'          => 'color',
            'name'          => 'sidebar_background_color',
            'default_value' => '',
            'label'         => esc_html__('Sidebar Background Color', 'ultima'),
            'description'   => esc_html__('Choose background color for sidebar', 'ultima'),
            'parent'        => $panel_widgets
        ));

        $group_sidebar_padding = ultima_qodef_add_admin_group(array(
            'name'   => 'group_sidebar_padding',
            'title'  => esc_html__('Padding', 'ultima'),
            'parent' => $panel_widgets
        ));

        $row_sidebar_padding = ultima_qodef_add_admin_row(array(
            'name'   => 'row_sidebar_padding',
            'parent' => $group_sidebar_padding
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'textsimple',
            'name'          => 'sidebar_padding_top',
            'default_value' => '',
            'label'         => esc_html__('Top Padding', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            ),
            'parent'        => $row_sidebar_padding
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'textsimple',
            'name'          => 'sidebar_padding_right',
            'default_value' => '',
            'label'         => esc_html__('Right Padding', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            ),
            'parent'        => $row_sidebar_padding
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'textsimple',
            'name'          => 'sidebar_padding_bottom',
            'default_value' => '',
            'label'         => esc_html__('Bottom Padding', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            ),
            'parent'        => $row_sidebar_padding
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'textsimple',
            'name'          => 'sidebar_padding_left',
            'default_value' => '',
            'label'         => esc_html__('Left Padding', 'ultima'),
            'args'          => array(
                'suffix' => 'px'
            ),
            'parent'        => $row_sidebar_padding
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'select',
            'name'          => 'sidebar_alignment',
            'default_value' => '',
            'label'         => esc_html__('Text Alignment', 'ultima'),
            'description'   => esc_html__('Choose text aligment', 'ultima'),
            'options'       => array(
                'left'   => esc_html__('Left', 'ultima'),
                'center' => esc_html__('Center', 'ultima'),
                'right'  => esc_html__('Right', 'ultima')
            ),
            'parent'        => $panel_widgets
        ));

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_sidebar_options_map', 12);

}