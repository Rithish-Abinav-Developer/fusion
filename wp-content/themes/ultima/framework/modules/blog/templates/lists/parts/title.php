<?php
if(isset($title_tag)) {
	$title_tag = $title_tag;
} else {
	$title_tag = 'h2';
}
$post_link_meta = get_post_meta(get_the_ID(), "qodef_post_link_link_meta", true );
$post_link = get_the_permalink();
if(!empty($post_link_meta)) {
	$post_link = esc_html($post_link_meta);
}

?>
<div class="qodef-post-link-holder">
	<div class="qodef-post-link-holder-inner">
		<<?php echo esc_attr($title_tag);?> itemprop="name" class="qodef-link-title qodef-post-title">
		<a itemprop="url" href="<?php echo esc_url($post_link); ?>" title="<?php the_title_attribute(); ?>">
			<?php echo get_the_title(); ?>
		</a>
	</<?php echo esc_attr($title_tag);?>>
</div>
</div>