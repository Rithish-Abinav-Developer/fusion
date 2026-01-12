<?php
if(!function_exists('ultima_qodef_event_scheduler_map')) {
    /**
     * Map Event Scheduler shortcode
     * Hooks on vc_after_init action
     */
    function ultima_qodef_event_scheduler_map() {

        vc_map(array(
                'name'      => esc_html__('Event Scheduler', 'ultima'),
                'base'      => '2code-schedule-draw',
                'icon'      => 'icon-wpb-event-scheduler extended-custom-icon',
                'category'  => esc_html__('by SELECT', 'ultima'),
                'js_view'   => 'VcColumnView',
                'show_settings_on_create' => false
            )
        );

    }

    add_action('vc_after_init', 'ultima_qodef_event_scheduler_map');
}
?>