<?php
get_header(); ?>
  

<div class="container ">
<?php
  if ( have_posts() ) :

      // Start the Loop.
      while ( have_posts() ) :
          the_post(); 

      endwhile;   
  else : 

  endif;
  ?>  
</div>
    
 
 
<?php

get_footer();
