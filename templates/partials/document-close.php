 
    <div class="slogan pt-20"> 
        <div class="container">
            <img class=" w-full m-auto "  src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/eslogan.png" alt="Eslogan">
            <h2 class=" mt-8 text-2xl sm:text-4xl text-center">Algunos de los clientes con los que hemos trabajado</h2> 
        </div>
    </div>

    <div class="clients pt-10 sm:pt-20 mb-10 <?php if(is_front_page()){echo ' mb-10 sm:mb-40';}else{echo 'mb-10';} ?>">
        <div class="conatainer"> 
            <img class="w-full max-w-5xl m-auto"  src="https://nuevo.tendenzeperu.com/wp-content/uploads/2020/04/Screen-Shot-2020-04-13-at-7.40.04-PM.png" alt="">
        </div>
    </div> 

<footer  class="footer bg-secondary-500" >
    <div class="container m-auto pt-6 pb-16 sm:py-6"> 
        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-2 row-gap-8">
            <div  class="sm:flex items-center sm:col-span-2 lg:col-span-1" >
                <p  class="text-white text-base sm:text-xs pr-16" >Av. Del Ejército 1180 Of. 304, <br>
                Magdalena del Mar 15076 </p>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=+51998315039&text=Hola Grupo Tendenze Comunicaciones ¡Quisiera más información!"  class=" text-center footer__contact font-bold border-2 border-primary-500 py-2 px-10 text-white hover:text-primary-500  text-base sm:text-sm  ms:inline-block" >Contacto</a>
            </div>  
            <div  class="flex items-center   sm:col-span-1  lg:col-span-1 hidden">
            <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'social',
                    'container'       => 'nav',
                    'container_class' => 'social-nav',
                    'container_id'    => 'social-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'social-menu',
                    'menu_id'         => 'social-menu',
                ));  
                ?>   
            </div> 
        </div>
    </div>
</footer> 
