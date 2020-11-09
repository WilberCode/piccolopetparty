<!-- Start - Categories Lists -->
<ul  class="  marca-categories mb-10 " >
    <li class="marca-category-filter marca-category-active" > <a id="marca-todos" href="<?= get_home_url('/')."/1ra-feria-digital-mama/" ?>">Todo</a>/</li>
    <?php 
        $cat_args = array(
            'post_type'		=> 'marca',
            'exclude' => array(1),
            'option_all' => 'All'
        );  
        $categories = get_categories($cat_args);
        $i = 1
        ?> 
        <?php   foreach($categories as $cat):?>
            
            <li class="marca-category-filter" >   <a data-categorymarca ="<?= $cat->slug ?>" href="<?= get_category_link($cat->term_id); ?>"> <?= $cat->name;?></a> <?php if($i== 6){ echo ""; }else{ echo "/";} ?> </li> 
            <?php 
                $i++; 
                ?>
        <?php endforeach; ?>
</ul>  
<!-- End - Categories Lists -->