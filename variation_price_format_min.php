//Hiển thị giá thấp nhất, ẩn khoảng giá đối với sản phẩm biến thể WooCommerce

add_filter( 'woocommerce_variable_price_html', 'variation_price_format_min', 9999, 2 );
  
function variation_price_format_min( $price, $product ) {
   $prices = $product->get_variation_prices( true );
   $min_price = current( $prices['price'] );
   $price = sprintf( __( 'Chỉ từ: %1$s', 'woocommerce' ), wc_price( $min_price ) );
   return $price;
}
