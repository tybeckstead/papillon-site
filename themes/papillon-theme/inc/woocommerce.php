<?php

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_after_add_to_cart_quantity', 'woocommerce_template_single_price', 10 );





function pappilontheme_woocommerce_single_product_summary(){
}