<?php
namespace UltimaQodef\Modules\Shortcodes\FullscreenSectionsItem;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

/**
 * Class FuulscreenSectionsItem
 */
class FullscreenSectionsItem implements ShortcodeInterface {

    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'qodef_fullscreen_sections_item';

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
            'name'            => esc_html__('Select Fullscreen Sections Item', 'select-core'),
            'base'            => $this->getBase(),
            'category'        => esc_html__('by SELECT', 'select-core'),
            'as_child'        => array('only' => 'qodef_fullscreen_sections'),
            'content_element' => true,
            'as_parent'       => array('except' => 'vc_accordion, vc_tabs, qodef_fullscreen_sections, qodef_fullscreen_sections_item, qodef_portfolio_slider'),
            'icon'            => 'icon-wpb-fullscreen-sections-item extended-custom-icon',
            'js_view'         => 'VcColumnView',
            'params'          => array(
                array(
                    'type'        => 'dropdown',
                    'class'       => '',
                    'heading'     => esc_html__('Section Type', 'select-core'),
                    'admin_label' => true,
                    'param_name'  => 'section_type',
                    'value'       => array(
                        esc_html__('Regular', 'select-core')            => 'regular',
                        esc_html__('Slide (left/right)', 'select-core') => 'slide',
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
                    'type'        => 'attach_image',
                    'class'       => '',
                    'heading'     => esc_html__('Background Image', 'select-core'),
                    'param_name'  => 'background_image',
                    'value'       => '',
                    'description' => ''
                ),
                array(
                    'type'        => 'dropdown',
                    'class'       => '',
                    'heading'     => esc_html__('Header Style', 'select-core'),
                    'param_name'  => 'header_style',
                    'value'       => array(
                        esc_html__('Default', 'select-core') => '',
                        esc_html__('Light', 'select-core')   => 'light',
                        esc_html__('Dark', 'select-core')    => 'dark',
                    ),
                    'description' => ''
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
        $args = array(
            'section_type'     => 'regular',
            'background_color' => '',
            'background_image' => '',
            'header_style' => ''
        );

        $params = shortcode_atts($args, $atts);
        extract($params);
        $params['content'] = $content;

        $item_styles = array();
        if($params['background_color'] !== '') {
            $item_styles[] = 'background-color: '.$params['background_color'];
        }
        if($params['background_image'] !== '') {
            $item_styles[] = 'background-image: url('.wp_get_attachment_url($params['background_image']).')';
        }
        $item_style = implode(';', $item_styles);
        $classes = $this->getHolderClasses($params);

        $html = '';
        $html .= '<div class="qodef-fullscreen-sections-item ' . $classes . '">';
        $html .= '<div class="qodef-fullscreen-sections-item-content">';
        $html .= '<div class="qodef-fullscreen-sections-item-content-inner"  style=" '.$item_style.' ">';
        $html .= do_shortcode($content);
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }

    private function getHolderClasses($params) {
        $classes = array();

        if($params['section_type'] != '') {
            $classes[] = 'qodef-' . $params['section_type'];
        }
        if($params['header_style'] != '') {
            $classes[] = 'qodef-header-effect';
            $classes[] = $params['header_style'];
        }

        return implode(' ', $classes);
    }

}