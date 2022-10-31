<?php

//cuando el tema es activado
function soytepa_setup(){

    //activar imagen destacada
    add_theme_support('post-thumbnails');

    //Agregar imagenes de tamaño personalizado
    add_image_size( 'square', 350, 350, true);
    add_image_size( 'portrait', 350, 724, true);
    add_image_size( 'cajas', 400, 375, true);
    add_image_size( 'mediano', 700, 400, true);
    add_image_size( 'blog', 966, 644, true);

}
add_action('after_setup_theme', 'soytepa_setup');

//Funcion styles por defecto
function micodev_scripts_styles() {

    //hoja de estilos con creditos
    wp_enqueue_style('style_main', get_template_directory_uri().'/style.css', array('style_whit_tailwind'), '1.0');


    //hoka de estilos de tailwind (principal)
    wp_enqueue_style( 'style_whit_tailwind', get_stylesheet_directory_uri().'/css/style.css', array(), '1.0' );

}
add_action( 'wp_enqueue_scripts', 'micodev_scripts_styles' );

//Menu Haaburguesa
function menu_hamburguesa_scripts() {
     
    wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/burguer-menu.js', array( 'jquery' ) );
  
}
add_action( 'wp_enqueue_scripts', 'menu_hamburguesa_scripts' );

//Menus de navegación, agregar mas utilizando el arreglo
function micodev_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'micodev')
    ));
}

add_action('init', 'micodev_menus');