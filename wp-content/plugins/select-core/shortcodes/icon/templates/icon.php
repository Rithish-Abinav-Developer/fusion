<?php if($icon_animation_holder) : ?>
<span class="qodef-icon-animation-holder" <?php ultima_qodef_inline_style($icon_animation_holder_styles); ?>>
<?php endif; ?>

    <span <?php ultima_qodef_class_attribute($icon_holder_classes); ?> <?php ultima_qodef_inline_style($icon_holder_styles); ?> <?php echo ultima_qodef_get_inline_attrs($icon_holder_data); ?>>
        <?php if($link !== '') : ?>
        <a itemprop="url" class="<?php echo esc_attr($link_class) ?>" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>">
            <?php endif; ?>
            <?php if($icon_flip_animation == 'yes') : ?>
                <span class="flip-icon-holder">
            <?php endif; ?>
            <span class="icon-normal"><?php echo ultima_qodef_icon_collections()->renderIcon($icon, $icon_pack, $icon_params); ?></span>

            <?php if($icon_flip_animation == 'yes') : ?>
                <span class="icon-flip"><?php echo ultima_qodef_icon_collections()->renderIcon($icon, $icon_pack, $icon_params); ?></span>
            <?php endif; ?>

             <?php if($icon_flip_animation == 'yes') : ?>
                </span>
            <?php endif; ?>

            <?php if($link !== '') : ?>
        </a>
    <?php endif; ?>
    </span>

    <?php if($icon_animation_holder) : ?>
    </span>
<?php endif; ?>
