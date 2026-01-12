<?php
/**
 * Underline icon box shortcode template
 */
?>
<div <?php ultima_qodef_inline_style($box_style); ?> <?php ultima_qodef_class_attribute($holder_classes); ?>>
    <?php if($link !== '') { ?>
        <a class="qodef-underline-box-link" itemprop="url" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($link_target); ?>"></a>
    <?php } ?>
    <div class="qodef-underline-icon-box-holder-inner">
        <div class="qodef-underline-icon-box-icon-holder">
            <?php echo ultima_qodef_execute_shortcode('qodef_icon', $icon_parameters); ?>
        </div>
        <div class="qodef-underline-icon-box-text-holder">
            <div class="qodef-underline-icon-box-title">
                <<?php echo esc_attr($title_tag); ?>><?php echo esc_html($title); ?></<?php echo esc_attr($title_tag); ?>>
        </div>
        <div class="qodef-underline-icon-box-text">
            <?php echo esc_html($text); ?>
        </div>
    </div>
</div>
<div class="qodef-underline-icon-box-line" <?php ultima_qodef_inline_style($line_style); ?>>
    <span class="qodef-underline-holder"></span>
</div>
</div>