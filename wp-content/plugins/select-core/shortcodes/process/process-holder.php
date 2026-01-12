<?php
namespace UltimaQodef\Modules\Shortcodes\ProcessHolder;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

class ProcessHolder implements ShortcodeInterface {

    private $base;

    function __construct() {
        $this->base = 'qodef_process_holder';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        vc_map(array(
                'name'      => esc_html__('Process Holder', 'select-core'),
                'base'      => $this->base,
                'icon'      => 'icon-wpb-process-holder extended-custom-icon',
                'category'  => esc_html__('by SELECT', 'select-core'),
                'as_parent' => array('only' => 'qodef_process_item'),
                'js_view'   => 'VcColumnView',
                'params'    => array(
                    array(
                        'type'        => 'dropdown',
                        'class'       => '',
                        'heading'     => esc_html__('Columns', 'select-core'),
                        'admin_label' => true,
                        'param_name'  => 'number_of_columns',
                        'value'       => array(
                            esc_html__('Three', 'select-core') => 'columns-3',
                            esc_html__('Four', 'select-core')  => 'columns-4',
                            esc_html__('Five', 'select-core')  => 'columns-5'
                        ),
                        'description' => '',
                        'save_always' => true
                    ),
                    array(
                        'type'        => 'dropdown',
                        'class'       => '',
                        'heading'     => esc_html__('Color Skin', 'select-core'),
                        'admin_label' => true,
                        'param_name'  => 'color_skin',
                        'value'       => array(
                            esc_html__('Dark', 'select-core')  => 'dark-skin',
                            esc_html__('Light', 'select-core') => 'light-skin'
                        ),
                        'description' => '',
                        'save_always' => true
                    )
                )
            )
        );
    }

    public function render($atts, $content = null) {

        $args = array(
            'number_of_columns' => '',
            'color_skin'        => ''
        );

        $params = shortcode_atts($args, $atts);
        extract($params);

        $process_holder_class   = array();
        $process_holder_class[] = 'qodef-process-holder';
        $process_holder_class[] = $params['number_of_columns'];
        $process_holder_class[] = $params['color_skin'];

        $html = '';

        $html .= '<div  '.ultima_qodef_get_class_attribute($process_holder_class).'>';
        $html .= '<div class="qodef-process-holder-inner">';
        $html .= do_shortcode($content);
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
}