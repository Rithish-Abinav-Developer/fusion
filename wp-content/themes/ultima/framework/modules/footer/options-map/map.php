<?php

if(!function_exists('ultima_qodef_footer_options_map')) {
    /**
     * Add footer options
     */
    function ultima_qodef_footer_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_footer_page',
                'title' => esc_html__('Footer', 'ultima'),
                'icon'  => 'fa fa-sort-amount-asc'
            )
        );

        $footer_panel = ultima_qodef_add_admin_panel(
            array(
                'title' => esc_html__('Footer', 'ultima'),
                'name'  => 'footer',
                'page'  => '_footer_page'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'uncovering_footer',
                'default_value' => 'no',
                'label'         => esc_html__('Uncovering Footer', 'ultima'),
                'description'   => esc_html__('Enabling this option will make Footer gradually appear on scroll', 'ultima'),
                'parent'        => $footer_panel,
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'footer_in_grid',
                'default_value' => 'yes',
                'label'         => esc_html__('Footer in Grid', 'ultima'),
                'description'   => esc_html__('Enabling this option will place Footer content in grid', 'ultima'),
                'parent'        => $footer_panel,
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'show_footer_top',
                'default_value' => 'yes',
                'label'         => esc_html__('Show Footer Top', 'ultima'),
                'description'   => esc_html__('Enabling this option will show Footer Top area', 'ultima'),
                'args'          => array(
                    'dependence'             => true,
                    'dependence_hide_on_yes' => '',
                    'dependence_show_on_yes' => '#qodef_show_footer_top_container'
                ),
                'parent'        => $footer_panel,
            )
        );

        $show_footer_top_container = ultima_qodef_add_admin_container(
            array(
                'name'            => 'show_footer_top_container',
                'hidden_property' => 'show_footer_top',
                'hidden_value'    => 'no',
                'parent'          => $footer_panel
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'footer_top_columns',
                'default_value' => '4',
                'label'         => esc_html__('Footer Top Columns', 'ultima'),
                'description'   => esc_html__('Choose number of columns for Footer Top area', 'ultima'),
                'options'       => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '5' => '3(25%+25%+50%)',
                    '6' => '3(50%+25%+25%)',
                    '4' => '4'
                ),
                'parent'        => $show_footer_top_container,
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'footer_top_columns_alignment',
                'default_value' => '',
                'label'         => esc_html__('Footer Top Columns Alignment', 'ultima'),
                'description'   => esc_html__('Text Alignment in Footer Columns', 'ultima'),
                'options'       => array(
                    'left'   => esc_html__('Left', 'ultima'),
                    'center' => esc_html__('Center', 'ultima'),
                    'right'  => esc_html__('Right', 'ultima')
                ),
                'parent'        => $show_footer_top_container,
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'show_footer_bottom',
                'default_value' => 'yes',
                'label'         => esc_html__('Show Footer Bottom', 'ultima'),
                'description'   => esc_html__('Enabling this option will show Footer Bottom area', 'ultima'),
                'args'          => array(
                    'dependence'             => true,
                    'dependence_hide_on_yes' => '',
                    'dependence_show_on_yes' => '#qodef_show_footer_bottom_container'
                ),
                'parent'        => $footer_panel,
            )
        );

        $show_footer_bottom_container = ultima_qodef_add_admin_container(
            array(
                'name'            => 'show_footer_bottom_container',
                'hidden_property' => 'show_footer_bottom',
                'hidden_value'    => 'no',
                'parent'          => $footer_panel
            )
        );


        ultima_qodef_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'footer_bottom_columns',
                'default_value' => '3',
                'label'         => esc_html__('Footer Bottom Columns', 'ultima'),
                'description'   => esc_html__('Choose number of columns for Footer Bottom area', 'ultima'),
                'options'       => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3'
                ),
                'parent'        => $show_footer_bottom_container,
            )
        );

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_footer_options_map', 5);

}