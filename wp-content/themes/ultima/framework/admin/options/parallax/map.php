<?php

if(!function_exists('ultima_qodef_parallax_options_map')) {
    /**
     * Parallax options page
     */
    function ultima_qodef_parallax_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_parallax_page',
                'title' => esc_html__('Parallax', 'ultima'),
                'icon'  => 'fa fa-unsorted'
            )
        );

        $panel_parallax = ultima_qodef_add_admin_panel(
            array(
                'page'  => '_parallax_page',
                'name'  => 'panel_parallax',
                'title' => esc_html__('Parallax', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(array(
            'type'          => 'onoff',
            'name'          => 'parallax_on_off',
            'default_value' => 'off',
            'label'         => esc_html__('Parallax on touch devices', 'ultima'),
            'description'   => esc_html__('Enabling this option will allow parallax on touch devices', 'ultima'),
            'parent'        => $panel_parallax
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'text',
            'name'          => 'parallax_min_height',
            'default_value' => '400',
            'label'         => esc_html__('Parallax Min Height', 'ultima'),
            'description'   => esc_html__('Set a minimum height for parallax images on small displays (phones, tablets, etc.)', 'ultima'),
            'args'          => array(
                'col_width' => 3,
                'suffix'    => 'px'
            ),
            'parent'        => $panel_parallax
        ));

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_parallax_options_map', 19);

}