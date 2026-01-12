<div class="qodef-fullscreen-search-holder">
    <div class="qodef-fullscreen-search-close-container">
        <div class="qodef-search-close-holder">
            <a class="qodef-fullscreen-search-close" href="javascript:void(0)">
				<?php print wp_kses_post( $search_icon_close ); ?>
            </a>
        </div>
    </div>
    <div class="qodef-fullscreen-search-table">
        <div class="qodef-fullscreen-search-cell">
            <div class="qodef-fullscreen-search-inner">
                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="qodef-fullscreen-search-form" method="get">
                    <div class="qodef-form-holder">
                        <span class="qodef-search-label"><?php esc_html_e( 'Search here:', 'ultima' ); ?></span>
                        <div class="qodef-field-holder">
                            <input type="text" placeholder="<?php esc_attr_e( 'Type what you\'re looking for', 'ultima' ); ?>" name="s" class="qodef-search-field" autocomplete="off"/>
                            <div class="qodef-line"></div>
                        </div>
                        <input type="submit" class="qodef-submit-button" value="<?php esc_attr_e( 'Search', 'ultima' ); ?>"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>