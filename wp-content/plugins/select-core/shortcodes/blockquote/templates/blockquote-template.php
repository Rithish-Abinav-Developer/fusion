<?php
/**
 * Blockquote shortcode template
 */
?>

<blockquote class="qodef-blockquote-shortcode" <?php ultima_qodef_inline_style($blockquote_style); ?> >
    <<?php echo esc_attr($blockquote_title_tag); ?> class="qodef-blockquote-text" <?php ultima_qodef_inline_style($blockquote_title_style); ?>>
    <span><?php echo esc_attr($text); ?></span>
</<?php echo esc_attr($blockquote_title_tag); ?>>
</blockquote>