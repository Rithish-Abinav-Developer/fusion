<a itemprop="url" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>" <?php ultima_qodef_inline_style($button_styles); ?> <?php ultima_qodef_class_attribute($button_classes); ?> <?php echo ultima_qodef_get_inline_attrs($button_data); ?> <?php echo ultima_qodef_get_inline_attrs($button_custom_attrs); ?>>
    <span class="qodef-btn-text"><?php echo esc_html($text); ?></span>
    <span class="qodef-btn-icon-normal"><?php echo ultima_qodef_icon_collections()->renderIcon($icon, $icon_pack); ?></span>
    <span class="qodef-btn-icon-flip"><?php echo ultima_qodef_icon_collections()->renderIcon($icon, $icon_pack); ?></span>
    <?php if ($hover_type == 'scale') { ?>
    	<span class="qodef-hover-background"></span>
    <?php } ?>

    <?php if ($hover_type == 'sweep') { ?>
    	<span class="qodef-hover-background-holder">
	    	<span class="qodef-hover-background"></span>
    	</span>
    <?php } ?>
</a>