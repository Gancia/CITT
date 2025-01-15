$(document).ready(function() {
    // Variables para control del menú
    var menuClickCount = 0;
    const allMenuClassNames = "menu-default menu-hidden sub-hidden main-hidden menu-sub-hidden main-show-temporary sub-show-temporary menu-mobile";

    // Función para cambiar las clases del menú
    function setMenuClassNames(clickIndex) {
        menuClickCount = clickIndex;
        const container = $("#app-container");
        let nextClasses = "";

        // Ciclo de estados del menú con rotación
        if (clickIndex % 3 === 0) {  // Estado inicial: todo visible
            nextClasses = "menu-default";
        } else if (clickIndex % 3 === 1) {  // Ocultar submenú
            nextClasses = "menu-default menu-sub-hidden";
        } else if (clickIndex % 3 === 2) {  // Ocultar todo
            nextClasses = "menu-hidden";
        }

        // Mantener la clase mobile si está presente
        if (container.hasClass("menu-mobile")) {
            nextClasses += " menu-mobile";
        }

        // Aplicar las clases con transición
        container.removeClass(allMenuClassNames);
        container.addClass(nextClasses);
    }

    // Función para mostrar el submenú correspondiente
    function showSubMenu(link) {
        // Solo actuar si es una sección válida
        if (link && ['ott', 'incubadora', 'uexperimentales', 'hublab', 'formacion'].includes(link)) {
            // Si el contenedor ya tiene visible el submenú, solo cambiamos el contenido
            if (!$('#app-container').hasClass('menu-sub-hidden')) {
                // Hacemos una transición suave entre submenús
                $('.sub-menu ul').fadeOut(100, function() {
                    $('.sub-menu ul[data-link="' + link + '"]').fadeIn(100);
                });
            } else {
                // Si el submenú estaba oculto, primero mostramos el contenedor
                $('#app-container').removeClass('menu-sub-hidden');
                // Luego mostramos el contenido específico
                $('.sub-menu ul').hide();
                $('.sub-menu ul[data-link="' + link + '"]').fadeIn(200);
            }
        } else {
            // Para la página de inicio o sección inválida
            $('.sub-menu ul').fadeOut(200, function() {
                $('#app-container').addClass('menu-sub-hidden');
            });
            sessionStorage.removeItem('activeMenu');
        }
    }

    // Función para guardar el estado del colapsador
    function saveCollapsedState(collapseId) {
        const openCollapses = sessionStorage.getItem('openCollapses') ? 
            JSON.parse(sessionStorage.getItem('openCollapses')) : [];
            
        if (!openCollapses.includes(collapseId)) {
            openCollapses.push(collapseId);
            sessionStorage.setItem('openCollapses', JSON.stringify(openCollapses));
        }
    }

    // Función para remover el estado del colapsador
    function removeCollapsedState(collapseId) {
        const openCollapses = sessionStorage.getItem('openCollapses') ? 
            JSON.parse(sessionStorage.getItem('openCollapses')) : [];
            
        const index = openCollapses.indexOf(collapseId);
        if (index > -1) {
            openCollapses.splice(index, 1);
            sessionStorage.setItem('openCollapses', JSON.stringify(openCollapses));
        }
    }

    // Restaurar estado de los colapsadores al cargar la página
    function restoreCollapsedStates() {
        const openCollapses = sessionStorage.getItem('openCollapses') ? 
            JSON.parse(sessionStorage.getItem('openCollapses')) : [];
            
        openCollapses.forEach(collapseId => {
            $(`#${collapseId}`).addClass('show');
            $(`[data-target="#${collapseId}"]`).removeClass('collapsed');
            $(`[data-target="#${collapseId}"]`).attr('aria-expanded', 'true');
        });
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
        // Limpiar todos los estados guardados
        sessionStorage.removeItem('activeMenu');
        sessionStorage.removeItem('openCollapses');
        $('.sub-menu ul').hide();
        $('#app-container').addClass('menu-sub-hidden');
    });

    // Click handler para el botón del menú
    $(".menu-button").on("click", function (event) {
        event.preventDefault();
        setMenuClassNames(++menuClickCount);
    });

    // Eventos para los colapsadores
    $('.collapse').on('shown.bs.collapse', function() {
        saveCollapsedState(this.id);
    });

    $('.collapse').on('hidden.bs.collapse', function() {
        removeCollapsedState(this.id);
    });

    // Al cargar la página, verificar la URL actual
    var currentPath = window.location.pathname;
    if (currentPath === '/' || currentPath === '/inicio/') {
        // Si estamos en la página de inicio, limpiar todo
        sessionStorage.removeItem('activeMenu');
        sessionStorage.removeItem('openCollapses');
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

    // Restaurar estados de los colapsadores
    restoreCollapsedStates();

    // Función para manejar el estado activo de las subsecciones
    function handleSubsectionActive() {
        // Obtener la URL actual
        const currentPath = window.location.pathname;
        
        // Remover clase activa de todas las subsecciones
        $('.sub-menu ul li a').removeClass('subsection-active');
        
        // Encontrar y activar la subsección correspondiente
        $('.sub-menu ul li a').each(function() {
            const href = $(this).attr('href');
            if (href && currentPath.includes(href)) {
                $(this).addClass('subsection-active');
                
                const collapseParent = $(this).closest('.collapse');
                if (collapseParent.length) {
                    collapseParent.addClass('show');
                    collapseParent.prev('.rotate-arrow-icon').removeClass('collapsed');
                }
            }
        });
    }

    // Ejecutar cuando la página carga
    handleSubsectionActive();

    // Manejar clicks en los enlaces de subsección
    $('.sub-menu ul li a').on('click', function() {
        $('.sub-menu ul li a').removeClass('subsection-active');
        $(this).addClass('subsection-active');
    });
});