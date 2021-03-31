/*
* Feature: Coupon Percentage discount with limit Max Discount
* Example: Coupon Discount 10%, max $10
* Resource: https://www.insertcart.com/set-max-coupon-discount-amount-in-woocommerce/
* Resouce 2: https://stackoverflow.com/questions/43887663/fix-maximum-coupon-discount-on-cart-percentage-in-woocommerce/52014312
*/

add_action( 'woocommerce_coupon_options_usage_limit', 'woocommerce_coupon_add_option_max_discount', 10, 2 );
function woocommerce_coupon_add_option_max_discount( $coupon_id, $coupon ){
  // max discount per coupons
	$max_discount =  get_post_meta( $coupon_id, '_max_discount', true );
	$args = array(
	  'label' => 'Usage max discount', // Text in Label
	  'placeholder' => 'Unlimited discount',
	  'class' => 'short',
	  'value' => ( $max_discount ? $max_discount : '' ), // if empty, retrieved from post meta where id is the meta_key
	  'id' => 'max_discount', // required
	  'type' => 'number',
	  'desc_tip' => true,
	  'custom_attributes' => array(
             'step'  => 1,
             'min'   => 0,
       ),
	);
	woocommerce_wp_text_input( $args );
}

add_action( 'woocommerce_coupon_options_save', 'woocommerce_coupon_options_save_max_discount', 10, 2 );
function woocommerce_coupon_options_save_max_discount( $coupon_id, $coupon ) {
     update_post_meta( $coupon_id, '_max_discount', wc_format_decimal( $_POST['max_discount'] ) );
}

add_filter( 'woocommerce_coupon_get_discount_amount', 'woocommerce_coupon_get_max_discount_amount', 20, 5 );
function woocommerce_coupon_get_max_discount_amount( $discount, $discounting_amount, $cart_item, $single, $coupon ) {
	$max_discount = get_post_meta( $coupon->get_id(), '_max_discount', true );
	if ( is_numeric( $max_discount ) && ! is_null( $cart_item ) && WC()->cart->subtotal_ex_tax ) {
		$cart_item_qty = is_null( $cart_item ) ? 1 : $cart_item['quantity'];
		if ( wc_prices_include_tax() ) {
			$discount_percent = ( wc_get_price_including_tax( $cart_item['data'] ) * $cart_item_qty ) / WC()->cart->subtotal;
		} else {
			$discount_percent = ( wc_get_price_excluding_tax( $cart_item['data'] ) * $cart_item_qty ) / WC()->cart->subtotal_ex_tax;
		}
		$_discount = ( $max_discount * $discount_percent ) / $cart_item_qty;
		$discount = min( $_discount, $discount );
	}
	return $discount;
}
