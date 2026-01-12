<?php

if(!function_exists('ultima_qodef_blog_meta_box_setting_map')) {

    function ultima_qodef_blog_meta_box_setting_map() {
        
        $qode_blog_categories = array();
        $categories           = get_categories();
        foreach($categories as $category) {
            $qode_blog_categories[$category->term_id] = $category->name;
        }

        $blog_meta_box = ultima_qodef_create_meta_box(
            array(
                'scope' => array('page'),
                'title' => esc_html__('Blog', 'ultima'),
                'name'  => 'blog_meta'
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_blog_category_meta',
                'type'        => 'selectblank',
                'label'       => esc_html__('Blog Category', 'ultima'),
                'description' => esc_html__('Choose category of posts to display (leave empty to display all categories)', 'ultima'),
                'parent'      => $blog_meta_box,
                'options'     => $qode_blog_categories
            )
        );

        ultima_qodef_create_meta_box_field(
            array(
                'name'        => 'qodef_show_posts_per_page_meta',
                'type'        => 'text',
                'label'       => esc_html__('Number of Posts', 'ultima'),
                'description' => esc_html__('Enter the number of posts to display', 'ultima'),
                'parent'      => $blog_meta_box,
                'options'     => $qode_blog_categories,
                'args'        => array("col_width" => 3)
            )
        );
    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_blog_meta_box_setting_map');
}
	

