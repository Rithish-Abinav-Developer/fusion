<?php
namespace UltimaQodef\Modules\Shortcodes\ProcessItem;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

class ProcessItem implements ShortcodeInterface {

    private $base;

    function __construct() {
        $this->base = 'qodef_process_item';
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        vc_map(array(
                'name'                      => esc_html__('Process Item', 'select-core'),
                'base'                      => $this->base,
                'allowed_container_element' => 'vc_row',
                'as_child'                  => array('only' => 'qodef_process_holder'),
                'category'                  => esc_html__('by SELECT', 'select-core'),
                'icon'                      => 'icon-wpb-process-item extended-custom-icon',
                'params'                    => array_merge(
                    array(
                        array(
                            'type'        => 'textfield',
                            'heading'     => esc_html__('Process Number', 'select-core'),
                            'param_name'  => 'number',
                            'admin_label' => true,
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
                    )
                )
            )
        );
    }

    public function render($atts, $content = null) {

        $args = array(
            'title'     => '',
            'number'    => '',
            'title_tag' => 'h4',
            'text'      => '',
        );

        $params = shortcode_atts($args, $atts);

        $html = select_core_get_shortcode_template_part('templates/process-item-template', 'process', '', $params);

        return $html;
    }
}