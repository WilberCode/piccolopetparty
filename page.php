<?php 
get_header(); ?> 

<main class="main">
<div class="container">
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
</main>
<?php
get_footer();
