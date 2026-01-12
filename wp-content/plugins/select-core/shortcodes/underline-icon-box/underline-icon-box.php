<?php
namespace UltimaQodef\Modules\Shortcodes\UnderlineIconBox;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

/**
 * Class UnderlineIconBox
 */
class UnderlineIconBox implements ShortcodeInterface {

    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'qodef_underline_icon_box';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    /**
     * Returns base for shortcode
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Maps shortcode to Visual Composer. Hooked on vc_before_init
     *
     * @see qode_core_get_carousel_slider_array_vc()
     */
    public function vcMap() {

        vc_map(array(
            'name'                      => esc_html__('Select Underline Icon Box', 'select-core'),
            'base'                      => $this->getBase(),
            'category'                  => esc_html__('by SELECT', 'select-core'),
            'icon'                      => 'icon-wpb-underline-icon-box extended-custom-icon',
            'allowed_container_element' => 'vc_row',
            'params'                    => array_merge(
                ultima_qodef_icon_collections()->getVCParamsArray(),
                array(
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Box Type', 'select-core'),
                        'param_name'  => 'box_type',
                        'value'       => array(
                            'Underline' => 'underline-icon',
                            'Overline'  => 'top-line-icon'
                        ),
                        'description' => ''

                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Title', 'select-core'),
                        'param_name'  => 'title',
                        'admin_label' => true,
                        'description' => ''
                    ),
                    array(
                        'type'        => 'dropdown',
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
                        'heading'     => esc_html__('Text', 'select-core'),
                        'param_name'  => 'text',
                        'admin_label' => true,
                        'description' => ''
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Box Link', 'select-core'),
                        'param_name'  => 'link',
                        'admin_label' => true,
                        'description' => ''
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Link Target', 'select-core'),
                        'param_name'  => 'link_target',
                        'value'       => array(
                            esc_html__('Self', 'select-core')  => '_self',
                            esc_html__('Blank', 'select-core') => '_blank',
                        ),
                        'description' => ''
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Icon Color', 'select-core'),
                        'param_name'  => 'icon_color',
                        'group'       => esc_html__('Design Options', 'select-core'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => 'Box Color',
                        'param_name'  => 'background_color',
                        'group'       => esc_html__('Design Options', 'select-core'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Line Color', 'select-core'),
                        'param_name'  => 'line_color',
                        'group'       => esc_html__('Design Options', 'select-core'),
                        'admin_label' => true
                    )
                )
            )
        ));

    }

    /**
     * Renders shortcodes HTML
     *
     * @param $atts array of shortcode params
     * @param $content string shortcode content
     *
     * @return string
     */
    public function render($atts, $content = null) {

        $default_atts = array(
            'title'            => '',
            'title_tag'        => 'h4',
            'text'             => '',
            'box_type'         => 'underline-icon',
            'icon_color'       => '',
            'background_color' => '',
            'link'             => '',
            'link_target'      => '_self',
            'line_color'       => ''
        );

        $default_atts = array_merge($default_atts, ultima_qodef_icon_collections()->getShortcodeParams());
        $params       = shortcode_atts($default_atts, $atts);

        $params['icon_parameters'] = $this->getIconParameters($params);
        $params['holder_classes']  = $this->getHolderClasses($params);
        $params['box_style']       = $this->getBoxStyle($params);
        $params['line_style']      = $this->getLineStyle($params);

        //get correct heading value. If provided heading isn't valid get the default one
        $headings_array      = array('h2', 'h3', 'h4', 'h5', 'h6');
        $params['title_tag'] = (in_array($params['title_tag'], $headings_array)) ? $params['title_tag'] : $default_atts['title_tag'];

        //Get HTML from template
        $html = select_core_get_shortcode_template_part('templates/'.$params['box_type'], 'underline-icon-box', '', $params);

        return $html;

    }

    private function getIconParameters($params) {
        $iconPackName = ultima_qodef_icon_collections()->getIconCollectionParamNameByKey($params['icon_pack']);

        $params_array['icon_pack']   = $params['icon_pack'];
        $params_array[$iconPackName] = $params[$iconPackName];

        $params_array['icon_color'] = $params['icon_color'];

        return $params_array;
    }

    private function getHolderClasses($params) {
        $classes   = array('qodef-underline-icon-box-holder');
        $classes[] = $params['box_type'];

        return $classes;
    }

    private function getBoxStyle($params) {
        $style = '';

        if($params['background_color'] != '') {
            $style = 'background-color:'.$params['background_color'];
        }

        return $style;
    }

    private function getLineStyle($params) {
        $style = '';

        if($params['line_color'] != '') {
            $style = 'background-color:'.$params['line_color'];
        }

        return $style;
    }
}