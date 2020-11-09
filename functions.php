<?php


use WpTailwindCssThemeBoilerplate\AutoLoader;
use WpTailwindCssThemeBoilerplate\View;


/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */
require get_stylesheet_directory() . '/app/AutoLoader.php';
require get_stylesheet_directory() . '/inc/widgets.php'; 


$loader = new AutoLoader();
$loader->register();
$loader->addNamespace( 'WpTailwindCssThemeBoilerplate', get_stylesheet_directory() . '/app' );

View::$view_dir = get_stylesheet_directory() . '/templates/views';

require get_stylesheet_directory() . '/includes/scripts-and-styles.php';
  
// Obtiene la Url del thumbnail     
function thumbnail_image_url($size){
    global $post; 
    $image_id = get_post_thumbnail_id($post -> ID);
    $main_image = wp_get_attachment_image_src($image_id, $size);
    //0 = ruta o url, 1 = width, 2 = height, 3 = boolean
    return $main_image[0];
} 

function tienda_register_styles() { 
	$theme_version = wp_get_theme()->get( 'Version' ); 
	wp_enqueue_style( 'twentytwenty-style', get_stylesheet_uri(), array(), $theme_version );  
}

add_action( 'wp_enqueue_scripts', 'tienda_register_styles' );
function my_theme_setup() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'my_theme_setup' );
 
 
// Eliminar todos los CSS de WooCommerce de golpe
add_filter( 'woocommerce_enqueue_styles', '__return_false' );


/* CATALOGO DE PRODUCTO - START*/
 
// Nuevo formato de precio regular y descuento 
function bd_rrp_sale_price_html( $price, $product ) {
	if ( $product->is_on_sale() ) :
	  $has_sale_text = array(
		'<del>' => '<del>Precio Regular: ',
		'<ins>' => '<ins>Cyber: '
	  );
	  $return_string = str_replace(array_keys( $has_sale_text ), array_values( $has_sale_text ), $price) ;
	else :
	  $return_string =  '<div class="flex py-3 font-normal text-base" > Cyber Week:'.$price.'</div>'; 
	endif;
  
	return $return_string;
  }
  add_filter( 'woocommerce_get_price_html', 'bd_rrp_sale_price_html', 100, 2 );
 
 
// Ahorro
add_filter( 'woocommerce_get_price_html', 'change_displayed_sale_price_html', 10, 2 ); 
function change_displayed_sale_price_html( $price, $product ) 
            { if( $product->is_on_sale() && ! is_admin() && ! $product->is_type('variable')){ 
				$regular_price = (float) $product->get_regular_price(); $sale_price = (float) 
				$product->get_price(); 
				$saving_price = wc_price( $regular_price - $sale_price ); 
				$precision = 1;  
				$price .= sprintf( __('<h3><span class="snippet-dto-ahorro ">Ahorra:</span> <span class="snippet-dto-precio">%s</span></h3>', 'woocommerce' ), 
				$saving_price); 
			} 
			return $price; 
}

 
// Muestra descripcion del producto
function dcms_show_description_item_product() { 
	global $product;
	$chars_quantity = 800; //cantidad de caracteres a mostrar
	
	//Obtenemos la información del producto
	$product_details = $product->get_data();
	$short_description = $product_details['short_description'];   

	//mostrar descripción
	echo "<div class='dcms-item-description'>".  $short_description ."</div>";
} 
add_action( 'woocommerce_before_shop_loop_item_title', 'dcms_show_description_item_product', 10, 0 );

 

// Elimina el Titulo
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title');
  
/* CATALOGO DE PRODUCTO - END*/
 

// Agregara distritos a Woocommerce
add_filter( 'woocommerce_states','goowoo_add_states' );
function goowoo_add_states( $states ){
	$states['PE'] = array(
		'SR' =>__('Surco', 'woocommerce'),
		'MI' =>__('Miraflores', 'woocommerce'),
		'SB' =>__('San Borja', 'woocommerce'), 
		'SI' =>__('San Isidro', 'woocommerce'),
		'MG' =>__('Magdalena', 'woocommerce'),
		'LM' =>__('La Molina', 'woocommerce'),
		'BA' =>__('Barranco', 'woocommerce'),
		'LV' =>__('La Victoria', 'woocommerce'),
		'SL' =>__('San Luis', 'woocommerce'),

		'SM' =>__('San Miguel', 'woocommerce'),
		'PL' =>__('Pueblo Libre', 'woocommerce'),
		'JM' =>__('Jesus Maria', 'woocommerce'),
		'CD' =>__('Cercado', 'woocommerce'),
		'SLM' =>__('Salamanca', 'woocommerce'),
		'BR' =>__('Breña', 'woocommerce'), 
		'AT' =>__('Ate (Mayorazgo)', 'woocommerce'),  

 	);
 return $states;
}
 

/* FINALIZAR COMPRA - START */

// Obliga a registrarse antes de finalizar compra
  add_action('template_redirect','check_if_logged_in');
  function check_if_logged_in()
  {
	  $pageid = 8; // your checkout page id
	  if(!is_user_logged_in() && is_page($pageid))
	  {
		  $url = add_query_arg(
			  'redirect_to',
			  get_permalink($pagid),
			  site_url('/mi-cuenta/') // your my acount url
		  );
		  wp_redirect($url);
		  exit;
	  }
	  if(is_user_logged_in())
	  {
	  if(is_page(9))//my-account page id
	  {

		  $redirect = $_GET['redirect_to'];
		  if (isset($redirect)) {
		  echo '<script>window.location.href = "'.$redirect.'";</script>';
		  }

	  }
	 }
  }   

  /* FINALIZAR COMPRA - END */


/* SINGLE PRODUCT - START */

//Remove title
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

// Change price location
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 ); 
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );
 
// Elimanar  comentario y valoraciones
add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
 function sb_woo_remove_reviews_tab($tabs)
 {
 unset($tabs['reviews']);
 return $tabs;
 } 

/* SINGLE PRODUCT - END */







