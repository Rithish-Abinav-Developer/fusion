<div class="qodef-pl-holder <?php echo esc_attr( $holder_classes ) ?>">
    <div class="qodef-pl-outer">
		<?php if ( $type === 'masonry' ) { ?>
            <div class="qodef-pl-sizer"></div>
            <div class="qodef-pl-gutter"></div>
		<?php } ?>
		<?php if ( $query_result->have_posts() ): while ( $query_result->have_posts() ) : $query_result->the_post(); ?>
			<?php
			$masonry_image_size = get_post_meta( get_the_ID(), 'qodef_product_featured_image_size', true );
			if ( empty( $masonry_image_size ) ) {
				$masonry_image_size = '';
			}

			$new_layout = ultima_qodef_get_meta_field_intersect( 'single_product_new' );
			?>
            <div class="qodef-pli <?php echo esc_attr( $masonry_image_size ); ?>">
                <div class="qodef-pli-inner">
                    <div class="qodef-pli-image">
						<?php echo ultima_qodef_woocommerce_image_html_part( 'pli', $image_size, $new_layout ); ?>
                    </div>
                    <div class="qodef-pli-text-outer">
                        <div class="qodef-pli-text-inner">
                            <div class="qodef-pli-text-holder">
								<?php echo ultima_qodef_woocommerce_template_loop_product_title(); ?>
								<?php echo ultima_qodef_woocommerce_price_html_part( 'pli' ); ?>
								<?php echo ultima_qodef_woocommerce_rating_html_part( 'pli' ); ?>
								<?php echo ultima_qodef_woocommerce_add_to_cart_html_part( 'pli' ); ?>
                            </div>
                        </div>
                    </div>
                    <a class="qodef-pli-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
                </div>
            </div>
		<?php endwhile;
		else:
			ultima_qodef_woocommerce_no_products_found_html_part( 'pli' );
		endif;
		wp_reset_postdata();
		?>
    </div>
</div>