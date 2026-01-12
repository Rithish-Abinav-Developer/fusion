<?php

namespace UltimaQodef\Modules\Shortcodes\ProductList;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;


/**
 * Class ProductList
 */
class ProductList implements ShortcodeInterface {
    /**
     * @var string
     */
    private $base;

    function __construct() {
        $this->base = 'qodef_product_list';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {

        vc_map(array(
            'name'                      => esc_html__('Select Product List', 'select-core'),
            'base'                      => $this->base,
            'icon'                      => 'icon-wpb-product-list extended-custom-icon',
            'category'                  => esc_html__('by SELECT', 'select-core'),
            'allowed_container_element' => 'vc_row',
            'params'                    => array(
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Type', 'select-core'),
                    'param_name'  => 'type',
                    'value'       => array(
                        esc_html__('Standard', 'select-core') => 'standard',
                        esc_html__('Masonry', 'select-core')  => 'masonry'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'       => 'textfield',
                    'holder'     => 'div',
                    'heading'    => esc_html__('Number of Products', 'select-core'),
                    'param_name' => 'number_of_posts'
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Number of Columns', 'select-core'),
                    'param_name'  => 'number_of_columns',
                    'value'       => array(
                        esc_html__('One', 'select-core')   => '1',
                        esc_html__('Two', 'select-core')   => '2',
                        esc_html__('Three', 'select-core') => '3',
                        esc_html__('Four', 'select-core')  => '4',
                        esc_html__('Five', 'select-core')  => '5',
                        esc_html__('Six', 'select-core')   => '6'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Space Between Items', 'select-core'),
                    'param_name'  => 'space_between_items',
                    'value'       => array(
                        esc_html__('Normal', 'select-core')   => 'normal',
                        esc_html__('Small', 'select-core')    => 'small',
                        esc_html__('Tiny', 'select-core')     => 'tiny',
                        esc_html__('No Space', 'select-core') => 'no'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Order By', 'select-core'),
                    'param_name'  => 'order_by',
                    'value'       => array(
                        esc_html__('Title', 'select-core')      => 'title',
                        esc_html__('Date', 'select-core')       => 'date',
                        esc_html__('Random', 'select-core')     => 'rand',
                        esc_html__('Post Name', 'select-core')  => 'name',
                        esc_html__('ID', 'select-core')         => 'id',
                        esc_html__('Menu Order', 'select-core') => 'menu_order'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Order', 'select-core'),
                    'param_name'  => 'order',
                    'value'       => array(
                        esc_html__('ASC', 'select-core')  => 'ASC',
                        esc_html__('DESC', 'select-core') => 'DESC'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Choose Sorting Taxonomy', 'select-core'),
                    'param_name'  => 'taxonomy_to_display',
                    'value'       => array(
                        esc_html__('Category', 'select-core') => 'category',
                        esc_html__('Tag', 'select-core')      => 'tag',
                        esc_html__('Id', 'select-core')       => 'id'
                    ),
                    'save_always' => true,
                    'description' => esc_html__('If you would like to display only certain products, this is where you can select the criteria by which you would like to choose which products to display', 'select-core')
                ),
                array(
                    'type'        => 'textfield',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Enter Taxonomy Values', 'select-core'),
                    'param_name'  => 'taxonomy_values',
                    'description' => esc_html__('Separate values (category slugs, tags, or post IDs) with a comma', 'select-core')
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Image Proportions', 'select-core'),
                    'param_name'  => 'image_size',
                    'value'       => array(
                        esc_html__('Default', 'select-core')   => '',
                        esc_html__('Original', 'select-core')  => 'full',
                        esc_html__('Square', 'select-core')    => 'square',
                        esc_html__('Landscape', 'select-core') => 'landscape',
                        esc_html__('Portrait', 'select-core')  => 'portrait',
                        esc_html__('Medium', 'select-core')    => 'medium',
                        esc_html__('Large', 'select-core')     => 'large'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Product Info Skin', 'select-core'),
                    'param_name'  => 'product_info_skin',
                    'value'       => array(
                        esc_html__('Default', 'select-core') => 'default',
                        esc_html__('Light', 'select-core')   => 'light',
                        esc_html__('Dark', 'select-core')    => 'dark'
                    ),
                    'save_always' => true,
                    'group'       => 'Product Info Style'
                ),
            )
        ));
    }

    public function render($atts, $content = null) {

        $default_atts = array(
            'type'                => 'standard',
            'number_of_posts'     => '8',
            'number_of_columns'   => '4',
            'space_between_items' => 'normal',
            'order_by'            => '',
            'order'               => '',
            'taxonomy_to_display' => 'category',
            'taxonomy_values'     => '',
            'image_size'          => '',
            'product_info_skin'   => '',
        );

        $params = shortcode_atts($default_atts, $atts);
        extract($params);

        $params['holder_classes'] = $this->getHolderClasses($params);

        $queryArray             = $this->generateProductQueryArray($params);
        $query_result           = new \WP_Query($queryArray);
        $params['query_result'] = $query_result;

        $html = select_core_get_shortcode_template_part('templates/product-list-template', 'product-list', '', $params);

        return $html;
    }

    /**
     * Generates holder classes
     *
     * @param $params
     *
     * @return string
     */
    private function getHolderClasses($params) {
        $holderClasses = '';

        $productListType = $this->getProductListTypeClass($params);

        $columnsSpace = $this->getColumnsSpaceClass($params);

        $columnNumber = $this->getColumnNumberClass($params);

        $productInfoClasses = $this->getProductInfoSkinClass($params);

        $holderClasses .= $productListType.' '.$columnsSpace.' '.$columnNumber.' '.$productInfoClasses;

        return $holderClasses;
    }

    /**
     * Generates product list type classes for product list holder
     *
     * @param $params
     *
     * @return string
     */
    private function getProductListTypeClass($params) {

        $type            = '';
        $productListType = $params['type'];

        switch($productListType) {
            case 'standard':
                $type = 'qodef-standard-layout';
                break;
            case 'masonry':
                $type = 'qodef-masonry-layout';
                break;
            default:
                $type = 'qodef-standard-layout';
                break;
        }

        return $type;
    }

    /**
     * Generates space between columns classes for product list holder
     *
     * @param $params
     *
     * @return string
     */
    private function getColumnsSpaceClass($params) {

        $columnsSpace      = '';
        $spaceBetweenItems = $params['space_between_items'];

        switch($spaceBetweenItems) {
            case 'normal':
                $columnsSpace = 'qodef-normal-space';
                break;
            case 'small':
                $columnsSpace = 'qodef-small-space';
                break;
            case 'tiny':
                $columnsSpace = 'qodef-tiny-space';
                break;
            case 'no':
                $columnsSpace = 'qodef-no-space';
                break;
            default:
                $columnsSpace = 'qodef-normal-space';
                break;
        }

        return $columnsSpace;
    }

    /**
     * Generates columns number classes for product list holder
     *
     * @param $params
     *
     * @return string
     */
    private function getColumnNumberClass($params) {

        $columnsNumber = '';
        $columns       = $params['number_of_columns'];

        switch($columns) {
            case 1:
                $columnsNumber = 'qodef-one-column';
                break;
            case 2:
                $columnsNumber = 'qodef-two-columns';
                break;
            case 3:
                $columnsNumber = 'qodef-three-columns';
                break;
            case 4:
                $columnsNumber = 'qodef-four-columns';
                break;
            case 5:
                $columnsNumber = 'qodef-five-columns';
                break;
            case 6:
                $columnsNumber = 'qodef-six-columns';
                break;
            default:
                $columnsNumber = 'qodef-four-columns';
                break;
        }

        return $columnsNumber;
    }

    /**
     * Generates product info skin class for product list holder
     *
     * @param $params
     *
     * @return string
     */
    private function getProductInfoSkinClass($params) {

        $classes         = '';
        $productInfoSkin = $params['product_info_skin'];

        switch($productInfoSkin) {
            case 'light':
                $classes = 'qodef-product-info-light';
                break;
            case 'dark':
                $classes = 'qodef-product-info-dark';
                break;
            default:
                $classes = '';
                break;
        }


        return $classes;
    }

    /**
     * Generates query array
     *
     * @param $params
     *
     * @return array
     */
    public function generateProductQueryArray($params) {

        $queryArray = array(
            'post_type'           => 'product',
            'post_status'         => 'publish',
            'ignore_sticky_posts' => 1,
            'posts_per_page'      => $params['number_of_posts'],
            'orderby'             => $params['order_by'],
            'order'               => $params['order'],
            'meta_query'          => WC()->query->get_meta_query()
        );

        if($params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'category') {
            $queryArray['product_cat'] = $params['taxonomy_values'];
        }

        if($params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'tag') {
            $queryArray['product_tag'] = $params['taxonomy_values'];
        }

        if($params['taxonomy_to_display'] !== '' && $params['taxonomy_to_display'] === 'id') {
            $idArray                = $params['taxonomy_values'];
            $ids                    = explode(',', $idArray);
            $queryArray['post__in'] = $ids;
        }

        return $queryArray;
    }

    /**
     * Return Style for Title
     *
     * @param $params
     *
     * @return string
     */
    private function getTitleStyles($params) {
        $item_styles = array();

        if($params['title_transform'] !== '') {
            $item_styles[] = 'text-transform: '.$params['title_transform'];
        }

        return implode(';', $item_styles);
    }

}