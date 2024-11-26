<?php
// Incluir el encabezado
include '../shared/header.php';

// Cargar la página solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        include 'shared/header.php';
        break;
  
        echo '<h2>Página no encontrada</h2>';
        break;
}


?>


    <!--Contenido Principal-->

    <main>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 survey-app text-center">
                    <div class="mb-2">
                        <h1>Centro de Innovación & Transferencia de Tecnología (CITT) UPEC 2024</h1>
                    </div>
                    <div>
                        <h3>El CITT UPEC de logística y transporte busca crear condiciones para que los resultados de la investigación sean transferidos a la sociedad para generar innovación; promoviendo la vinculación y la capacitación.
                        </h3>
                    </div>


                    <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                    </ul>
                     <div class="position-relative mb-3">
                        <video id="my-video" class="video-js card-img video-content" controls
                            preload="auto" poster="img/social/header3.jpg"
                            data-setup="{}">
                            <source
                                src="https://virprot.com/videos/MemoriasLuisV.mp4"
                                type='video/mp4'>
                        </video>
                    </div>
                </div>
            </div>




   
            <div class="tab-content active">

                 <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="qyjwyQXVY1g"></div>

             </div>
   

            <h5 class="mb-4">Sectores que trabajamos</h5>

            <div class="row mb-4">
                <div class="col-md-12 mb-4 pl-0 pr-0">
                    <div class="slick-container">
                        <div class="slick basic" >

                            <div class="card d-flex flex-row">
                                <div class="w-50 position-relative">
                                    <img class="card-img-left" src="img/cards/industry.jpg" alt="Card image cap">
                                    <span
                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                                </div>
                                <div class="w-50">
                                    <div class="card-body">
                                        <h2 >Industria 4.0</h2>
                                        Mejora procesos, reduce tiempos de espera, aumenta la seguridad laboral, ahorra costes y facilita los procesos de entrenamiento y formación mediante el uso de tecnologías 4.0
                                        <br>
                                        <br>
                                        <ul >
                                            <li>Realidad Extendida</li>
                                            <li>Simulación</li>
                                            <li>Inteligencia artificial</li>
                                            <li>Analitica de datos</li>
                                            <li>Automatización</li>
                                            <li>Fabricación aditiva</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card d-flex flex-row">
                                <div class="w-50 position-relative">
                                    <img class="card-img-left" src="img/cards/ods.webp" alt="Card image cap">
                                    <span
                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">Sector 1</span>
                                </div>
                                <div class="w-50">
                                    <div class="card-body">
                                        <h2 >Non profit y ODS</h2>
                                        Alinea los objetivos de tu Empresa con los ODS y logra experiencias impresionantes para sensibilizar, concienciar y educar a beneficiarios  comunicando de una forma diferencial tus proyectos y misión.
                                        <br>
                                        <br>
                                        <ul >
                                            <li>Preliminary thinking systems</li>
                                            <li>Bandwidth efficient</li>
                                            <li>Green space</li>
                                            <li>Social impact</li>
                                            <li>Thought partnership</li>
                                            <li>Fully ethical life</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="card d-flex flex-row">
                                <div class="w-50 position-relative">
                                    <img class="card-img-left" src="img/cards/realdiadvirtual.jpg" alt="Card image cap">
                                    <span
                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                                </div>
                                <div class="w-50">
                                    <div class="card-body">
                                        <h2 >Educación</h2>
                                        Complementa los procesos educativos de formacn y capación para estudiantes y empresas con la oferta de productos y servicios de los laboratorios con equipamiento en ultima tecnología.
                                        <br>
                                        <br>
                                        <ul >
                                            <li>Laboratorio XR</li>
                                            <li>Laboratorio Fablab</li>
                                            <li>Laboratorio Smart Data Lab</li>
                                            <li>Laboratorio de Turismo</li>
                                            <li>Laboratorio de Agropecuaria</li>
                                            <li>Centros experimentales</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card d-flex flex-row">
                                <div class="w-50 position-relative">
                                    <img class="card-img-left" src="img/cards/thumb-4.jpg" alt="Card image cap">
                                    <span
                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                                </div>
                                <div class="w-50">
                                    <div class="card-body">
                                        <h2 class="mb-4">Cultura</h2>
                                        Crea espacios de entretenimiento cultural inmersivos, colaborativos e innovadores, que lleven la experiencia de tus usuarios a otro nivel mientras obtienes un reveneu de tu inversión.
                                        <br>
                                        <br>
                                        <ul >
                                            <li>Laboratorio XR</li>
                                            <li>Laboratorio Fablab</li>
                                            <li>Laboratorio Smart Data Lab</li>
                                            <li>Laboratorio de Turismo</li>
                                            <li>Laboratorio de Agropecuaria</li>
                                            <li>Centros experimentales</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="card d-flex flex-row">
                                <div class="w-50 position-relative">
                                    <img class="card-img-left" src="img/cards/upec1.jpg" alt="Card image cap">
                                    <span
                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                                </div>
                                <div class="w-50">
                                    <div class="card-body">
                                        <h2 >Educación</h2>
                                        Complementa los procesos educativos de formacn y capación para estudiantes y empresas con la oferta de productos y servicios de los laboratorios con equipamiento en ultima tecnología.
                                        <br>
                                        <br>
                                        <ul >
                                            <li>Laboratorio XR</li>
                                            <li>Laboratorio Fablab</li>
                                            <li>Laboratorio Smart Data Lab</li>
                                            <li>Laboratorio de Turismo</li>
                                            <li>Laboratorio de Agropecuaria</li>
                                            <li>Centros experimentales</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="slick-navs-dots slider-nav text-center">
                            <a href="#" class="left-arrow">
                                <i class="simple-icon-arrow-left"></i>
                            </a>
                            <div class="slider-dot-container"></div>
                            <a href="#" class="right-arrow">
                                <i class="simple-icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-xl-8">
                    <div class="card mb-4">
                        <div class="card-body">

                            <div class="glide gallery mb-4">
                                <div class="glide__track" data-glide-el="track">
                                    <div class="glide__slides Active">
                                        <a href="img/cards/upec1.jpg">
                                            <img class="card-img" src="img/cards/upec1.jpg" alt="First image">
                                        </a>
                                        <a href="img/cards/upec2.png">
                                            <img class="card-img" src="img/cards/upec2.png" alt="Second image">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <h2 class="card-title">¿Quiénes somos?</h2>
                                <p>
                                    El CITT es uno de los centros de investigación, innovación y transferencia de tecnología más modernos del norte del país. Creado por la Universidad Politécnica Estatal del Carchi, donde se encuentran laboratorios y equipos de vanguardia en diversas áreas del conocimiento.

                                    El Centro de Innovación & Transferencia de Tecnología (CITT) se crea como una Oficina de Transferencia de Tecnología. Organismo clave para detonar el desarrollo económico y la competitividad en nuestra Institución y en nuestro país.
                                    Es un centro de investigación regional y nacional, destacándose por brindar a los investigadores todas las facilidades para que puedan ejecutar programas y proyectos investigativos, buscando la solución de problemas sociales, productivos, tecnológicos y ambientales del país, articulando los ámbitos de docencia, investigación científica/ innovación, posgrados y transferencia de tecnología.
                                </p>

                            </div>

                            <div class="position-relative mb-3">
                                <video id="my-video" class="video-js card-img video-content" controls
                                    preload="auto" poster="img/cards/upec3.jpg"
                                    data-setup="{}">
                                    <source
                                        src="http://distribution.bbb3d.renderfarming.net/video/mp4/bbb_sunflower_1080p_30fps_normal.mp4"
                                        type='video/mp4'>
                                </video>
                            </div>
                            <div class="mb-5">
                                <h2 class="card-title">Objetivos del CITT</h2>
                                <p>
                                    El objetivo principal del CITT es fortalecer la investigación, innovación y transferencia de tecnología a través de la articulación de la academia con los Objetivos de Desarrollo Sostenible, proponiendo estrategias y monitoreo permanente de programas, proyectos e indicadores que tributen al desarrollo de la región.
                                    Ofrecer sus instalaciones a investigadores para que desarrollen su actividad científica; fortaleciendo la generación y transferencia del conocimiento; para solucionar los problemas de la comunidad y la sociedad.
                                    Se lo plantea hacer por medio de:
                                </p>
                                Se lo plantea hacer por medio de:
                            </div>
                            <div class="mb-5">
                                <ul>
                                    <li>La transferencia de la tecnología a otros ámbitos académicos, productivos y sociales.</li>
                                    <li>La captación de investigadores nacionales e internacionales.</li>
                                    <li>La generación de procesos de innovación social, técnica y tecnológica.</li>
                                    <li>El desarrollo científico entre la sociedad civil, empresas e instituciones públicas y privadas, nacionales y extranjeras.</li>
                                    <li>La oferta de los resultados obtenidos a la comunidad y sectores productivos.</li>

                                </ul>
                            </div>





                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-xl-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Policies</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#" class="btn-link">Preliminary thinking systems</a></li>
                                <li><a href="#" class="btn-link">Bandwidth efficient</a></li>
                                <li><a href="#" class="btn-link">Green space</a></li>
                                <li><a href="#" class="btn-link">Social impact</a></li>
                                <li><a href="#" class="btn-link">Thought partnership</a></li>
                                <li><a href="#" class="btn-link">Fully ethical life</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Categories</h5>

                            <div class="d-flex flex-row align-items-center mb-3">
                                <a class="d-block position-relative" href="#">
                                    <i class="iconsminds-director large-icon initial-height"></i>
                                </a>
                                <div class="pl-3 pt-2 pr-2 pb-2">
                                    <a href="#">
                                        <p class="list-item-heading mb-1">Using the Template</p>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-3">
                                <a class="d-block position-relative" href="#">
                                    <i class="iconsminds-security-settings large-icon initial-height"></i>
                                </a>
                                <div class="pl-3 pt-2 pr-2 pb-2">
                                    <a href="#">
                                        <p class="list-item-heading mb-1">Security</p>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-3">
                                <a class="d-block position-relative" href="#">
                                    <i class="iconsminds-male large-icon initial-height"></i>
                                </a>
                                <div class="pl-3 pt-2 pr-2 pb-2">
                                    <a href="#">
                                        <p class="list-item-heading mb-1">Account Settings</p>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center">
                                <a class="d-block position-relative" href="#">
                                    <i class="iconsminds-newspaper large-icon initial-height"></i>
                                </a>
                                <div class="pl-3 pt-2 pr-2 pb-2">
                                    <a href="#">
                                        <p class="list-item-heading mb-1">Policies and Docs</p>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            
        </div>

        <!--Menu lateral derecho-->
<!--
        <div class="app-menu">
            <div class="p-4 h-100">
                <div class="scroll">
                    <p class="text-muted text-small">Status</p>
                    <ul class="list-unstyled mb-5">
                        <li class="active">
                            <a href="#">
                                <i class="simple-icon-refresh"></i>
                                Active Surveys
                                <span class="float-right">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="simple-icon-check"></i>
                                Completed Surveys
                                <span class="float-right">24</span>

                            </a>
                        </li>
                    </ul>

                    <p class="text-muted text-small">Categories</p>
                    <ul class="list-unstyled mb-5">
                        <li>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="category1">
                                <label class="custom-control-label" for="category1">Development</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="category2">
                                <label class="custom-control-label" for="category2">Workplace</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input" id="category3">
                                <label class="custom-control-label" for="category3">Hardware</label>
                            </div>
                        </li>
                    </ul>

                    <p class="text-muted text-small">Labels</p>
                    <div>
                        <p class="d-sm-inline-block mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-primary mb-1">NEW FRAMEWORK</span>
                            </a>
                        </p>

                        <p class="d-sm-inline-block mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-theme-3 mb-1">EDUCATION</span>
                            </a>
                        </p>
                        <p class="d-sm-inline-block  mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-secondary mb-1">PERSONAL</span>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-options"></i>
            </a>
        </div>
        -->
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