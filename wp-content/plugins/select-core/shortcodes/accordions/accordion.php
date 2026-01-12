<?php
namespace UltimaQodef\Modules\Shortcodes\Accordion;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

/**
 * class Accordions
 */
class Accordion implements ShortcodeInterface {
    /**
     * @var string
     */
    private $base;

    function __construct() {
        $this->base = 'qodef_accordion';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {

        vc_map(array(
            'name'                    => esc_html__('Select Accordion', 'select-core'),
            'base'                    => $this->base,
            'as_parent'               => array('only' => 'qodef_accordion_tab'),
            'content_element'         => true,
            'category'                => esc_html__('by SELECT', 'select-core'),
            'icon'                    => 'icon-wpb-accordion extended-custom-icon',
            'show_settings_on_create' => true,
            'js_view'                 => 'VcColumnView',
            'params'                  => array(
                array(
                    'type'        => 'textfield',
                    'heading'     => esc_html__('Extra class name', 'select-core'),
                    'param_name'  => 'el_class',
                    'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS.', 'select-core')
                ),
                array(
                    'type'        => 'dropdown',
                    'class'       => '',
                    'heading'     => esc_html__('Style', 'select-core'),
                    'param_name'  => 'style',
                    'value'       => array(
                        esc_html__('Accordion', 'select-core') => 'accordion',
                        esc_html__('Toggle', 'select-core')    => 'toggle'
                    ),
                    'save_always' => true,
                    'description' => ''
                ),
                array(
                    'type'        => 'dropdown',
                    'class'       => '',
                    'heading'     => esc_html__('Type', 'select-core'),
                    'param_name'  => 'type',
                    'value'       => array(
                        esc_html__('Standard', 'select-core') => 'standard',
                        esc_html__('Boxed', 'select-core')    => 'boxed'
                    ),
                    'save_always' => true,
                    'description' => ''
                ),
                array(
                    'type'        => 'colorpicker',
                    'heading'     => esc_html__('Background Color', 'select-core'),
                    'param_name'  => 'background_color',
                    'admin_label' => true,
                    'description' => '',
                    'dependency'  => array('element' => 'type', 'value' => array('boxed'))
                )
            )
        ));
    }

    public function render($atts, $content = null) {
        $default_atts = (array(
            'title'            => '',
            'style'            => 'accordion',
            'background_color' => '',
            'type'             => 'standard'
        ));
        $params       = shortcode_atts($default_atts, $atts);
        extract($params);

        $acc_class                      = $this->getAccordionClasses($params);
        $type_class                     = $this->getAccordionTypeClasses($params);
        $acc_background_color           = $this->getBackgroundColor($params);
        $params['acc_class']            = $acc_class;
        $params['type_class']           = $type_class;
        $params['content']              = $content;
        $params['acc_background_color'] = $acc_background_color;

        $output = '';

        $output .= select_core_get_shortcode_template_part('templates/accordion-holder-template', 'accordions', '', $params);

        return $output;
    }

    /**
     * Generates accordion classes
     *
     * @param $params
     *
     * @return string
     */
    private function getAccordionClasses($params) {

        $acc_class = '';
        $style     = $params['style'];
        switch($style) {
            case 'toggle':
                $acc_class .= 'qodef-toggle qodef-initial';
                break;
            default:
                $acc_class = 'qodef-accordion qodef-initial';
        }

        return $acc_class;
    }

    /**
     * Generates accordion classes for type
     *
     * @param $params
     *
     * @return string
     */
    private function getAccordionTypeClasses($params) {

        $type_class = '';
        $style      = $params['type'];
        switch($style) {
            case 'boxed':
                $type_class .= 'qodef-accordion-boxed';
                break;
            default:
                $type_class = 'qodef-accordion-standard';
        }

        return $type_class;
    }

    private function getBackgroundColor($params) {
        $style = '';

        if($params['background_color'] != '') {
            $style = 'background-color:'.$params['background_color'];
        }

        return $style;
    }
}
