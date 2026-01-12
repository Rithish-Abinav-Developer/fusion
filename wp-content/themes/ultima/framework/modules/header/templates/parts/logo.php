<?php do_action( 'ultima_qodef_before_site_logo' ); ?>

    <div class="qodef-logo-wrapper">
        <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php ultima_qodef_inline_style( $logo_styles ); ?>>
            <img itemprop="image" class="qodef-normal-logo" src="<?php echo esc_url( $logo_image ); ?>" alt="<?php esc_attr_e( 'logo', 'ultima' ); ?>"/>
			<?php if ( ! empty( $logo_image_dark ) ) { ?>
                <img itemprop="image" class="qodef-dark-logo" src="<?php echo esc_url( $logo_image_dark ); ?>" alt="<?php esc_attr_e( 'dark logo', 'ultima' ); ?>"/><?php } ?>
			<?php if ( ! empty( $logo_image_light ) ) { ?>
                <img itemprop="image" class="qodef-light-logo" src="<?php echo esc_url( $logo_image_light ); ?>" alt="<?php esc_attr_e( 'light logo', 'ultima' ); ?>"/><?php } ?>
			<?php if ( ! empty( $logo_image_fullscreen ) ) { ?>
                <img itemprop="image" class="qodef-fullscreen-logo" src="<?php echo esc_url( $logo_image_fullscreen ); ?>" alt="<?php esc_attr_e( 'fullscreen logo', 'ultima' ); ?>"/><?php } ?>
        </a>
    </div>

<?php do_action( 'ultima_qodef_after_site_logo' ); ?>