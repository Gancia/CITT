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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">




  
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
                        <a href="#quienesomosOTT">
                            <i class="iconsminds-digital-drawing"></i>
                            <span>OTT</span>
                        </a>
                    </li>

                    <li>
                        <a href="#quienesomosIncubadora">
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
                        <a href="#proyectos">
                            <i class="iconsminds-chemical"></i> Proyectos
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
                <!--Quienes somos OTT-->
                <ul class="list-unstyled" data-link="quienesomosOTT">
                    <li>
                        <a href="OTT.php">
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

                  <!--Quienes somos Incubadora-->

                <ul class="list-unstyled" data-link="quienesomosIncubadora">
                    <li>
                        <a href="Incubadora.php">
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
                                    <a href="2.6_Laboratorios_prácticas.php">
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

                    <ul class="list-unstyled" data-link="investigacion" id="investigacion">
                    <!--Proyectos-->     
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseinv" aria-expanded="true"
                            aria-controls="#collapseinv" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Proyectos</span>
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

