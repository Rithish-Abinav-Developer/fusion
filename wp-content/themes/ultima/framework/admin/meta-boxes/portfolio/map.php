<?php

if(!function_exists('ultima_qodef_portfolio_meta_box_settings_map')) {
    function ultima_qodef_portfolio_meta_box_settings_map() {

        $qode_pages = array();
        $pages      = get_pages();

        global $ultima_qodef_Framework;
        foreach($pages as $page) {
            $qode_pages[$page->ID] = $page->post_title;
        }

//Portfolio Images

        $qodePortfolioImages = new UltimaQodefMetaBox("portfolio-item", "Portfolio Images (multiple upload)", '', '', 'portfolio_images');
        $ultima_qodef_Framework->qodeMetaBoxes->addMetaBox("portfolio_images", $qodePortfolioImages);

        $qode_portfolio_image_gallery = new UltimaQodefMultipleImages("qode_portfolio-image-gallery", "Portfolio Images", "Choose your portfolio images");
        $qodePortfolioImages->addChild("qode_portfolio-image-gallery", $qode_portfolio_image_gallery);

//Portfolio Images/Videos 2

        $qodePortfolioImagesVideos2 = new UltimaQodefMetaBox("portfolio-item", "Portfolio Images/Videos (single upload)");
        $ultima_qodef_Framework->qodeMetaBoxes->addMetaBox("portfolio_images_videos2", $qodePortfolioImagesVideos2);

        $qode_portfolio_images_videos2 = new UltimaQodefImagesVideosFramework("Portfolio Images/Videos 2", "ThisIsDescription");
        $qodePortfolioImagesVideos2->addChild("qode_portfolio_images_videos2", $qode_portfolio_images_videos2);

//Portfolio Additional Sidebar Items

        $qodeAdditionalSidebarItems = ultima_qodef_create_meta_box(
            array(
                'scope' => array('portfolio-item'),
                'title' => esc_html__('Additional Portfolio Sidebar Items', 'ultima'),
                'name'  => 'portfolio_properties'
            )
        );

        $qode_portfolio_properties = ultima_qodef_add_options_framework(
            array(
                'label'  => esc_html__('Portfolio Properties', 'ultima'),
                'name'   => 'qode_portfolio_properties',
                'parent' => $qodeAdditionalSidebarItems
            )
        );
    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_portfolio_meta_box_settings_map');
}