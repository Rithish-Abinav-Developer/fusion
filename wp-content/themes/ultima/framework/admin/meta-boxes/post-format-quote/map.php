<?php

/*** Quote Post Format ***/
if(!function_exists('ultima_qodef__quote_post_meta_box_settings_map')) {

    function ultima_qodef__quote_post_meta_box_settings_map() {

        $quote_post_format_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Quote Post Format', 'ultima'),
                'name'  => 'post_format_quote_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_post_quote_text_meta',
                'type'        => 'text',
                'label'       => esc_html__('Quote Text', 'ultima'),
                'description' => esc_html__('Enter Quote text', 'ultima'),
                'parent'      => $quote_post_format_meta_box,

            )
        );
    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef__quote_post_meta_box_settings_map');
}
