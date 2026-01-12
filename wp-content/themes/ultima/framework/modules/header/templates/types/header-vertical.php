<?php do_action( 'ultima_qodef_before_page_header' ); ?>
<?php $vertical_widget_area = ultima_qodef_get_vertical_header_widget_area(); ?>
    <aside class="qodef-vertical-menu-area">
        <div class="qodef-vertical-menu-area-inner">
            <div class="qodef-vertical-area-background" <?php ultima_qodef_inline_style( array(
				$vertical_header_background_color,
				$vertical_header_opacity,
				$vertical_background_image
			) ); ?>></div>
			<?php if ( ! $hide_logo ) {
				ultima_qodef_get_logo();
			} ?>
			<?php ultima_qodef_get_vertical_main_menu(); ?>
            <div class="qodef-vertical-area-widget-holder">
				<?php if ( is_active_sidebar( $vertical_widget_area ) ) {
					dynamic_sidebar( $vertical_widget_area );
				} ?>
            </div>
        </div>
    </aside>

<?php do_action( 'ultima_qodef_after_page_header' ); ?>