$(document).ready(function() {
    // Función para mostrar el submenú correspondiente
    function showSubMenu(link) {
        // Oculta todos los submenús
        $('.sub-menu ul').hide();
        // Muestra el submenú correspondiente al link
        $('.sub-menu ul[data-link="' + link + '"]').show();
        // Asegurarse que el menú principal esté visible
        $('#app-container').removeClass('menu-sub-hidden');
    }

    // Click handler para los items del menú principal
    $('.main-menu ul li a').on('click', function(e) {
        // Obtiene el data-link del item seleccionado
        var link = $(this).attr('data-link');
        
        // Remueve la clase active de todos los items
        $('.main-menu ul li').removeClass('active');
        // Agrega la clase active al item seleccionado
        $(this).parent('li').addClass('active');
        
        // Muestra el submenú correspondiente
        showSubMenu(link);
        
        // Si estamos en móvil, muestra temporalmente el submenú
        if ($('#app-container').hasClass('menu-mobile')) {
            $('#app-container').addClass('sub-show-temporary');
        }

        // Guarda el estado del menú en sessionStorage
        sessionStorage.setItem('activeMenu', link);
    });

    // Al cargar la página, verificar si hay un menú activo
    var activeLink = $('.main-menu ul li.active a').attr('data-link');
    if (activeLink) {
        // Mostrar el submenú correspondiente a la sección activa
        showSubMenu(activeLink);
        // Guardar el estado en sessionStorage
        sessionStorage.setItem('activeMenu', activeLink);
    } else {
        // Si no hay menú activo, intentar recuperar del sessionStorage
        var savedMenu = sessionStorage.getItem('activeMenu');
        if (savedMenu) {
            showSubMenu(savedMenu);
        }
    }
});