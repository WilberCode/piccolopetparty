<?php 
get_header(); ?>
<?php 
get_header();?>
 <div class="404 bg-gray-200 border-b border-gray-300 "> 
   <div class="container">
    <div class="text-center py-10 ">
            <h1 class=" ">¡Oops!... Página no encontrada</h1>
            <p class="  max-w-2xl m-auto mt-5">
                La página que buscas no existe, probablemente el enlace que usaste es erróneo, intenta ubicarlo en la página principal o usa el buscador:
            </p> 
            <div class="max-w-lg m-auto mt-4">
                <?php get_search_form(true); ?>
            </div> 
            <a class=" font-medium text-secondary-800 block mt-8 hover:underline" href="<?php echo esc_url(home_url("/"));?>">Volver a la página principal</a>
        </div> 
   </div>
 </div>     
 <?php 
get_footer();
?>