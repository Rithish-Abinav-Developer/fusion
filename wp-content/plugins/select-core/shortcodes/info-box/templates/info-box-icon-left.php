<?php
/**
 * Info box icon left shortcode template
 */
?>
<div <?php ultima_qodef_class_attribute( $holder_classes ); ?> <?php ultima_qodef_inline_style( $box_style ); ?>>

	<?php if ( $link !== '' ) : ?>
        <a class="qodef-info-box-link" itemprop="url" href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>"></a>
	<?php endif; ?>

    <div class="qodef-info-box-holder-inner">

        <div class="qodef-info-box-content-left">
			<?php if ( $icon_pack != "" ) { ?>
                <div class="qodef-info-box-icon-holder">
                    <span class="qodef-info-box-icon">
                        <?php print wp_kses_post( $icon ); ?>
                    </span>
                </div>
			<?php } ?>
        </div>

        <div class="qodef-info-box-content-right">
			<?php if ( $title !== '' ) { ?>
            <div class="qodef-info-box-title">
                <<?php echo esc_attr( $title_tag ); ?> <?php ultima_qodef_inline_style( $title_styles ); ?>>
				<?php echo esc_html( $title ); ?>
            </<?php echo esc_attr( $title_tag ); ?>>
        </div>
		<?php } ?>

		<?php if ( $text !== '' ) { ?>
            <div class="qodef-info-box-text">
                <p <?php ultima_qodef_inline_style( $text_styles ); ?>><?php echo esc_html( $text ); ?></p>
            </div>
		<?php } ?>
    </div>
</div>

<div class="qodef-info-box-holder-hidden" <?php ultima_qodef_inline_style( $hover_box_style ); ?>>

    <div class="qodef-info-box-content-left">
		<?php if ( $icon_pack != "" ) { ?>
            <div class="qodef-info-box-icon-holder">
                <span class="qodef-info-box-icon">
                    <?php print wp_kses_post( $icon ); ?>
                </span>
            </div>
		<?php } ?>
    </div>

    <div class="qodef-info-box-content-right">
		<?php if ( $title !== '' ) { ?>
        <div class="qodef-info-box-title">
            <<?php echo esc_attr( $title_tag ); ?> <?php ultima_qodef_inline_style( $title_styles ); ?>>
			<?php echo esc_html( $title ); ?>
        </<?php echo esc_attr( $title_tag ); ?>>
    </div>
	<?php } ?>

	<?php if ( $text !== '' ) { ?>
        <div class="qodef-info-box-text">
            <p <?php ultima_qodef_inline_style( $text_styles ); ?>><?php echo esc_html( $text ); ?></p>
        </div>
	<?php } ?>
</div>

</div>

</div>