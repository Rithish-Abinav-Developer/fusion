<?php
namespace UltimaQodef\Modules\Shortcodes\InteractiveBanner;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

/**
 * Class UnderlineIconBox
 */
class InteractiveBanner implements ShortcodeInterface {

    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'qodef_interactive_banner';

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
            'name'                      => esc_html__('Select Interactive Banner', 'select-core'),
            'base'                      => $this->getBase(),
            'category'                  => esc_html__('by SELECT', 'select-core'),
            'icon'                      => 'icon-wpb-interactive-banner extended-custom-icon',
            'allowed_container_element' => 'vc_row',
            'params'                    => array_merge(
                array(
                    array(
                        'type'        => 'attach_images',
                        'heading'     => esc_html__('Banner Image', 'select-core'),
                        'param_name'  => 'image',
                        'description' => esc_html__('Choose image from media library.', 'select-core')
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Image Shader Color', 'select-core'),
                        'param_name'  => 'background_color',
                        'admin_label' => true,
                        'description' => ''
                    ),
                    array(
                        'type'       => 'dropdown',
                        'heading'    => esc_html__('Interactive Banner Type', 'select-core'),
                        'param_name' => 'banner_type',
                        'value'      => array(
                            esc_html__('Info On Hover', 'select-core') => 'info-hover-banner',
                            esc_html__('Button On Hover', 'select-core') => 'button-hover-banner',
                            esc_html__('Simple', 'select-core')        => 'simple-banner',
                        ),
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Title', 'select-core'),
                        'param_name'  => 'title',
                        'admin_label' => true,
                        'description' => '',
                        'dependency'  => array('element' => 'banner_type', 'value' => array('info-hover-banner', 'simple-banner'))
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
                        'description' => '',
                        'dependency'  => array('element' => 'banner_type', 'value' => array('info-hover-banner', 'simple-banner'))
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Subtitle', 'select-core'),
                        'param_name'  => 'subtitle',
                        'admin_label' => true,
                        'description' => '',
                        'dependency'  => array('element' => 'banner_type', 'value' => array('info-hover-banner'))
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Text', 'select-core'),
                        'param_name'  => 'text',
                        'admin_label' => true,
                        'description' => '',
                        'dependency'  => array('element' => 'banner_type', 'value' => array('info-hover-banner'))
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Banner Link', 'select-core'),
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
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Link Text', 'select-core'),
                        'param_name'  => 'link_text',
                        'admin_label' => true,
                        'description' => '',
                        'dependency'  => array('element' => 'banner_type', 'value' => array('info-hover-banner', 'button-hover-banner'))
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
            'image'            => '',
            'background_color' => '',
            'title'            => '',
            'title_tag'        => 'h4',
            'subtitle'         => '',
            'banner_type'      => 'info-hover-banner',
            'text'             => '',
            'link'             => '',
            'link_target'      => '_self',
            'link_text'        => 'Learn More'
        );

        $default_atts = array_merge($default_atts, ultima_qodef_icon_collections()->getShortcodeParams());
        $params       = shortcode_atts($default_atts, $atts);

        $params['shader_color']   = $this->getShaderColor($params);
        $params['banner_classes'] = $this->getBannerClasses($params);

        $html = select_core_get_shortcode_template_part('templates/'.$params['banner_type'], 'interactive-banner', '', $params);

        return $html;

    }

    private function getShaderColor($params) {
        $style = '';

        if($params['background_color'] != '') {
            $style = 'background-color:'.$params['background_color'];
        }

        return $style;
    }

    private function getBannerClasses($params) {
        $classes   = array('qodef-interactive-banner');
        $classes[] = $params['banner_type'];

        return $classes;
    }

}