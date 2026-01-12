<?php

/*** Audio Post Format ***/

if(!function_exists('ultima_qodef_audio_meta_box_settings_map')) {

    function ultima_qodef_audio_meta_box_settings_map() {

        $audio_post_format_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Audio Post Format', 'ultima'),
                'name'  => 'post_format_audio_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_post_audio_link_meta',
                'type'        => 'text',
                'label'       => esc_html__('Link', 'ultima'),
                'description' => esc_html__('Enter audion link', 'ultima'),
                'parent'      => $audio_post_format_meta_box,

            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_audio_meta_box_settings_map');
}