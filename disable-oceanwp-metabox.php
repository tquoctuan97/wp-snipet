<?php

/**
 * Disable Main OceanWP Metabox
 */
function disable_main_oceanwp_metabox( $types ) {
	$types = [];
	return $types;
}
add_filter( 'ocean_main_metaboxes_post_types', 'disable_main_oceanwp_metabox', 20 );

/**
 * Disable Gallery OceanWP Metabox
 */
 
function disable_ocean_gallery_metabox( $types ) {
	$types = [];
	return $types;
}
add_filter( 'ocean_gallery_metabox_post_types', 'disable_ocean_gallery_metabox', 20 );

?>
