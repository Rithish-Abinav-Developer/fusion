<?php

/*** Gallery Post Format ***/
if(!function_exists('ultima_qodef_gallery_post_meta_box_settings_map')) {

    function ultima_qodef_gallery_post_meta_box_settings_map() {

        $gallery_post_format_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Gallery Post Format', 'ultima'),
                'name'  => 'post_format_gallery_meta'
            )
        );

        ultima_qodef_add_multiple_images_field(
            array(
                'name'        => 'qodef_post_gallery_images_meta',
                'label'       => esc_html__('Gallery Images', 'ultima'),
                'description' => esc_html__('Choose your gallery images', 'ultima'),
                'parent'      => $gallery_post_format_meta_box,
            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_gallery_post_meta_box_settings_map');
}
