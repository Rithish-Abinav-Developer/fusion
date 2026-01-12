<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="qodef-post-content">
		<div class="qodef-post-text">
            <div class="qodef-post-text-inner">
                <div class="qodef-post-text-holder">
                    <div class="qodef-post-mark">
                        <span class="fa fa-quote-right qodef-quote-mark"></span>
                    </div>
                    <div class="qodef-post-text-main">
                        <div class="qodef-post-info">
                            <?php ultima_qodef_post_info(array('date' => 'yes', 'author' => 'yes', 'category' => 'no', 'comments' => 'no', 'share' => 'no', 'like' => 'no')) ?>
                        </div>
                        <h4 class="qodef-post-title">
                            <a class="qodef-post-quote-value" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php echo esc_html($quote_text); ?>
                            </a>
                        </h4>
                        <span itemprop="name" class="qodef-post-author entry-title"><?php the_title(); ?></span>
                    </div>
                </div>
            </div>
		</div>
        <div class="qodef-post-single-content">
            <?php the_content(); ?>
        </div>
        <div class="qodef-post-info qodef-section-bottom clearfix">
            <div class="qodef-section-bottom-left">
                <?php ultima_qodef_get_module_template_part('templates/single/parts/tags', 'blog'); ?>
                <?php ultima_qodef_post_info(array(
                    'author' => 'no',
                    'comments' => 'no',
                    'like' => 'no'
                )) ?>
            </div>
            <div class="qodef-section-bottom-right">
                <?php ultima_qodef_post_info(
                    array(
                        'share' => 'yes'
                    )
                ) ?>
            </div>
        </div>
	</div>
    <div class="qodef-post-info-below clearfix">
        <?php do_action('ultima_qodef_before_blog_article_closed_tag'); ?>
    </div>
</article>