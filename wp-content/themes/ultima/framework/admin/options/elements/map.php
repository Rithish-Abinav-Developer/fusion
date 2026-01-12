<?php

if(!function_exists('ultima_qodef_load_elements_map')) {
    /**
     * Add Elements option page for shortcodes
     */
    function ultima_qodef_load_elements_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_elements_page',
                'title' => esc_html__('Elements', 'ultima'),
                'icon'  => 'fa fa-header'
            )
        );

        do_action('ultima_qodef_options_elements_map');

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_load_elements_map', 8);

}