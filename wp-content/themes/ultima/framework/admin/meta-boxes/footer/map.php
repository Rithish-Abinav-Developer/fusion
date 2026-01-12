<?php

if(!function_exists('ultima_qodef_footer_meta_box_settings_map')) {
    
    function ultima_qodef_footer_meta_box_settings_map() {

        $footer_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('Footer', 'ultima'),
                'name'  => 'footer_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_disable_footer_meta',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Disable Footer for this Page', 'ultima'),
                'description'   => esc_html__('Enabling this option will hide footer on this page', 'ultima'),
                'parent'        => $footer_meta_box,
            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_footer_meta_box_settings_map');
}