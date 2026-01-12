<?php
/*
Template Name: Blog: Masonry Full Width
*/
?>
<?php get_header(); ?>

<?php ultima_qodef_get_title(); ?>
<?php get_template_part('slider'); ?>

    <div class="qodef-full-width">
        <div class="qodef-full-width-inner clearfix">
            <?php the_content(); ?>
            <?php ultima_qodef_get_blog('masonry-full-width'); ?>
        </div>
    </div>

<?php get_footer(); ?>