<?php
namespace UltimaQodef\Modules\Shortcodes\ProgressBar;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

class ProgressBar implements ShortcodeInterface {
    private $base;

    function __construct() {
        $this->base = 'qodef_progress_bar';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {

        vc_map(array(
            'name'                      => esc_html__('Select Progress Bar', 'select-core'),
            'base'                      => $this->base,
            'icon'                      => 'icon-wpb-progress-bar extended-custom-icon',
            'category'                  => esc_html__('by SELECT', 'select-core'),
            'allowed_container_element' => 'vc_row',
            'params'                    => array(
                array(
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Title', 'select-core'),
                    'param_name'  => 'title',
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
                    'type'        => 'textfield',
                    'admin_label' => true,
                    'heading'     => esc_html__('Percentage', 'select-core'),
                    'param_name'  => 'percent',
                    'description' => ''
                ),
                array(
                    'type'        => 'colorpicker',
                    'admin_label' => true,
                    'heading'     => esc_html__('Active Bar Color', 'select-core'),
                    'param_name'  => 'active_color',
                    'description' => ''
                ),
                array(
                    'type'        => 'colorpicker',
                    'admin_label' => true,
                    'heading'     => esc_html__('Inactive Bar Color', 'select-core'),
                    'param_name'  => 'inactive_color',
                    'description' => ''
                )
            )
        ));

    }

    public function render($atts, $content = null) {
        $args   = array(
            'title'          => '',
            'title_tag'      => 'h6',
            'percent'        => '100',
            'inactive_color' => '',
            'active_color'   => ''
        );
        $params = shortcode_atts($args, $atts);

        $params['bar_style']        = $this->getBarStyle($params);
        $params['active_bar_style'] = $this->getActiveBarStyle($params);

        //init variables
        $html = select_core_get_shortcode_template_part('templates/progress-bar-template', 'progress-bar', '', $params);

        return $html;

    }

    /**
     * Generates bar style
     *
     * @param $params
     *
     * @return array
     */
    private function getBarStyle($params) {
        $style = array();
        if(!empty($params['inactive_color'])) {
            $style[] = 'background-color: '.$params['inactive_color'];
        }

        return $style;
    }

    /**
     * Generates active bar style
     *
     * @param $params
     *
     * @return array
     */
    private function getActiveBarStyle($params) {
        $style = array();
        if(!empty($params['active_color'])) {
            $style[] = 'background-color: '.$params['active_color'];
        } else if(ultima_qodef_options()->getOptionValue('first_color') !== "") {
            $style[] = 'background-color: '.ultima_qodef_options()->getOptionValue('first_color');
        }

        return $style;
    }

}