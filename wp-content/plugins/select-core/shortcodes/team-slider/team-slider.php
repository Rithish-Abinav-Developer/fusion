<?php

namespace UltimaQodef\Modules\Shortcodes\TeamSlider;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

class TeamSlider implements ShortcodeInterface {
    private $base;

    public function __construct() {
        $this->base = 'qodef_team_slider';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        vc_map(array(
            'name'         => 'Select Team Slider',
            'base'         => $this->base,
            'category'     => esc_html__('by SELECT', 'select-core'),
            'icon'         => 'icon-wpb-team-slider extended-custom-icon',
            'is_container' => true,
            'js_view'      => 'VcColumnView',
            'as_parent'    => array('only' => 'qodef_team_slider_item'),
            'params'       => array(
                array(
                    'type'        => 'dropdown',
                    'admin_label' => true,
                    'heading'     => esc_html__('Number of Items in Row', 'select-core'),
                    'param_name'  => 'number_of_items',
                    'description' => '',
                    'value'       => array(
                        '3' => '3',
                        '4' => '4',
                        '5' => '5'
                    )
                ),
                array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__('Show Navigation Dots', 'select-core'),
                    'param_name'  => 'dots',
                    'value'       => array(
                        esc_html__('Yes', 'select-core') => 'yes',
                        esc_html__('No', 'select-core')  => 'no'
                    ),
                    'save_always' => true,
                )
            )
        ));
    }

    public function render($atts, $content = null) {
        $default_atts = array(
            'number_of_items' => '3',
            'dots'            => 'yes'
        );

        $params = shortcode_atts($default_atts, $atts);

        /* proceed slider type parameter to nested shortcode in order to call proper template */
        $params['content'] = preg_replace('/\[qodef_team_slider_item\b/i', '[qodef_team_slider_item slider_type="simple"', $content);

        $params['holder_classes'] = $this->getHolderClasses($params);
        $params['data_attrs']     = $this->getDataAttribute($params);

        return select_core_get_shortcode_template_part('templates/team-slider-template', 'team-slider', '', $params);
    }

    /**
     * Returns array of holder classes
     *
     * @param $params
     *
     * @return array
     */
    private function getHolderClasses() {
        $classes = array('qodef-team-slider-holder');

        $classes[] = 'simple';

        return $classes;
    }

    /**
     * Return Team Slider data attribute
     *
     * @param $params
     *
     * @return string
     */

    private function getDataAttribute($params) {

        $data_attrs = array();

        if($params['number_of_items'] !== '') {
            $data_attrs['data-number_of_items'] = $params['number_of_items'];
        }

        if($params['number_of_items'] !== '') {
            $data_attrs['data-dots'] = ($params['dots'] !== '') ? $params['dots'] : '';
        }

        return $data_attrs;
    }
}