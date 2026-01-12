<?php
namespace UltimaQodef\Modules\Shortcodes\FullscreenSections;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

/**
 * Class FullscreenSections
 */
class FullscreenSections implements ShortcodeInterface {

    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'qodef_fullscreen_sections';

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
            'name'                    => esc_html__('Select Fullscreen Sections', 'select-core'),
            'base'                    => $this->getBase(),
            'category'                => esc_html__('by SELECT', 'select-core'),
            'icon'                    => 'icon-wpb-fullscreen-sections extended-custom-icon',
            'as_parent'               => array('only' => 'qodef_fullscreen_sections_item'),
            'js_view'                 => 'VcColumnView',
            'params'                  => array(
                array(
                    'type'        => 'dropdown',
                    'class'       => '',
                    'heading'     => esc_html__('Choose Type', 'select-core'),
                    'admin_label' => true,
                    'param_name'  => 'sections_type',
                    'value'       => array(
                        esc_html__('Regular', 'select-core')        => 'qodef-regular',
                        esc_html__('With Passepartout', 'select-core') => 'qodef-paspartue',
                    ),
                    'description' => ''
                ),
                array(
                    'type'        => 'colorpicker',
                    'class'       => '',
                    'heading'     => esc_html__('Background Color', 'select-core'),
                    'param_name'  => 'background_color',
                    'value'       => '',
                    'description' => ''
                ),
                array(
                    'type'        => 'dropdown',
                    'class'       => '',
                    'heading'     => esc_html__('Disable Header Style on Slides', 'select-core'),
                    'param_name'  => 'disable_header_style',
                    'value'       => array(
                        esc_html__('No', 'select-core')        => 'no',
                        esc_html__('Yes', 'select-core') => 'yes',
                    ),
                    'description' => ''
                ),
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

        $args = array(
            'sections_type'    => 'qodef-regular',
            'background_color' => '',
            'disable_header_style' => 'no'
        );

        $params = shortcode_atts($args, $atts);
        extract($params);

        $styles = array();
        if($params['background_color'] !== '') {
            $styles[] = 'background-color: '.$params['background_color'];
        }
        $styles = implode(';', $styles);
        $classes = $this->getHolderClasses($params);

        $html = '';

        $html .= '<div class="qodef-fullscreen-sections '.$classes.'" style=" '.$styles.' ">';
        $html .= do_shortcode($content);
        $html .= '</div>';

        return $html;
    }

    private function getHolderClasses($params) {
        $classes = array();

        if($params['sections_type'] != '') {
            $classes[] = $params['sections_type'];
        }
        if($params['disable_header_style'] != '' && $params['disable_header_style'] === 'yes') {
           $classes[] = 'qodef-disable-sections-header-style-changing';
        }

        return implode(' ', $classes);
    }


}