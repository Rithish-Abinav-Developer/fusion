<?php

/*** Video Post Format ***/
if(!function_exists('ultima_qodef_video_post_meta_box_settings_map')) {

    function ultima_qodef_video_post_meta_box_settings_map() {

        $video_post_format_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Video Post Format', 'ultima'),
                'name'  => 'post_format_video_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'          => 'qodef_video_type_meta',
                'type'          => 'select',
                'label'         => esc_html__('Video Type', 'ultima'),
                'description'   => esc_html__('Choose video type', 'ultima'),
                'parent'        => $video_post_format_meta_box,
                'default_value' => 'social_networks',
                'options'       => array(
                    'social_networks' => esc_html__('Youtube or Vimeo', 'ultima'),
                    'self'            => esc_html__('Self Hosted', 'ultima')
                ),
                'args'          => array(
                    'dependence' => true,
                    'hide'       => array(
                        'social_networks' => '#qodef_qodef_video_self_hosted_container',
                        'self'            => '#qodef_qodef_video_embedded_container'
                    ),
                    'show'       => array(
                        'social_networks' => '#qodef_qodef_video_embedded_container',
                        'self'            => '#qodef_qodef_video_self_hosted_container'
                    )
                )
            )
        );

        $qodef_video_embedded_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $video_post_format_meta_box,
                'name'            => 'qodef_video_embedded_container',
                'hidden_property' => 'qodef_video_type_meta',
                'hidden_value'    => 'self'
            )
        );

        $qodef_video_self_hosted_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $video_post_format_meta_box,
                'name'            => 'qodef_video_self_hosted_container',
                'hidden_property' => 'qodef_video_type_meta',
                'hidden_value'    => 'social_networks'
            )
        );


        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_post_video_link_meta',
                'type'        => 'text',
                'label'       => esc_html__('Video URL', 'ultima'),
                'description' => esc_html__('Enter Video URL', 'ultima'),
                'parent'      => $qodef_video_embedded_container,

            )
        );


        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_post_video_image_meta',
                'type'        => 'image',
                'label'       => esc_html__('Video Image', 'ultima'),
                'description' => esc_html__('Upload video image', 'ultima'),
                'parent'      => $qodef_video_self_hosted_container,

            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_post_video_webm_link_meta',
                'type'        => 'text',
                'label'       => esc_html__('Video WEBM', 'ultima'),
                'description' => esc_html__('Enter video URL for WEBM format', 'ultima'),
                'parent'      => $qodef_video_self_hosted_container,

            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_post_video_mp4_link_meta',
                'type'        => 'text',
                'label'       => esc_html__('Video MP4', 'ultima'),
                'description' => esc_html__('Enter video URL for MP4 format', 'ultima'),
                'parent'      => $qodef_video_self_hosted_container,

            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_post_video_ogv_link_meta',
                'type'        => 'text',
                'label'       => esc_html__('Video OGV', 'ultima'),
                'description' => esc_html__('Enter video URL for OGV format', 'ultima'),
                'parent'      => $qodef_video_self_hosted_container,

            )
        );

    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_video_post_meta_box_settings_map');
}