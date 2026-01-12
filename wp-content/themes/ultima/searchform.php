<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div><label class="screen-reader-text" for="s"><?php esc_html_e( 'Search for:', 'ultima' ); ?></label>
        <input type="text" value="" placeholder="<?php esc_attr_e( 'Search', 'ultima' ); ?>" name="s" id="s"/>
        <input type="submit" id="searchsubmit" value="&#xf2f5;"/>
    </div>
</form>