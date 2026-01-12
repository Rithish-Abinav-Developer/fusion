<?php
namespace UltimaQodef\Modules\Shortcodes\InfoBox;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

/**
 * Class UnderlineIconBox
 */
class InfoBox implements ShortcodeInterface {

    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'qodef_info_box';

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
            'name'                      => esc_html__('Select Info Box', 'select-core'),
            'base'                      => $this->getBase(),
            'category'                  => esc_html__('by SELECT', 'select-core'),
            'icon'                      => 'icon-wpb-info-box extended-custom-icon',
            'allowed_container_element' => 'vc_row',
            'params'                    => array_merge(
                ultima_qodef_icon_collections()->getVCParamsArray(array(), '', true),
                array(
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Info Box Type', 'select-core'),
                        'param_name'  => 'box_type',
                        'value'       => array(
                            esc_html__('Icon Top', 'select-core')  => 'info-box-icon-top',
                            esc_html__('Icon Left', 'select-core') => 'info-box-icon-left'
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
                        'save_always' => true,
                        'value'       => array(
                            esc_html__('Self', 'select-core')  => '_self',
                            esc_html__('Blank', 'select-core') => '_blank',
                        ),
                        'description' => '',
                        'dependency'  => array('element' => 'link', 'not_empty' => true)
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Icon Color', 'select-core'),
                        'param_name'  => 'icon_color',
                        'group'       => esc_html__('Design Options', 'select-core'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Icon Font Size (px)', 'select-core'),
                        'param_name'  => 'icon_font_size',
                        'group'       => esc_html__('Design Options', 'select-core'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Title Color', 'select-core'),
                        'param_name'  => 'title_color',
                        'group'       => esc_html__('Design Options', 'select-core'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Text Color', 'select-core'),
                        'param_name'  => 'text_color',
                        'group'       => esc_html__('Design Options', 'select-core'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Background Color', 'select-core'),
                        'param_name'  => 'background_color',
                        'group'       => esc_html__('Design Options', 'select-core'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Hover Background Color', 'select-core'),
                        'param_name'  => 'hover_background_color',
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
            'box_type'               => 'info-box-icon-top',
            'title'                  => '',
            'title_tag'              => 'h4',
            'text'                   => '',
            'link'                   => '',
            'link_target'            => '',
            'icon_color'             => '',
            'icon_font_size'         => '',
            'title_color'            => '',
            'text_color'             => '',
            'background_color'       => '',
            'hover_background_color' => ''
        );

        $default_atts = array_merge($default_atts, ultima_qodef_icon_collections()->getShortcodeParams());
        $params       = shortcode_atts($default_atts, $atts);

        $params['icon']            = $this->getInfoBoxIcon($params);
        $params['holder_classes']  = $this->getHolderClasses($params);
        $params['box_style']       = $this->getBoxStyle($params);
        $params['hover_box_style'] = $this->getHoverBoxStyle($params);
        $params['title_styles']    = $this->getTitleStyles($params);
        $params['text_styles']     = $this->getTextStyles($params);

        //get correct heading value. If provided heading isn't valid get the default one
        $headings_array      = array('h2', 'h3', 'h4', 'h5', 'h6');
        $params['title_tag'] = (in_array($params['title_tag'], $headings_array)) ? $params['title_tag'] : $default_atts['title_tag'];

        //Get HTML from template
        $html = select_core_get_shortcode_template_part('templates/'.$params['box_type'], 'info-box', '', $params);

        return $html;

    }

    private function getIconStyles($params) {

        $iconStyles = array();

        if($params['icon_color'] !== '') {
            $iconStyles[] = 'color: '.$params['icon_color'];
        }

        if($params['icon_font_size'] !== '') {
            $iconStyles[] = 'font-size: '.$params['icon_font_size'].'px';
        }

        return implode(';', $iconStyles);

    }

    private function getInfoBoxIcon($params) {
        $info_box_icon = '';
        if($params['icon_pack'] != '') {
            $icon                                   = ultima_qodef_icon_collections()->getIconCollectionParamNameByKey($params['icon_pack']);
            $iconStyles                             = array();
            $iconStyles['icon_attributes']['style'] = $this->getIconStyles($params);
            $iconStyles['icon_attributes']['class'] = 'qodef-icon-element';

            $info_box_icon = ultima_qodef_icon_collections()->renderIcon($params[$icon], $params['icon_pack'], $iconStyles);
        }

        return $info_box_icon;

    }

    private function getHolderClasses($params) {
        $classes   = array('qodef-info-box-holder');
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

    private function getHoverBoxStyle($params) {
        $style = '';

        if($params['hover_background_color'] != '') {
            $style = 'background-color:'.$params['hover_background_color'];
        }

        return $style;
    }

    private function getTitleStyles($params) {
        $styles = array();

        if(!empty($params['title_color'])) {
            $styles[] = 'color: '.$params['title_color'];
        }

        return $styles;
    }

    private function getTextStyles($params) {
        $styles = array();

        if(!empty($params['text_color'])) {
            $styles[] = 'color: '.$params['text_color'];
        }

        return $styles;
    }

}