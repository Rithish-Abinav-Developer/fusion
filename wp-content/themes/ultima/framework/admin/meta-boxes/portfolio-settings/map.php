<?php

if(!function_exists('ultima_qodef_map_portfolio_settings')) {
    
    function ultima_qodef_map_portfolio_settings() {
        
        $meta_box = ultima_qodef_create_meta_box(array(
            'scope' => 'portfolio-item',
            'title' => esc_html__('Portfolio Settings', 'ultima'),
            'name'  => 'portfolio_settings_meta_box'
        ));

        ultima_qodef_create_meta_box_field(array(
            'name'        => 'qodef_portfolio_single_template_meta',
            'type'        => 'select',
            'label'       => esc_html__('Portfolio Type', 'ultima'),
            'description' => esc_html__('Choose a default type for Single Project pages', 'ultima'),
            'parent'      => $meta_box,
            'options'     => array(
                ''                       => esc_html__('Default', 'ultima'),
                'small-images'           => esc_html__('Portfolio small images', 'ultima'),
                'small-slider'           => esc_html__('Portfolio small slider', 'ultima'),
                'big-images'             => esc_html__('Portfolio big images', 'ultima'),
                'big-slider'             => esc_html__('Portfolio big slider', 'ultima'),
                'gallery'                => esc_html__('Portfolio gallery', 'ultima'),
                'masonry-gallery-left'   => esc_html__('Portfolio masonry gallery left', 'ultima'),
                'masonry-gallery-bottom' => esc_html__('Portfolio masonry gallery bottom', 'ultima'),
                'pinterest'              => esc_html__('Portfolio pinterest', 'ultima'),
                'custom'                 => esc_html__('Portfolio custom', 'ultima'),
                'full-width-custom'      => esc_html__('Portfolio full width custom', 'ultima')


            )
        ));

        $all_pages = array();
        $pages     = get_pages();
        foreach($pages as $page) {
            $all_pages[$page->ID] = $page->post_title;
        }

        ultima_qodef_create_meta_box_field(array(
            'name'        => 'portfolio_single_back_to_link',
            'type'        => 'select',
            'label'       => esc_html__('"Back To" Link', 'ultima'),
            'description' => esc_html__('Choose "Back To" page to link from portfolio Single Project page', 'ultima'),
            'parent'      => $meta_box,
            'options'     => $all_pages
        ));

        ultima_qodef_create_meta_box_field(array(
            'name'        => 'portfolio_external_link',
            'type'        => 'text',
            'label'       => esc_html__('Portfolio External Link', 'ultima'),
            'description' => esc_html__('Enter URL to link from Portfolio List page', 'ultima'),
            'parent'      => $meta_box,
            'args'        => array(
                'col_width' => 3
            )
        ));

        ultima_qodef_create_meta_box_field(array(
            'name'        => 'portfolio_masonry_dimenisions',
            'type'        => 'select',
            'label'       => esc_html__('Dimensions for Masonry', 'ultima'),
            'description' => esc_html__('Choose image layout when it appears in Masonry type portfolio lists', 'ultima'),
            'parent'      => $meta_box,
            'options'     => array(
                'default'            => esc_html__('Default', 'ultima'),
                'large_width'        => esc_html__('Large width', 'ultima'),
                'large_height'       => esc_html__('Large height', 'ultima'),
                'large_width_height' => esc_html__('Large width/height', 'ultima')
            )
        ));
    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_map_portfolio_settings');
}