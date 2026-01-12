<?php $ultima_qodef_sidebar = ultima_qodef_sidebar_layout(); ?>
<?php get_header(); ?>
<?php

$ultima_qodef_blog_page_range     = ultima_qodef_get_blog_page_range();
$ultima_qodef_max_number_of_pages = ultima_qodef_get_max_number_of_pages();

if(get_query_var('paged')) {
    $ultima_qodef_paged = get_query_var('paged');
} elseif(get_query_var('page')) {
    $ultima_qodef_paged = get_query_var('page');
} else {
    $ultima_qodef_paged = 1;
}
?>
<?php ultima_qodef_get_title(); ?>
    <div class="qodef-container">
        <?php do_action('ultima_qodef_after_container_open'); ?>
        <div class="qodef-container-inner clearfix">
            <div class="qodef-container">
                <?php do_action('ultima_qodef_after_container_open'); ?>
                <div class="qodef-container-inner">
                    <div class="qodef-blog-holder qodef-blog-type-standard">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="qodef-post-content">
                                    <div class="qodef-post-text">
                                        <div class="qodef-post-text-inner">
                                            <h2 itemprop="name" class="entry-title">
                                                <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            <?php
                                            ultima_qodef_read_more_button();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                            <?php
                            if(ultima_qodef_options()->getOptionValue('pagination') == 'yes') {
                                ultima_qodef_pagination($ultima_qodef_max_number_of_pages, $ultima_qodef_blog_page_range, $ultima_qodef_paged);
                            }
                            ?>
                        <?php else: ?>
                            <div class="entry">
                                <p><?php esc_html_e('No posts were found.', 'ultima'); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php do_action('ultima_qodef_before_container_close'); ?>
                </div>
            </div>
        </div>
        <?php do_action('ultima_qodef_before_container_close'); ?>
    </div>
<?php get_footer(); ?>