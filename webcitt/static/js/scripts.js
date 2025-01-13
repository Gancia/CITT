$(document).ready(function() {
    // Función para mostrar el submenú correspondiente
    function showSubMenu(link) {
        // Solo mostrar submenú si es una sección válida
        if (link && ['ott', 'incubadora', 'uexperimentales', 'hublab', 'formacion'].includes(link)) {
            // Oculta todos los submenús
            $('.sub-menu ul').hide();
            // Muestra el submenú correspondiente al link
            $('.sub-menu ul[data-link="' + link + '"]').show();
            // Asegurarse que el menú principal esté visible
            $('#app-container').removeClass('menu-sub-hidden');
        } else {
            // Si es la página de inicio o una sección inválida, ocultar submenús
            $('.sub-menu ul').hide();
            $('#app-container').addClass('menu-sub-hidden');
            // Limpiar el sessionStorage cuando estamos en inicio
            sessionStorage.removeItem('activeMenu');
        }
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
        
        // Si estamos en móvil y es una sección válida, muestra temporalmente el submenú
        if ($('#app-container').hasClass('menu-mobile') && 
            ['ott', 'incubadora', 'uexperimentales', 'hublab', 'formacion'].includes(link)) {
            $('#app-container').addClass('sub-show-temporary');
        }

        // Guarda el estado del menú en sessionStorage solo si es una sección válida
        if (['ott', 'incubadora', 'uexperimentales', 'hublab', 'formacion'].includes(link)) {
            sessionStorage.setItem('activeMenu', link);
        }
    });

    // Click handler para el logo/inicio
    $('.navbar-brand').on('click', function() {
        // Limpiar el sessionStorage y ocultar submenús
        sessionStorage.removeItem('activeMenu');
        $('.sub-menu ul').hide();
        $('#app-container').addClass('menu-sub-hidden');
    });

    // Click handler para el botón del menú
    $(".menu-button").on("click", function (event) {
        event.preventDefault();
        setMenuClassNames(++menuClickCount);
    });

    // Al cargar la página, verificar la URL actual
    var currentPath = window.location.pathname;
    if (currentPath === '/' || currentPath === '/inicio/') {
        // Si estamos en la página de inicio, limpiar todo
        sessionStorage.removeItem('activeMenu');
        $('.sub-menu ul').hide();
        $('#app-container').addClass('menu-sub-hidden');
        return;
    }

    // Al cargar la página, verificar si hay un menú activo
    var activeLink = $('.main-menu ul li.active a').attr('data-link');
    if (activeLink && ['ott', 'incubadora', 'uexperimentales', 'hublab', 'formacion'].includes(activeLink)) {
        // Mostrar el submenú correspondiente a la sección activa
        showSubMenu(activeLink);
        // Guardar el estado en sessionStorage
        sessionStorage.setItem('activeMenu', activeLink);
    } else {
        // Si no hay menú activo o es la página de inicio, intentar recuperar del sessionStorage
        var savedMenu = sessionStorage.getItem('activeMenu');
        if (savedMenu && ['ott', 'incubadora', 'uexperimentales', 'hublab', 'formacion'].includes(savedMenu)) {
            showSubMenu(savedMenu);
        } else {
            // Si no hay sección válida guardada, ocultar submenús
            $('.sub-menu ul').hide();
            $('#app-container').addClass('menu-sub-hidden');
        }
    }
});