<?php

namespace UltimaQodef\Modules\Shortcodes\ProductListCarousel;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

/**
 * Class ProductListCarousel
 */
class ProductListCarousel implements ShortcodeInterface {
    /**
     * @var string
     */
    private $base;

    function __construct() {
        $this->base = 'qodef_product_list_carousel';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {

        vc_map(array(
            'name'                      => esc_html__('Select Product List - Carousel', 'select-core'),
            'base'                      => $this->base,
            'icon'                      => 'icon-wpb-product-list-carousel extended-custom-icon',
            'category'                  => esc_html__('by SELECT', 'select-core'),
            'allowed_container_element' => 'vc_row',
            'params'                    => array(
                array(
                    'type'       => 'textfield',
                    'holder'     => 'div',
                    'heading'    => esc_html__('Number of Products', 'select-core'),
                    'param_name' => 'number_of_posts'
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Number of Visible Items', 'select-core'),
                    'param_name'  => 'number_of_visible_items',
                    'value'       => array(
                        esc_html__('One', 'select-core')   => '1',
                        esc_html__('Two', 'select-core')   => '2',
                        esc_html__('Three', 'select-core') => '3',
                        esc_html__('Four', 'select-core')  => '4',
                        esc_html__('Five', 'select-core')  => '5'
                    ),
                    'save_always' => true,
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Enable Carousel Autoplay', 'select-core'),
                    'param_name'  => 'carousel_autoplay',
                    'value'       => array(
                        esc_html__('Yes', 'select-core') => 'yes',
                        esc_html__('No', 'select-core')  => 'no'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'textfield',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Slide Duration (ms)', 'select-core'),
                    'param_name'  => 'carousel_autoplay_timeout',
                    'description' => esc_html__('Autoplay interval timeout. Default value is 5000', 'select-core'),
                    'dependency'  => array('element' => 'carousel_autoplay', 'value' => array('yes'))
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Enable Carousel Loop', 'select-core'),
                    'param_name'  => 'carousel_loop',
                    'value'       => array(
                        esc_html__('Yes', 'select-core') => 'yes',
                        esc_html__('No', 'select-core')  => 'no'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'textfield',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Animation Speed (ms)', 'select-core'),
                    'param_name'  => 'carousel_speed',
                    'description' => esc_html__('Carousel Speed interval. Default value is 650', 'select-core'),
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
                    'save_always' => true,
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
                    'heading'     => esc_html__('Enter Taxonomy Values', 'select-core'),
                    'param_name'  => 'taxonomy_values',
                    'description' => esc_html__('Separate values (category slugs, tags, or post IDs) with a comma', 'select-core')
                ),
                array(
                    'type'        => 'dropdown',
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
                    'heading'     => esc_html__('Enable Carousel Navigation', 'select-core'),
                    'param_name'  => 'carousel_navigation',
                    'value'       => array(
                        esc_html__('Yes', 'select-core') => 'yes',
                        esc_html__('No', 'select-core')  => 'no'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Carousel Navigation Skin', 'select-core'),
                    'param_name'  => 'carousel_navigation_skin',
                    'value'       => array(
                        esc_html__('Default', 'select-core') => 'default',
                        esc_html__('Light', 'select-core')   => 'light'
                    ),
                    'save_always' => true,
                    'dependency'  => array('element' => 'carousel_navigation', 'value' => array('yes'))
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Enable Carousel Pagination', 'select-core'),
                    'param_name'  => 'carousel_pagination',
                    'value'       => array(
                        esc_html__('No', 'select-core')  => 'no',
                        esc_html__('Yes', 'select-core') => 'yes'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Carousel Pagination Skin', 'select-core'),
                    'param_name'  => 'carousel_pagination_skin',
                    'value'       => array(
                        esc_html__('Default', 'select-core') => 'default',
                        esc_html__('Light', 'select-core')   => 'light'
                    ),
                    'save_always' => true,
                    'dependency'  => array('element' => 'carousel_pagination', 'value' => array('yes'))
                ),
                array(
                    'type'        => 'dropdown',
                    'holder'      => 'div',
                    'heading'     => esc_html__('Carousel Pagination Position', 'select-core'),
                    'param_name'  => 'carousel_pagination_pos',
                    'value'       => array(
                        esc_html__('Below Carousel', 'select-core')  => 'bellow-slider',
                        esc_html__('Inside Carousel', 'select-core') => 'inside-slider'
                    ),
                    'save_always' => true,
                    'dependency'  => array('element' => 'carousel_pagination', 'value' => array('yes'))
                ),
            )
        ));

    }

    public function render($atts, $content = null) {

        $default_atts = array(
            'number_of_posts'           => '8',
            'number_of_visible_items'   => '4',
            'carousel_autoplay'         => 'yes',
            'carousel_autoplay_timeout' => '5000',
            'carousel_loop'             => 'yes',
            'carousel_speed'            => '650',
            'space_between_items'       => 'normal',
            'carousel_navigation'       => 'yes',
            'carousel_navigation_skin'  => 'default',
            'carousel_pagination'       => 'no',
            'carousel_pagination_skin'  => 'default',
            'carousel_pagination_pos'   => 'bellow-slider',
            'order_by'                  => '',
            'order'                     => '',
            'taxonomy_to_display'       => 'category',
            'taxonomy_values'           => '',
            'image_size'                => '',
        );

        $params = shortcode_atts($default_atts, $atts);
        extract($params);
        $params['holder_data'] = $this->getProductListCarouselDataAttributes($params);

        $queryArray             = $this->generateProductQueryArray($params);
        $query_result           = new \WP_Query($queryArray);
        $params['query_result'] = $query_result;

        $html = select_core_get_shortcode_template_part('templates/product-list-template', 'product-list-carousel', '', $params);

        return $html;
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
     * Generates carousel classes for product list holder
     *
     * @param $params
     *
     * @return string
     */
    private function getCarouselClasses($params) {

        $carouselClasses = '';

        if(!empty($params['carousel_navigation_skin'])) {
            $carouselClasses .= ' qodef-plc-nav-'.$params['carousel_navigation_skin'].'-skin';
        }

        if(!empty($params['carousel_pagination_pos'])) {
            $carouselClasses .= ' qodef-plc-pag-'.$params['carousel_pagination_pos'];
        }

        if($params['carousel_pagination'] === 'yes' && $params['carousel_pagination_pos'] === 'bellow-slider') {
            $carouselClasses .= ' qodef-plc-pag-enabled';
        }

        if(!empty($params['carousel_pagination_skin'])) {
            $carouselClasses .= ' qodef-plc-pag-'.$params['carousel_pagination_skin'].'-skin';
        }

        return $carouselClasses;
    }

    /**
     * Return all data that product list carousel needs
     *
     * @param $params
     *
     * @return array
     */
    private function getProductListCarouselDataAttributes($params) {

        $data = array();

        if(!empty($params['number_of_visible_items'])) {
            $data['data-number-of-visible-items'] = $params['number_of_visible_items'];
        }
        if(!empty($params['carousel_autoplay'])) {
            $data['data-autoplay'] = $params['carousel_autoplay'];
        }
        if(!empty($params['carousel_autoplay_timeout'])) {
            $data['data-autoplay-timeout'] = $params['carousel_autoplay_timeout'];
        }
        if(!empty($params['carousel_loop'])) {
            $data['data-loop'] = $params['carousel_loop'];
        }
        if(!empty($params['carousel_speed'])) {
            $data['data-speed'] = $params['carousel_speed'];
        }
        if(!empty($params['carousel_navigation'])) {
            $data['data-navigation'] = $params['carousel_navigation'];
        }
        if(!empty($params['carousel_pagination'])) {
            $data['data-pagination'] = $params['carousel_pagination'];
        }

        return $data;
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
}