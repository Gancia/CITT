<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sobre el laboratorio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
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
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Sobre el Laboratorio</h1>
                        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb pt-0">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Library</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-xl-8 col-left">
                    <div class="card mb-4">
                        <div class="card-body">

                            <div class="glide details">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide">
                                            <img alt="detail" src="img/products/header1.jpg"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="img/products/napoleonshat.jpg"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="img/products/marble-cake.jpg"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="img/products/fruitcake.jpg"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="img/products/magdalena.jpg"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="detail" src="img/products/tea-loaf.jpg"
                                                class="responsive border-0 border-radius img-fluid mb-3" />
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="glide thumbs">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <li class="glide__slide">
                                            <img alt="thumb" src="img/products/parkin-thumb.jpg"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb" src="img/products/napoleonshat-thumb.jpg"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb" src="img/products/marble-cake-thumb.jpg"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb" src="img/products/fruitcake-thumb.jpg"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb" src="img/products/magdalena-thumb.jpg"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                        <li class="glide__slide">
                                            <img alt="thumb" src="img/products/tea-loaf-thumb.jpg"
                                                class="responsive border-0 border-radius img-fluid" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="glide__arrows" data-glide-el="controls">
                                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i
                                            class="simple-icon-arrow-left"></i></button>
                                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
                                            class="simple-icon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs " role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                                        aria-controls="first" aria-selected="true">Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab"
                                        aria-controls="second" aria-selected="false">Comments(19)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab"
                                        aria-controls="third" aria-selected="false">Questions(5)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="first" role="tabpanel"
                                    aria-labelledby="first-tab">

                                    <p class="font-weight-bold">Augue Vitae Commodo</p>
                                    <p>
                                        Vivamus ultricies augue vitae commodo condimentum. Nullam
                                        faucibus eros eu mauris feugiat, eget consectetur tortor tempus. Sed volutpat
                                        mollis dui eget fringilla. Vestibulum blandit urna ut tellus lobortis tristique.
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                        Curae; Pellentesque quis cursus mauris. Nam in ornare erat. Vestibulum convallis
                                        enim ac massa dapibus consectetur. Maecenas facilisis eros ac felis mattis, eget
                                        auctor sapien varius.
                                        <br />
                                        <br />
                                        Nulla non purus fermentum, pulvinar dui condimentum,
                                        malesuada nibh. Sed viverra quam urna, at condimentum ante viverra non. Mauris
                                        posuere erat sapien, a convallis libero lobortis sit amet. Suspendisse in orci
                                        tellus.
                                    </p>
                                    <br />

                                    <p class="font-weight-bold">Phasellus Efficitur</p>

                                    <p>
                                        Tellus a sem condimentum, vitae convallis sapien feugiat.
                                        Aenean non nibh nec nunc aliquam iaculis. Ut quis suscipit nunc. Duis at lectus
                                        a est aliquam venenatis vitae eget arcu. Sed egestas felis eget convallis
                                        maximus. Curabitur maximus, ligula vel sagittis iaculis, risus nisi tincidunt
                                        sem, ut ultricies libero nulla eu ligula. Nam ultricies mollis nulla, sed
                                        laoreet leo convallis ac. Mauris nisl risus, tincidunt ac diam aliquet,
                                        convallis pellentesque nisi. Nam sit amet libero at odio malesuada ultricies a
                                        vitae dolor. Cras in viverra felis, non consequat quam. Praesent a orci enim.
                                        Vivamus porttitor nisi at nisl egestas iaculis. Nullam commodo eget dui
                                        sollicitudin sagittis. Duis id nibh mollis, hendrerit metus consectetur,
                                        ullamcorper risus. Morbi elementum ultrices nunc, quis porta nisi ornare sit
                                        amet.
                                        <br />
                                        <br />
                                        Etiam tincidunt orci in nisi aliquam placerat. Aliquam finibus in sem ut
                                        vehicula. Morbi eget consectetur leo. Quisque consectetur lectus eros, sed
                                        sodales libero ornare cursus. Etiam elementum ut dolor eget hendrerit.
                                        Suspendisse eu lacus eu eros lacinia feugiat sit amet non purus.
                                        <br />
                                        <br />
                                        Pellentesque quis cursus mauris. Nam in ornare erat. Vestibulum convallis enim
                                        ac massa dapibus consectetur. Maecenas facilisis eros ac felis mattis, eget
                                        auctor sapien varius.
                                    </p>
                                    <br />
                                    <p class="font-weight-bold">Elementum Ultrices</p>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">

                                    <div class="d-flex flex-row mb-3 border-bottom justify-content-between">
                                        <a href="#">
                                            <img src="img/profiles/l-7.jpg" alt="Mimi Carreira"
                                                class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                        </a>
                                        <div class="pl-3 flex-grow-1">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">Mimi Carreira</p>
                                                <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                            </a>
                                            <p class="mt-3">
                                                Pellentesque quis cursus mauris.
                                            </p>
                                        </div>
                                        <div class="comment-likes">
                                            <span class="post-icon"><a href="#"><span>12 Likes</span> <i
                                                        class="simple-icon-heart ml-2"></i></a></span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3 border-bottom justify-content-between">
                                        <a href="#">
                                            <img src="img/profiles/l-3.jpg" alt="Kathryn Mengel"
                                                class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                        </a>
                                        <div class="pl-3 flex-grow-1">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">Kathryn Mengel</p>
                                                <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                            </a>
                                            <p class="mt-3">
                                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                                cubilia Curae; Pellentesque quis cursus mauris. Nam in ornare erat.
                                                Vestibulum convallis enim ac massa dapibus consectetur. Maecenas
                                                facilisis eros ac felis mattis, eget auctor sapien varius.
                                            </p>
                                        </div>
                                        <div class="comment-likes">
                                            <span class="post-icon"><a href="#"><span>2 Likes</span> <i
                                                        class="simple-icon-heart ml-2"></i></a></span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3 border-bottom justify-content-between">
                                        <a href="#">
                                            <img src="img/profiles/l-4.jpg" alt="Philip Nelms"
                                                class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                        </a>
                                        <div class="pl-3 flex-grow-1">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">Philip Nelms</p>
                                                <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                            </a>
                                            <p class="mt-3">
                                                Quisque consectetur lectus eros, sed sodales libero ornare cursus. Etiam
                                                elementum ut dolor eget hendrerit. Suspendisse eu lacus eu eros lacinia
                                                feugiat sit amet non purus.
                                            </p>
                                        </div>
                                        <div class="comment-likes">
                                            <span class="post-icon"><a href="#"><span>5 Likes</span> <i
                                                        class="simple-icon-heart ml-2"></i></a></span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3 border-bottom justify-content-between">
                                        <a href="#">
                                            <img src="img/profiles/l-9.jpg" alt="Latarsha Gama"
                                                class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                        </a>
                                        <div class="pl-3 flex-grow-1">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">Latarsha Gama</p>
                                                <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                            </a>
                                            <p class="mt-3">
                                                Taking seamless key performance indicators
                                                offline to maximise the long tail.
                                            </p>
                                        </div>
                                        <div class="comment-likes">
                                            <span class="post-icon"><a href="#"><span>6 Likes</span> <i
                                                        class="simple-icon-heart ml-2"></i></a></span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3 border-bottom justify-content-between">
                                        <a href="#">
                                            <img src="img/profiles/l-2.jpg" alt="Velva Valdovinos"
                                                class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                        </a>
                                        <div class="pl-3 flex-grow-1">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">Velva Valdovinos</p>
                                                <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                            </a>
                                            <p class="mt-3">
                                                Nulla non purus fermentum, pulvinar dui condimentum, malesuada nibh. Sed
                                                viverra quam urna, at condimentum ante viverra non. Mauris posuere erat
                                                sapien, a convallis libero lobortis sit amet. Suspendisse in orci
                                                tellus.
                                            </p>
                                        </div>
                                        <div class="comment-likes">
                                            <span class="post-icon"><a href="#"><span>4 Likes</span> <i
                                                        class="simple-icon-heart ml-2"></i></a></span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mb-3 border-bottom justify-content-between">
                                        <a href="#">
                                            <img src="img/profiles/l-7.jpg" alt="Mimi Carreira"
                                                class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                        </a>
                                        <div class="pl-3 flex-grow-1">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">Mimi Carreira</p>
                                                <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                            </a>
                                            <p class="mt-3">
                                                Pellentesque quis cursus mauris.
                                            </p>
                                        </div>
                                        <div class="comment-likes">
                                            <span class="post-icon"><a href="#"><span>Like</span> <i
                                                        class="simple-icon-heart ml-2"></i></a></span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3 border-bottom justify-content-between">
                                        <a href="#">
                                            <img src="img/profiles/l-3.jpg" alt="Kathryn Mengel"
                                                class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                        </a>
                                        <div class="pl-3 flex-grow-1">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">Kathryn Mengel</p>
                                                <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                            </a>
                                            <p class="mt-3">
                                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                                cubilia Curae; Pellentesque quis cursus mauris. Nam in ornare erat.
                                                Vestibulum convallis enim ac massa dapibus consectetur. Maecenas
                                                facilisis eros ac felis mattis, eget auctor sapien varius.
                                            </p>
                                        </div>
                                        <div class="comment-likes">
                                            <span class="post-icon"><a href="#"><span>Like</span> <i
                                                        class="simple-icon-heart ml-2"></i></a></span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row mb-3 justify-content-between">
                                        <a href="#">
                                            <img src="img/profiles/l-4.jpg" alt="Philip Nelms"
                                                class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                        </a>
                                        <div class="pl-3 flex-grow-1">
                                            <a href="#">
                                                <p class="font-weight-medium mb-0">Philip Nelms</p>
                                                <p class="text-muted mb-0 text-small">Two Days Ago</p>
                                            </a>
                                            <p class="mt-3">
                                                Quisque consectetur lectus eros, sed sodales libero ornare cursus. Etiam
                                                elementum ut dolor eget hendrerit. Suspendisse eu lacus eu eros lacinia
                                                feugiat sit amet non purus.
                                            </p>
                                        </div>
                                        <div class="comment-likes">
                                            <span class="post-icon"><a href="#"><span>11 Likes</span> <i
                                                        class="simple-icon-heart ml-2"></i></a></span>
                                        </div>
                                    </div>

                                    <div class="comment-contaiener">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Add a comment">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="button"><span
                                                        class="d-inline-block">Send</span> <i
                                                        class="simple-icon-arrow-right ml-2"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                                    <div id="accordion">
                                        <div>
                                            <button class="btn btn-link p-0 pb-2 font-weight-bold"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <p>Craft beer labore wes anderson cred nesciunt?</p>
                                            </button>

                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                <div class="pb-4">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin
                                                    coffee
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                    beer
                                                    labore
                                                    wes anderson cred nesciunt sapiente ea proident.
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-link collapsed p-0 pb-2 font-weight-bold"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <p>Labore wes anderson cred nesciunt sapiente ea proident?</p>
                                            </button>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="pb-4">
                                                    3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin
                                                    coffee
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                    beer
                                                    labore
                                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                    butcher
                                                    vice
                                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                    aesthetic synth
                                                    nesciunt
                                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-link collapsed p-0 pb-2 font-weight-bold"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <p>Sunt aliqua put a bird on it squid?</p>
                                            </button>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                <div class="pb-4">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod.Nihil anim keffiyeh helvetica, craft
                                                    beer
                                                    labore
                                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                    butcher
                                                    vice
                                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                    aesthetic synth
                                                    nesciunt
                                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-link collapsed p-0 pb-2 font-weight-bold"
                                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                <p>Nihil anim keffiyeh helvetica?</p>
                                            </button>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                <div class="pb-4">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin
                                                    coffee
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                    beer
                                                    labore
                                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                    butcher
                                                    vice
                                                    lomo.
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-link collapsed p-0 pb-2 font-weight-bold"
                                                data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                <p>High life accusamus terry richardson?</p>
                                            </button>
                                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                                <div class="pb-4">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum
                                                    eiusmod.
                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin
                                                    coffee
                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                                    beer
                                                    labore
                                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                                    butcher vice lomo.
                                                    <br />
                                                    <br />

                                                    Sed volutpat mollis dui eget fringilla. Vestibulum blandit urna ut
                                                    tellus lobortis tristique. Vestibulum ante ipsum primis in faucibus
                                                    orci luctus et ultrices posuere cubilia Curae; Pellentesque quis
                                                    cursus mauris.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-xl-4 col-right">
                    <div class="card mb-4">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                                            class="simple-icon-heart mr-1"></i></a> <span>4
                                        Likes</span></div>
                                <div class="post-icon d-inline-block"><i class="simple-icon-bubble mr-1"></i> <span>1
                                        Comment</span></div>
                            </div>
                            <p class="mb-3">
                                Vivamus ultricies augue vitae commodo condimentum. Nullam faucibus eros eu mauris
                                feugiat, eget consectetur tortor tempus.
                                <br /><br />
                                Sed volutpat mollis dui eget fringilla.
                                Vestibulum blandit urna ut tellus lobortis tristique. Vestibulum ante ipsum primis in
                                faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque quis cursus
                                mauris.
                                <br /><br />
                                Nulla non purus fermentum, pulvinar dui condimentum, malesuada nibh. Sed
                                viverra quam urna, at condimentum ante viverra non. Mauris posuere erat sapien, a
                                convallis libero lobortis sit amet. Suspendisse in orci tellus.
                            </p>
                            <p class="text-muted text-small mb-2">Tags</p>
                            <p class="mb-3">
                                <a href="#">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">FRONTEND</span>
                                </a>
                                <a href="#">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">JAVASCRIPT</span>
                                </a>
                                <a href="#">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">SECURITY</span>
                                </a>
                                <a href="#">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">DESIGN</span>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="card mb-4 d-none d-lg-block">
                        <div class="card-body">
                            <h5 class="card-title"><span>Similar Projects</span><a
                                    class="btn-link float-right text-small pt-1" href="#">View All</a>
                            </h5>
                            <div class="row social-image-row gallery">
                                <div class="col-6">
                                    <a href="img/products/marble-cake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/marble-cake-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="img/products/parkin.jpg">
                                        <img class="img-fluid border-radius" src="img/products/parkin-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="img/products/fruitcake.jpg">
                                        <img class="img-fluid border-radius" src="img/products/fruitcake-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="img/products/tea-loaf.jpg">
                                        <img class="img-fluid border-radius" src="img/products/tea-loaf-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="img/products/napoleonshat.jpg">
                                        <img class="img-fluid border-radius" src="img/products/napoleonshat-thumb.jpg" />
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="img/products/magdalena.jpg">
                                        <img class="img-fluid border-radius" src="img/products/magdalena-thumb.jpg" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
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
    <script src="js/vendor/baguetteBox.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>