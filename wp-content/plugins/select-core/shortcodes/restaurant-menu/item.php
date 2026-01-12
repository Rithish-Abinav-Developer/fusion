<?php
namespace UltimaQodef\Modules\Shortcodes\RestaurantItem;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

class RestaurantItem implements ShortcodeInterface {
    private $base;

    function __construct() {
        $this->base = 'qodef_restaurant_item';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if(function_exists('vc_map')) {
            vc_map(
                array(
                    'name'     => esc_html__('Select Restaurant Item', 'select-core'),
                    'base'     => $this->base,
                    'as_child' => array('only' => 'qodef_restaurant_menu'),
                    'category' => esc_html__('by SELECT', 'select-core'),
                    'icon'     => 'icon-wpb-restaurant-menu-item extended-custom-icon',
                    'params'   => array(
                        array(
                            'type'        => 'textfield',
                            'class'       => '',
                            'heading'     => esc_html__('Item Title', 'select-core'),
                            'param_name'  => 'title',
                            'value'       => '',
                            'description' => ''
                        ),
                        array(
                            'type'       => 'dropdown',
                            'heading'    => esc_html__('Title Tag', 'select-core'),
                            'param_name' => 'title_tag',
                            'value'      => array(
                                ''   => '',
                                'h2' => 'h2',
                                'h3' => 'h3',
                                'h4' => 'h4',
                                'h5' => 'h5',
                                'h6' => 'h6',
                            ),
                            'dependency' => array('element' => 'title', 'not_empty' => true)
                        ),
                        array(
                            'type'        => 'textfield',
                            'class'       => '',
                            'heading'     => esc_html__('Currency', 'select-core'),
                            'param_name'  => 'currency',
                            'value'       => '',
                            'description' => esc_html__('Default is "$"', 'select-core')
                        ),
                        array(
                            'type'        => 'textfield',
                            'class'       => '',
                            'heading'     => esc_html__('Price', 'select-core'),
                            'param_name'  => 'price',
                            'value'       => '',
                            'description' => ''
                        ),
                        array(
                            'type'        => 'textfield',
                            'class'       => '',
                            'heading'     => esc_html__('Description', 'select-core'),
                            'param_name'  => 'description',
                            'value'       => '',
                            'description' => ''
                        ),
                        array(
                            'type'       => 'dropdown',
                            'heading'    => esc_html__('Featured Item', 'select-core'),
                            'param_name' => 'featured',
                            'value'      => array(
                                esc_html__('No', 'select-core')  => 'no',
                                esc_html__('Yes', 'select-core') => 'yes',
                            )
                        )
                    )
                )
            );
        }
    }

    public function render($atts, $content = null) {
        $args = array(
            'title'       => '',
            'title_tag'   => 'h4',
            'currency'    => '$',
            'price'       => '',
            'description' => '',
            'featured'    => 'no'
        );

        $params = shortcode_atts($args, $atts);

        $params['content'] = $content;

        $html = select_core_get_shortcode_template_part('templates/item-template', 'restaurant-menu', '', $params);

        return $html;
    }
}
