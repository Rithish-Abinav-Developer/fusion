<?php

//Testimonials

if(!function_exists('ultima_qodef_testimonial_meta_box_settings_map')) {

    function ultima_qodef_testimonial_meta_box_settings_map() {

        $testimonial_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('testimonials'),
                'title' => esc_html__('Testimonial', 'ultima'),
                'name'  => 'testimonial_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_testimonial_title',
                'type'        => 'text',
                'label'       => esc_html__('Title', 'ultima'),
                'description' => esc_html__('Enter testimonial title', 'ultima'),
                'parent'      => $testimonial_meta_box,
            )
        );


        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_testimonial_author',
                'type'        => 'text',
                'label'       => esc_html__('Author', 'ultima'),
                'description' => esc_html__('Enter author name', 'ultima'),
                'parent'      => $testimonial_meta_box,
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_testimonial_author_position',
                'type'        => 'text',
                'label'       => esc_html__('Job Position', 'ultima'),
                'description' => esc_html__('Enter job position', 'ultima'),
                'parent'      => $testimonial_meta_box,
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_testimonial_text',
                'type'        => 'text',
                'label'       => esc_html__('Text', 'ultima'),
                'description' => esc_html__('Enter testimonial text', 'ultima'),
                'parent'      => $testimonial_meta_box,
            )
        );
    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_testimonial_meta_box_settings_map');
}