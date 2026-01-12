<?php if ( ultima_qodef_core_installed()
           && ultima_qodef_options()->getOptionValue( 'enable_social_share' ) == 'yes'
           && ultima_qodef_options()->getOptionValue( 'enable_social_share_on_portfolio-item' ) == 'yes' ) : ?>
    <div class="qodef-portfolio-social">
        <span class="qodef-share"><?php esc_html_e( 'SHARE', 'ultima' ); ?></span><?php echo ultima_qodef_get_social_share_html() ?>
    </div>
<?php endif; ?>


