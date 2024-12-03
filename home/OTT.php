<?php
// Incluir el encabezado
include '../shared/header.php';

// Cargar la página solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>

    <!--Contenido Principal-->

    <main>
    <header class="bg-primary text-white text-center py-4">
        <h1>Oficina de Transferencia Tecnológica</h1>
        <p>UPEC - Innovación y Desarrollo</p>
    </header>

    <!-- Introducción -->
    <section class="container my-5">
        <h2 class="text-center">Nosotros</h2>
        <div class="row">
            <div class="col-md-8">
                <p>
                    Durante los últimos años, las actividades relacionadas con transferencia tecnológica adquieren
                    relevancia y tienden a crecer, con un alto impacto a nivel local, nacional e internacional.
                </p>
                <p>
                    Tanto las universidades, el sector público y privado, en el contexto social, económico y
                    tecnológico, se han visto la necesidad de fortalecer alianzas estratégicas...
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="img/imagen-triangulo-DERECHO.png" alt="Triángulo Derecho" class="img-fluid">
                <p class="mt-2">PROFESIONALISMO Y CONFIANZA</p>
            </div>
        </div>
    </section>

    <!-- Información clave -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <h3>36 años ininterrumpidos</h3>
                    <p>de Experiencia</p>
                    <p>UPEC – Tulcán</p>
                </div>
                <div class="col-md-4">
                    <h3>Objetivo</h3>
                    <p>
                        Planificar, programar, promover y ejecutar proyectos de vinculación y de investigación científica
                        y tecnológica...
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Misión</h3>
                    <p>
                        El Centro de Transferencia de Tecnología de la UPEC, es un espacio estratégico basado en
                        actividades académicas y de investigación...
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="container my-5">
        <h2 class="text-center">Valores</h2>
        <ul>
            <li><b>Responsabilidad del ser humano ante Dios:</b> Implica el respeto a la dignidad y derechos...</li>
            <li><b>Excelencia académica:</b> Garantía de una formación de calidad.</li>
            <li><b>Respeto:</b> En un ambiente que asegure un ejercicio libre, cordial y pluralista...</li>
            <!-- Agregar los demás valores -->
        </ul>
    </section>

    <!-- Equipo -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Nuestro equipo de trabajo</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Darío Javier Robayo Jacome</h4>
                    <p><b>Cargo:</b> Coordinador del CTT</p>
                    <p><b>Correo:</b> drobayo@upec.edu.ec</p>
                </div>
                <div class="col-md-6">
                    <h4>Galo Mauricio López Sevilla</h4>
                    <p><b>Cargo:</b> Director Escuela de Ingenierías</p>
                    <p><b>Correo:</b> glopez@upec.edu.ec</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section class="container my-5">
        <h2 class="text-center">Contáctenos</h2>
        <p class="text-center">Ven a visitar nuestras instalaciones o envíanos un correo electrónico. Estamos atentos a
            las necesidades de nuestros clientes.</p>
        <div class="row">
            <div class="col-md-4">
                <h4>Dirección</h4>
                <p>Av. Universitaria y Eloy Alfaro. Tulcán, Ecuador</p>
            </div>
            <div class="col-md-4">
                <h4>Llámenos</h4>
                <p>(593) 6 298 9000</p>
                <p>ext.: 1001 y 1002</p>
            </div>
            <div class="col-md-4">
                <h4>Escríbenos</h4>
                <p>ctt@upec.edu.ec</p>
                <p>glopez@upec.edu.ec</p>
                <p>ei@upec.edu.ec</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2024 UPEC INNOVACIÓN - Centro de Transferencia Tecnológica</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    </main>

    <!--Pie de pagina-->

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">Copyright © 2024</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Terminos y condiciones</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Política de privacidad </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="js/vendor/moment.min.js"></script>
    <script src="js/vendor/fullcalendar.min.js"></script>
    <script src="js/vendor/datatables.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/progressbar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/Sortable.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>