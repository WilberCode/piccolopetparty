<!doctype html>
<html lang="ES" class="no-js">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_get_document_title() ?></title>  
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
     <meta name="keywords" content="Grupo Tendenze Comunicaciones, Ferias digitales, feria digital mamá, feria digital papá, muestra con tu marca, promoción, Belleza, Deco Vintage, Seguros, Nutrición, Maternidad, Accesorios, Video mamá, Detalles, Postres, Flores, 
Meat Fest, Carnes, Gourmet, Piel Seca, Experiencia, Vinos, Meditación"> 
    <?php wp_head() ?> 


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-182947848-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-182947848-1');
    </script>
   <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '356199811610428');
    fbq('track', 'PageView');
    </script> 
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=356199811610428&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->


    <?php //if(is_product_taxonomy('pigeon')){?>
       
        
    <?php //} ?> 
</head>
<body <?php body_class()  ?>  > 