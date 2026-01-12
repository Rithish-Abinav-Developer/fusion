<div class="qodef-big-image-holder">
    <?php
    $media = ultima_qodef_get_portfolio_single_media();

    if(is_array($media) && count($media)) : ?>
        <div class="qodef-portfolio-media">
            <?php foreach($media as $single_media) : ?>
                <?php ultima_qodef_portfolio_get_media_html($single_media); ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<div class="qodef-two-columns-75-25 clearfix">
    <div class="qodef-column1">
        <div class="qodef-column-inner">
            <?php ultima_qodef_portfolio_get_info_part('content'); ?>
        </div>
    </div>
    <div class="qodef-column2">
        <div class="qodef-column-inner clearfix">
            <div class="qodef-portfolio-info-holder">
                <?php
                //get portfolio custom fields section
                ultima_qodef_portfolio_get_info_part('custom-fields');

                //get portfolio date section
                ultima_qodef_portfolio_get_info_part('date');

                //get portfolio categories section
                ultima_qodef_portfolio_get_info_part('categories');

                //get portfolio tags section
                ultima_qodef_portfolio_get_info_part('tags');
                ?>
            </div>
            <div class="qodef-portfolio-social-holder">
                <?php
                //get portfolio like section
                ultima_qodef_portfolio_get_info_part('like');

                //get portfolio share section
                ultima_qodef_portfolio_get_info_part('social');
                ?>
            </div>
        </div>
    </div>
</div>