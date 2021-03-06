<?php 
/**
 * EmallShop Woocommerce Hooks
 *
 * @package PressLayouts
 * @subpackage EmallShop
 * @since EmallShop 1.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/*
 * add theme support
 *-----------------------------------------------------------------------*/
add_theme_support( 'woocommerce' );

/*Disable woocommerce css
/* --------------------------------------------------------------------- */
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/* 	woocommerce hook
/* --------------------------------------------------------------------- */

/**
* Archive Product
*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

add_action( 'woocommerce_before_main_content', 'emallshop_output_content_wrapper', 10 );
add_action( 'woocommerce_sidebar', 'emallshop_output_content_wrapper_end', 10 );
add_action( 'woocommerce_before_main_content', 'emallshop_output_primary_wrapper', 20 );
add_action( 'woocommerce_after_main_content', 'emallshop_output_wrapper_end', 10 );
add_action( 'woocommerce_archive_description', 'emallshop_caregory_banner', 15 );
add_action( 'woocommerce_archive_description', 'emallshop_sub_caregories', 20 );
//add_action( 'woocommerce_archive_description', 'emallshop_caregory_brands', 25 );

/** Before Shop Loop **/
add_action( 'woocommerce_before_shop_loop', 'emallshop_before_shop_loop', 10 );
add_action( 'emallshop_before_shop_loop', 'emallshop_grid_list_view', 5 );
add_action( 'emallshop_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
add_action( 'emallshop_before_shop_loop', 'emallshop_output_pagination_wrapper', 15 );
add_action( 'emallshop_before_shop_loop', 'emallshop_product_show_pager', 20);
add_action( 'emallshop_before_shop_loop', 'woocommerce_pagination', 25);
add_action( 'emallshop_before_shop_loop', 'emallshop_output_wrapper_end', 30 );
add_action( 'woocommerce_before_shop_loop', 'emallshop_output_loop_wrapper', 40 );


/** Before Shop Loop Item **/
add_action( 'woocommerce_before_shop_loop_item', 'emallshop_product_image_wrapper', 5 );
add_action( 'woocommerce_before_shop_loop_item_title', 'emallshop_before_shop_loop_item_title', 10 );
add_action( 'emallshop_before_shop_loop_item_title', 'emallshop_show_product_loop_sale_flash', 5 );
add_action( 'emallshop_before_shop_loop_item_title', 'emallshop_template_loop_product_thumbnail', 5 );
add_action( 'emallshop_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10 );
add_action( 'emallshop_before_shop_loop_item_title', 'emallshop_loop_image_action_buttons', 15 );
add_action( 'emallshop_before_shop_loop_item_title', 'emallshop_sale_product_countdown', 20 ); 
add_action( 'emallshop_before_shop_loop_item_title', 'emallshop_output_wrapper_end', 25 ); 
add_action( 'woocommerce_shop_loop_item_title', 'emallshop_product_content_wrapper', 5 );
add_action( 'woocommerce_shop_loop_item_title', 'emallshop_shop_loop_item_title_rating', 10 );
add_action( 'emallshop_shop_loop_item_title_rating', 'emallshop_shop_loop_item_title', 10 ); 
add_action( 'emallshop_shop_loop_item_title_rating', 'emallshop_product_rating_html', 15 ); 

/** After Shop Loop Item **/
//add_action( 'woocommerce_after_shop_loop_item_title', 'emallshop_product_rating_html', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'emallshop_product_short_description', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'emallshop_template_loop_price', 10 );  
add_action( 'emallshop_template_loop_price', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'emallshop_output_product_buttons_wrapper', 5 ); 
add_action( 'woocommerce_after_shop_loop_item', 'emallshop_output_cart_button_wrapper', 5 ); 
add_action( 'woocommerce_after_shop_loop_item', 'emallshop_output_wrapper_end', 10 ); 
add_action( 'woocommerce_after_shop_loop_item', 'emallshop_loop_content_action_buttons', 10 ); 
add_action( 'woocommerce_after_shop_loop_item', 'emallshop_output_wrapper_end', 15 ); 
add_action( 'woocommerce_after_shop_loop_item', 'emallshop_output_product_attr', 15 );
add_action( 'woocommerce_after_shop_loop_item', 'emallshop_output_wrapper_end', 15 );
add_action( 'woocommerce_after_shop_loop_item', 'emallshop_output_wrapper_end', 20 );
add_action( 'woocommerce_after_shop_loop', 'emallshop_output_wrapper_end', 5 ); 

/**
* Single Product
*/
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

/** Before Single Product Summary**/
add_action( 'woocommerce_before_single_product_summary', 'emallshop_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_single_product_summary', 'emallshop_template_single_title', 5 );
add_action( 'emallshop_template_single_title', 'woocommerce_template_single_title', 5 );
add_action( 'emallshop_template_single_title', 'emallshop_single_product_pagination', 10 );
add_action( 'woocommerce_single_product_summary', 'emallshop_template_single_price', 10 );
add_action( 'emallshop_template_single_price', 'woocommerce_template_single_price', 5 );
add_action( 'emallshop_template_single_price', 'emallshop_template_single_availability', 10 );
add_action( 'woocommerce_single_product_summary', 'emallshop_sale_product_countdown', 15 );
add_action( 'woocommerce_product_meta_start', 'emallshop_template_single_brand', 5 );
add_action( 'woocommerce_single_product_summary', 'emallshop_add_single_sharing', 55);

/**
* Cart
*/
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10 );

add_action( 'emallshop_cart_totals', 'woocommerce_cart_totals', 10 );

/**
 * AJAX Hooks
 */ 
add_action( 'wp_ajax_nopriv_products_live_search', 'emallshop_products_live_search' );
add_action( 'wp_ajax_products_live_search', 'emallshop_products_live_search' );