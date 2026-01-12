<<?php echo esc_attr($title_tag) ?> class="clearfix qodef-title-holder">
<span class="qodef-tab-title">
		<span class="qodef-tab-title-inner">
			<?php echo esc_attr($title) ?>
		</span>
	</span>
<span class="qodef-accordion-mark">
		<span class="qodef-accordion-mark-icon">
			<span class="qodef-accordion-plus"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
			<span class="qodef-accordion-minus"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
		</span>
	</span>
</<?php echo esc_attr($title_tag) ?>>
<div class="qodef-accordion-content">
    <div class="qodef-accordion-content-inner">
        <?php echo do_shortcode($content); ?>
    </div>
</div>