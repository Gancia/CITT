<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="css/vendor/baguetteBox.min.css" />


  
    <link rel="stylesheet" href="css/vendor/slick.css" />
 
</head>

<body id="app-container" class="menu-sub-hidden show-spinner right-menu">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Pages.Search.php?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>

        </div>


        <a class="navbar-logo" href="index.php">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" 
                        data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-file d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                     <!--Notificaciones

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/profiles/l-2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/1.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="img/notifications/3.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->

                <button class="header-icon btn btn-empty " type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </nav>

        <!--Menu Principal-->

    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    
                 <!--   
                    <li>
                        <a href="#quienesomos">
                            <i class="iconsminds-police-station"></i>
                            <span>Quiénes somos</span>
                        </a>
                    </li> -->

                    <li>
                        <a href="#quienesomos">
                            <i class="iconsminds-digital-drawing"></i>
                            <span>OTT</span>
                        </a>
                    </li>

                    <li>
                        <a href="#quienesomos">
                            <i class="iconsminds-footprint-2"></i>
                            <span>Incubadora</span>
                        </a>
                    </li>
 <!--   
                    <li>
                        <a href="#servicios">
                            <i class="iconsminds-digital-drawing"></i> Servicios
                        </a>
                    </li>-->

                    <li>
                        <a href="#labs">
                            <i class="iconsminds-cpu"></i> Laboratorios
                        </a>
                    </li>

                    <li>
                        <a href="#investigacion">
                            <i class="iconsminds-chemical"></i> Investigación
                        </a>
                    </li>
                    <li>
                        <a href="#formacion">
                            <i class="
                            iconsminds-student-male-female"></i> Formación
                        </a>
                    </li>
                    <li>
                        <a href="#noticias">
                            <i class="simple-icon-heart"></i> Noticias
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <!--Menu Secundario-->

        <div class="sub-menu">
            <div class="scroll">
                <!--Quienes somos-->
                <ul class="list-unstyled" data-link="quienesomos">
                    <li>
                        <a href="1_Quienes.Somos_Origenes.php">
                            <i class="simple-icon-rocket"></i> <span class="d-inline-block">Orígenes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Misión y visión</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="iconsminds-profile"></i> <span class="d-inline-block">Equipo de trabajo</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="iconsminds-edit-map"></i> <span class="d-inline-block">Donde estamos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="iconsminds-business-mens"></i> <span class="d-inline-block">Colaboradores</span>
                        </a>
                    </li>
                </ul>


                <!--Servicios-->
                <ul class="list-unstyled" data-link="servicios" id="servicios">
                    <!--Hojas de ruta-->     
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapsehojaruta" aria-expanded="true"
                            aria-controls="#collapsehojaruta" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Hojas de ruta</span>
                        </a>
                        <div id="collapsehojaruta" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-factory-1"></i> <span class="d-inline-block">Gestión Logística</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-satelite-2"></i> <span class="d-inline-block">Gestión de Transporte</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!--Colaboración-->                   
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapsecolaboracion" aria-expanded="true"
                            aria-controls="#collapsecolaboracion" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Colaboración</span>
                        </a>
                        <div id="collapsecolaboracion" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-headset"></i> <span class="d-inline-block">Asesoramiento</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-preview"></i> <span class="d-inline-block">Convenios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-monitor---tablet"></i> <span class="d-inline-block">Prácticas y Pasantías</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-diamond"></i> <span class="d-inline-block">Emprendimiento</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-calendar-4"></i> <span class="d-inline-block">Convocatorias</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Casos de exito-->
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapsecasosexito" aria-expanded="true"
                            aria-controls="#collapsecasosexito" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Casos de éxito</span>
                        </a>
                        <div id="collapsecasosexito" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-books"></i> <span class="d-inline-block">Vinculación</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-box-full"></i> <span class="d-inline-block">Contratos I+D</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-environmental-3"></i> <span class="d-inline-block">Iniciativas sectoriales</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

         <!--Laboratorios-->
                <ul class="list-unstyled" data-link="labs" id="labs">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapselabxr" aria-expanded="true"
                            aria-controls="#collapselabxr" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Laboratorio XR</span>
                        </a>
                        <div id="collapselabxr" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="2_Laboratorios_sobre.php" style="color: brown;">
                                        <i class="simple-icon-login"></i> <span class="d-inline-block">Sobre el Laboratorio</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-organization"></i> <span class="d-inline-block">Tecnologías</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-monitor---tablet"></i> <span class="d-inline-block">Instalaciones</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-people"></i> <span class="d-inline-block">Equipo de trabajo</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="2_Laboratorios_proyectos.php">
                                        <i class="simple-icon-notebook"></i> <span class="d-inline-block">Proyectos I+D</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-student-male-female"></i> <span class="d-inline-block">Formación</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-control-play"></i> <span class="d-inline-block">Prácticas</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

            <!--Laboratorios-->                   
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#lab4" aria-expanded="true"
                            aria-controls="#lab4" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Laboratorio Logística 4.0</span>
                        </a>
                        <div id="lab4" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Product.List.php">
                                        <i class="simple-icon-login"></i> <span class="d-inline-block">Sobre el Laboratorio</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-organization"></i> <span class="d-inline-block">Tecnologías</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-monitor---tablet"></i> <span class="d-inline-block">Instalaciones</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-people"></i> <span class="d-inline-block">Equipo de trabajo</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-notebook"></i> <span class="d-inline-block">Proyectos I+D</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-control-play"></i> <span class="d-inline-block">Prácticas</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!--Investigación-->
                <ul class="list-unstyled" data-link="investigacion" id="investigacion">
                    <!--Unidad de Investigación-->     
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseinv" aria-expanded="true"
                            aria-controls="#collapseinv" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Unidad de Investigación</span>
                        </a>
                        <div id="collapseinv" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-factory-1"></i> <span class="d-inline-block">Investigación</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="iconsminds-satelite-2"></i> <span class="d-inline-block">Difución cientifica</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!--Eventos-->                   
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseeventos" aria-expanded="true"
                            aria-controls="#collapseeventos" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Eventos</span>
                        </a>
                        <div id="collapseeventos" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-globe"></i> <span class="d-inline-block">Congresos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-share"></i> <span class="d-inline-block">Seminarios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-social-youtube"></i> <span class="d-inline-block">Webinars</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

                <!--FORMACIÓN-->
                <ul class="list-unstyled" data-link="formacion">
                    <li>
                        <a href="#">
                            <i class="simple-icon-graduation"></i> <span class="d-inline-block">Formación grado</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-graduation"></i> <span class="d-inline-block">Formación posgrado</span>
                        </a>
                    </li>
                    <li>    
                        <a href="#">
                            <i class="simple-icon-graduation"></i> <span class="d-inline-block">Cursos a la medida</span>
                        </a>
                    </li>

                </ul>


                <!--NOTICIAS-->
                <ul class="list-unstyled" data-link="noticias">
                    <li>
                        <a href="#">
                            <i class="simple-icon-star"></i> <span class="d-inline-block">Columnas</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-notebook"></i> <span class="d-inline-block">Artículos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-cursor"></i> <span class="d-inline-block">Prensa</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-event"></i> <span class="d-inline-block">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-fire"></i> <span class="d-inline-block">Novedades</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-question"></i> <span class="d-inline-block">Historias que inspiran</span>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>


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