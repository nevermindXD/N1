<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    //wp_dequeue_style( 'storefront-woocommerce-style' );
}



/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

//temporary fix 

function enqueue_styles_scripts (){
	
	//jquery 3.1.1
	wp_dequeue_script('jquery');
	wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.2.1.min.js',array('jquery'),'3.2.1',true);
	//tether
	wp_enqueue_script('theter','https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js',array('jquery'),'1.4.0',true);
	//bootstrap
	wp_enqueue_script('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js',array('jquery','theter'),'4.0.0',true);
	//bodymovin
	wp_enqueue_script('bodymovin','//cdnjs.cloudflare.com/ajax/libs/bodymovin/4.9.0/bodymovin.min.js','4.9.0',true);
	//scrollPos
	wp_enqueue_script('scrollPosStyler','https://jopi.com.mx/js/scrollPosStyler.js',true);
	//animates
	wp_enqueue_script('animate',get_stylesheet_directory_uri().'/js/func.js',array('jquery','bodymovin'),'1.0',true); 
	
	//styles
	wp_enqueue_style('bootstrap_custom',get_stylesheet_directory_uri().'/css/custom_boots.css'); 
}
add_action('wp_enqueue_scripts','enqueue_styles_scripts'); 


//storefront no es una funcion por si mismo, sino una coleccion de funciones

add_action('init','funcion_jopi_homepage');
function funcion_jopi_homepage(){
	remove_action('storefront_header','storefront_secondary_navigation',30); 
	remove_action('storefront_header','storefront_product_search',40);
	remove_action('storefront_header','storefront_site_branding',20);
	remove_action('storefront_header','storefront_primary_navigation',50);
	remove_action('storefront_footer','storefront_credit',20); 
	

}

add_action('storefront_footer','n12_credit',20); 
function n12_credit(){
	?>
		<div class="site-info">
			<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
			<?php if ( apply_filters( 'storefront_credit_link', true ) ) { ?>
			<br /> <?php printf( esc_attr__( '%1$s designed by %2$s.', 'storefront' ), 'JoPi theme', '<a href="https://n12.mx" title="n12 estudio creativo" rel="author">N12 Estudio</a>' ); ?>
			<?php } ?>
		</div><!-- .site-info -->
		<?php
}

function my_custom_my_account_menu_items( $items ) {
    $items = array(
        'dashboard'         => __( 'Dashboard', 'woocommerce' ),
        'orders'            => __( 'Orders', 'woocommerce' ),
        'downloads'       => __( 'Downloads', 'woocommerce' ),
        'edit-address'    => __( 'Addresses', 'woocommerce' ),
        'payment-methods' => __( 'Payment Methods', 'woocommerce' ),
        'edit-account'      => __( 'Edit Account', 'woocommerce' ),
        'incidente'      => 'Reportar incidente',
        'customer-logout'   => __( 'Logout', 'woocommerce' ),
    );

    return $items;
}

add_filter( 'woocommerce_account_menu_items', 'my_custom_my_account_menu_items' );

function custom_wc_end_point() {
	if(class_exists('WooCommerce')){
    add_rewrite_endpoint( 'incidente', EP_ROOT | EP_PAGES );
}
}
add_action( 'init', 'custom_wc_end_point' );
function custom_endpoint_query_vars( $vars ) {
    $vars[] = 'incidente';
    return $vars;
}
add_filter( 'query_vars', 'custom_endpoint_query_vars', 0 );
function ac_custom_flush_rewrite_rules() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'ac_custom_flush_rewrite_rules' );
// add the custom endpoint in the my account nav items
function custom_endpoint_acct_menu_item( $items ) {
   
    $logout = $items['customer-logout'];
    unset( $items['customer-logout'] );
	$items['incidente'] = __( 'Reportar incidente', 'woocommerce' ); // replace videos with your endpoint name
	$items['customer-logout'] = $logout;
        return $items;
}
add_filter( 'woocommerce_account_menu_items', 'custom_endpoint_acct_menu_item' );
// fetch content from your source page (in this case video page)
function fetch_content_custom_endpoint() {
    global $post;
    $id = "48"; // your video page id
    ob_start();
    $output = apply_filters('the_content', get_post_field('post_content', $id));
    $output .= ob_get_contents();
    ob_end_clean();
    echo $output;
}
add_action( 'woocommerce_account_videos_endpoint', 'fetch_content_custom_endpoint' );
