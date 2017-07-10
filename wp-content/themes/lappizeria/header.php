<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Prueba</title>
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
  </head>
  <body>

          <div class="contenedor">
            <header calss="encabezado-sitio">
              <div class="logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logotipo">
                </a>
              </div><!--/logo -->
              <div class="informacion-encabezado">
                <div class="redes-sociales">
                  <?php $args = array(
                    'theme_location' => 'social-menu',
                    'container' => 'nav',
                    'container_class' => 'menu-social',
                    'container_id' => 'menu-social',
                    'link_before' => '<span class="sr-text">',
                    'link_after' => '</span>'
                  );
                  wp_nav_menu($args);
                   ?>
                </div><!-- /nav de redes social-menu-->
                <div class="direccion">
                  <p>av algo</p>
                  <p>num algomas</p>
                </div>
              </div>



          </header>
          <nav class="menu-sitio">
            <div class="contenedor-navegacion">
              <?php
                $args = array (
                  'theme_location' => 'header-menu', // que menu quiero que imprima
                  'container' => 'nav', // que etiqueta quiero que use
                  'container_class' => 'menu-sitio' // que calses quoiero que imprima
                );// argumentos que se le pasan a la funcion
                wp_nav_menu ( $args );
               ?>
            </div>

          </nav>
          </div><!-- /contenedor -->
