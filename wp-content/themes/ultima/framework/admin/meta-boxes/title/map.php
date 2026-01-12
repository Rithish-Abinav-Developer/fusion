<?php

if(!function_exists('ultima_qodef_title_meta_box_settings_map')) {

    function ultima_qodef_title_meta_box_settings_map() {

        $title_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('Title', 'ultima'),
                'name'  => 'title_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_show_title_area_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Show Title Area', 'ultima'),
                'description'   => esc_html__('Disabling this option will turn off page title area', 'ultima'),
                'parent'        => $title_meta_box,
                'options'       => array(
                    ''    => '',
                    'no'  => esc_html__('No', 'ultima'),
                    'yes' => esc_html__('Yes', 'ultima')
                ),
                'args'          => array(
                    "dependence" => true,
                    "hide"       => array(
                        ""    => "",
                        "no"  => "#qodef_qodef_show_title_area_meta_container",
                        "yes" => ""
                    ),
                    "show"       => array(
                        ""    => "#qodef_qodef_show_title_area_meta_container",
                        "no"  => "",
                        "yes" => "#qodef_qodef_show_title_area_meta_container"
                    )
                )
            )
        );

        $show_title_area_meta_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $title_meta_box,
                'name'            => 'qodef_show_title_area_meta_container',
                'hidden_property' => 'qodef_show_title_area_meta',
                'hidden_value'    => 'no'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_title_area_type_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Title Area Type', 'ultima'),
                'description'   => esc_html__('Choose title type', 'ultima'),
                'parent'        => $show_title_area_meta_container,
                'options'       => array(
                    ''           => '',
                    'standard'   => esc_html__('Standard', 'ultima'),
                    'breadcrumb' => esc_html__('Breadcrumb', 'ultima')
                ),
                'args'          => array(
                    "dependence" => true,
                    "hide"       => array(
                        "standard"   => "",
                        "standard"   => "",
                        "breadcrumb" => "#qodef_qodef_title_area_type_meta_container"
                    ),
                    "show"       => array(
                        ""           => "#qodef_qodef_title_area_type_meta_container",
                        "standard"   => "#qodef_qodef_title_area_type_meta_container",
                        "breadcrumb" => ""
                    )
                )
            )
        );

        $title_area_type_meta_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $show_title_area_meta_container,
                'name'            => 'qodef_title_area_type_meta_container',
                'hidden_property' => 'qodef_title_area_type_meta',
                'hidden_value'    => '',
                'hidden_values'   => array('breadcrumb'),
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_title_area_enable_breadcrumbs_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Enable Breadcrumbs', 'ultima'),
                'description'   => esc_html__('This option will display Breadcrumbs in Title Area', 'ultima'),
                'parent'        => $title_area_type_meta_container,
                'options'       => array(
                    ''    => '',
                    'no'  => esc_html__('No', 'ultima'),
                    'yes' => esc_html__('Yes', 'ultima')
                ),
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_title_area_animation_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Animations', 'ultima'),
                'description'   => esc_html__('Choose an animation for Title Area', 'ultima'),
                'parent'        => $show_title_area_meta_container,
                'options'       => array(
                    ''           => '',
                    'no'         => esc_html__('No Animation', 'ultima'),
                    'right-left' => esc_html__('Text right to left', 'ultima'),
                    'left-right' => esc_html__('Text left to right', 'ultima')
                )
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_title_area_vertial_alignment_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Vertical Alignment', 'ultima'),
                'description'   => 'Specify title vertical alignment',
                'parent'        => $show_title_area_meta_container,
                'options'       => array(
                    ''              => '',
                    'header_bottom' => esc_html__('From Bottom of Header', 'ultima'),
                    'window_top'    => esc_html__('From Window Top', 'ultima')
                )
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_title_area_content_alignment_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Horizontal Alignment', 'ultima'),
                'description'   => esc_html__('Specify title horizontal alignment', 'ultima'),
                'parent'        => $show_title_area_meta_container,
                'options'       => array(
                    ''       => '',
                    'left'   => esc_html__('Left', 'ultima'),
                    'center' => esc_html__('Center', 'ultima'),
                    'right'  => esc_html__('Right', 'ultima')
                )
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_title_text_color_meta',
                'type'        => 'color',
                'label'       => esc_html__('Title Color', 'ultima'),
                'description' => esc_html__('Choose a color for title text', 'ultima'),
                'parent'      => $show_title_area_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_title_breadcrumb_color_meta',
                'type'        => 'color',
                'label'       => esc_html__('Breadcrumb Color', 'ultima'),
                'description' => esc_html__('Choose a color for breadcrumb text', 'ultima'),
                'parent'      => $show_title_area_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_title_area_background_color_meta',
                'type'        => 'color',
                'label'       => esc_html__('Background Color', 'ultima'),
                'description' => esc_html__('Choose a background color for Title Area', 'ultima'),
                'parent'      => $show_title_area_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_hide_background_image_meta',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Hide Background Image', 'ultima'),
                'description'   => esc_html__('Enable this option to hide background image in Title Area', 'ultima'),
                'parent'        => $show_title_area_meta_container,
                'args'          => array(
                    "dependence"             => true,
                    "dependence_hide_on_yes" => "#qodef_qodef_hide_background_image_meta_container",
                    "dependence_show_on_yes" => ""
                )
            )
        );

        $hide_background_image_meta_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $show_title_area_meta_container,
                'name'            => 'qodef_hide_background_image_meta_container',
                'hidden_property' => 'qodef_hide_background_image_meta',
                'hidden_value'    => 'yes'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_title_area_background_image_meta',
                'type'        => 'image',
                'label'       => esc_html__('Background Image', 'ultima'),
                'description' => esc_html__('Choose an Image for Title Area', 'ultima'),
                'parent'      => $hide_background_image_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_title_area_background_image_responsive_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Background Responsive Image', 'ultima'),
                'description'   => esc_html__('Enabling this option will make Title background image responsive', 'ultima'),
                'parent'        => $hide_background_image_meta_container,
                'options'       => array(
                    ''    => '',
                    'no'  => esc_html__('No', 'ultima'),
                    'yes' => esc_html__('Yes', 'ultima')
                ),
                'args'          => array(
                    "dependence" => true,
                    "hide"       => array(
                        ""    => "",
                        "no"  => "",
                        "yes" => "#qodef_qodef_title_area_background_image_responsive_meta_container, #qodef_qodef_title_area_height_meta"
                    ),
                    "show"       => array(
                        ""    => "#qodef_qodef_title_area_background_image_responsive_meta_container, #qodef_qodef_title_area_height_meta",
                        "no"  => "#qodef_qodef_title_area_background_image_responsive_meta_container, #qodef_qodef_title_area_height_meta",
                        "yes" => ""
                    )
                )
            )
        );

        $title_area_background_image_responsive_meta_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $hide_background_image_meta_container,
                'name'            => 'qodef_title_area_background_image_responsive_meta_container',
                'hidden_property' => 'qodef_title_area_background_image_responsive_meta',
                'hidden_value'    => 'yes'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_title_area_background_image_parallax_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Background Image in Parallax', 'ultima'),
                'description'   => esc_html__('Enabling this option will make Title background image parallax', 'ultima'),
                'parent'        => $title_area_background_image_responsive_meta_container,
                'options'       => array(
                    ''         => '',
                    'no'       => esc_html__('No', 'ultima'),
                    'yes'      => esc_html__('Yes', 'ultima'),
                    'yes_zoom' => esc_html__('Yes, with zoom out', 'ultima')
                )
            )
        );

        ultima_qodef_create_meta_box_field(array(
            'name'        => 'qodef_title_area_height_meta',
            'type'        => 'text',
            'label'       => esc_html__('Height', 'ultima'),
            'description' => esc_html__('Set a height for Title Area', 'ultima'),
            'parent'      => $show_title_area_meta_container,
            'args'        => array(
                'col_width' => 2,
                'suffix'    => 'px'
            )
        ));

        ultima_qodef_create_meta_box_field(array(
            'name'          => 'qodef_title_area_subtitle_meta',
            'type'          => 'text',
            'default_value' => '',
            'label'         => esc_html__('Subtitle Text', 'ultima'),
            'description'   => esc_html__('Enter your subtitle text', 'ultima'),
            'parent'        => $show_title_area_meta_container,
            'args'          => array(
                'col_width' => 6
            )
        ));

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_subtitle_color_meta',
                'type'        => 'color',
                'label'       => esc_html__('Subtitle Color', 'ultima'),
                'description' => esc_html__('Choose a color for subtitle text', 'ultima'),
                'parent'      => $show_title_area_meta_container
            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_title_meta_box_settings_map');
}