<?php

// Custom hooks (like excerpt length etc)
//
/**
 * Hook in on activation
 */

/**
 * Define image sizes
 */
function custom_woocommerce_image_dimensions() {
	global $pagenow;

	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}

		$catalog = array(
		'width' 	=> '600',	// px
		'height'	=> '600',	// px
		'crop'		=> 1 		// true
	);

	$single = array(
		'width' 	=> '900',	// px
		'height'	=> '900',	// px
		'crop'		=> 1 		// true
	);

	$thumbnail = array(
		'width' 	=> '300',	// px
		'height'	=> '300',	// px
		'crop'		=> 0 		// false
	);

	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}

add_action( 'after_switch_theme', 'custom_woocommerce_image_dimensions', 1 );


/**
 * Disable description, reviews and additional info tabs
 */
function woo_remove_product_tabs( $tabs ) {

  unset( $tabs['description'] );      	// Remove the description tab
  unset( $tabs['reviews'] ); 			// Remove the reviews tab
  unset( $tabs['additional_information'] );  	// Remove the additional information tab

  return $tabs;

}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
