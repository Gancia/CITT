<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Proyectos</title>
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
                
                <!--<li>
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

                    <div class="mb-3">
                        <h1>Proyectos</h1>
                        <div class="text-zero top-right-button-container">
                            <button type="button" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</button>
                            <div class="btn-group">
                                <div class="btn btn-primary btn-lg pl-4 pr-0 check-button">
                                    <label class="custom-control custom-checkbox mb-0 d-inline-block">
                                        <input type="checkbox" class="custom-control-input" id="checkAll">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </div>
                                <button type="button"
                                    class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </div>
                        </div>
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

                    <div class="mb-2">
                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                            role="button" aria-expanded="true" aria-controls="displayOptions">
                            Display Options
                            <i class="simple-icon-arrow-down align-middle"></i>
                        </a>
                        <div class="collapse d-md-block" id="displayOptions">
                            <span class="mr-3 mb-2 d-inline-block float-md-left">
                                
                                <a href="Pages.Product.Thumbs.php" class="mr-2 view-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19">
                                        <path class="view-icon-svg" d="M17.5,3H6.5a.5.5,0,0,1,0-1h11a.5.5,0,0,1,0,1Z" />
                                        <path class="view-icon-svg"
                                            d="M3,2V3H1V2H3m.12-1H.88A.87.87,0,0,0,0,1.88V3.12A.87.87,0,0,0,.88,4H3.12A.87.87,0,0,0,4,3.12V1.88A.87.87,0,0,0,3.12,1Z" />
                                        <path class="view-icon-svg"
                                            d="M3,9v1H1V9H3m.12-1H.88A.87.87,0,0,0,0,8.88v1.24A.87.87,0,0,0,.88,11H3.12A.87.87,0,0,0,4,10.12V8.88A.87.87,0,0,0,3.12,8Z" />
                                        <path class="view-icon-svg"
                                            d="M3,16v1H1V16H3m.12-1H.88a.87.87,0,0,0-.88.88v1.24A.87.87,0,0,0,.88,18H3.12A.87.87,0,0,0,4,17.12V15.88A.87.87,0,0,0,3.12,15Z" />
                                        <path class="view-icon-svg"
                                            d="M17.5,10H6.5a.5.5,0,0,1,0-1h11a.5.5,0,0,1,0,1Z" />
                                        <path class="view-icon-svg"
                                            d="M17.5,17H6.5a.5.5,0,0,1,0-1h11a.5.5,0,0,1,0,1Z" /></svg>
                                </a>
                                <a href="#" class="mr-2 view-icon active">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19">
                                        <path class="view-icon-svg"
                                            d="M7,2V8H1V2H7m.12-1H.88A.87.87,0,0,0,0,1.88V8.12A.87.87,0,0,0,.88,9H7.12A.87.87,0,0,0,8,8.12V1.88A.87.87,0,0,0,7.12,1Z" />
                                        <path class="view-icon-svg"
                                            d="M17,2V8H11V2h6m.12-1H10.88a.87.87,0,0,0-.88.88V8.12a.87.87,0,0,0,.88.88h6.24A.87.87,0,0,0,18,8.12V1.88A.87.87,0,0,0,17.12,1Z" />
                                        <path class="view-icon-svg"
                                            d="M7,12v6H1V12H7m.12-1H.88a.87.87,0,0,0-.88.88v6.24A.87.87,0,0,0,.88,19H7.12A.87.87,0,0,0,8,18.12V11.88A.87.87,0,0,0,7.12,11Z" />
                                        <path class="view-icon-svg"
                                            d="M17,12v6H11V12h6m.12-1H10.88a.87.87,0,0,0-.88.88v6.24a.87.87,0,0,0,.88.88h6.24a.87.87,0,0,0,.88-.88V11.88a.87.87,0,0,0-.88-.88Z" />
                                    </svg>
                                </a>
                            </span>
                            <div class="d-block d-md-inline-block">
                                <div class="btn-group float-md-left mr-1 mb-1">
                                    <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Order By
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </div>
                                </div>
                                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                    <input placeholder="Search...">
                                </div>
                            </div>
                            <div class="float-md-right">
                                <span class="text-muted text-small">Displaying 1-10 of 210 items </span>
                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    20
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item active" href="#">20</a>
                                    <a class="dropdown-item" href="#">30</a>
                                    <a class="dropdown-item" href="#">50</a>
                                    <a class="dropdown-item" href="#">100</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row list disable-text-selection" data-check-all="checkAll">

                <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href="Pages.Product.Detail.php"><img class="card-img-top" src="img\proyects\proyecto1.jpg"
                                    alt="Card image cap"></a>
                            <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="Pages.Product.Detail.php">
                                        <p class="list-item-heading mb-4 pt-1">Industria | PLANTA DE PRODUCIÓN DE CARNE | UE4</p>
                                    </a>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">18.08.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href="Pages.Product.Detail.php"><img class="card-img-top" src="img\proyects\proyecto2.jpg"
                                    alt="Card image cap"></a>
                            <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                            <span
                                class="badge badge-pill badge-secondary position-absolute badge-top-left-2">TRENDING</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="Pages.Product.Detail.php">
                                        <p class="list-item-heading mb-4 pt-1">Industria | PLANTA INDUSTRIAL AUTOMATIZACIÓN | UE5</p>
                                    </a>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">14.06.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href="Pages.Product.Detail.php"><img class="card-img-top" src="img\proyects\proyecto3.jpg"
                                    alt="Card image cap"></a>
                            <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="Pages.Product.Detail.php">
                                        <p class="list-item-heading mb-4 pt-1">Industria | LOBBY WEBXR | Unity</p>
                                    </a>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">24.05.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href="Pages.Product.Detail.php"><img class="card-img-top" src="img\proyects\proyecto4.png"
                                    alt="Card image cap"></a>
                            <span
                                class="badge badge-pill badge-secondary position-absolute badge-top-left">TRENDING</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="Pages.Product.Detail.php">
                                        <p class="list-item-heading mb-4 pt-1">Industria | PLANTA DE PROCESAMIENTO DE CARNE | UE5</p>
                                    </a>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">23.05.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href="Pages.Product.Detail.php"><img class="card-img-top" src="img\proyects\proyecto5.png"
                                    alt="Card image cap"></a>
                            <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="Pages.Product.Detail.php">
                                        <p class="list-item-heading mb-4 pt-1">Napoleonshat</p>
                                    </a>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">19.04.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href="Pages.Product.Detail.php"><img class="card-img-top" src="img/cards/thumb-3.jpg"
                                    alt="Card image cap"></a>
                            <span
                                class="badge badge-pill badge-secondary position-absolute badge-top-left">TRENDING</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="Pages.Product.Detail.php">
                                        <p class="list-item-heading mb-4 pt-1">Petit Gâteau</p>
                                    </a>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">01.03.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href="Pages.Product.Detail.php"><img class="card-img-top" src="img/cards/thumb-1.jpg"
                                    alt="Card image cap"></a>
                            <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                            <span
                                class="badge badge-pill badge-secondary position-absolute badge-top-left-2">TRENDING</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="Pages.Product.Detail.php">
                                        <p class="list-item-heading mb-4 pt-1">Industria | PLANTA DE PRODUCIÓN DE CARNE | UE4</p>
                                    </a>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">21.02.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4">
                    <div class="card">
                        <div class="position-relative">
                            <a href="Pages.Product.Detail.php"><img class="card-img-top" src="img/cards/thumb-2.jpg"
                                    alt="Card image cap"></a>
                            <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                            <span
                                class="badge badge-pill badge-secondary position-absolute badge-top-left-2">TRENDING</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox pl-1">
                                        <label class="custom-control custom-checkbox  mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="Pages.Product.Detail.php">
                                        <p class="list-item-heading mb-4 pt-1">Industria | PLANTA INDUSTRIAL AUTOMATIZACIÓN | UE5</p>
                                    </a>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">18.02.2018</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <nav class="mt-4 mb-3">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item ">
                                <a class="page-link first" href="#">
                                    <i class="simple-icon-control-start"></i>
                                </a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link prev" href="#">
                                    <i class="simple-icon-arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link next" href="#" aria-label="Next">
                                    <i class="simple-icon-arrow-right"></i>
                                </a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link last" href="#">
                                    <i class="simple-icon-control-end"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/jquery.contextMenu.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>