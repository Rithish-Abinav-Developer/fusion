<div class="qodef-pricing-info <?php echo esc_attr( $pricing_info_classes ) ?>">
    <div class="qodef-pricing-info-inner">
		<?php if ( $active == 'yes' ) { ?>
            <div class="qodef-active-text">
                <span class="qodef-best-choice" <?php ultima_qodef_inline_style( $background_style ); ?>>
                    <span class="qodef-best-choice-inner"><?php echo esc_html( $active_text ); ?></span>
                </span>
            </div>
		<?php } ?>
        <<?php echo esc_attr( $title_tag ); ?> class="qodef-pricing-info-title">
		<?php echo esc_html( $title ); ?>
    </<?php echo esc_attr( $title_tag ) ?>>
    <div class="qodef-pricing-info-pricing">
        <span class="qodef-value"><?php echo esc_html( $currency ) ?></span>
        <span class="qodef-price"><?php echo esc_html( $price ) ?></span>
        <span class="qodef-mark"><?php echo esc_html( $price_period ) ?></span>
    </div>
    <div class="qodef-pricing-info-description">
		<?php print ultima_qodef_get_module_part( $description ); ?>
    </div>
	<?php
	if ( $show_button == "yes" && $button_text !== '' ) { ?>
        <div class="qodef-pricing-info-button">
			<?php echo ultima_qodef_get_button_html( array(
				'link' => $link,
				'text' => $button_text,
				'size' => 'small'
			) ); ?>
        </div>
	<?php } ?>
</div>
</div>