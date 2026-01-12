<?php
namespace UltimaQodef\Modules\Shortcodes\RestaurantMenu;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

class RestaurantMenu implements ShortcodeInterface {
    private $base;

    function __construct() {
        $this->base = 'qodef_restaurant_menu';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        vc_map(array(
            'name'      => esc_html__('Select Restaurant Menu', 'select-core'),
            'base'      => $this->base,
            'icon'      => 'icon-wpb-restaurant-menu extended-custom-icon',
            'category'  => esc_html__('by SELECT', 'select-core'),
            'as_parent' => array('only' => 'qodef_restaurant_item'),
            'js_view'   => 'VcColumnView',
            'params'    => array(
                array(
                    'type'        => 'dropdown',
                    'class'       => '',
                    'admin_label' => true,
                    'heading'     => esc_html__('Enable Border Around Menu', 'select-core'),
                    'param_name'  => 'menu_border',
                    'value'       => array(
                        esc_html__('No', 'select-core') => 'no-border',
                        esc_html__('Yes', 'select-core')  => 'border'
                    ),
                    'description' => '',
                    'save_always' => true
                )
            )
        ));
    }

    public function render($atts, $content = null) {
        $args = array(
            'menu_border' => '',
        );

        $params = shortcode_atts($args, $atts);
        extract($params);

        $restaurant_menu_class   = array();
        $restaurant_menu_class[] = 'qodef-restaurant-menu';
        $restaurant_menu_class[] = $params['menu_border'];

        $html = '';

        $html .= '<div  '.ultima_qodef_get_class_attribute($restaurant_menu_class).'>';
        $html .= '<div class="qodef-restaurant-menu-holder">';
        $html .= do_shortcode($content);
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }

}
