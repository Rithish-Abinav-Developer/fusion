<div <?php ultima_qodef_class_attribute($holder_classes); ?>>
    <div class="qodef-iwt-content-holder <?php echo esc_attr($custom_icon_animation); ?>">

        <div class="qodef-iwt-icon-title-holder">

            <div class="qodef-iwt-icon-holder">
                <?php if(!empty($custom_icon)) : ?>
                    <div class="qodef-icon-animation-holder qodef-custom-icon-animation-holder" <?php ultima_qodef_inline_style($icon_parameters); ?>>
                        <div class="qodef-icon-shortcode <?php echo esc_attr($custom_icon_animation); ?> qodef-custom-icon">
                            <?php echo wp_get_attachment_image($custom_icon, 'full'); ?>
                        </div>
                    </div>
                <?php else: ?>
                    <?php echo select_core_get_shortcode_template_part('templates/icon', 'icon-with-text', '', array('icon_parameters' => $icon_parameters)); ?>
                <?php endif; ?>
            </div>

            <div class="qodef-iwt-title-holder" <?php ultima_qodef_inline_style($icon_parameters); ?>>
                <<?php echo esc_attr($title_tag); ?> <?php ultima_qodef_inline_style($title_styles); ?> class="qodef-iwt-title">
                <?php echo esc_html($title); ?>
            </<?php echo esc_attr($title_tag); ?>>
        </div>

    </div>

    <div class="qodef-iwt-text-holder" <?php ultima_qodef_inline_style($icon_parameters); ?>>
        <p <?php ultima_qodef_inline_style($text_styles); ?>><?php echo esc_html($text); ?></p>
        <?php if(!empty($link) && !empty($link_text)) : ?>
            <a itemprop="url" class="qodef-iwt-link" href="<?php echo esc_url($link); ?>" <?php ultima_qodef_inline_attr($target, 'target'); ?>><?php echo esc_html($link_text); ?></a>
        <?php endif; ?>
    </div>

</div>
</div>
