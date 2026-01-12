<?php

if(!function_exists('ultima_qodef_blog_options_map')) {

    function ultima_qodef_blog_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_blog_page',
                'title' => esc_html__('Blog', 'ultima'),
                'icon'  => 'fa fa-files-o'
            )
        );

        /**
         * Blog Lists
         */

        $custom_sidebars = ultima_qodef_get_custom_sidebars();

        $panel_blog_lists = ultima_qodef_add_admin_panel(
            array(
                'page'  => '_blog_page',
                'name'  => 'panel_blog_lists',
                'title' => esc_html__('Blog Lists', 'ultima')
            )
        );

        ultima_qodef_add_admin_field(array(
            'name'          => 'blog_list_type',
            'type'          => 'select',
            'label'         => esc_html__('Blog Layout for Archive Pages', 'ultima'),
            'description'   => esc_html__('Choose a default blog layout', 'ultima'),
            'default_value' => 'standard',
            'parent'        => $panel_blog_lists,
            'options'       => array(
                'standard'            => esc_html__('Blog: Standard', 'ultima'),
                'masonry'             => esc_html__('Blog: Masonry', 'ultima'),
                'masonry-full-width'  => esc_html__('Blog: Masonry Full Width', 'ultima'),
                'standard-whole-post' => esc_html__('Blog: Standard Whole Post', 'ultima')
            )
        ));

        ultima_qodef_add_admin_field(array(
            'name'        => 'archive_sidebar_layout',
            'type'        => 'select',
            'label'       => esc_html__('Archive and Category Sidebar', 'ultima'),
            'description' => esc_html__('Choose a sidebar layout for archived Blog Post Lists and Category Blog Lists', 'ultima'),
            'parent'      => $panel_blog_lists,
            'options'     => array(
                'default'          => esc_html__('No Sidebar', 'ultima'),
                'sidebar-33-right' => esc_html__('Sidebar 1/3 Right', 'ultima'),
                'sidebar-25-right' => esc_html__('Sidebar 1/4 Right', 'ultima'),
                'sidebar-33-left'  => esc_html__('Sidebar 1/3 Left', 'ultima'),
                'sidebar-25-left'  => esc_html__('Sidebar 1/4 Left', 'ultima'),
            )
        ));


        if(count($custom_sidebars) > 0) {
            ultima_qodef_add_admin_field(array(
                'name'        => 'blog_custom_sidebar',
                'type'        => 'selectblank',
                'label'       => esc_html__('Sidebar to Display', 'ultima'),
                'description' => esc_html__('Choose a sidebar to display on Blog Post Lists and Category Blog Lists. Default sidebar is "Sidebar Page"', 'ultima'),
                'parent'      => $panel_blog_lists,
                'options'     => ultima_qodef_get_custom_sidebars()
            ));
        }

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'pagination',
                'default_value' => 'yes',
                'label'         => esc_html__('Pagination', 'ultima'),
                'parent'        => $panel_blog_lists,
                'description'   => esc_html__('Enabling this option will display pagination links on bottom of Blog Post List', 'ultima'),
                'args'          => array(
                    'dependence'             => true,
                    'dependence_hide_on_yes' => '',
                    'dependence_show_on_yes' => '#qodef_qodef_pagination_container'
                )
            )
        );

        $pagination_container = ultima_qodef_add_admin_container(
            array(
                'name'            => 'qodef_pagination_container',
                'hidden_property' => 'pagination',
                'hidden_value'    => 'no',
                'parent'          => $panel_blog_lists,
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'parent'        => $pagination_container,
                'type'          => 'text',
                'name'          => 'blog_page_range',
                'default_value' => '',
                'label'         => esc_html__('Pagination Range limit', 'ultima'),
                'description'   => esc_html__('Enter a number that will limit pagination to a certain range of links', 'ultima'),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'type'          => 'selectblank',
                'name'          => 'pagination_type',
                'default_value' => 'standard_pagination',
                'label'         => esc_html__('Pagination Type', 'ultima'),
                'parent'        => $pagination_container,
                'description'   => esc_html__('Choose Pagination Type', 'ultima'),
                'options'       => array(
                    'standard_paginaton'   => esc_html__('Standard Pagination', 'ultima'),
                    'load_more_pagination' => esc_html__('Load More', 'ultima'),
                    'navigation'           => esc_html__('Navigation', 'ultima')
                ),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'masonry_filter',
                'default_value' => 'no',
                'label'         => esc_html__('Masonry Filter', 'ultima'),
                'parent'        => $panel_blog_lists,
                'description'   => esc_html__('Enabling this option will display category filter on Masonry and Masonry Full Width Templates', 'ultima'),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'type'          => 'text',
                'name'          => 'number_of_chars',
                'default_value' => '',
                'label'         => esc_html__('Number of Words in Excerpt', 'ultima'),
                'parent'        => $panel_blog_lists,
                'description'   => esc_html__('Enter a number of words in excerpt (article summary)', 'ultima'),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'type'          => 'text',
                'name'          => 'standard_number_of_chars',
                'default_value' => '',
                'label'         => esc_html__('Standard Type Number of Words in Excerpt', 'ultima'),
                'parent'        => $panel_blog_lists,
                'description'   => esc_html__('Enter a number of words in excerpt (article summary)', 'ultima'),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );
        ultima_qodef_add_admin_field(
            array(
                'type'          => 'text',
                'name'          => 'masonry_number_of_chars',
                'default_value' => '',
                'label'         => esc_html__('Masonry Type Number of Words in Excerpt', 'ultima'),
                'parent'        => $panel_blog_lists,
                'description'   => esc_html__('Enter a number of words in excerpt (article summary)', 'ultima'),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );

        /**
         * Blog Single
         */
        $panel_blog_single = ultima_qodef_add_admin_panel(
            array(
                'page'  => '_blog_page',
                'name'  => 'panel_blog_single',
                'title' => esc_html__('Blog Single', 'ultima')
            )
        );


        ultima_qodef_add_admin_field(array(
            'name'          => 'blog_single_sidebar_layout',
            'type'          => 'select',
            'label'         => esc_html__('Sidebar Layout', 'ultima'),
            'description'   => esc_html__('Choose a sidebar layout for Blog Single pages', 'ultima'),
            'parent'        => $panel_blog_single,
            'options'       => array(
                'default'          => esc_html__('No Sidebar', 'ultima'),
                'sidebar-33-right' => esc_html__('Sidebar 1/3 Right', 'ultima'),
                'sidebar-25-right' => esc_html__('Sidebar 1/4 Right', 'ultima'),
                'sidebar-33-left'  => esc_html__('Sidebar 1/3 Left', 'ultima'),
                'sidebar-25-left'  => esc_html__('Sidebar 1/4 Left', 'ultima'),
            ),
            'default_value' => 'default'
        ));


        if(count($custom_sidebars) > 0) {
            ultima_qodef_add_admin_field(array(
                'name'        => 'blog_single_custom_sidebar',
                'type'        => 'selectblank',
                'label'       => esc_html__('Sidebar to Display', 'ultima'),
                'description' => esc_html__('Choose a sidebar to display on Blog Single pages. Default sidebar is "Sidebar"', 'ultima'),
                'parent'      => $panel_blog_single,
                'options'     => ultima_qodef_get_custom_sidebars()
            ));
        }

        ultima_qodef_add_admin_field(array(
            'name'          => 'blog_single_title_in_title_area',
            'type'          => 'yesno',
            'label'         => esc_html__('Show Post Title in Title Area', 'ultima'),
            'description'   => esc_html__('Enabling this option will show post title in title area on single post pages', 'ultima'),
            'parent'        => $panel_blog_single,
            'default_value' => 'no'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'blog_single_comments',
            'type'          => 'yesno',
            'label'         => esc_html__('Show Comments', 'ultima'),
            'description'   => esc_html__('Enabling this option will show comments on your page.', 'ultima'),
            'parent'        => $panel_blog_single,
            'default_value' => 'yes'
        ));

        ultima_qodef_add_admin_field(array(
            'name'          => 'blog_single_related_posts',
            'type'          => 'yesno',
            'label'         => esc_html__('Show Related Posts', 'ultima'),
            'description'   => esc_html__('Enabling this option will show related posts on your single post.', 'ultima'),
            'parent'        => $panel_blog_single,
            'default_value' => 'no'
        ));

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'blog_single_navigation',
                'default_value' => 'no',
                'label'         => esc_html__('Enable Prev/Next Single Post Navigation Links', 'ultima'),
                'parent'        => $panel_blog_single,
                'description'   => esc_html__('Enable navigation links through the blog posts (left and right arrows will appear)', 'ultima'),
                'args'          => array(
                    'dependence'             => true,
                    'dependence_hide_on_yes' => '',
                    'dependence_show_on_yes' => '#qodef_qodef_blog_single_navigation_container'
                )
            )
        );

        $blog_single_navigation_container = ultima_qodef_add_admin_container(
            array(
                'name'            => 'qodef_blog_single_navigation_container',
                'hidden_property' => 'blog_single_navigation',
                'hidden_value'    => 'no',
                'parent'          => $panel_blog_single,
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'blog_navigation_through_same_category',
                'default_value' => 'no',
                'label'         => esc_html__('Enable Navigation Only in Current Category', 'ultima'),
                'description'   => esc_html__('Limit your navigation only through current category', 'ultima'),
                'parent'        => $blog_single_navigation_container,
                'args'          => array(
                    'col_width' => 3
                )
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'blog_author_info',
                'default_value' => 'no',
                'label'         => esc_html__('Show Author Info Box', 'ultima'),
                'parent'        => $panel_blog_single,
                'description'   => esc_html__('Enabling this option will display author name and descriptions on Blog Single pages', 'ultima'),
                'args'          => array(
                    'dependence'             => true,
                    'dependence_hide_on_yes' => '',
                    'dependence_show_on_yes' => '#qodef_qodef_blog_single_author_info_container'
                )
            )
        );

        $blog_single_author_info_container = ultima_qodef_add_admin_container(
            array(
                'name'            => 'qodef_blog_single_author_info_container',
                'hidden_property' => 'blog_author_info',
                'hidden_value'    => 'no',
                'parent'          => $panel_blog_single,
            )
        );

        ultima_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'blog_author_info_email',
                'default_value' => 'no',
                'label'         => esc_html__('Show Author Email', 'ultima'),
                'description'   => esc_html__('Enabling this option will show author email', 'ultima'),
                'parent'        => $blog_single_author_info_container,
                'args'          => array(
                    'col_width' => 3
                )
            )
        );

    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_blog_options_map', 13);

}











