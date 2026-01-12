<div class="qodef-plc-holder" <?php echo ultima_qodef_get_inline_attrs($holder_data); ?>>
    <div class="qodef-plc-outer">
        <?php if($query_result->have_posts()): while($query_result->have_posts()) : $query_result->the_post(); ?>
            <div class="qodef-plc-item">
                <div class="qodef-plc-image-outer">
                    <div class="qodef-plc-image">
                        <?php
                        $new_layout = ultima_qodef_get_meta_field_intersect('single_product_new');
                        echo ultima_qodef_woocommerce_image_html_part('plc', $image_size, $new_layout);
                        ?>
                    </div>

                    <div class="qodef-plc-text">
                        <div class="qodef-plc-text-outer">
                            <div class="qodef-plc-text-inner">

                                <?php echo ultima_qodef_woocommerce_title_html_part('plc', ''); ?>

                                <?php echo ultima_qodef_woocommerce_price_html_part('plc'); ?>

                                <?php echo ultima_qodef_woocommerce_add_to_cart_html_part('plc'); ?>

                            </div>
                        </div>
                    </div>

                    <a class="qodef-plc-link" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
                </div>
            </div>
        <?php endwhile;
        else:
            ultima_qodef_woocommerce_no_products_found_html_part('plc');
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>