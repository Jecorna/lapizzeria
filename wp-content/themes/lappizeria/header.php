<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Prueba</title>
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
  </head>
  <body>
      <header calss="encabezado-sitio">
          <div class="contenedor">
              <div class="logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
                </a>
              </div><!--/logo -->

            </div><!-- /contenedor -->
          </header>
