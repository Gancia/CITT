$(document).ready(function() {
    // Función para mostrar el submenú correspondiente
    function showSubMenu(link) {
        // Oculta todos los submenús
        $('.sub-menu ul').hide();
        // Muestra el submenú correspondiente al link
        $('.sub-menu ul[data-link="' + link + '"]').show();
    }

    // Click handler para los items del menú principal
    $('.main-menu ul li a').on('click', function(e) {
        e.preventDefault();
        
        // Obtiene el data-link del item seleccionado
        var link = $(this).attr('data-link');
        
        // Remueve la clase active de todos los items
        $('.main-menu ul li').removeClass('active');
        // Agrega la clase active al item seleccionado
        $(this).parent('li').addClass('active');
        
        // Cambia las clases del contenedor principal
        if ($('#app-container').hasClass('menu-sub-hidden')) {
            $('#app-container').removeClass('menu-sub-hidden');
        }
        
        // Muestra el submenú correspondiente
        showSubMenu(link);
        
        // Si estamos en móvil, muestra temporalmente el submenú
        if ($('#app-container').hasClass('menu-mobile')) {
            $('#app-container').addClass('sub-show-temporary');
        }
    });

    // Inicialización - muestra el submenú de la sección activa
    var activeLink = $('.main-menu ul li.active a').attr('data-link');
    if (activeLink) {
        showSubMenu(activeLink);
    }
});