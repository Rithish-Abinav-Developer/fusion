<?php

if(!function_exists('ultima_qodef_general_options_map')) {
    /**
     * General options page
     */
    function ultima_qodef_general_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '',
                'title' => esc_html__('General', 'ultima'),
                'icon'  => 'fa fa-institution'
            )
        );

        $panel_design_style = ultima_qodef_add_admin_panel(
            array(
                'page'  => '',
                'name'  => 'panel_design_style',
                'title' => esc_html__('Design Style', 'ultima')
            )
        );
	
	    ultima_qodef_add_admin_field(
		    array(
			    'name'          => 'enable_google_fonts',
			    'type'          => 'yesno',
			    'default_value' => 'yes',
			    'label'         => esc_html__( 'Enable Google Fonts', 'ultima' ),
			    'parent'        => $panel_design_style,
			    'args'          => array(
				    "dependence"             => true,
				    "dependence_hide_on_yes" => "",
				    "dependence_show_on_yes" => "#qodef_google_fonts_container"
			    )
		    )
	    );
	
	    $google_fonts_container = ultima_qodef_add_admin_container(
		    array(
			    'parent'          => $panel_design_style,
			    'name'            => 'google_fonts_container',
			    'hidden_property' => 'enable_google_fonts',
			    'hidden_value'    => 'no'
		    )
	    );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'google_fonts',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Google Font Family', 'ultima'),
                'description'   => esc_html__('Choose a default Google font for your site', 'ultima'),
                'parent'        => $google_fonts_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'additional_google_fonts',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Additional Google Fonts', 'ultima'),
                'description'   => '',
                'parent'        => $google_fonts_container,
                'args'          => array(
                    "dependence"             => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#qodef_additional_google_fonts_container"
                )
            )
        );

        $additional_google_fonts_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $google_fonts_container,
                'name'            => 'additional_google_fonts_container',
                'hidden_property' => 'additional_google_fonts',
                'hidden_value'    => 'no'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'additional_google_font1',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
                'description'   => esc_html__('Choose additional Google font for your site', 'ultima'),
                'parent'        => $additional_google_fonts_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'additional_google_font2',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
                'description'   => esc_html__('Choose additional Google font for your site', 'ultima'),
                'parent'        => $additional_google_fonts_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'additional_google_font3',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
                'description'   => esc_html__('Choose additional Google font for your site', 'ultima'),
                'parent'        => $additional_google_fonts_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'additional_google_font4',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
                'description'   => esc_html__('Choose additional Google font for your site', 'ultima'),
                'parent'        => $additional_google_fonts_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'additional_google_font5',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
                'description'   => esc_html__('Choose additional Google font for your site', 'ultima'),
                'parent'        => $additional_google_fonts_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'additional_google_font6',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
                'description'   => esc_html__('Choose additional Google font for your site', 'ultima'),
                'parent'        => $additional_google_fonts_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'google_font_weight',
                'type'          => 'checkboxgroup',
                'default_value' => '',
                'label'         => esc_html__('Google Fonts Style & Weight', 'ultima'),
                'description'   => esc_html__('Choose a default Google font weights for your site. Impact on page load time', 'ultima'),
                'parent'        => $google_fonts_container,
                'options'       => array(
                    '100'       => esc_html__('100 Thin', 'ultima'),
                    '100italic' => esc_html__('100 Thin Italic', 'ultima'),
                    '200'       => esc_html__('200 Extra-Light', 'ultima'),
                    '200italic' => esc_html__('200 Extra-Light Italic', 'ultima'),
                    '300'       => esc_html__('300 Light', 'ultima'),
                    '300italic' => esc_html__('300 Light Italic', 'ultima'),
                    '400'       => esc_html__('400 Regular', 'ultima'),
                    '400italic' => esc_html__('400 Regular Italic', 'ultima'),
                    '500'       => esc_html__('500 Medium', 'ultima'),
                    '500italic' => esc_html__('500 Medium Italic', 'ultima'),
                    '600'       => esc_html__('600 Semi-Bold', 'ultima'),
                    '600italic' => esc_html__('600 Semi-Bold Italic', 'ultima'),
                    '700'       => esc_html__('700 Bold', 'ultima'),
                    '700italic' => esc_html__('700 Bold Italic', 'ultima'),
                    '800'       => esc_html__('800 Extra-Bold', 'ultima'),
                    '800italic' => esc_html__('800 Extra-Bold Italic', 'ultima'),
                    '900'       => esc_html__('900 Ultra-Bold', 'ultima'),
                    '900italic' => esc_html__('900 Ultra-Bold Italic', 'ultima')
                ),
                'args'          => array(
                    'enable_empty_checkbox' => true,
                    'inline_checkbox_class' => true
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'google_font_subset',
                'type'          => 'checkboxgroup',
                'default_value' => '',
                'label'         => esc_html__('Google Fonts Subset', 'ultima'),
                'description'   => esc_html__('Choose a default Google font subsets for your site', 'ultima'),
                'parent'        => $google_fonts_container,
                'options'       => array(
                    'latin'        => esc_html__('Latin', 'ultima'),
                    'latin-ext'    => esc_html__('Latin Extended', 'ultima'),
                    'cyrillic'     => esc_html__('Cyrillic', 'ultima'),
                    'cyrillic-ext' => esc_html__('Cyrillic Extended', 'ultima'),
                    'greek'        => esc_html__('Greek', 'ultima'),
                    'greek-ext'    => esc_html__('Greek Extended', 'ultima'),
                    'vietnamese'   => esc_html__('Vietnamese', 'ultima')
                ),
                'args'          => array(
                    'enable_empty_checkbox' => true,
                    'inline_checkbox_class' => true
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'first_color',
                'type'        => 'color',
                'label'       => esc_html__('First Main Color', 'ultima'),
                'description' => esc_html__('Choose the most dominant theme color. Default color is #ff1d4d', 'ultima'),
                'parent'      => $panel_design_style
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'page_background_color',
                'type'        => 'color',
                'label'       => esc_html__('Page Background Color', 'ultima'),
                'description' => esc_html__('Choose the background color for page content. Default color is #ffffff', 'ultima'),
                'parent'      => $panel_design_style
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'selection_color',
                'type'        => 'color',
                'label'       => esc_html__('Text Selection Color', 'ultima'),
                'description' => esc_html__('Choose the color users see when selecting text', 'ultima'),
                'parent'      => $panel_design_style
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'boxed',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Boxed Layout', 'ultima'),
                'description'   => '',
                'parent'        => $panel_design_style,
                'args'          => array(
                    "dependence"             => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#qodef_boxed_container"
                )
            )
        );

        $boxed_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $panel_design_style,
                'name'            => 'boxed_container',
                'hidden_property' => 'boxed',
                'hidden_value'    => 'no'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'page_background_color_in_box',
                'type'        => 'color',
                'label'       => esc_html__('Page Background Color', 'ultima'),
                'description' => esc_html__('Choose the page background color outside box.', 'ultima'),
                'parent'      => $boxed_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'boxed_background_image',
                'type'        => 'image',
                'label'       => esc_html__('Background Image', 'ultima'),
                'description' => esc_html__('Choose an image to be displayed in background', 'ultima'),
                'parent'      => $boxed_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'boxed_pattern_background_image',
                'type'        => 'image',
                'label'       => esc_html__('Background Pattern', 'ultima'),
                'description' => esc_html__('Choose an image to be used as background pattern', 'ultima'),
                'parent'      => $boxed_container
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'boxed_background_image_attachment',
                'type'          => 'select',
                'default_value' => 'fixed',
                'label'         => esc_html__('Background Image Attachment', 'ultima'),
                'description'   => esc_html__('Choose background image attachment', 'ultima'),
                'parent'        => $boxed_container,
                'options'       => array(
                    'fixed'  => esc_html__('Fixed', 'ultima'),
                    'scroll' => esc_html__('Scroll', 'ultima')
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'initial_content_width',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Initial Width of Content', 'ultima'),
                'description'   => esc_html__('Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid"', 'ultima'),
                'parent'        => $panel_design_style,
                'options'       => array(
                    ""          => esc_html__('1100px - default', 'ultima'),
                    "grid-1300" => esc_html__('1300px', 'ultima'),
                    "grid-1200" => esc_html__('1200px', 'ultima'),
                    "grid-1000" => esc_html__('1000px', 'ultima'),
                    "grid-800"  => esc_html__('800px', 'ultima')
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'preload_pattern_image',
                'type'        => 'image',
                'label'       => esc_html__('Preload Pattern Image', 'ultima'),
                'description' => esc_html__('Choose preload pattern image to be displayed until images are loaded ', 'ultima'),
                'parent'      => $panel_design_style
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'element_appear_amount',
                'type'        => 'text',
                'label'       => esc_html__('Element Appearance', 'ultima'),
                'description' => esc_html__('For animated elements, set distance (related to browser bottom) to start the animation', 'ultima'),
                'parent'      => $panel_design_style,
                'args'        => array(
                    'col_width' => 2,
                    'suffix'    => 'px'
                )
            )
        );

        $panel_settings = ultima_qodef_add_admin_panel(
            array(
                'page'  => '',
                'name'  => 'panel_settings',
                'title' => esc_html__('Settings', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'smooth_scroll',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Smooth Scroll', 'ultima'),
                'description'   => esc_html__('Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)', 'ultima'),
                'parent'        => $panel_settings
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'smooth_page_transitions',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Smooth Page Transitions', 'ultima'),
                'description'   => esc_html__('Enabling this option will perform a smooth transition between pages when clicking on links.', 'ultima'),
                'parent'        => $panel_settings,
                'args'          => array(
                    "dependence"             => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#qodef_page_transitions_container"
                )
            )
        );

        $page_transitions_container = ultima_qodef_add_admin_container(
            array(
                'parent'          => $panel_settings,
                'name'            => 'page_transitions_container',
                'hidden_property' => 'smooth_page_transitions',
                'hidden_value'    => 'no'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'   => 'smooth_pt_bgnd_color',
                'type'   => 'color',
                'label'  => 'Page Loader Background Color',
                //'description'   => 'Enabling this option will perform a smooth transition between pages when clicking on links.',
                'parent' => $page_transitions_container
            )
        );

        $group_pt_spinner_animation = ultima_qodef_add_admin_group(array(
            'name'        => 'group_pt_spinner_animation',
            'title'       => esc_html__('Loader Style', 'ultima'),
            'description' => esc_html__('Define styles for loader spinner animation', 'ultima'),
            'parent'      => $page_transitions_container
        ));

        $row_pt_spinner_animation = ultima_qodef_add_admin_row(array(
            'name'   => 'row_pt_spinner_animation',
            'parent' => $group_pt_spinner_animation
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'selectsimple',
            'name'          => 'smooth_pt_spinner_type',
            'default_value' => '',
            'label'         => esc_html__('Spinner Type', 'ultima'),
            'parent'        => $row_pt_spinner_animation,
            'options'       => array(
                "pulse"                 => esc_html__('Pulse', 'ultima'),
                "double_pulse"          => esc_html__('Double Pulse', 'ultima'),
                "cube"                  => esc_html__('Cube', 'ultima'),
                "rotating_cubes"        => esc_html__('Rotating Cubes', 'ultima'),
                "stripes"               => esc_html__('Stripes', 'ultima'),
                "wave"                  => esc_html__('Wave', 'ultima'),
                "two_rotating_circles"  => esc_html__('2 Rotating Circles', 'ultima'),
                "five_rotating_circles" => esc_html__('5 Rotating Circles', 'ultima'),
                "atom"                  => esc_html__('Atom', 'ultima'),
                "clock"                 => esc_html__('Clock', 'ultima'),
                "mitosis"               => esc_html__('Mitosis', 'ultima'),
                "lines"                 => esc_html__('Lines', 'ultima'),
                "fussion"               => esc_html__('Fussion', 'ultima'),
                "wave_circles"          => esc_html__('Wave Circles', 'ultima'),
                "pulse_circles"         => esc_html__('Pulse Circles', 'ultima')
            )
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'colorsimple',
            'name'          => 'smooth_pt_spinner_color',
            'default_value' => '',
            'label'         => esc_html__('Spinner Color', 'ultima'),
            'parent'        => $row_pt_spinner_animation
        ));


        ultima_qodef_add_admin_field(
            array(
                'name'          => 'show_back_button',
                'type'          => 'yesno',
                'default_value' => 'yes',
                'label'         => esc_html__('Show "Back To Top Button"', 'ultima'),
                'description'   => esc_html__('Enabling this option will display a Back to Top button on every page', 'ultima'),
                'parent'        => $panel_settings
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'          => 'responsiveness',
                'type'          => 'yesno',
                'default_value' => 'yes',
                'label'         => esc_html__('Responsiveness', 'ultima'),
                'description'   => esc_html__('Enabling this option will make all pages responsive', 'ultima'),
                'parent'        => $panel_settings
            )
        );

        $panel_custom_code = ultima_qodef_add_admin_panel(
            array(
                'page'  => '',
                'name'  => 'panel_custom_code',
                'title' => esc_html__('Custom Code', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'custom_css',
                'type'        => 'textarea',
                'label'       => esc_html__('Custom CSS', 'ultima'),
                'description' => esc_html__('Enter your custom CSS here', 'ultima'),
                'parent'      => $panel_custom_code
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'custom_js',
                'type'        => 'textarea',
                'label'       => esc_html__('Custom JS', 'ultima'),
                'description' => esc_html__('Enter your custom Javascript here', 'ultima'),
                'parent'      => $panel_custom_code
            )
        );

        $panel_google_api = ultima_qodef_add_admin_panel(
            array(
                'page'  => '',
                'name'  => 'panel_google_api',
                'title' => esc_html__('Google API', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'name'        => 'google_maps_api_key',
                'type'        => 'text',
                'label'       => esc_html__('Google Maps Api Key', 'ultima'),
                'description' => esc_html__('Insert your Google Maps API key here. For instructions on how to create a Google Maps API key, please refer to our to our documentation.', 'ultima'),
                'parent'      => $panel_google_api
            )
        );

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_general_options_map', 1);

}