<?php
	if(!function_exists('ultima_qodef_layerslider_overrides')) {
		/**
		 * Disables Layer Slider auto update box
		 */
		function ultima_qodef_layerslider_overrides() {
			$GLOBALS['lsAutoUpdateBox'] = false;
		}

		add_action('layerslider_ready', 'ultima_qodef_layerslider_overrides');
	}
?>