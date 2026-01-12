<?php

if(!function_exists('ultima_qodef_carousel_meta_box_settings_map')) {
    
    function ultima_qodef_carousel_meta_box_settings_map() {

//Carousels

        $carousel_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('carousels'),
                'title' => esc_html__('Carousel', 'ultima'),
                'name'  => 'carousel_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_carousel_image',
                'type'        => 'image',
                'label'       => esc_html__('Carousel Image', 'ultima'),
                'description' => esc_html__('Choose carousel image (min width needs to be 215px)', 'ultima'),
                'parent'      => $carousel_meta_box
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_carousel_hover_image',
                'type'        => 'image',
                'label'       => esc_html__('Carousel Hover Image', 'ultima'),
                'description' => esc_html__('Choose carousel hover image (min width needs to be 215px)', 'ultima'),
                'parent'      => $carousel_meta_box
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_carousel_item_link',
                'type'        => 'text',
                'label'       => esc_html__('Link', 'ultima'),
                'description' => esc_html__('Enter the URL to which you want the image to link to (e.g. http://www.example.com)', 'ultima'),
                'parent'      => $carousel_meta_box
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_carousel_item_target',
                'type'        => 'selectblank',
                'label'       => esc_html__('Target', 'ultima'),
                'description' => esc_html__('Specify where to open the linked document', 'ultima'),
                'parent'      => $carousel_meta_box,
                'options'     => array(
                    '_self'  => esc_html__('Self', 'ultima'),
                    '_blank' => esc_html__('Blank', 'ultima')
                )
            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_carousel_meta_box_settings_map');
}