<?php

//Slider

if(!function_exists('ultima_qodef_slider_meta_box_settings_map')) {

    function ultima_qodef_slider_meta_box_settings_map() {

        $slider_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('slides'),
                'title' => esc_html__('Slide Background', 'ultima'),
                'name'  => 'slides_type'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_slide_background_type',
                'type'          => 'select',
                'default_value' => 'image',
                'label'         => esc_html__('Slide Background Type', 'ultima'),
                'description'   => esc_html__('Do you want to upload an image or video?', 'ultima'),
                'parent'        => $slider_meta_box,
                'options'       => array(
                    "image" => esc_html__('Image', 'ultima'),
                    "video" => esc_html__('Video', 'ultima')
                ),
                'args'          => array(
                    "dependence" => true,
                    "hide"       => array(
                        "image" => "#qodef_qodef_slides_video_settings",
                        "video" => "#qodef_qodef_slides_image_settings"
                    ),
                    "show"       => array(
                        "image" => "#qodef_qodef_slides_image_settings",
                        "video" => "#qodef_qodef_slides_video_settings"
                    )
                )
            )
        );


//Slide Image

        $image_meta_container = ultima_qodef_add_admin_container(
            array(
                'name'            => 'qodef_slides_image_settings',
                'parent'          => $slider_meta_box,
                'hidden_property' => 'qodef_slide_background_type',
                'hidden_values'   => array('video')
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_slide_image',
                'type'        => 'image',
                'label'       => esc_html__('Slide Image', 'ultima'),
                'description' => esc_html__('Choose background image', 'ultima'),
                'parent'      => $image_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_slide_overlay_image',
                'type'        => 'image',
                'label'       => esc_html__('Overlay Image', 'ultima'),
                'description' => esc_html__('Choose overlay image (pattern) for background image', 'ultima'),
                'parent'      => $image_meta_container
            )
        );


//Slide Video

        $video_meta_container = ultima_qodef_add_admin_container(
            array(
                'name'            => 'qodef_slides_video_settings',
                'parent'          => $slider_meta_box,
                'hidden_property' => 'qodef_slide_background_type',
                'hidden_values'   => array('image')
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_slide_video_webm',
                'type'        => 'text',
                'label'       => esc_html__('Video - webm', 'ultima'),
                'description' => esc_html__('Path to the webm file that you have previously uploaded in Media Section', 'ultima'),
                'parent'      => $video_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_slide_video_mp4',
                'type'        => 'text',
                'label'       => esc_html__('Video - mp4', 'ultima'),
                'description' => esc_html__('Path to the mp4 file that you have previously uploaded in Media Section', 'ultima'),
                'parent'      => $video_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_slide_video_ogv',
                'type'        => 'text',
                'label'       => esc_html__('Video - ogv', 'ultima'),
                'description' => esc_html__('Path to the ogv file that you have previously uploaded in Media Section', 'ultima'),
                'parent'      => $video_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_slide_video_image',
                'type'        => 'image',
                'label'       => esc_html__('Video Preview Image', 'ultima'),
                'description' => esc_html__('Choose background image that will be visible until video is loaded. This image will be shown on touch devices too.', 'ultima'),
                'parent'      => $video_meta_container
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_slide_video_overlay',
                'type'          => 'yesempty',
                'default_value' => '',
                'label'         => esc_html__('Video Overlay Image', 'ultima'),
                'description'   => esc_html__('Do you want to have a overlay image on video?', 'ultima'),
                'parent'        => $video_meta_container,
                'args'          => array(
                    "dependence"             => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#qodef_qodef_slide_video_overlay_container"
                )
            )
        );

        $slide_video_overlay_container = ultima_qodef_add_admin_container(array(
            'name'            => 'qodef_slide_video_overlay_container',
            'parent'          => $video_meta_container,
            'hidden_property' => 'qodef_slide_video_overlay',
            'hidden_values'   => array('', 'no')
        ));

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_slide_video_overlay_image',
                'type'        => 'image',
                'label'       => esc_html__('Overlay Image', 'ultima'),
                'description' => esc_html__('Choose overlay image (pattern) for background video.', 'ultima'),
                'parent'      => $slide_video_overlay_container
            )
        );


//Slide Elements

        $elements_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('slides'),
                'title' => esc_html__('Slide Elements', 'ultima'),
                'name'  => 'qodef_slides_elements'
            )
        );

        ultima_qodef_add_admin_section_title(
            array(
                'parent' => $elements_meta_box,
                'name'   => 'qodef_slides_elements_frame',
                'title'  => esc_html__('Elements Holder Frame', 'ultima')
            )
        );

        ultima_qodef_add_slide_holder_frame_scheme(
            array(
                'parent' => $elements_meta_box
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_slide_holder_elements_alignment',
                'type'          => 'select',
                'label'         => esc_html__('Elements Alignment', 'ultima'),
                'description'   => esc_html__('How elements are aligned with respect to the Holder Frame', 'ultima'),
                'parent'        => $elements_meta_box,
                'default_value' => 'center',
                'options'       => array(
                    "center" => esc_html__('Center', 'ultima'),
                    "left"   => esc_html__('Left', 'ultima'),
                    "right"  => esc_html__('Right', 'ultima'),
                    "custom" => esc_html__('Custom', 'ultima')
                ),
                'args'          => array(
                    "dependence" => true,
                    "hide"       => array(
                        "center" => "#qodef_qodef_slide_holder_frame_height",
                        "left"   => "#qodef_qodef_slide_holder_frame_height",
                        "right"  => "#qodef_qodef_slide_holder_frame_height",
                        "custom" => ""
                    ),
                    "show"       => array(
                        "center" => "",
                        "left"   => "",
                        "right"  => "",
                        "custom" => "#qodef_qodef_slide_holder_frame_height"
                    )
                )
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_slide_holder_frame_in_grid',
                'type'          => 'select',
                'label'         => esc_html__('Holder Frame in Grid?', 'ultima'),
                'description'   => esc_html__('Whether to keep the holder frame width the same as that of the grid.', 'ultima'),
                'parent'        => $elements_meta_box,
                'default_value' => 'no',
                'options'       => array(
                    "yes" => esc_html__('Yes', 'ultima'),
                    "no"  => esc_html__('No', 'ultima')
                ),
                'args'          => array(
                    "dependence" => true,
                    "hide"       => array(
                        "yes" => "#qodef_qodef_slide_holder_frame_width, #qodef_qodef_holder_frame_responsive_container",
                        "no"  => ""
                    ),
                    "show"       => array(
                        "yes" => "",
                        "no"  => "#qodef_qodef_slide_holder_frame_width, #qodef_qodef_holder_frame_responsive_container"
                    )
                )
            )
        );

        $holder_frame = ultima_qodef_add_admin_group(array(
            'title'       => esc_html__('Holder Frame Properties', 'ultima'),
            'description' => esc_html__('The frame is always positioned centrally on the slide. All elements are positioned and sized relatively to the holder frame. Refer to the scheme above.', 'ultima'),
            'name'        => 'qodef_holder_frame',
            'parent'      => $elements_meta_box
        ));

        $row1 = ultima_qodef_add_admin_row(array(
            'name'   => 'row1',
            'parent' => $holder_frame
        ));

        $holder_frame_width = ultima_qodef_create_meta_box_field(
            array(
                'name'            => 'qodef_slide_holder_frame_width',
                'type'            => 'textsimple',
                'label'           => esc_html__('Relative width (C/A*100)', 'ultima'),
                'parent'          => $row1,
                'hidden_property' => 'qodef_slide_holder_frame_in_grid',
                'hidden_values'   => array('yes')
            )
        );

        $holder_frame_height = ultima_qodef_create_meta_box_field(
            array(
                'name'            => 'qodef_slide_holder_frame_height',
                'type'            => 'textsimple',
                'label'           => esc_html__('Height to width ratio (D/C*100)', 'ultima'),
                'parent'          => $row1,
                'hidden_property' => 'qodef_slide_holder_elements_alignment',
                'hidden_values'   => array('center', 'left', 'right')
            )
        );

        $holder_frame_responsive_container = ultima_qodef_add_admin_container(array(
            'name'            => 'qodef_holder_frame_responsive_container',
            'parent'          => $elements_meta_box,
            'hidden_property' => 'qodef_slide_holder_frame_in_grid',
            'hidden_values'   => array('yes')
        ));

        $holder_frame_responsive = ultima_qodef_add_admin_group(array(
            'title'       => esc_html__('Responsive Relative Width', 'ultima'),
            'description' => esc_html__('Enter different relative widths of the holder frame for each responsive stage. Leave blank to have the frame width scale proportionally to the screen size.', 'ultima'),
            'name'        => 'qodef_holder_frame_responsive',
            'parent'      => $holder_frame_responsive_container
        ));

        $screen_widths_holder_frame = array(
            // These values must match those in qode.layout.inc, slider.php and shortcodes.js
            "mobile"  => 600,
            "tabletp" => 800,
            "tabletl" => 1024,
            "laptop"  => 1440
        );

        $row2 = ultima_qodef_add_admin_row(array(
            'name'   => 'row2',
            'parent' => $holder_frame_responsive
        ));

        $holder_frame_width = ultima_qodef_create_meta_box_field(
            array(
                'name'   => 'qodef_slide_holder_frame_width_mobile',
                'type'   => 'textsimple',
                'label'  => 'Mobile (up to '.$screen_widths_holder_frame["mobile"].'px)',
                'parent' => $row2
            )
        );

        $holder_frame_height = ultima_qodef_create_meta_box_field(
            array(
                'name'   => 'qodef_slide_holder_frame_width_tablet_p',
                'type'   => 'textsimple',
                'label'  => 'Tablet - Portrait ('.($screen_widths_holder_frame["mobile"] + 1).'px - '.$screen_widths_holder_frame["tabletp"].'px)',
                'parent' => $row2
            )
        );

        $holder_frame_height = ultima_qodef_create_meta_box_field(
            array(
                'name'   => 'qodef_slide_holder_frame_width_tablet_l',
                'type'   => 'textsimple',
                'label'  => 'Tablet - Landscape ('.($screen_widths_holder_frame["tabletp"] + 1).'px - '.$screen_widths_holder_frame["tabletl"].'px)',
                'parent' => $row2
            )
        );

        $row3 = ultima_qodef_add_admin_row(array(
            'name'   => 'row3',
            'parent' => $holder_frame_responsive
        ));

        $holder_frame_width = ultima_qodef_create_meta_box_field(
            array(
                'name'   => 'qodef_slide_holder_frame_width_laptop',
                'type'   => 'textsimple',
                'label'  => 'Laptop ('.($screen_widths_holder_frame["tabletl"] + 1).'px - '.$screen_widths_holder_frame["laptop"].'px)',
                'parent' => $row3
            )
        );

        $holder_frame_height = ultima_qodef_create_meta_box_field(
            array(
                'name'   => 'qodef_slide_holder_frame_width_desktop',
                'type'   => 'textsimple',
                'label'  => 'Desktop (above '.$screen_widths_holder_frame["laptop"].'px)',
                'parent' => $row3
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'parent'      => $elements_meta_box,
                'type'        => 'text',
                'name'        => 'qodef_slide_elements_default_width',
                'label'       => esc_html__('Default Screen Width in px (A)', 'ultima'),
                'description' => esc_html__('All elements marked as responsive scale at the ratio of the actual screen width to this screen width. Default is 1920px.', 'ultima')
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'parent'        => $elements_meta_box,
                'type'          => 'select',
                'name'          => 'qodef_slide_elements_default_animation',
                'default_value' => 'none',
                'label'         => esc_html__('Default Elements Animation', 'ultima'),
                'description'   => esc_html__('This animation will be applied to all elements except those with their own animation settings.', 'ultima'),
                'options'       => array(
                    "none"        => esc_html__('No Animation', 'ultima'),
                    "flip"        => esc_html__('Flip', 'ultima'),
                    "spin"        => esc_html__('Spin', 'ultima'),
                    "fade"        => esc_html__('Fade In', 'ultima'),
                    "from_bottom" => esc_html__('Fly In From Bottom', 'ultima'),
                    "from_top"    => esc_html__('Fly In From Top', 'ultima'),
                    "from_left"   => esc_html__('Fly In From Left', 'ultima'),
                    "from_right"  => esc_html__('Fly In From Right', 'ultima')
                )
            )
        );

        ultima_qodef_add_admin_section_title(
            array(
                'parent' => $elements_meta_box,
                'name'   => 'qodef_slides_elements_list',
                'title'  => esc_html__('Elements', 'ultima')
            )
        );

        $slide_elements = ultima_qodef_add_slide_elements_framework(
            array(
                'parent' => $elements_meta_box,
                'name'   => 'qodef_slides_elements_holder'
            )
        );

//Slide Behaviour

        $behaviours_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('slides'),
                'title' => esc_html__('Slide Behaviours', 'ultima'),
                'name'  => 'qodef_slides_behaviour_settings'
            )
        );

        ultima_qodef_add_admin_section_title(
            array(
                'parent' => $behaviours_meta_box,
                'name'   => 'qodef_header_styling_title',
                'title'  => esc_html__('Header', 'ultima')
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'parent'        => $behaviours_meta_box,
                'type'          => 'selectblank',
                'name'          => 'qodef_slide_header_style',
                'default_value' => '',
                'label'         => esc_html__('Header Style', 'ultima'),
                'description'   => esc_html__('Header style will be applied when this slide is in focus', 'ultima'),
                'options'       => array(
                    "light" => esc_html__('Light', 'ultima'),
                    "dark"  => esc_html__('Dark', 'ultima')
                )
            )
        );

        ultima_qodef_add_admin_section_title(
            array(
                'parent' => $behaviours_meta_box,
                'name'   => 'qodef_image_animation_title',
                'title'  => esc_html__('Slide Image Animation', 'ultima')
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_enable_image_animation',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Enable Image Animation', 'ultima'),
                'description'   => esc_html__('Enabling this option will turn on a motion animation on the slide image', 'ultima'),
                'parent'        => $behaviours_meta_box,
                'args'          => array(
                    "dependence"             => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#qodef_qodef_enable_image_animation_container"
                )
            )
        );

        $enable_image_animation_container = ultima_qodef_add_admin_container(array(
            'name'            => 'qodef_enable_image_animation_container',
            'parent'          => $behaviours_meta_box,
            'hidden_property' => 'qodef_enable_image_animation',
            'hidden_value'    => 'no'
        ));

        ultima_qodef_create_meta_box_field(
            array(
                'parent'        => $enable_image_animation_container,
                'type'          => 'select',
                'name'          => 'qodef_enable_image_animation_type',
                'default_value' => 'zoom_center',
                'label'         => esc_html__('Animation Type', 'ultima'),
                'options'       => array(
                    "zoom_center"       => esc_html__('Zoom In Center', 'ultima'),
                    "zoom_top_left"     => esc_html__('Zoom In to Top Left', 'ultima'),
                    "zoom_top_right"    => esc_html__('Zoom In to Top Right', 'ultima'),
                    "zoom_bottom_left"  => esc_html__('Zoom In to Bottom Left', 'ultima'),
                    "zoom_bottom_right" => esc_html__('Zoom In to Bottom Right', 'ultima')
                )
            )
        );
    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_slider_meta_box_settings_map');
}