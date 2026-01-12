<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="qodef-post-content">
        <div class="qodef-post-text">
            <div class="qodef-post-text-inner">
                <div class="qodef-post-text-holder">
                    <div class="qodef-post-mark">
                        <span class="fa fa-link qodef-link-mark"></span>
                    </div>
                    <div class="qodef-post-text-main">
                        <div class="qodef-post-info">
                            <?php ultima_qodef_post_info(array('date'     => 'yes',
                                                               'author'   => 'yes',
                                                               'category' => 'no',
                                                               'comments' => 'no',
                                                               'share'    => 'no',
                                                               'like'     => 'no'
                            )) ?>
                        </div>
                        <h3 class="qodef-post-title">
                            <a class="qodef-post-quote-value" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php echo esc_html($quote_text); ?>
                            </a>
                        </h3>
                        <span itemprop="name" class="qodef-post-author entry-title"><?php esc_html_e('By ', 'ultima'); ?><?php the_title(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>