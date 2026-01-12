<?php
$ultima_qodef_blog_archive_pages_classes = ultima_qodef_blog_archive_pages_classes(ultima_qodef_get_default_blog_list());
?>
<?php get_header(); ?>
<?php ultima_qodef_get_title(); ?>
<div class="<?php echo esc_attr($ultima_qodef_blog_archive_pages_classes['holder']); ?>">
    <?php do_action('ultima_qodef_after_container_open'); ?>
    <div class="<?php echo esc_attr($ultima_qodef_blog_archive_pages_classes['inner']); ?>">
        <?php ultima_qodef_get_blog(ultima_qodef_get_default_blog_list()); ?>
    </div>
    <?php do_action('ultima_qodef_before_container_close'); ?>
</div>
<?php get_footer(); ?>
