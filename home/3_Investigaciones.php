<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
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

            <a class="btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block"
                href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a>
        </div>


        <a class="navbar-logo" href="Dashboard.Default.php">
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

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
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
   
   
   


       
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Dashboard Ecommerce</h1>
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
                    <div class="separator mb-5"></div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="icon-cards-row">
                        <div class="glide dashboard-numbers">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-clock"></i>
                                                <p class="card-text mb-0">Pending Orders</p>
                                                <p class="lead text-center">16</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-basket-coins"></i>
                                                <p class="card-text mb-0">Completed Orders</p>
                                                <p class="lead text-center">32</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-arrow-refresh"></i>
                                                <p class="card-text mb-0">Refund Requests</p>
                                                <p class="lead text-center">2</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-mail-read"></i>
                                                <p class="card-text mb-0">New Comments</p>
                                                <p class="lead text-center">25</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="position-absolute card-top-buttons">

                                    <button class="btn btn-header-light icon-button" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="simple-icon-refresh"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right mt-3">
                                        <a class="dropdown-item" href="#">Sales</a>
                                        <a class="dropdown-item" href="#">Orders</a>
                                        <a class="dropdown-item" href="#">Refunds</a>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Sales</h5>
                                    <div class="dashboard-line-chart chart">
                                        <canvas id="salesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Recent Orders</h5>
                            <div class="scroll dashboard-list-with-thumbs">
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/marble-cake-thumb.jpg" alt="Marble Cake"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Marble Cake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Latashia Nagy - 100-148 Warwick
                                                    Trfy, Kansas City, USA</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/fruitcake-thumb.jpg" alt="Fruitcake"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Fruitcake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Marty Otte - 166-156 Rue de
                                                    Varennes, Gatineau, QC J8T 8G4, Canada</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-1 position-absolute badge-top-right">PROCESS</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Chocolate Cake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Linn Ronning - Rasen 2-14, 98547
                                                    Kühndorf, Germany</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/fat-rascal-thumb.jpg" alt="Fat Rascal"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Fat Rascal</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Rasheeda Vaquera - 37 Rue des
                                                    Grands Prés, 03100 Montluçon, France</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/streuselkuchen-thumb.jpg" alt="Streuselkuchen"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Streuselkuchen</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Mimi Carreira - 36-71 Victoria
                                                    St, Birmingham, UK</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/cremeschnitte-thumb.jpg" alt="Cremeschnitte"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Cremeschnitte</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Lenna Majeed - 6 Hertford St
                                                    Mayfair, London, UK</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Product Categories</h5>
                            <div class="dashboard-donut-chart chart">
                                <canvas id="categoryChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 mb-4">
                    <div class="card dashboard-link-list">
                        <div class="card-body">
                            <h5 class="card-title">Cakes</h5>
                            <div class="d-flex flex-row">
                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">Marble Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fruitcake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Chocolate Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fat Rascal</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Financier</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Genoise</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Gingerbread</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Goose Breast</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Parkin</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Petit Gâteau</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Salzburger Nockerl</a>
                                        </li>
                                        <li>
                                            <a href="#">Soufflé</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">Streuselkuchen</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Tea Loaf</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Napoleonshat</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Merveilleux</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Magdalena</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Cremeschnitte</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Cheesecake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Bebinca</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fruitcake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Chocolate Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fat Rascal</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Financier</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tickets</h5>
                            <div class="scroll dashboard-list-with-user">
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-1.jpg" alt="Mayra Sibley"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-7.jpg" alt="Mimi Carreira"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 10:20</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-6.jpg" alt="Philip Nelms"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Philip Nelms</p>
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 09:12</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-3.jpg" alt="Terese Threadgill"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Terese Threadgill</p>
                                            <p class="text-muted mb-0 text-small">01.08.2018 - 18:20</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-5.jpg" alt="Kathryn Mengel"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Kathryn Mengel</p>
                                            <p class="text-muted mb-0 text-small">27.07.2018 - 11:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-4.jpg" alt="Esperanza Lodge"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Esperanza Lodge</p>
                                            <p class="text-muted mb-0 text-small">24.07.2018 - 15:00</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Calendar</h5>
                            <div class="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Best Sellers</h5>
                            <table class="data-table data-table-standard responsive nowrap"
                                data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Sales</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Marble Cake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1452</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">62</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Fruitcake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1245</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">65</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Chocolate Cake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1200</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">45</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Bebinca</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1150</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">4</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Napoleonshat</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1050</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">41</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Magdalena</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">998</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">24</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Salzburger Nockerl</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">924</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">20</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Soufflé</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">905</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">64</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cremeschnitte</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">845</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cheesecake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">830</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">36</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Gingerbread</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">807</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">21</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Goose Breast</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">795</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="js/vendor/moment.min.js"></script>
    <script src="js/vendor/fullcalendar.min.js"></script>
    <script src="js/vendor/datatables.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/vendor/progressbar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/Sortable.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>