<?php
/*
Template Name: Blog: Masonry
*/
?>
<?php get_header(); ?>
<?php ultima_qodef_get_title(); ?>
<?php get_template_part('slider'); ?>
	<div class="qodef-container">
		<?php do_action('ultima_qodef_after_container_open'); ?>
		<div class="qodef-container-inner">
			<?php the_content(); ?>
			<?php ultima_qodef_get_blog('masonry'); ?>
		</div>
		<?php do_action('ultima_qodef_before_container_close'); ?>
	</div>
<?php get_footer(); ?>