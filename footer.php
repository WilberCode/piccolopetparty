<?php 
//  if((is_front_page() ) || is_shop() ){
     ?>
     <!-- <div class="container ">
        <div  class=" py-10 sm:py-20 border border-line px-6 mb-8" >
            <h3 class=" legal text-center  text-lg sm:text-xl md:text-2xl font-pigeon " >legal y/o condiciones</h3>
        </div>
    </div>   -->
     <?php
//  }

?>

<!-- Site footer markup goes here -->
<footer class=" footer bg-dark w-full py-6  mt-8 <?php if(is_page('mi-cuenta')){ echo "sm:mt-64";} ?> "> 
    <div class="container text-white">
        <?php  dynamic_sidebar('footer-info') ?>  
    </div>
</footer>


<?php wp_footer();  ?>   
</body> 
</html>