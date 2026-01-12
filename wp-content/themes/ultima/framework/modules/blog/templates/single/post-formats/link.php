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
                            <?php ultima_qodef_post_info(array('date' => 'yes', 'author' => 'yes', 'category' => 'no', 'comments' => 'no', 'share' => 'no', 'like' => 'no')) ?>
                        </div>
                        <h4 itemprop="name" class="entry-title qodef-post-title">
                            <a href="<?php echo esc_html(get_post_meta(get_the_ID(), "qodef_post_link_link_meta", true)); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h4>
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