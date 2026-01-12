<?php
/**
 * Interactive Banner With Button shortcode template
 */
?>

<div <?php ultima_qodef_class_attribute($banner_classes); ?>>

    <?php if($link !== '') { ?>
        <a class="qodef-interactive-banner-link" itemprop="url" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($link_target); ?>"></a>
    <?php } ?>

    <div class="qodef-interactive-banner-image-holder">
        <?php echo wp_get_attachment_image($image, 'full'); ?>
    </div>

    <div class="qodef-interactive-banner-holder">
        <div class="qodef-interactive-banner-content-holder">
        <div class="qodef-interactive-banner-content">
            <?php if($link !== '') { ?>
                <?php echo ultima_qodef_get_button_html(array(
                    'link'   => $link,
                    'text'   => $link_text,
                    'target' => $link_target,
                    'size'   => 'medium'
                )); ?>
            <?php } ?>
        </div>
        </div>
    </div>

</div>