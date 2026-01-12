<div class="qodef-social-share-holder qodef-list <?php echo esc_attr( $icon_type ) ?> qodef-social-col-<?php echo esc_attr( $number ) ?>">
    <ul class="clearfix">
		<?php foreach ( $networks as $net ) {
			echo wp_kses( $net, array(
				'li'   => array(
					'class' => true
				),
				'a'    => array(
					'itemprop' => true,
					'class'    => true,
					'href'     => true,
					'target'   => true,
					'onclick'  => true
				),
				'img'  => array(
					'itemprop' => true,
					'class'    => true,
					'src'      => true,
					'alt'      => true
				),
				'span' => array(
					'class' => true
				)
			) );
		} ?>
    </ul>
</div>