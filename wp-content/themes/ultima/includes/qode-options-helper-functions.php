<?php

if(!function_exists('ultima_qodef_is_responsive_on')) {
    /**
     * Checks whether responsive mode is enabled in theme options
     * @return bool
     */
    function ultima_qodef_is_responsive_on() {
        return ultima_qodef_options()->getOptionValue('responsiveness') !== 'no';
    }
}