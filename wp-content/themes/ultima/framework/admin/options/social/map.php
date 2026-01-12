<?php

if(!function_exists('ultima_qodef_social_options_map')) {

    function ultima_qodef_social_options_map() {

        ultima_qodef_add_admin_page(
            array(
                'slug'  => '_social_page',
                'title' => esc_html__('Social Networks', 'ultima'),
                'icon'  => 'fa fa-share-alt'
            )
        );

        /**
         * Enable Social Share
         */
        $panel_social_share = ultima_qodef_add_admin_panel(array(
            'page'  => '_social_page',
            'name'  => 'panel_social_share',
            'title' => esc_html__('Enable Social Share', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_social_share',
            'default_value' => 'no',
            'label'         => esc_html__('Enable Social Share', 'ultima'),
            'description'   => esc_html__('Enabling this option will allow social share on networks of your choice', 'ultima'),
            'args'          => array(
                'dependence'             => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_panel_social_networks, #qodef_panel_show_social_share_on'
            ),
            'parent'        => $panel_social_share
        ));

        $panel_show_social_share_on = ultima_qodef_add_admin_panel(array(
            'page'            => '_social_page',
            'name'            => 'panel_show_social_share_on',
            'title'           => esc_html__('Show Social Share On', 'ultima'),
            'hidden_property' => 'enable_social_share',
            'hidden_value'    => 'no'
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_social_share_on_post',
            'default_value' => 'no',
            'label'         => esc_html__('Posts', 'ultima'),
            'description'   => esc_html__('Show Social Share on Blog Posts', 'ultima'),
            'parent'        => $panel_show_social_share_on
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_social_share_on_page',
            'default_value' => 'no',
            'label'         => esc_html__('Pages', 'ultima'),
            'description'   => esc_html__('Show Social Share on Pages', 'ultima'),
            'parent'        => $panel_show_social_share_on
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_social_share_on_attachment',
            'default_value' => 'no',
            'label'         => esc_html__('Media', 'ultima'),
            'description'   => esc_html__('Show Social Share for Images and Videos', 'ultima'),
            'parent'        => $panel_show_social_share_on
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_social_share_on_portfolio-item',
            'default_value' => 'no',
            'label'         => esc_html__('Portfolio Item', 'ultima'),
            'description'   => esc_html__('Show Social Share for Portfolio Items', 'ultima'),
            'parent'        => $panel_show_social_share_on
        ));

        if(ultima_qodef_is_woocommerce_installed()) {
            ultima_qodef_add_admin_field(array(
                'type'          => 'yesno',
                'name'          => 'enable_social_share_on_product',
                'default_value' => 'no',
                'label'         => esc_html__('Product', 'ultima'),
                'description'   => esc_html__('Show Social Share for Product Items', 'ultima'),
                'parent'        => $panel_show_social_share_on
            ));
        }

        /**
         * Social Share Networks
         */
        $panel_social_networks = ultima_qodef_add_admin_panel(array(
            'page'            => '_social_page',
            'name'            => 'panel_social_networks',
            'title'           => esc_html__('Social Networks', 'ultima'),
            'hidden_property' => 'enable_social_share',
            'hidden_value'    => 'no'
        ));

        /**
         * Facebook
         */
        ultima_qodef_add_admin_section_title(array(
            'parent' => $panel_social_networks,
            'name'   => 'facebook_title',
            'title'  => esc_html__('Share on Facebook', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_facebook_share',
            'default_value' => 'no',
            'label'         => esc_html__('Enable Share', 'ultima'),
            'description'   => esc_html__('Enabling this option will allow sharing via Facebook', 'ultima'),
            'args'          => array(
                'dependence'             => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_enable_facebook_share_container'
            ),
            'parent'        => $panel_social_networks
        ));

        $enable_facebook_share_container = ultima_qodef_add_admin_container(array(
            'name'            => 'enable_facebook_share_container',
            'hidden_property' => 'enable_facebook_share',
            'hidden_value'    => 'no',
            'parent'          => $panel_social_networks
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'image',
            'name'          => 'facebook_icon',
            'default_value' => '',
            'label'         => esc_html__('Upload Icon', 'ultima'),
            'parent'        => $enable_facebook_share_container
        ));

        /**
         * Twitter
         */
        ultima_qodef_add_admin_section_title(array(
            'parent' => $panel_social_networks,
            'name'   => 'twitter_title',
            'title'  => esc_html__('Share on Twitter', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_twitter_share',
            'default_value' => 'no',
            'label'         => esc_html__('Enable Share', 'ultima'),
            'description'   => esc_html__('Enabling this option will allow sharing via Twitter', 'ultima'),
            'args'          => array(
                'dependence'             => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_enable_twitter_share_container'
            ),
            'parent'        => $panel_social_networks
        ));

        $enable_twitter_share_container = ultima_qodef_add_admin_container(array(
            'name'            => 'enable_twitter_share_container',
            'hidden_property' => 'enable_twitter_share',
            'hidden_value'    => 'no',
            'parent'          => $panel_social_networks
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'image',
            'name'          => 'twitter_icon',
            'default_value' => '',
            'label'         => esc_html__('Upload Icon', 'ultima'),
            'parent'        => $enable_twitter_share_container
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'text',
            'name'          => 'twitter_via',
            'default_value' => '',
            'label'         => esc_html__('Via', 'ultima'),
            'parent'        => $enable_twitter_share_container
        ));

        /**
         * Linked In
         */
        ultima_qodef_add_admin_section_title(array(
            'parent' => $panel_social_networks,
            'name'   => 'linkedin_title',
            'title'  => esc_html__('Share on LinkedIn', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_linkedin_share',
            'default_value' => 'no',
            'label'         => esc_html__('Enable Share', 'ultima'),
            'description'   => esc_html__('Enabling this option will allow sharing via LinkedIn', 'ultima'),
            'args'          => array(
                'dependence'             => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_enable_linkedin_container'
            ),
            'parent'        => $panel_social_networks
        ));

        $enable_linkedin_container = ultima_qodef_add_admin_container(array(
            'name'            => 'enable_linkedin_container',
            'hidden_property' => 'enable_linkedin_share',
            'hidden_value'    => 'no',
            'parent'          => $panel_social_networks
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'image',
            'name'          => 'linkedin_icon',
            'default_value' => '',
            'label'         => esc_html__('Upload Icon', 'ultima'),
            'parent'        => $enable_linkedin_container
        ));

        /**
         * Tumblr
         */
        ultima_qodef_add_admin_section_title(array(
            'parent' => $panel_social_networks,
            'name'   => 'tumblr_title',
            'title'  => esc_html__('Share on Tumblr', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_tumblr_share',
            'default_value' => 'no',
            'label'         => esc_html__('Enable Share', 'ultima'),
            'description'   => esc_html__('Enabling this option will allow sharing via Tumblr', 'ultima'),
            'args'          => array(
                'dependence'             => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_enable_tumblr_container'
            ),
            'parent'        => $panel_social_networks
        ));

        $enable_tumblr_container = ultima_qodef_add_admin_container(array(
            'name'            => 'enable_tumblr_container',
            'hidden_property' => 'enable_tumblr_share',
            'hidden_value'    => 'no',
            'parent'          => $panel_social_networks
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'image',
            'name'          => 'tumblr_icon',
            'default_value' => '',
            'label'         => esc_html__('Upload Icon', 'ultima'),
            'parent'        => $enable_tumblr_container
        ));

        /**
         * Pinterest
         */
        ultima_qodef_add_admin_section_title(array(
            'parent' => $panel_social_networks,
            'name'   => 'pinterest_title',
            'title'  => esc_html__('Share on Pinterest', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_pinterest_share',
            'default_value' => 'no',
            'label'         => esc_html__('Enable Share', 'ultima'),
            'description'   => esc_html__('Enabling this option will allow sharing via Pinterest', 'ultima'),
            'args'          => array(
                'dependence'             => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_enable_pinterest_container'
            ),
            'parent'        => $panel_social_networks
        ));

        $enable_pinterest_container = ultima_qodef_add_admin_container(array(
            'name'            => 'enable_pinterest_container',
            'hidden_property' => 'enable_pinterest_share',
            'hidden_value'    => 'no',
            'parent'          => $panel_social_networks
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'image',
            'name'          => 'pinterest_icon',
            'default_value' => '',
            'label'         => esc_html__('Upload Icon', 'ultima'),
            'parent'        => $enable_pinterest_container
        ));

        /**
         * VK
         */
        ultima_qodef_add_admin_section_title(array(
            'parent' => $panel_social_networks,
            'name'   => 'vk_title',
            'title'  => esc_html__('Share on VK', 'ultima')
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'yesno',
            'name'          => 'enable_vk_share',
            'default_value' => 'no',
            'label'         => esc_html__('Enable Share', 'ultima'),
            'description'   => esc_html__('Enabling this option will allow sharing via VK', 'ultima'),
            'args'          => array(
                'dependence'             => true,
                'dependence_hide_on_yes' => '',
                'dependence_show_on_yes' => '#qodef_enable_vk_container'
            ),
            'parent'        => $panel_social_networks
        ));

        $enable_vk_container = ultima_qodef_add_admin_container(array(
            'name'            => 'enable_vk_container',
            'hidden_property' => 'enable_vk_share',
            'hidden_value'    => 'no',
            'parent'          => $panel_social_networks
        ));

        ultima_qodef_add_admin_field(array(
            'type'          => 'image',
            'name'          => 'vk_icon',
            'default_value' => '',
            'label'         => esc_html__('Upload Icon', 'ultima'),
            'parent'        => $enable_vk_container
        ));

        if(defined('QODEF_TWITTER_FEED_VERSION')) {
            $twitter_panel = ultima_qodef_add_admin_panel(array(
                'title' => esc_html__('Twitter', 'ultima'),
                'name'  => 'panel_twitter',
                'page'  => '_social_page'
            ));

            ultima_qodef_add_admin_twitter_button(array(
                'name'   => 'twitter_button',
                'parent' => $twitter_panel
            ));
        }

        if(defined('QODEF_INSTAGRAM_FEED_VERSION')) {
            $instagram_panel = ultima_qodef_add_admin_panel(array(
                'title' => esc_html__('Instagram', 'ultima'),
                'name'  => 'panel_instagram',
                'page'  => '_social_page'
            ));

            ultima_qodef_add_admin_instagram_button(array(
                'name'   => 'instagram_button',
                'parent' => $instagram_panel
            ));
        }
    }

    add_action('ultima_qodef_options_map', 'ultima_qodef_social_options_map', 17);
}