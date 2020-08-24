/* Author: RahulPpatidar */
/*********To chack present category has child category *********/
/* Put this code in functions.php and call it by either with category id to check on 
non-category page or just call it on archive or category page
*/

function rp_has_child($cat_id = null){
	if (is_tax('product_cat')) {	
			if($cat_id!=null){
				if (empty($cat_id)){
            		$term_id = get_queried_object_id();
				}else{
					$term_id=$cat_id;
				}				
				$children = get_terms(  'product_cat', array(
				'parent'    => $term_id,
				'hide_empty' => false
				) );
				if($children) {
				   return true;
				}else{
					return false;
				}
			}else{
				$term= get_queried_object();
				$children = get_terms( $term->taxonomy, array(
				'parent'    => $term->term_id,
				'hide_empty' => false
				) );
				if($children) {
				   return true;
				}else{
					return false;
				}
			}
	}
		return false;
}
