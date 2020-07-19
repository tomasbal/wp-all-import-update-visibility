<?php
function get_parent_sku($sku){
$variation_id = wc_get_product_id_by_sku($sku);
$parent =  wp_get_post_parent_id($variation_id);
	if($parent){
		return $parent;
	}else{
	return $sku;	
	}
}
?>
