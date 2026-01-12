<?php

if(!function_exists('ultima_qodef_register_footer_sidebar')) {

    function ultima_qodef_register_footer_sidebar() {

        register_sidebar(array(
            'name'          => esc_html__('Footer Column 1', 'ultima'),
            'id'            => 'footer_column_1',
            'description'   => esc_html__('Footer Column 1', 'ultima'),
            'before_widget' => '<div id="%1$s" class="widget qodef-footer-column-1 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="qodef-footer-widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => esc_html__('Footer Column 2', 'ultima'),
            'id'            => 'footer_column_2',
            'description'   => esc_html__('Footer Column 2', 'ultima'),
            'before_widget' => '<div id="%1$s" class="widget qodef-footer-column-2 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="qodef-footer-widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => esc_html__('Footer Column 3', 'ultima'),
            'id'            => 'footer_column_3',
            'description'   => esc_html__('Footer Column 3', 'ultima'),
            'before_widget' => '<div id="%1$s" class="widget qodef-footer-column-3 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="qodef-footer-widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => esc_html__('Footer Column 4', 'ultima'),
            'id'            => 'footer_column_4',
            'description'   => esc_html__('Footer Column 4', 'ultima'),
            'before_widget' => '<div id="%1$s" class="widget qodef-footer-column-4 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="qodef-footer-widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => esc_html__('Footer Bottom', 'ultima'),
            'id'            => 'footer_text',
            'description'   => esc_html__('Footer Bottom', 'ultima'),
            'before_widget' => '<div id="%1$s" class="widget qodef-footer-text %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="qodef-footer-widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => esc_html__('Footer Bottom Left', 'ultima'),
            'id'            => 'footer_bottom_left',
            'description'   => esc_html__('Footer Bottom Left', 'ultima'),
            'before_widget' => '<div id="%1$s" class="widget qodef-footer-bottom-left %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="qodef-footer-widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => esc_html__('Footer Bottom Right', 'ultima'),
            'id'            => 'footer_bottom_right',
            'description'   => esc_html__('Footer Bottom Right', 'ultima'),
            'before_widget' => '<div id="%1$s" class="widget qodef-footer-bottom-left %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="qodef-footer-widget-title">',
            'after_title'   => '</h4>'
        ));

    }

    add_action('widgets_init', 'ultima_qodef_register_footer_sidebar');

}

if(!function_exists('ultima_qodef_get_footer')) {
    /**
     * Loads footer HTML
     */
    function ultima_qodef_get_footer() {

        $parameters                          = array();
        $id                                  = ultima_qodef_get_page_id();
        $parameters['footer_classes']        = ultima_qodef_get_footer_classes($id);
        $parameters['display_footer_top']    = (ultima_qodef_options()->getOptionValue('show_footer_top') == 'yes') ? true : false;
        $parameters['display_footer_bottom'] = (ultima_qodef_options()->getOptionValue('show_footer_bottom') == 'yes') ? true : false;

        if(!is_active_sidebar('footer_column_1') && !is_active_sidebar('footer_column_2') && !is_active_sidebar('footer_column_3') && !is_active_sidebar('footer_column_4')) {
            $parameters['display_footer_top'] = false;
        }

        if(!is_active_sidebar('footer_bottom_left') && !is_active_sidebar('footer_text') && !is_active_sidebar('footer_bottom_right')) {
            $parameters['display_footer_bottom'] = false;
        }

        ultima_qodef_get_module_template_part('templates/footer', 'footer', '', $parameters);

    }

    add_action('ultima_qodef_get_footer_template', 'ultima_qodef_get_footer');

}

if(!function_exists('ultima_qodef_get_content_bottom_area')) {
    /**
     * Loads content bottom area HTML with all needed parameters
     */
    function ultima_qodef_get_content_bottom_area() {

        $parameters = array();

        //Current page id
        $id = ultima_qodef_get_page_id();

        //is content bottom area enabled for current page?
        $parameters['content_bottom_area'] = ultima_qodef_get_meta_field_intersect('enable_content_bottom_area', $id);
        if($parameters['content_bottom_area'] == 'yes') {
            //Sidebar for content bottom area
            $parameters['content_bottom_area_sidebar'] = ultima_qodef_get_meta_field_intersect('content_bottom_sidebar_custom_display', $id);
            //Content bottom area in grid
            $parameters['content_bottom_area_in_grid'] = ultima_qodef_get_meta_field_intersect('content_bottom_in_grid', $id);
            //Content bottom area background color
            $parameters['content_bottom_background_color'] = 'background-color: '.ultima_qodef_get_meta_field_intersect('content_bottom_background_color', $id);
        }

        ultima_qodef_get_module_template_part('templates/parts/content-bottom-area', 'footer', '', $parameters);

    }

}

if(!function_exists('ultima_qodef_get_footer_top')) {
    /**
     * Return footer top HTML
     */
    function ultima_qodef_get_footer_top() {

        $parameters = array();

        $parameters['footer_top_border']         = ultima_qodef_get_footer_top_border();
        $parameters['footer_top_border_in_grid'] = (ultima_qodef_options()->getOptionValue('footer_top_border_in_grid') == 'yes') ? 'qodef-in-grid' : '';
        $parameters['footer_in_grid']            = (ultima_qodef_options()->getOptionValue('footer_in_grid') == 'yes') ? true : false;
        $parameters['footer_top_classes']        = ultima_qodef_footer_top_classes();
        $parameters['footer_top_columns']        = ultima_qodef_options()->getOptionValue('footer_top_columns');

        ultima_qodef_get_module_template_part('templates/parts/footer-top', 'footer', '', $parameters);

    }

}

if(!function_exists('ultima_qodef_get_footer_bottom')) {
    /**
     * Return footer bottom HTML
     */
    function ultima_qodef_get_footer_bottom() {

        $parameters = array();

        $parameters['footer_bottom_border']         = ultima_qodef_get_footer_bottom_border();
        $parameters['footer_bottom_border_in_grid'] = (ultima_qodef_options()->getOptionValue('footer_bottom_border_in_grid') == 'yes') ? 'qodef-in-grid' : '';
        $parameters['footer_in_grid']               = (ultima_qodef_options()->getOptionValue('footer_in_grid') == 'yes') ? true : false;
        $parameters['footer_bottom_columns']        = ultima_qodef_options()->getOptionValue('footer_bottom_columns');
        $parameters['footer_bottom_border_bottom']  = ultima_qodef_get_footer_bottom_bottom_border();

        ultima_qodef_get_module_template_part('templates/parts/footer-bottom', 'footer', '', $parameters);

    }

}

//Functions for loading sidebars

if(!function_exists('ultima_qodef_get_footer_sidebar_25_25_50')) {

    function ultima_qodef_get_footer_sidebar_25_25_50() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-three-columns-25-25-50', 'footer');
    }

}

if(!function_exists('ultima_qodef_get_footer_sidebar_50_25_25')) {

    function ultima_qodef_get_footer_sidebar_50_25_25() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-three-columns-50-25-25', 'footer');
    }

}

if(!function_exists('ultima_qodef_get_footer_sidebar_four_columns')) {

    function ultima_qodef_get_footer_sidebar_four_columns() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-four-columns', 'footer');
    }

}

if(!function_exists('ultima_qodef_get_footer_sidebar_three_columns')) {

    function ultima_qodef_get_footer_sidebar_three_columns() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-three-columns', 'footer');
    }

}

if(!function_exists('ultima_qodef_get_footer_sidebar_two_columns')) {

    function ultima_qodef_get_footer_sidebar_two_columns() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-two-columns', 'footer');
    }

}

if(!function_exists('ultima_qodef_get_footer_sidebar_one_column')) {

    function ultima_qodef_get_footer_sidebar_one_column() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-one-column', 'footer');
    }

}

if(!function_exists('ultima_qodef_get_footer_bottom_sidebar_three_columns')) {

    function ultima_qodef_get_footer_bottom_sidebar_three_columns() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-bottom-three-columns', 'footer');
    }

}

if(!function_exists('ultima_qodef_get_footer_bottom_sidebar_two_columns')) {

    function ultima_qodef_get_footer_bottom_sidebar_two_columns() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-bottom-two-columns', 'footer');
    }

}

if(!function_exists('ultima_qodef_get_footer_bottom_sidebar_one_column')) {

    function ultima_qodef_get_footer_bottom_sidebar_one_column() {
        ultima_qodef_get_module_template_part('templates/sidebars/sidebar-bottom-one-column', 'footer');
    }

}

