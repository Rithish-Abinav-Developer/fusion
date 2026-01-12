<?php
/*
Template Name: WooCommerce
*/
?>
<?php

$ultima_qodef_id      = get_option('woocommerce_shop_page_id');
$ultima_qodef_shop    = get_post($ultima_qodef_id);
$ultima_qodef_sidebar = ultima_qodef_sidebar_layout();

if(get_post_meta($ultima_qodef_id, 'qode_page_background_color', true) != '') {
    $ultima_qodef_background_color = 'background-color: '.esc_attr(get_post_meta($ultima_qodef_id, 'qode_page_background_color', true));
} else {
    $ultima_qodef_background_color = '';
}

$ultima_qodef_content_style = '';
if(get_post_meta($ultima_qodef_id, 'qode_content-top-padding', true) != '') {
    if(get_post_meta($ultima_qodef_id, 'qode_content-top-padding-mobile', true) == 'yes') {
        $ultima_qodef_content_style = 'padding-top:'.esc_attr(get_post_meta($ultima_qodef_id, 'qode_content-top-padding', true)).'px !important';
    } else {
        $ultima_qodef_content_style = 'padding-top:'.esc_attr(get_post_meta($ultima_qodef_id, 'qode_content-top-padding', true)).'px';
    }
}

if(get_query_var('paged')) {
    $ultima_qodef_paged = get_query_var('paged');
} elseif(get_query_var('page')) {
    $ultima_qodef_paged = get_query_var('page');
} else {
    $ultima_qodef_paged = 1;
}

get_header();

ultima_qodef_get_title();
do_action('ultima_qodef_before_slider_action');
get_template_part('slider');
do_action('ultima_qodef_after_slider_action');

//Woocommerce content
if(!is_singular('product')) { ?>
    <div class="qodef-container" <?php ultima_qodef_inline_style($ultima_qodef_background_color); ?>>
        <div class="qodef-container-inner clearfix" <?php ultima_qodef_inline_style($ultima_qodef_content_style); ?>>
            <?php
            switch($ultima_qodef_sidebar) {
                case 'sidebar-33-right': ?>
                    <div class="qodef-two-columns-66-33 qodef-content-has-sidebar qodef-woocommerce-with-sidebar clearfix">
                        <div class="qodef-column1">
                            <div class="qodef-column-inner">
                                <?php ultima_qodef_woocommerce_content(); ?>
                            </div>
                        </div>
                        <div class="qodef-column2">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                    <?php
                    break;
                case 'sidebar-25-right': ?>
                    <div class="qodef-two-columns-75-25 qodef-content-has-sidebar qodef-woocommerce-with-sidebar clearfix">
                        <div class="qodef-column1 qodef-content-left-from-sidebar">
                            <div class="qodef-column-inner">
                                <?php ultima_qodef_woocommerce_content(); ?>
                            </div>
                        </div>
                        <div class="qodef-column2">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                    <?php
                    break;
                case 'sidebar-33-left': ?>
                    <div class="qodef-two-columns-33-66 qodef-content-has-sidebar qodef-woocommerce-with-sidebar clearfix">
                        <div class="qodef-column1">
                            <?php get_sidebar(); ?>
                        </div>
                        <div class="qodef-column2">
                            <div class="qodef-column-inner">
                                <?php ultima_qodef_woocommerce_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    break;
                case 'sidebar-25-left': ?>
                    <div class="qodef-two-columns-25-75 qodef-content-has-sidebar qodef-woocommerce-with-sidebar clearfix">
                        <div class="qodef-column1">
                            <?php get_sidebar(); ?>
                        </div>
                        <div class="qodef-column2 qodef-content-right-from-sidebar">
                            <div class="qodef-column-inner">
                                <?php ultima_qodef_woocommerce_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    break;
                default:
                    ultima_qodef_woocommerce_content();
            } ?>
        </div>
    </div>
<?php } else { ?>
    <div class="qodef-container" <?php ultima_qodef_inline_style($ultima_qodef_background_color); ?>>
        <div class="qodef-container-inner clearfix" <?php ultima_qodef_inline_style($ultima_qodef_content_style); ?>>
            <?php ultima_qodef_woocommerce_content(); ?>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>