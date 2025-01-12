// Ejemplo de extensión correcta en scripts.js
$(document).ready(function() {
  // Agregar funcionalidad después que dore.script.js se ejecute
  $(window).on('doreInitComplete', function() {
    // Asegurarse que el menú principal tenga la clase correcta
    $("#app-container").addClass("menu-default");

    // Manejar clicks en el menú principal
    $(".main-menu ul li a").on("click", function() {
      var link = $(this).data("link");
      
      // Activar el ítem del menú
      $(".main-menu ul li").removeClass("active");
      $(this).parent().addClass("active");

      // Mostrar el submenú correspondiente
      $(".sub-menu ul").hide();
      $('.sub-menu ul[data-link="' + link + '"]').show();

      // Asegurar que el submenú esté visible
      if($("#app-container").hasClass("menu-sub-hidden")) {
        $("#app-container").removeClass("menu-sub-hidden");
      }
    });
  });
});