<?php

if(!function_exists('ultima_qodef_portfolio_options_map')) {

    function ultima_qodef_portfolio_options_map() {

        ultima_qodef_add_admin_page(array(
            'slug'  => '_portfolio',
            'title' => esc_html__('Portfolio', 'ultima'),
            'icon'  => 'fa fa-camera-retro'
        ));

        $panel = ultima_qodef_add_admin_panel(array(
            'title' => esc_html__('Portfolio Single', 'ultima'),
            'name'  => 'panel_portfolio_single',
            'page'  => '_portfolio'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_template',
            'type'          => 'select',
            'label'         => esc_html__('Portfolio Type', 'ultima'),
            'default_value' => 'small-images',
            'description'   => esc_html__('Choose a default type for Single Project pages', 'ultima'),
            'parent'        => $panel,
            'options'       => array(
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

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_lightbox_images',
            'type'          => 'yesno',
            'label'         => esc_html__('Lightbox for Images', 'ultima'),
            'description'   => esc_html__('Enabling this option will turn on lightbox functionality for projects with images.', 'ultima'),
            'parent'        => $panel,
            'default_value' => 'yes'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_lightbox_videos',
            'type'          => 'yesno',
            'label'         => esc_html__('Lightbox for Videos', 'ultima'),
            'description'   => esc_html__('Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.', 'ultima'),
            'parent'        => $panel,
            'default_value' => 'no'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_hide_categories',
            'type'          => 'yesno',
            'label'         => esc_html__('Hide Categories', 'ultima'),
            'description'   => esc_html__('Enabling this option will disable category meta description on Single Projects.', 'ultima'),
            'parent'        => $panel,
            'default_value' => 'no'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_hide_date',
            'type'          => 'yesno',
            'label'         => esc_html__('Hide Date', 'ultima'),
            'description'   => esc_html__('Enabling this option will disable date meta on Single Projects.', 'ultima'),
            'parent'        => $panel,
            'default_value' => 'no'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_comments',
            'type'          => 'yesno',
            'label'         => esc_html__('Show Comments', 'ultima'),
            'description'   => esc_html__('Enabling this option will show comments on your page.', 'ultima'),
            'parent'        => $panel,
            'default_value' => 'no'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_sticky_sidebar',
            'type'          => 'yesno',
            'label'         => esc_html__('Sticky Side Text', 'ultima'),
            'description'   => esc_html__('Enabling this option will make side text sticky on Single Project pages', 'ultima'),
            'parent'        => $panel,
            'default_value' => 'yes'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_hide_pagination',
            'type'          => 'yesno',
            'label'         => esc_html__('Hide Pagination', 'ultima'),
            'description'   => esc_html__('Enabling this option will turn off portfolio pagination functionality.', 'ultima'),
            'parent'        => $panel,
            'default_value' => 'no',
            'args'          => array(
                'dependence'             => true,
                'dependence_hide_on_yes' => '#qodef_navigate_same_category_container'
            )
        ));

        $container_navigate_category = ultima_qodef_add_admin_container(array(
            'name'            => 'navigate_same_category_container',
            'parent'          => $panel,
            'hidden_property' => 'portfolio_single_hide_pagination',
            'hidden_value'    => 'yes'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_nav_same_category',
            'type'          => 'yesno',
            'label'         => esc_html__('Enable Pagination Through Same Category', 'ultima'),
            'description'   => esc_html__('Enabling this option will make portfolio pagination sort through current category.', 'ultima'),
            'parent'        => $container_navigate_category,
            'default_value' => 'no'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'portfolio_single_numb_columns',
            'type'          => 'select',
            'label'         => esc_html__('Number of Columns', 'ultima'),
            'default_value' => 'three-columns',
            'description'   => esc_html__('Enter the number of columns for Portfolio Gallery type', 'ultima'),
            'parent'        => $panel,
            'options'       => array(
                'two-columns'   => esc_html__('2 columns', 'ultima'),
                'three-columns' => esc_html__('3 columns', 'ultima'),
                'four-columns'  => esc_html__('4 columns', 'ultima')
            )
        ));

        ultima_qodef_add_admin_field(array(
            'name'        => 'portfolio_single_slug',
            'type'        => 'text',
            'label'       => esc_html__('Portfolio Single Slug', 'ultima'),
            'description' => esc_html__('Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect)', 'ultima'),
            'parent'      => $panel,
            'args'        => array(
                'col_width' => 3
            )
        ));

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_portfolio_options_map', 14);

}