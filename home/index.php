<?php
// Incluir el encabezado
include '../shared/header.php';

// Cargar la página solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>

<!-- Contenido Principal -->
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 survey-app text-center">
                <div class="mb-2">
                    <h1>Oficina de Transferencia de Tecnología (OTT) - UPEC</h1>
                </div>
                <div>
                    <h3>
                        La OTT UPEC tiene como objetivo principal facilitar la transferencia de conocimientos y tecnologías hacia la sociedad, promoviendo el desarrollo económico y la innovación en diferentes sectores estratégicos.
                    </h3>
                </div>

                <div class="position-relative mb-3">
                    <video id="my-video" class="video-js card-img video-content" controls preload="auto" poster="img/social/header3.jpg" data-setup="{}">
                        <source src="https://virprot.com/videos/MemoriasLuisV.mp4" type='video/mp4'>
                    </video>
                </div>
            </div>
        </div>

        <h5 class="mb-4">Áreas de Impacto</h5>
        <div class="row mb-4">
            <div class="col-md-12 mb-4 pl-0 pr-0">
                <div class="slick-container">
                    <div class="slick basic">
                        <!-- Sector: Innovación Empresarial -->
                        <div class="card d-flex flex-row">
                            <div class="w-50 position-relative">
                                <img class="card-img-left" src="img/cards/industry.jpg" alt="Innovación Empresarial">
                                <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">Nuevo</span>
                            </div>
                            <div class="w-50">
                                <div class="card-body">
                                    <h2>Innovación Empresarial</h2>
                                    Implementa tecnologías avanzadas para optimizar procesos y generar soluciones disruptivas en empresas y startups.
                                    <br><br>
                                    <ul>
                                        <li>Inteligencia Artificial</li>
                                        <li>Automatización de Procesos</li>
                                        <li>Big Data</li>
                                        <li>Realidad Extendida</li>
                                        <li>Prototipado Rápido</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sector: Educación -->
                        <div class="card d-flex flex-row">
                            <div class="w-50 position-relative">
                                <img class="card-img-left" src="img/cards/realdiadvirtual.jpg" alt="Educación">
                                <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">Educación</span>
                            </div>
                            <div class="w-50">
                                <div class="card-body">
                                    <h2>Educación</h2>
                                    Fomenta la transferencia de conocimiento a través de talleres, laboratorios y programas educativos innovadores.
                                    <br><br>
                                    <ul>
                                        <li>Laboratorios XR</li>
                                        <li>Fablab</li>
                                        <li>Simulación Educativa</li>
                                        <li>Capacitación Técnica</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sector: Desarrollo Sostenible -->
                        <div class="card d-flex flex-row">
                            <div class="w-50 position-relative">
                                <img class="card-img-left" src="img/cards/ods.webp" alt="Desarrollo Sostenible">
                                <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">ODS</span>
                            </div>
                            <div class="w-50">
                                <div class="card-body">
                                    <h2>Desarrollo Sostenible</h2>
                                    Apoya iniciativas alineadas con los Objetivos de Desarrollo Sostenible para fomentar el impacto social y ambiental positivo.
                                    <br><br>
                                    <ul>
                                        <li>Proyectos Ambientales</li>
                                        <li>Impacto Social</li>
                                        <li>Innovación Verde</li>
                                        <li>Colaboración Multisectorial</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">¿Qué es la OTT?</h2>
                        <p>
                            La Oficina de Transferencia de Tecnología (OTT) de la UPEC es un espacio diseñado para promover la colaboración entre la academia, las empresas y la sociedad, mediante la transferencia de conocimientos y tecnologías innovadoras. Su objetivo principal es fomentar la investigación aplicada y el desarrollo de proyectos que generen valor para la comunidad y contribuyan al desarrollo regional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Pie de página -->
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
