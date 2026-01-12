<?php

if(!function_exists('ultima_qodef_fullscreen_menu_options_map')) {

    function ultima_qodef_fullscreen_menu_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_fullscreen_menu_page',
                'title' => esc_html__('Fullscreen Menu', 'ultima'),
                'icon'  => 'fa fa-arrows-alt'
            )
        );

        $fullscreen_panel = ultima_qodef_add_admin_panel(
            array(
                'title' => esc_html__('Fullscreen Menu', 'ultima'),
                'name'  => 'fullscreen_menu',
                'page'  => '_fullscreen_menu_page'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $fullscreen_panel,
                'type'          => 'select',
                'name'          => 'fullscreen_menu_animation_style',
                'default_value' => 'fade-push-text-right',
                'label'         => esc_html__('Fullscreen Menu Overlay Animation', 'ultima'),
                'description'   => esc_html__('Choose animation type for fullscreen menu overlay', 'ultima'),
                'options'       => array(
                    'fade-push-text-right' => esc_html__('Fade Push Text Right', 'ultima'),
                    'fade-push-text-top'   => esc_html__('Fade Push Text Top', 'ultima'),
                    'fade-text-scaledown'  => esc_html__('Fade Text Scaledown', 'ultima')
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $fullscreen_panel,
                'type'          => 'image',
                'name'          => 'fullscreen_logo',
                'default_value' => '',
                'label'         => esc_html__('Logo in Fullscreen Menu Overlay', 'ultima'),
                'description'   => esc_html__('Place logo in top left corner of fullscreen menu overlay', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $fullscreen_panel,
                'type'          => 'yesno',
                'name'          => 'fullscreen_in_grid',
                'default_value' => 'no',
                'label'         => esc_html__('Fullscreen Menu in Grid', 'ultima'),
                'description'   => esc_html__('Enabling this option will put fullscreen menu content in grid', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $fullscreen_panel,
                'type'          => 'selectblank',
                'name'          => 'fullscreen_alignment',
                'default_value' => '',
                'label'         => esc_html__('Fullscreen Menu Alignment', 'ultima'),
                'description'   => esc_html__('Choose alignment for fullscreen menu content', 'ultima'),
                'options'       => array(
                    "left"   => esc_html__('Left', 'ultima'),
                    "center" => esc_html__('Center', 'ultima'),
                    "right"  => esc_html__('Right', 'ultima')
                )
            )
        );

        $background_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $fullscreen_panel,
                'name'        => 'background_group',
                'title'       => esc_html__('Background', 'ultima'),
                'description' => esc_html__('Select a background color and transparency for Fullscreen Menu (0 = fully transparent, 1 = opaque)', 'ultima')

            )
        );

        $background_group_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $background_group,
                'name'   => 'background_group_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $background_group_row,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_background_color',
                'default_value' => '',
                'label'         => esc_html__('Background Color', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $background_group_row,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_background_transparency',
                'default_value' => '',
                'label'         => esc_html__('Transparency (values:0-1)', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $fullscreen_panel,
                'type'          => 'image',
                'name'          => 'fullscreen_menu_background_image',
                'default_value' => '',
                'label'         => esc_html__('Background Image', 'ultima'),
                'description'   => esc_html__('Choose a background image for Fullscreen Menu background', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $fullscreen_panel,
                'type'          => 'image',
                'name'          => 'fullscreen_menu_pattern_image',
                'default_value' => '',
                'label'         => esc_html__('Pattern Background Image', 'ultima'),
                'description'   => esc_html__('Choose a pattern image for Fullscreen Menu background', 'ultima')
            )
        );

//1st level style group
        $first_level_style_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $fullscreen_panel,
                'name'        => 'first_level_style_group',
                'title'       => esc_html__('1st Level Style', 'ultima'),
                'description' => esc_html__('Define styles for 1st level in Fullscreen Menu', 'ultima')
            )
        );

        $first_level_style_row1 = ultima_qodef_add_admin_row(
            array(
                'parent' => $first_level_style_group,
                'name'   => 'first_level_style_row1'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_color',
                'default_value' => '',
                'label'         => esc_html__('Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_hover_color',
                'default_value' => '',
                'label'         => esc_html__('Hover Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_active_color',
                'default_value' => '',
                'label'         => esc_html__('Active Text Color', 'ultima'),
            )
        );

        $first_level_style_row2 = ultima_qodef_add_admin_row(
            array(
                'parent' => $first_level_style_group,
                'name'   => 'first_level_style_row2'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row2,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_hover_background_color',
                'default_value' => '',
                'label'         => esc_html__('Background Hover Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row2,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_active_background_color',
                'default_value' => '',
                'label'         => esc_html__('Background Active Color', 'ultima'),
            )
        );

        $first_level_style_row3 = ultima_qodef_add_admin_row(
            array(
                'parent' => $first_level_style_group,
                'name'   => 'first_level_style_row3'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row3,
                'type'          => 'fontsimple',
                'name'          => 'fullscreen_menu_google_fonts',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row3,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_fontsize',
                'default_value' => '',
                'label'         => esc_html__('Font Size', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row3,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_lineheight',
                'default_value' => '',
                'label'         => esc_html__('Line Height', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        $first_level_style_row4 = ultima_qodef_add_admin_row(
            array(
                'parent' => $first_level_style_group,
                'name'   => 'first_level_style_row4'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row4,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_fontstyle',
                'default_value' => '',
                'label'         => esc_html__('Font Style', 'ultima'),
                'options'       => ultima_qodef_get_font_style_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row4,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_fontweight',
                'default_value' => '',
                'label'         => esc_html__('Font Weight', 'ultima'),
                'options'       => ultima_qodef_get_font_weight_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row4,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_letterspacing',
                'default_value' => '',
                'label'         => esc_html__('Letter Spacing', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $first_level_style_row4,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_texttransform',
                'default_value' => '',
                'label'         => esc_html__('Text Transform', 'ultima'),
                'options'       => ultima_qodef_get_text_transform_array()
            )
        );

//2nd level style group
        $second_level_style_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $fullscreen_panel,
                'name'        => 'second_level_style_group',
                'title'       => esc_html__('2nd Level Style', 'ultima'),
                'description' => esc_html__('Define styles for 2nd level in Fullscreen Menu', 'ultima')
            )
        );

        $second_level_style_row1 = ultima_qodef_add_admin_row(
            array(
                'parent' => $second_level_style_group,
                'name'   => 'second_level_style_row1'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_color_2nd',
                'default_value' => '',
                'label'         => esc_html__('Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_hover_color_2nd',
                'default_value' => '',
                'label'         => esc_html__('Hover Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_hover_background_color_2nd',
                'default_value' => '',
                'label'         => esc_html__('Background Hover Color', 'ultima'),
            )
        );

        $second_level_style_row2 = ultima_qodef_add_admin_row(
            array(
                'parent' => $second_level_style_group,
                'name'   => 'second_level_style_row2'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row2,
                'type'          => 'fontsimple',
                'name'          => 'fullscreen_menu_google_fonts_2nd',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row2,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_fontsize_2nd',
                'default_value' => '',
                'label'         => esc_html__('Font Size', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row2,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_lineheight_2nd',
                'default_value' => '',
                'label'         => esc_html__('Line Height', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        $second_level_style_row3 = ultima_qodef_add_admin_row(
            array(
                'parent' => $second_level_style_group,
                'name'   => 'second_level_style_row3'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row3,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_fontstyle_2nd',
                'default_value' => '',
                'label'         => esc_html__('Font Style', 'ultima'),
                'options'       => ultima_qodef_get_font_style_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row3,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_fontweight_2nd',
                'default_value' => '',
                'label'         => esc_html__('Font Weight', 'ultima'),
                'options'       => ultima_qodef_get_font_weight_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row3,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_letterspacing_2nd',
                'default_value' => '',
                'label'         => esc_html__('Letter Spacing', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $second_level_style_row3,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_texttransform_2nd',
                'default_value' => '',
                'label'         => esc_html__('Text Transform', 'ultima'),
                'options'       => ultima_qodef_get_text_transform_array()
            )
        );

        $third_level_style_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $fullscreen_panel,
                'name'        => 'third_level_style_group',
                'title'       => esc_html__('3rd Level Style', 'ultima'),
                'description' => esc_html__('Define styles for 3rd level in Fullscreen Menu', 'ultima')
            )
        );

        $third_level_style_row1 = ultima_qodef_add_admin_row(
            array(
                'parent' => $third_level_style_group,
                'name'   => 'third_level_style_row1'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_color_3rd',
                'default_value' => '',
                'label'         => esc_html__('Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_hover_color_3rd',
                'default_value' => '',
                'label'         => esc_html__('Hover Text Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row1,
                'type'          => 'colorsimple',
                'name'          => 'fullscreen_menu_hover_background_color_3rd',
                'default_value' => '',
                'label'         => esc_html__('Background Hover Color', 'ultima'),
            )
        );

        $third_level_style_row2 = ultima_qodef_add_admin_row(
            array(
                'parent' => $third_level_style_group,
                'name'   => 'second_level_style_row2'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row2,
                'type'          => 'fontsimple',
                'name'          => 'fullscreen_menu_google_fonts_3rd',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row2,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_fontsize_3rd',
                'default_value' => '',
                'label'         => esc_html__('Font Size', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row2,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_lineheight_3rd',
                'default_value' => '',
                'label'         => esc_html__('Line Height', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        $third_level_style_row3 = ultima_qodef_add_admin_row(
            array(
                'parent' => $third_level_style_group,
                'name'   => 'second_level_style_row3'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row3,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_fontstyle_3rd',
                'default_value' => '',
                'label'         => esc_html__('Font Style', 'ultima'),
                'options'       => ultima_qodef_get_font_style_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row3,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_fontweight_3rd',
                'default_value' => '',
                'label'         => esc_html__('Font Weight', 'ultima'),
                'options'       => ultima_qodef_get_font_weight_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row3,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_letterspacing_3rd',
                'default_value' => '',
                'label'         => esc_html__('Letter Spacing', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $third_level_style_row3,
                'type'          => 'selectblanksimple',
                'name'          => 'fullscreen_menu_texttransform_3rd',
                'default_value' => '',
                'label'         => esc_html__('Text Transform', 'ultima'),
                'options'       => ultima_qodef_get_text_transform_array()
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $fullscreen_panel,
                'type'          => 'select',
                'name'          => 'fullscreen_menu_icon_size',
                'label'         => esc_html__('Fullscreen Menu Icon Size', 'ultima'),
                'description'   => esc_html__('Choose predefined size for Fullscreen Menu icon', 'ultima'),
                'default_value' => 'normal',
                'options'       => array(
                    'normal' => esc_html__('Normal', 'ultima'),
                    'medium' => esc_html__('Medium', 'ultima'),
                    'large'  => esc_html__('Large', 'ultima')
                )

            )
        );

        $icon_colors_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $fullscreen_panel,
                'name'        => 'fullscreen_menu_icon_colors_group',
                'title'       => esc_html__('Full Screen Menu Icon Style', 'ultima'),
                'description' => esc_html__('Define styles for Fullscreen Menu Icon', 'ultima')
            )
        );

        $icon_colors_row1 = ultima_qodef_add_admin_row(
            array(
                'parent' => $icon_colors_group,
                'name'   => 'icon_colors_row1'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $icon_colors_row1,
                'type'   => 'colorsimple',
                'name'   => 'fullscreen_menu_icon_color',
                'label'  => esc_html__('Color', 'ultima'),
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'parent' => $icon_colors_row1,
                'type'   => 'colorsimple',
                'name'   => 'fullscreen_menu_icon_hover_color',
                'label'  => esc_html__('Hover Color', 'ultima'),
            )
        );
        $icon_colors_row2 = ultima_qodef_add_admin_row(
            array(
                'parent' => $icon_colors_group,
                'name'   => 'icon_colors_row2',
                'next'   => true
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $icon_colors_row2,
                'type'   => 'colorsimple',
                'name'   => 'fullscreen_menu_light_icon_color',
                'label'  => esc_html__('Light Menu Icon Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $icon_colors_row2,
                'type'   => 'colorsimple',
                'name'   => 'fullscreen_menu_light_icon_hover_color',
                'label'  => esc_html__('Light Menu Icon Hover Color', 'ultima'),
            )
        );

        $icon_colors_row3 = ultima_qodef_add_admin_row(
            array(
                'parent' => $icon_colors_group,
                'name'   => 'icon_colors_row3',
                'next'   => true
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $icon_colors_row3,
                'type'   => 'colorsimple',
                'name'   => 'fullscreen_menu_dark_icon_color',
                'label'  => esc_html__('Dark Menu Icon Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $icon_colors_row3,
                'type'   => 'colorsimple',
                'name'   => 'fullscreen_menu_dark_icon_hover_color',
                'label'  => esc_html__('Dark Menu Icon Hover Color', 'ultima'),
            )
        );

        $icon_colors_row4 = ultima_qodef_add_admin_row(
            array(
                'parent' => $icon_colors_group,
                'name'   => 'icon_colors_row4',
                'next'   => true
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $icon_colors_row4,
                'type'   => 'colorsimple',
                'name'   => 'fullscreen_menu_icon_background_color',
                'label'  => esc_html__('Background Color', 'ultima'),
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent' => $icon_colors_row4,
                'type'   => 'colorsimple',
                'name'   => 'fullscreen_menu_icon_background_hover_color',
                'label'  => esc_html__('Background Hover Color', 'ultima'),
            )
        );

        $icon_spacing_group = ultima_qodef_add_admin_group(
            array(
                'parent'      => $fullscreen_panel,
                'name'        => 'icon_spacing_group',
                'title'       => esc_html__('Full Screen Menu Icon Spacing', 'ultima'),
                'description' => esc_html__('Define padding and margin for full screen menu icon', 'ultima')
            )
        );

        $icon_spacing_row = ultima_qodef_add_admin_row(
            array(
                'parent' => $icon_spacing_group,
                'name'   => 'icon_spacing_row'
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $icon_spacing_row,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_icon_padding_left',
                'default_value' => '',
                'label'         => esc_html__('Padding Left', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $icon_spacing_row,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_icon_padding_right',
                'default_value' => '',
                'label'         => esc_html__('Padding Right', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $icon_spacing_row,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_icon_margin_left',
                'default_value' => '',
                'label'         => esc_html__('Margin Left', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $icon_spacing_row,
                'type'          => 'textsimple',
                'name'          => 'fullscreen_menu_icon_margin_right',
                'default_value' => '',
                'label'         => esc_html__('Margin Right', 'ultima'),
                'args'          => array(
                    'suffix' => 'px'
                )
            )
        );

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_fullscreen_menu_options_map', 16);

}