<?php
// Incluir el encabezado
include '../shared/header.php';

// Cargar la página solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>

<!-- Contenido Principal -->
<main>
    <div class="container-fluid">
        <!-- Encabezado principal -->
        <div class="text-center mb-4">
            <h1>Incubadora de Empresas - UPEC</h1>
            <h3>
                La Incubadora de Empresas de la UPEC impulsa proyectos innovadores, promoviendo el emprendimiento y la transferencia de conocimientos hacia el ecosistema empresarial y social.
            </h3>
        </div>

        <!-- Video introductorio -->
<div class="position-relative mb-4">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe 
            class="embed-responsive-item" 
            src="https://www.youtube.com/embed/_89kW5wlfug" 
            title="Video Introductorio de la Incubadora" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
</div>


        <!-- Servicios de la Incubadora -->
        <section>
            <h5 class="mb-4">Servicios de la Incubadora</h5>
            <div class="row slick-container">
                <!-- Asesoría y Consultoría -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/cards/asesoria.jpg" alt="Asesoría y Consultoría">
                        <div class="card-body">
                            <h5 class="card-title">Asesoría y Consultoría</h5>
                            <p>
                                Brindamos orientación personalizada en áreas clave como estrategia empresarial, financiamiento, y desarrollo de modelos de negocio.
                            </p>
                            <ul>
                                <li>Evaluación de Ideas de Negocio</li>
                                <li>Diseño de Modelos CANVAS</li>
                                <li>Planificación Estratégica</li>
                                <li>Gestión Financiera</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Espacios de Coworking -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/cards/coworking.jpg" alt="Espacios de Coworking">
                        <div class="card-body">
                            <h5 class="card-title">Espacios de Coworking</h5>
                            <p>
                                Proveemos infraestructura y espacios colaborativos equipados con tecnología para facilitar el desarrollo de proyectos.
                            </p>
                            <ul>
                                <li>Acceso a Internet de Alta Velocidad</li>
                                <li>Áreas de Trabajo Compartidas</li>
                                <li>Salas de Reunión</li>
                                <li>Laboratorios de Prototipado</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Formación y Networking -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="img/cards/formacion.jpg" alt="Formación y Networking">
                        <div class="card-body">
                            <h5 class="card-title">Formación y Networking</h5>
                            <p>
                                Organizamos capacitaciones y eventos que conectan a emprendedores con expertos y redes de financiamiento.
                            </p>
                            <ul>
                                <li>Talleres y Seminarios</li>
                                <li>Charlas con Expertos</li>
                                <li>Vinculación con Inversionistas</li>
                                <li>Acceso a Redes de Mentores</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Descripción Incubadora -->
        <section class="mt-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">¿Qué es la Incubadora de Empresas?</h2>
                    <p>
                        La Incubadora de Empresas de la UPEC es un espacio creado para apoyar a emprendedores en la transformación de sus ideas en negocios sostenibles. Ofrecemos servicios de acompañamiento, formación y acceso a recursos que potencian la innovación y el desarrollo empresarial en la región.
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Pie de página -->
<footer class="page-footer">
    <div class="footer-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p class="mb-0 text-muted">Copyright © 2025</p>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <ul class="breadcrumb pt-0 pr-0 float-right">
                        <li class="breadcrumb-item mb-0">
                            <a href="#" class="btn-link">Términos y Condiciones</a>
                        </li>
                        <li class="breadcrumb-item mb-0">
                            <a href="#" class="btn-link">Política de Privacidad</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/vendor/jquery-3.3.1.min.js"></script>
<script src="js/vendor/bootstrap.bundle.min.js"></script>
<script src="js/vendor/perfect-scrollbar.min.js"></script>
<script src="js/vendor/Chart.bundle.min.js"></script>
<script src="js/vendor/Sortable.js"></script>
<script src="js/vendor/select2.full.js"></script>
<script src="js/vendor/mousetrap.min.js"></script>
<script src="js/dore.script.js"></script>
<script src="js/scripts.js"></script>
<script src="js/vendor/baguetteBox.min.js"></script>
<script src="js/vendor/glide.min.js"></script>
<script src="js/vendor/slick.min.js"></script>

</body>
</html>
