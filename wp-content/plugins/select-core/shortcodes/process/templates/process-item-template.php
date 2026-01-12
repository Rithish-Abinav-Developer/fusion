<?php
/**
 * Process item shortcode template
 */
?>
<div class="qodef-process-item">
    <div class="qodef-process-item-number-holder-wrapper">
        <div class="qodef-process-item-number-holder">
            <span class="qodef-process-item-background-holder">
                <?php if($number !== '') { ?>
                    <span class="qodef-process-number"><?php echo esc_attr($number); ?></span>
                <?php } ?>
            </span>
        </div>
    </div>
    <div class="qodef-process-item-content-holder">
        <div class="qodef-process-item-title-holder">
            <<?php echo esc_attr($title_tag); ?> class="qodef-process-item-title"><?php echo esc_html($title); ?></<?php echo esc_attr($title_tag); ?>>
    </div>
    <div class="qodef-process-item-text-holder">
        <p><?php echo esc_html($text); ?></p>
    </div>
</div>
</div>