jQuery.noConflict();
    jQuery(document).ready(
      //Ocualtar y mostrar menu
    function($) {
  $('.mobile-menu a').on('click', function(){
    $('nav.menu-sitio').toggle('slow');
  });
  // Reaccion a resize de pantalla
  var breakpoint = 768;
  $(window).resize(function(){
    if($(document).width() >= breakpoint){
      $('nav.menu-sitio').show();
    }
    else {
      $('nav.menu-sitio').hide();
    }
  });
});
