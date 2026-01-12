<div id="qodef-testimonials<?php echo esc_attr($current_id) ?>" class="qodef-testimonial-content">
    <?php if($show_title == "yes"){ ?>
        <p class="qodef-testimonial-title">
          <span class="icon_quotations" <?php ultima_qodef_inline_style($quote_color); ?>></span> <span> <?php echo esc_attr($title) ?></span>
        </p>
    <?php }?>
    <p class="qodef-testimonial-text">
        <?php echo trim($text) ?>
    </p>
    <div class="qodef-image-author-holder">
        <?php if (has_post_thumbnail($current_id)) { ?>
            <div class="qodef-testimonial-image-holder">
                <?php esc_html(the_post_thumbnail($current_id)) ?>
            </div>
        <?php } ?>
        <?php if ($show_author == "yes") { ?>
            <div class="qodef-testimonial-author">
                    <span class="qodef-testimonial-author-text">
                        <?php echo esc_attr($author)?>
                    </span>
                <?php if($show_position == "yes" && $job !== ''){ ?>
                    <span class="qodef-testimonial-job" <?php ultima_qodef_inline_style($author_color); ?>><?php echo esc_attr($job)?></span>
                <?php }?>
            </div>
        <?php } ?>
     </div>
</div>
