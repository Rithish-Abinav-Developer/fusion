<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 7.4.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! isset ( $input_id ) ) {
	$input_id = uniqid( 'quantity_' );
}

$holder_classes = array(
	'qodef-quantity-buttons',
	'quantity',
);

if ( $max_value && $min_value === $max_value ) {
	$hidden           = true;
	$holder_classes[] = 'hidden';
} else {
	$hidden = false;
	$holder_classes[] = 'qodef-quantity-buttons';
} ?>

<div class="<?php echo implode( ' ', $holder_classes ); ?>">
	<?php do_action( 'woocommerce_before_quantity_input_field' ); ?>
	<?php if ( $hidden ) { ?>
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	<?php } else {
		$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'ultima' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'ultima' ); ?>
		<label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $label ); ?></label>
	    <span class="qodef-quantity-minus ion-minus"></span>
		<input
	        type="text"
	        id="<?php echo esc_attr( $input_id ); ?>"
	        class="input-text qty text qodef-quantity-input"
	        step="<?php echo esc_attr( $step ); ?>"
	        min="<?php echo esc_attr( $min_value ); ?>"
	        max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
	        name="<?php echo esc_attr( $input_name ); ?>"
	        value="<?php echo esc_attr( ! empty( $input_value ) ? $input_value : 0 ); ?>"
	        title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'ultima' ) ?>"
	        size="4"
	        placeholder="<?php echo esc_attr( $placeholder ); ?>"
	        inputmode="<?php echo esc_attr( $inputmode ); ?>" />
	    <span class="qodef-quantity-plus ion-plus"></span>
	<?php } ?>
	<?php do_action( 'woocommerce_after_quantity_input_field' ); ?>
</div>