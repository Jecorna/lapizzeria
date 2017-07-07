
<?php

//se agrega todo lo relacionado a  la carpeta es por medio de este arcivo
function lapizzeria_styles(){
  //Normalizacion de css para stadard de navegadores
  wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css',  array(), '5.0.0');
  //reigistro de estilos ('nombre', funcion que obtiene el directorio en wordpressl, 'rutadespues de directorioraiz', 'array de invocacion(dependincia)', 'version')
  //enlace de hola de estilos personalizada
  wp_register_style('style', get_template_directory_uri() . '/style.css',  array('normalize'), '1.0');
  //invocacion de las hojas de estilos
  wp_enqueue_style('normalize');
  wp_enqueue_style('style');
}


 add_action('wp_enqueue_scripts', 'lapizzeria_styles') // se tiene que agregar el add para la interaccion de los contenidos de la fuincion con el php
?>
