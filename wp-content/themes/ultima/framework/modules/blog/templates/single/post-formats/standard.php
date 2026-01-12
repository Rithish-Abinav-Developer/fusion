<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="qodef-post-content">
		<?php ultima_qodef_get_module_template_part('templates/single/parts/image', 'blog'); ?>
		<div class="qodef-post-text">
            <div class="qodef-post-text-inner clearfix">
                <?php ultima_qodef_get_module_template_part('templates/lists/parts/title', 'blog'); ?>
                <div class="qodef-post-info qodef-section-top">
                    <?php ultima_qodef_post_info(array(
                        'date' => 'yes',
                        'category' => 'no',
                        'author' => 'yes'
                    )) ?>
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
		</div>
	</div>
    <div class="qodef-post-info-below clearfix">
	    <?php do_action('ultima_qodef_before_blog_article_closed_tag'); ?>
    </div>
</article>