document.addEventListener("DOMContentLoaded", function () {
    // Selecciona todos los enlaces de navegación
    const links = document.querySelectorAll(".nav-link");
    // Selecciona todas las secciones de formularios
    const sections = document.querySelectorAll(".form-section");

    links.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); // Evita el comportamiento predeterminado del enlace

            // Oculta todas las secciones
            sections.forEach(section => section.style.display = "none");

            // Muestra la sección correspondiente al enlace clicado
            const target = this.getAttribute("data-target");
            const targetSection = document.getElementById(target);
            if (targetSection) {
                targetSection.style.display = "block";
            }
        });
    });
});