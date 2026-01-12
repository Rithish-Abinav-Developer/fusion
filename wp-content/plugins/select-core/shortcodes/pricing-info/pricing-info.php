<?php
namespace UltimaQodef\Modules\Shortcodes\PricingInfo;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

class PricingInfo implements ShortcodeInterface {
    /**
     * @var string
     */
    private $base;

    /**
     * Sets base attribute and registers shortcode with Visual Composer
     */
    public function __construct() {
        $this->base = 'qodef_pricing_info';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    /**
     * Returns base attribute
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Maps shortcode to Visual Composer
     */
    public function vcMap() {
        vc_map(array(
            'name'                      => esc_html__('Select Pricing Info', 'select-core'),
            'base'                      => $this->base,
            'category'                  => esc_html__('by SELECT', 'select-core'),
            'icon'                      => 'icon-wpb-pricing-info extended-custom-icon',
            'allowed_container_element' => 'vc_row',
            'params'                    => array(
                array(
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Title', 'select-core'),
                    'param_name'  => 'title',
                    'value'       => esc_html__('Basic', 'select-core'),
                    'description' => ''
                ),
                array(
                    'type'        => 'dropdown',
                    'admin_label' => true,
                    'heading'     => esc_html__('Title Tag', 'select-core'),
                    'param_name'  => 'title_tag',
                    'value'       => array(
                        ''   => '',
                        'h2' => 'h2',
                        'h3' => 'h3',
                        'h4' => 'h4',
                        'h5' => 'h5',
                        'h6' => 'h6',
                    ),
                    'description' => ''
                ),
                array(
                    'type'       => 'textarea',
                    'heading'    => esc_html__('Description', 'select-core'),
                    'param_name' => 'description'
                ),
                array(
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Price', 'select-core'),
                    'param_name'  => 'price',
                    'description' => esc_html__('Default value is 100', 'select-core')
                ),
                array(
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Currency', 'select-core'),
                    'param_name'  => 'currency',
                    'description' => esc_html__('Default mark is $', 'select-core')
                ),
                array(
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Price Period', 'select-core'),
                    'param_name'  => 'price_period',
                    'description' => esc_html__('Default label is monthly', 'select-core')
                ),
                array(
                    'type'        => 'dropdown',
                    'admin_label' => true,
                    'heading'     => esc_html__('Show Button', 'select-core'),
                    'param_name'  => 'show_button',
                    'value'       => array(
                        esc_html__('Default', 'select-core') => '',
                        esc_html__('Yes', 'select-core')     => 'yes',
                        esc_html__('No', 'select-core')      => 'no'
                    ),
                    'description' => ''
                ),
                array(
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Button Text', 'select-core'),
                    'param_name'  => 'button_text',
                    'dependency'  => array('element' => 'show_button', 'value' => 'yes')
                ),
                array(
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Button Link', 'select-core'),
                    'param_name'  => 'link',
                    'dependency'  => array('element' => 'show_button', 'value' => 'yes')
                ),
                array(
                    'type'        => 'dropdown',
                    'admin_label' => true,
                    'heading'     => esc_html__('Active', 'select-core'),
                    'param_name'  => 'active',
                    'value'       => array(
                        esc_html__('No', 'select-core')  => 'no',
                        esc_html__('Yes', 'select-core') => 'yes'
                    ),
                    'save_always' => true,
                    'description' => ''
                ),
                array(
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Active Text', 'select-core'),
                    'param_name'  => 'active_text',
                    'dependency'  => array('element' => 'active', 'value' => 'yes')
                ),
                array(
                    'type'        => 'colorpicker',
                    'admin_label' => true,
                    'heading'     => esc_html__('Active Text Background Color', 'select-core'),
                    'param_name'  => 'active_text_background_color',
                    'dependency'  => array('element' => 'active', 'value' => 'yes')
                )
            )
        ));
    }

    /**
     * Renders HTML for product list shortcode
     *
     * @param array $atts
     * @param null $content
     *
     * @return string
     */
    public function render($atts, $content = null) {
        $default_atts = array(
            'title'                        => 'Basic',
            'description'                  => '',
            'title_tag'                    => 'h3',
            'price'                        => '100',
            'currency'                     => '$',
            'price_period'                 => 'monthly',
            'active'                       => 'no',
            'show_button'                  => 'no',
            'link'                         => '',
            'button_text'                  => 'button',
            'active_text'                  => 'Best Choice',
            'active_text_background_color' => ''
        );

        $params = shortcode_atts($default_atts, $atts);
        //Extract params for use in method
        extract($params);

        $pricing_info_clasess = '';
        if($active == 'yes') {
            $pricing_info_clasess .= ' qodef-active';
        }

        $params['pricing_info_classes'] = $pricing_info_clasess;

        $params['background_style'] = $this->getBackgroundStyle($params);

        return select_core_get_shortcode_template_part('templates/pricing-info', 'pricing-info', '', $params);
    }

    private function getBackgroundStyle($params) {
        $style = '';

        if($params['active_text_background_color'] != '') {
            $style = 'background-color:'.$params['active_text_background_color'];
        }

        return $style;
    }


}