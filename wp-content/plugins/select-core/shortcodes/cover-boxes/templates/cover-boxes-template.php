<?php
/**
 * Cover boxes shortcode template
 */
?>

<div <?php ultima_qodef_class_attribute( $cover_box_classes ) ?> <?php echo ultima_qodef_get_inline_attrs( $cover_boxes_data ); ?>>
    <ul class='clearfix'>
        <li>
            <div class="qodef-box">
                <div class="qodef-box-info-holder">
                    <div class="qodef-box-top-stripe"></div>

					<?php if ( $link1 !== '' ) { ?>
                    <a class="qodef-box-thumb" href="<?php echo esc_url( $link1 ); ?>" target="<?php echo esc_attr( $target1 ); ?>">
						<?php } ?>
                        <img alt="<?php echo esc_attr( $title1 ); ?>" src="<?php echo esc_url( $cover_boxes_images[1] ); ?>"/>
						<?php if ( $link1 !== '' ) { ?>
                    </a>
				<?php } ?>

                </div>
                <div class='qodef-box-content'>
                    <h4 class="qodef-cover-box-title">
						<?php echo esc_attr( $title1 ); ?>
                    </h4>
                    <p class="qodef-cover-box-text">
						<?php echo esc_attr( $text1 ); ?>
                    </p>

					<?php if ( $link1 !== '' ) { ?>
						<?php echo ultima_qodef_get_button_html( array(
							'link'   => $link1,
							'text'   => $link_label1,
							'target' => $target1,
							'size'   => 'small'
						) ); ?>
					<?php } ?>

                </div>
            </div>
        </li>
        <li>
            <div class="qodef-box">
                <div class="qodef-box-info-holder">
                    <div class="qodef-box-top-stripe"></div>

					<?php if ( $link2 !== '' ) { ?>
                    <a class="qodef-box-thumb" href="<?php echo esc_url( $link2 ); ?>" target="<?php echo esc_attr( $target2 ); ?>">
						<?php } ?>
                        <img alt="<?php echo esc_attr( $title2 ); ?>" src="<?php echo esc_url( $cover_boxes_images[2] ); ?>"/>
						<?php if ( $link2 !== '' ) { ?>
                    </a>
				<?php } ?>

                </div>
                <div class='qodef-box-content'>
                    <h4 class="qodef-cover-box-title">
						<?php echo esc_attr( $title2 ); ?>
                    </h4>
                    <p class="qodef-cover-box-text">
						<?php echo esc_attr( $text2 ); ?>
                    </p>

					<?php if ( $link2 !== '' ) { ?>
						<?php echo ultima_qodef_get_button_html( array(
							'link'   => $link2,
							'text'   => $link_label2,
							'target' => $target2,
							'size'   => 'small'
						) ); ?>
					<?php } ?>

                </div>
            </div>
        </li>
        <li>
            <div class="qodef-box">
                <div class="qodef-box-info-holder">
                    <div class="qodef-box-top-stripe"></div>

					<?php if ( $link3 !== '' ) { ?>
                    <a class="qodef-box-thumb" href="<?php echo esc_url( $link3 ); ?>" target="<?php echo esc_attr( $target3 ); ?>">
						<?php } ?>
                        <img alt="<?php echo esc_attr( $title3 ); ?>" src="<?php echo esc_url( $cover_boxes_images[3] ); ?>"/>
						<?php if ( $link3 !== '' ) { ?>
                    </a>
				<?php } ?>

                </div>
                <div class='qodef-box-content'>
                    <h4 class="qodef-cover-box-title">
						<?php echo esc_attr( $title3 ); ?>
                    </h4>
                    <p class="qodef-cover-box-text">
						<?php echo esc_attr( $text3 ); ?>
                    </p>

					<?php if ( $link3 !== '' ) { ?>
						<?php echo ultima_qodef_get_button_html( array(
							'link'   => $link3,
							'text'   => $link_label3,
							'target' => $target3,
							'size'   => 'small'
						) ); ?>
					<?php } ?>

                </div>
            </div>
        </li>
    </ul>
</div>