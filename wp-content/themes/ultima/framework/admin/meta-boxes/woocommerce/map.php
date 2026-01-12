<?php

if(!function_exists('ultima_qodef_woocommerce_meta_box_settings_map')) {

    function ultima_qodef_woocommerce_meta_box_settings_map() {

//WooCommerce
        if(ultima_qodef_is_woocommerce_installed()) {

            $woo_single_layout      = ultima_qodef_options()->getOptionValue('single_product_layout');
            $woo_single_layout_hide = '';
            $woo_single_layout_show = '#qodef_qodef_show_standard_layout_container';

            if($woo_single_layout !== 'standard') {
                $woo_single_layout_hide = '#qodef_qodef_show_standard_layout_container';
                $woo_single_layout_show = '';
            }

            $woocommerce_meta_box = ultima_qodef_create_meta_box(
                array(
                    'scope' => array('product'),
                    'title' => esc_html__('Product Meta', 'ultima'),
                    'name'  => 'woo_product_meta'
                )
            );

            ultima_qodef_create_meta_box_field(array(
                'name'        => 'qodef_product_featured_image_size',
                'type'        => 'select',
                'label'       => esc_html__('Dimensions for Product List Shortcode', 'ultima'),
                'description' => esc_html__('Choose image layout when it appears in Select Product List - Masonry layout shortcode', 'ultima'),
                'parent'      => $woocommerce_meta_box,
                'options'     => array(
                    'qodef-woo-image-normal-width' => esc_html__('Default', 'ultima'),
                    'qodef-woo-image-large-width'  => esc_html__('Large Width', 'ultima')
                )
            ));

        }
    }

    add_action('ultima_qodef_meta_boxes_map', 'ultima_qodef_woocommerce_meta_box_settings_map');
}