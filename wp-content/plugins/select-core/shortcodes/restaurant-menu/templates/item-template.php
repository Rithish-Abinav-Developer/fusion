<div class="qodef-rstrnt-item">

    <?php if($featured == 'yes') { ?>
        <div class="qodef-rstrnt-star"></div>
    <?php } ?>

    <div class="qodef-rstrnt-item-inner">

        <div class="qodef-rstrnt-title-line"></div>

        <?php if($title !== '') { ?>
            <div class="qodef-rstrnt-title-holder">
                <<?php echo esc_attr($title_tag); ?>><?php echo esc_html($title); ?></<?php echo esc_attr($title_tag); ?>>
            </div>
        <?php } ?>

        <?php if($price !== '') { ?>
            <div class="qodef-rstrnt-price">
                <span class="qodef-rstrnt-currency"><?php echo esc_html($currency); ?></span>
                <span class="qodef-rstrnt-number"><?php echo esc_html($price); ?></span>
            </div>
        <?php } ?>

        <?php if($description !== '') { ?>
            <p class="qodef-rstrnt-desc"><?php echo esc_html($description); ?></p>
        <?php } ?>

    </div>

</div>