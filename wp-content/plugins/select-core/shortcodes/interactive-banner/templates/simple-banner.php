<?php
/**
 * Interactive Banner Simple shortcode template
 */
?>

<div <?php ultima_qodef_class_attribute($banner_classes); ?>>
    <?php if($link !== '') { ?>
        <a class="qodef-interactive-banner-link" itemprop="url" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($link_target); ?>"></a>
    <?php } ?>
    <div class="qodef-interactive-banner-image-holder">
        <div class="qodef-interactive-banner-shader" <?php ultima_qodef_inline_style($shader_color); ?>></div>
        <?php echo wp_get_attachment_image($image, 'full'); ?>
    </div>
    <div class="qodef-interactive-banner-content-holder">
        <div class="qodef-interactive-banner-holder">
            <?php if($title !== '') { ?>
            <<?php echo esc_attr($title_tag); ?> class="qodef-interactive-banner-title"><?php echo esc_attr($title) ?></<?php echo esc_attr($title_tag); ?>>
        <?php } ?>
    </div>
</div>
</div>