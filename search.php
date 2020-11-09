<?php get_header();?>
<div class="msearch">
    <div class="bg-gray-200 py-10">
        <div class="container">
            <div  class="max-w-lg m-auto" ><?php get_search_form(true);?></div>
        </div>
    </div>
	<div class="container"> 
		<div class="max-w-lg m-auto ">
        <h1 class="mt-8 mb-4 text-base  ">Los resultados para la busqueda
			<b>
				<?php echo  get_search_query();?>
			</b> son:
		</h1>
		<div class="msearch-posts  ">
			<?php if(have_posts()):
					while(have_posts()):  the_post(); ?>  
						<article class="grid grid-cols-3 mb-4 shadow-md hover:underline  ">
							<?php if(thumbnail_image_url('full')){  ?> 
                            <a href="<?php the_permalink();?>" class=" col-span-1 " >
                                <img  class="block p-6 "  src="<?php echo thumbnail_image_url('full'); ?>" alt="">
							</a>
							<div class=" col-span-2  flex justify-start items-center py-5 px-8 "> 
								<a href="<?php the_permalink(); ?>" class="text-xl text-secondary-500 ">  
								    <?php the_title(); ?> 
								</a>
							</div> 
							<?php }else{	?>
								<a href="<?php the_permalink(); ?>" class=" flex justify-center items-center py-5 px-8 text-xl col-span-3 text-black  ">  
								 <?php the_title(); ?> 
								</a>
							<?php }?>
						</article>  
			<?php endwhile;  ?>
			<div class="msearch-navigation mb-4">
				<?php echo paginate_links();?>
			</div>
			<?php else:?>
			<div class="msearch-not mb-6">
				<h2 class="m-0">No se han encontrado resultados.</h2>
				<p class="text-sm m-0 text-secondary-400 ">Prueba con otras palabras clave.</p>
			</div>
			<?php endif;
                        rewind_posts();  
                        ?> 
		</div>
        </div>
	</div>
</div>
<?php get_footer();