<article class="qodef-portfolio-item <?php echo esc_attr( $categories ) ?>">
    <div class="qodef-portfolio-item-inner">
        <a class="qodef-portfolio-link" href="<?php echo esc_url( $item_link ); ?>" target="<?php echo esc_attr( $target ); ?>"></a>
        <div class="qodef-item-image-holder">
			<?php
			echo get_the_post_thumbnail( get_the_ID(), $thumb_size );
			?>
        </div>
        <div class="qodef-item-text-overlay" <?php ultima_qodef_inline_style( $overlay_color ); ?>>
            <div class="qodef-item-text-overlay-inner">
                <div class="qodef-item-text-holder">
                    <<?php echo esc_attr( $title_tag ) ?> class="qodef-item-title">
					<?php echo esc_attr( get_the_title() ); ?>
                </<?php echo esc_attr( $title_tag ) ?>>
				<?php
				echo wp_kses_post( $icon_html );
				echo ultima_qodef_get_module_part( $category_html );
				?>
            </div>
        </div>
    </div>
    </div>
</article>
