$(document).ready(function() {
    // Variables para control del menú
    var menuClickCount = 0;
    const allMenuClassNames = "menu-default menu-hidden sub-hidden main-hidden menu-sub-hidden main-show-temporary sub-show-temporary menu-mobile";

    // Función para cambiar las clases del menú
    function setMenuClassNames(clickIndex) {
        menuClickCount = clickIndex;
        const container = $("#app-container");
        let nextClasses = "";

        // Aplicar las clases con un pequeño retraso para permitir la animación
        setTimeout(() => {
            // Ciclo de estados del menú con rotación
            switch (clickIndex % 3) {
                case 0: // Todo visible
                    nextClasses = "menu-default";
                    break;
                case 1: // Solo menu principal
                    nextClasses = "menu-default menu-sub-hidden";
                    break;
                case 2: // Todo oculto
                    nextClasses = "menu-hidden";
                    break;
            }

            // Mantener clase mobile si existe
            if (container.hasClass("menu-mobile")) {
                nextClasses += " menu-mobile";
            }

            // Aplicar clases con transición suave
            container.removeClass(allMenuClassNames);
            requestAnimationFrame(() => {
                container.addClass(nextClasses);
            });
        }, 50);
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
    $(".menu-button").on("click", function(event) {
        event.preventDefault();
        event.stopPropagation();
        
        // Forzar reflow antes de la animación
        const icon = $(this).find('.rotate-icon')[0];
        icon.style.transition = 'none';
        icon.offsetHeight; // Forzar reflow
        icon.style.transition = 'transform 0.3s ease-in-out';
        
        // Incrementar contador y aplicar clases
        setMenuClassNames(++menuClickCount);

        // Ajustar la rotación del ícono para que sea consistente y en sentido antihorario
        let rotationAngle;
        switch (menuClickCount % 3) {
            case 0: // Menú principal y secundario visibles
                rotationAngle = 0;
                break;
            case 1: // Solo menú principal visible
                rotationAngle = -90;
                break;
            case 2: // Todo oculto
                rotationAngle = -180;
                break;
        }
        icon.style.transform = `rotate(${rotationAngle}deg)`;
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

    // Inicializar carousels
    $('.carousel').carousel({
        interval: 5000
    });

    // Animación de números en estadísticas
    function animateNumbers() {
        $('.stat-number').each(function() {
            const $this = $(this);
            const num = parseInt($this.text());
            $({ Counter: 0 }).animate({
                Counter: num
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }

    // Ejecutar animación cuando el elemento sea visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateNumbers();
                observer.unobserve(entry.target);
            }
        });
    });

    // Observar el contenedor de estadísticas
    $('.stats-container').each(function() {
        observer.observe(this);
    });

    // Efecto parallax suave en el header
    $(window).scroll(function() {
        const scroll = $(window).scrollTop();
        $('.header-bg').css({
            transform: `translateY(${scroll * 0.5}px)`
        });
    });

    // Tooltips para iconos de timeline
    $('[data-toggle="tooltip"]').tooltip();

    // Smooth scroll para enlaces internos
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        const target = $(this.getAttribute('href'));
        if(target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }
    });
});