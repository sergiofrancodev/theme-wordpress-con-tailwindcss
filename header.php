<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,500;1,600;1,700&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;900&family=Raleway:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>
<header class="site-header">
       <a href="/"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/logo.svg" class="logo" alt="SoyTepa"> </a>

       
        <?php
        $args = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'menu_class' => 'menu-container-st'
        );
        wp_nav_menu($args);
        ?>


 <div class="slide_nav_button lg:hidden">

     <svg
     xmlns="http://www.w3.org/2000/svg"
     class="w-9 h-9 md:w-14 md:h-14"
     fill="none"
     viewBox="0 0 24 24"
     stroke="currentColor"
     >
     <path
     stroke-linecap="round"
     stroke-linejoin="round"
     stroke-width="2"
     d="M4 6h16M4 12h16M4 18h16"
     />
    </svg>
</div>
<div class="slide_menu">
<div class='col-span-2  sm:col-span-4 mb-2'>
        <h1 class="text-2xl text-black font-openSans font-semibold"><span class='border-b-2 border-gray-600 '>Menú</span></h1>
      </div> 
    <ul>
       <a href="/noticias"> <li class="buttonMenuMobile"><img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/noticias.svg" alt="" class='w-10 mx-auto mb-1' />
        <h5>Noticias</h5>  </li></a>

        <li class="buttonMenuMobile"><img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/bienes-raices.svg" alt="" class='w-10 mx-auto mb-1' />
        <h5>Bienes Raices</h5>  </li>

        <li class="buttonMenuMobile"><img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/empleos.svg" alt="" class='w-10 mx-auto mb-1' />
        <h5>Empleos</h5>  </li>

        <li class="buttonMenuMobile"><img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/directorio.svg" alt="" class='w-10 mx-auto mb-1' />
        <h5>Directorio</h5>  </li>
        
        <a href="/sociales"> <li class="buttonMenuMobile"><img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/sociales.svg" alt="" class='w-10 mx-auto mb-1' />
        <h5>Sociales</h5>  </li> </a>

        <li class="buttonMenuMobile"><img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/chat.svg" alt="" class='w-10 mx-auto mb-1' />
        <h5>Chat</h5>  </li>

        <li class="buttonMenuMobile"><img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/podcast.svg" alt="" class='w-10 mx-auto mb-1' />
        <h5>Podcast</h5>  </li>

        <li class="buttonMenuMobile"><img src="<?php echo get_template_directory_uri(); ?>/src/img/svg/servicios-web.svg" alt="" class='w-10 mx-auto mb-1' />
        <h5>Servicios Web</h5>  </li>
        
    </ul>
</div>
  </div>
 
    </header>