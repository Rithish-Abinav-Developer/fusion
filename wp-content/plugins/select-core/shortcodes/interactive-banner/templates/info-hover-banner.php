<?php
/**
 * Interactive Banner shortcode template
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
        <div class="qodef-interactive-banner-front-holder">
            <?php if($title !== '') { ?>
            <<?php echo esc_attr($title_tag); ?> class="qodef-interactive-banner-title"><?php echo esc_attr($title) ?></<?php echo esc_attr($title_tag); ?>>
        <div class="qodef-interactive-banner-separator"></div>
        <?php } ?>
        <?php if($subtitle !== '') { ?>
            <span class="qodef-interactive-banner-subtitle"><?php echo esc_attr($subtitle) ?></span>
        <?php } ?>
    </div>
    <div class="qodef-interactive-banner-back-holder">
        <?php if($title !== '') { ?>
        <<?php echo esc_attr($title_tag); ?> class="qodef-interactive-banner-title"><?php echo esc_attr($title) ?></<?php echo esc_attr($title_tag); ?>>
    <div class="qodef-interactive-banner-separator"></div>
<?php } ?>
    <p class="qodef-interactive-banner-text">
        <?php echo esc_attr($text); ?>
    </p>
    <?php if($link !== '') { ?>
        <?php echo ultima_qodef_get_button_html(array(
            'link'   => $link,
            'text'   => $link_text,
            'target' => $link_target,
            'size'   => 'small'
        )); ?>
    <?php } ?>
</div>
</div>

</div>