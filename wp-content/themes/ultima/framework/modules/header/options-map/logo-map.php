<?php

if(!function_exists('ultima_qodef_logo_options_map')) {

    function ultima_qodef_logo_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_logo_page',
                'title' => esc_html__('Logo', 'ultima'),
                'icon'  => 'fa fa-coffee'
            )
        );

        $panel_logo = ultima_qodef_add_admin_panel(
            array(
                'page'  => '_logo_page',
                'name'  => 'panel_logo',
                'title' => esc_html__('Logo', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $panel_logo,
                'type'          => 'yesno',
                'name'          => 'hide_logo',
                'default_value' => 'no',
                'label'         => esc_html__('Hide Logo', 'ultima'),
                'description'   => esc_html__('Enabling this option will hide logo image', 'ultima'),
                'args'          => array(
                    "dependence"             => true,
                    "dependence_hide_on_yes" => "#qodef_hide_logo_container",
                    "dependence_show_on_yes" => ""
                )
            )
        );

        $hide_logo_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $panel_logo,
                'name'            => 'hide_logo_container',
                'hidden_property' => 'hide_logo',
                'hidden_value'    => 'yes'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'logo_image',
                'type'          => 'image',
                'default_value' => QODE_ASSETS_ROOT."/img/logo.png",
                'label'         => esc_html__('Logo Image - Default', 'ultima'),
                'description'   => esc_html__('Choose a default logo image to display ', 'ultima'),
                'parent'        => $hide_logo_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'logo_image_dark',
                'type'          => 'image',
                'default_value' => QODE_ASSETS_ROOT."/img/logo.png",
                'label'         => esc_html__('Logo Image - Dark', 'ultima'),
                'description'   => esc_html__('Choose a default logo image to display ', 'ultima'),
                'parent'        => $hide_logo_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'logo_image_light',
                'type'          => 'image',
                'default_value' => QODE_ASSETS_ROOT."/img/logo.png",
                'label'         => esc_html__('Logo Image - Light', 'ultima'),
                'description'   => esc_html__('Choose a default logo image to display ', 'ultima'),
                'parent'        => $hide_logo_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'logo_image_sticky',
                'type'          => 'image',
                'default_value' => QODE_ASSETS_ROOT."/img/logo.png",
                'label'         => esc_html__('Logo Image - Sticky', 'ultima'),
                'description'   => esc_html__('Choose a default logo image to display ', 'ultima'),
                'parent'        => $hide_logo_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'logo_image_mobile',
                'type'          => 'image',
                'default_value' => QODE_ASSETS_ROOT."/img/logo.png",
                'label'         => esc_html__('Logo Image - Mobile', 'ultima'),
                'description'   => esc_html__('Choose a default logo image to display ', 'ultima'),
                'parent'        => $hide_logo_container
            )
        );

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_logo_options_map', 2);

}