<?php
/*
Template Name: Home
Template Post Type: post, page, event
*/ 
get_header();?>
<?php $file = './tailwind.js';?>   
 
<div class=" px-0">
<div class="max-w-front m-auto">
 	<?php  dynamic_sidebar('home-banner-main') ?> 
</div>  
</div> 
  
 
<div class="container xl:px-8">
   <?php
   if(have_posts()):
   while ( have_posts() ) :    
         the_post(); 
         the_content(); 
   endwhile;
   else:
         printf('<p>Empty</p>');
   endif;
   rewind_posts(); 
   ?>   
</div> 
 
<div class="max-w-6xl m-auto px-4 xl:px-0 ">
   <div  class="grid grid-cols-3 col-gap-2 sm:col-gap-5  row-gap-6 sm:row-gap-10  mt-10 marcas  " >
         <?php
         $brands = get_terms('pwb-brand'); 
            foreach( $brands as $brand ) {
               $attachment_id = get_term_meta( $brand->term_id, 'pwb_brand_image', true );
               $attachment_src = wp_get_attachment_image_src( $attachment_id,'full' );
               $brand_banner_id = get_term_meta($brand->term_id, 'pwb_brand_banner', true);
               $brand_banner_src = wp_get_attachment_image_src( $brand_banner_id,'full' ); ?>   
             <div class="marcas-item" >
               <a  href="marca/<?=$brand->slug ?>">
                  <div class=" marcas-logo">
                  <img  class="block" src="<?=$attachment_src[0]?>" alt="<?=$brand->name ?>">
               </div>
               <div class="marcas-image">
               <?php echo  $brand->description ?> 
                  <!-- <img  class="w-full mt-3" src="https://cyberweekbyby.feriasdigitales.pe/wp-content/uploads/2020/07/biberones.png" alt="Pigeon"> -->
                  <p class="marcas-image-link">MIRA LAS OFERTAS</p>
               </div> 
               </a>
            </div>      
		<?php }?>  
   </div> 
</div>

 
<div class="container">
   <div  class="mt-17 sm:mt-22 mb-14 sm:mb-20">
      <?php dynamic_sidebar('home-banner-sale') ?>   
   </div>
</div>

 
<div class="h-20" ></div> 

 <?php  
get_footer();
?>

