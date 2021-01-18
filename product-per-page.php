add_action( 'woocommerce_after_shop_loop', 'ps_selectbox', 50 );
function ps_selectbox() {
    $per_page = filter_input(INPUT_GET, 'limit', FILTER_SANITIZE_NUMBER_INT);     
    echo '<div class="woocommerce-perpage">';
    echo '<span>Per Page: </span>';
    echo '<select onchange="if (this.value) window.location.href=this.value">';   
    $orderby_options = array(
        '16' => '16',
        '32' => '32',
        '64' => '64'
    );
    foreach( $orderby_options as $value => $label ) {
        echo "<option ".selected( $per_page, $value )." value='?limit=$value'>$label</option>";
    }
    echo '</select>';
    echo '</div>';
}

add_action( 'pre_get_posts', 'ps_pre_get_products_query' );
function ps_pre_get_products_query( $query ) {
    $per_page = filter_input(INPUT_GET, 'limit', FILTER_SANITIZE_NUMBER_INT);
    if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'product' ) ) {
        $query->set( 'posts_per_page', $per_page );
    }
}
