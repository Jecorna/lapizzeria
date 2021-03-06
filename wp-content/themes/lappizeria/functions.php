
<?php

//se agrega todo lo relacionado a  la carpeta es por medio de este arcivo
function lapizzeria_styles(){
  //Normalizacion de css para stadard de navegadores
  wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css',  array(), '5.0.0');
  wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css',  array(), '4.7.0');//Fon awasome
  //reigistro de estilos ('nombre', funcion que obtiene el directorio en wordpressl, 'rutadespues de directorioraiz', 'array de invocacion(dependincia)', 'version')
  //enlace de hola de estilos personalizada
  wp_register_style('style', get_template_directory_uri() . '/style.css',  array('normalize'), '1.0');
  //invocacion de las hojas de estilos
  wp_enqueue_style('normalize');
  wp_enqueue_style('font-awesome');
  wp_enqueue_style('style');

  // Registro de js
  wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(),'1.0.0', true );// toma 6 paramametros 1 nombre 2 ubicacion 3 array de dependencias 4 version 5 para que cargue en footer
  wp_enqueue_script('jquery');
  wp_enqueue_script('scripts');
}


 add_action('wp_enqueue_scripts', 'lapizzeria_styles'); // se tiene que agregar el add para la interaccion de los contenidos de la fuincion con el php
// Creacion de menus
 function lapizzeria_menus(){
   register_nav_menus(array(
     'header-menu' => __('Header Menu','lapizzeria'),
     'social-menu' => __('Social Menu','lapizzeria')//'social-menu' es un team loaction que nada mas lee la computadora
   ));

 }
  add_action('init','lapizzeria_menus'); // 'init' sirve para inicializar wp
?>
