<div class="qodef-social-share-holder qodef-dropdown">
    <a href="javascript:void(0)" target="_self" class="qodef-social-share-dropdown-opener">
        <span aria-hidden="true" class="social_share"></span>
    </a>
    <div class="qodef-social-share-dropdown">
        <ul>
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
</div>