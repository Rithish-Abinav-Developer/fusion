<?php

/*** Link Post Format ***/

if(!function_exists('ultima_qodef_link_post_meta_box_settings_map')) {
    
    function ultima_qodef_link_post_meta_box_settings_map() {

        $link_post_format_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Link Post Format', 'ultima'),
                'name'  => 'post_format_link_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_post_link_link_meta',
                'type'        => 'text',
                'label'       => esc_html__('Link', 'ultima'),
                'description' => esc_html__('Enter link', 'ultima'),
                'parent'      => $link_post_format_meta_box,

            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_link_post_meta_box_settings_map');
}