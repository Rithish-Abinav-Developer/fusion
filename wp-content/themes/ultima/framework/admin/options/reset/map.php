<?php

if(!function_exists('ultima_qodef_reset_options_map')) {
    /**
     * Reset options panel
     */
    function ultima_qodef_reset_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_reset_page',
                'title' => esc_html__('Reset', 'ultima'),
                'icon'  => 'fa fa-retweet'
            )
        );

        $panel_reset = ultima_qodef_add_admin_panel(
            array(
                'page'  => '_reset_page',
                'name'  => 'panel_reset',
                'title' => esc_html__('Reset', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'reset_to_defaults',
            'default_value' => 'no',
            'label'         => esc_html__('Reset to Defaults', 'ultima'),
            'description'   => esc_html__('This option will reset all Select Options values to defaults', 'ultima'),
            'parent'        => $panel_reset
        ));

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_reset_options_map', 100);

}