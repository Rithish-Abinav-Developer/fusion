<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="qodef-post-content">
        <?php ultima_qodef_get_module_template_part('templates/lists/parts/image', 'blog'); ?>
        <?php ultima_qodef_get_module_template_part('templates/parts/audio', 'blog'); ?>
        <div class="qodef-post-text">
            <div class="qodef-post-text-inner">
                <?php ultima_qodef_get_module_template_part('templates/lists/parts/title', 'blog'); ?>
                <div class="qodef-post-info qodef-section-top">
                    <?php ultima_qodef_post_info(array(
                        'date'     => 'yes',
                        'category' => 'no',
                        'author'   => 'yes'
                    )) ?>
                </div>
                <?php
                if($type == 'standard') {
                    ultima_qodef_excerpt($excerpt_length);
                    $args_pages = array(
                        'before'      => '<div class="qodef-single-links-pages"><div class="qodef-single-links-pages-inner">',
                        'after'       => '</div></div>',
                        'link_before' => '<span>'. esc_html__('Post Page Link: ', 'ultima'),
                        'link_after'  => '</span>',
                        'pagelink'    => '%'
                    );

                    wp_link_pages($args_pages);
                } else if($type == 'standard-whole-post') { ?>
                    <div class="qodef-whole-post-content">
                        <?php the_content(); ?>
                    </div>
                <?php } ?>

                <?php if($type == 'standard') { ?>
                    <div class="qodef-post-info qodef-section-bottom clearfix">
                        <div class="qodef-section-bottom-left">

                            <?php ultima_qodef_read_more_button(); ?>

                            <?php ultima_qodef_post_info(array(
                                'author'   => 'no',
                                'comments' => 'no',
                                'like'     => 'no'
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
                <?php } ?>

            </div>
        </div>
    </div>
</article>