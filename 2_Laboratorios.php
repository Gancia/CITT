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
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="css/vendor/video-js.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner vertical boxed">
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
                    <div class="mb-2">
                        <h1>Extensive Infomediaries</h1>
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
                        <div class="lightbox">
                            <a href="img/details/5.jpg">
                                <img alt="detail" src="img/details/5.jpg"
                                    class="responsive border-0 card-img-top mb-3" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="mb-5">
                                <h5 class="card-title">Game Changing Features</h5>
                                <p>
                                    Blended value human-centered social innovation resist scale and impact issue
                                    outcomes
                                    bandwidth efficient. A; social return on investment, change-makers, support a,
                                    co-create
                                    commitment because sustainable. Rubric when vibrant black lives matter benefit
                                    corporation human-centered. Save the world, problem-solvers support silo mass
                                    incarceration. Accessibility empower communities changemaker, low-hanging fruit
                                    accessibility, thought partnership impact investing program areas invest.
                                    Contextualize
                                    optimism unprecedented challenge, empower inclusive. Living a fully ethical life the
                                    resistance segmentation social intrapreneurship efficient inspire external partners.
                                    Systems thinking correlation, social impact; when revolutionary bandwidth. Engaging,
                                    revolutionary engaging; empower communities policymaker shared unit of analysis
                                    technology inspiring social entrepreneurship.
                                </p>
                                <p>
                                    Mass incarceration, preliminary thinking systems thinking vibrant thought leadership
                                    corporate social responsibility. Green space global, policymaker; shared value
                                    disrupt
                                    segmentation social capital. Thought partnership, optimism citizen-centered
                                    commitment,
                                    relief scale and impact the empower communities circular. Contextualize boots on the
                                    ground; uplift big data, co-creation co-create segmentation youth inspire. Innovate
                                    innovate overcome injustice.
                                </p>
                            </div>
                            <div class="mb-5">
                                <h5 class="card-title">Unprecedented Challenge</h5>
                                <ul class="list-unstyled">
                                    <li>Preliminary thinking systems</li>
                                    <li>Bandwidth efficient</li>
                                    <li>Green space</li>
                                    <li>Social impact</li>
                                    <li>Thought partnership</li>
                                    <li>Fully ethical life</li>
                                </ul>
                            </div>
                            <div class="mb-5">
                                <h5 class="card-title">Revolutionary Bandwidth</h5>
                                <p>
                                    Blended value human-centered social innovation resist scale and impact issue
                                    outcomes bandwidth efficient. A; social return on investment, change-makers, support
                                    a, co-create commitment because sustainable. Rubric when vibrant black lives matter
                                    benefit corporation human-centered. Save the world, problem-solvers support silo
                                    mass incarceration. Accessibility empower communities changemaker, low-hanging fruit
                                    accessibility, thought partnership impact investing program areas invest.
                                    Contextualize optimism unprecedented challenge, empower inclusive. Living a fully
                                    ethical life the resistance segmentation social intrapreneurship efficient inspire
                                    external partners. Systems thinking correlation, social impact; when revolutionary
                                    bandwidth. Engaging, revolutionary engaging; empower communities policymaker shared
                                    unit of analysis technology inspiring social entrepreneurship.Mass incarceration,
                                    preliminary thinking systems thinking vibrant thought leadership corporate social
                                    responsibility. Green space global, policymaker; shared value disrupt segmentation
                                    social capital. Thought partnership, optimism citizen-centered commitment, relief
                                    scale and impact the empower communities circular. Contextualize boots on the
                                    ground; uplift big data, co-creation co-create segmentation youth inspire. Innovate
                                    innovate overcome injustice.
                                </p>
                                <p>
                                    Systems thinking correlation, social impact; when revolutionary bandwidth. Engaging,
                                    revolutionary engaging; empower communities policymaker shared unit of analysis
                                    technology inspiring social entrepreneurship. Thought partnership, optimism
                                    citizen-centered
                                    commitment,
                                    relief scale and impact the empower communities circular. Contextualize boots on the
                                    ground; uplift big data, co-creation co-create segmentation youth inspire. Innovate
                                    innovate overcome injustice.
                                </p>
                            </div>
                            <div>
                                <h5 class="card-title">Game Changing Features</h5>
                                <p>
                                    Blended value human-centered social innovation resist scale and impact issue
                                    outcomes
                                    bandwidth efficient. A; social return on investment, change-makers, support a,
                                    co-create
                                    commitment because sustainable. Rubric when vibrant black lives matter benefit
                                    corporation human-centered. Save the world, problem-solvers support silo mass
                                    incarceration. Accessibility empower communities changemaker, low-hanging fruit
                                    accessibility, thought partnership impact investing program areas invest.
                                    Contextualize
                                    optimism unprecedented challenge, empower inclusive. Living a fully ethical life the
                                    resistance segmentation social intrapreneurship efficient inspire external partners.
                                    Systems thinking correlation, social impact; when revolutionary bandwidth. Engaging,
                                    revolutionary engaging; empower communities policymaker shared unit of analysis
                                    technology inspiring social entrepreneurship.
                                </p>
                                <p>
                                    But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you a complete account of the system, and
                                    expound the actual teachings of the great explorer of the truth, the master-builder
                                    of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it
                                    is pleasure, but because those who do not know how to pursue pleasure rationally
                                    encounter consequences that are extremely painful. Nor again is there anyone who
                                    loves or pursues or desires to obtain pain of itself, because it is pain, but
                                    because occasionally circumstances occur in which toil and pain can procure him some
                                    great pleasure. To take a trivial example, which of us ever undertakes laborious
                                    physical exercise, except to obtain some advantage from it? But who has any right to
                                    find fault with a man who chooses to enjoy a pleasure that has no annoying
                                    consequences, or one who avoids a pain that produces no resultant pleasure? On the
                                    other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                    desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                    equal blame belongs to those who fail in their duty through weakness of will, which
                                    is the same as saying through shrinking from toil and pain.
                                </p>
                                <p>
                                    These cases are
                                    perfectly simple and easy to distinguish. In a free hour, when our power of choice
                                    is untrammelled and when nothing prevents our being able to do what we like best,
                                    every pleasure is to be welcomed and every pain avoided. But in certain
                                    circumstances and owing to the claims of duty or the obligations of business it will
                                    frequently occur that pleasures have to be repudiated and annoyances accepted. The
                                    wise man therefore always holds in these matters to this principle of selection: he
                                    rejects pleasures to secure other greater pleasures, or else he endures pains to
                                    avoid worse pains. But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain was born and I will give you a complete
                                    account of the system, and expound the actual teachings of the great explorer of the
                                    truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                                    pleasure itself, because it is pleasure, but because those who do not know how to
                                    pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                    again is there anyone who loves or pursues or desires to obtain pain of itself,
                                    because it is pain, but because occasionally circumstances occur in which toil and
                                    pain can procure him some great pleasure. To take a trivial example, which of us
                                    ever undertakes laborious physical exercise, except to obtain some advantage from
                                    it? But who has any right to find fault with a man who chooses to enjoy a pleasure
                                    that has no annoying consequences, or one who avoids a pain that produces no
                                    resultant pleasure? On the other hand, we denounce with righteous indignation and
                                    dislike men who are so beguiled and demoralized by the charms of pleasure of the
                                    moment, so blinded by desire, that they cannot foresee the pain and trouble that are
                                    bound to ensue; and equal blame belongs to those who fail in their duty through
                                    weakness of will, which is the same as saying through shrinking from toil and pain.
                                    These cases are perfectly simple and easy to distinguish. In a free hour, when our
                                    power of choice is untrammelled and when nothing prevents our being able to do what
                                    we like best, every pleasure is to be welcomed and every pain avoided. But in
                                    certain circumstances and owing to the claims of duty or the obligations of business
                                    it will frequently occur that pleasures have to be repudiated and annoyances
                                    accepted.
                                </p>
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
                            <h5 class="card-title">Recent Posts</h5>
                            <div>
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/marble-cake-thumb.jpg" alt="Marble Cake"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Progressively Maintain
                                                Extensive Infomediaries</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/fruitcake-thumb.jpg" alt="Fruitcake"
                                            class="list-thumbnail border-0" />
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Assertively Iterate Resource
                                                Maximizing</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                            class="list-thumbnail border-0" />
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Podcasting Operational Change</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/fat-rascal-thumb.jpg" alt="Fat Rascal"
                                            class="list-thumbnail border-0" />
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Manufactured Products</p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <div class="position-relative">
                                <video id="my-video" class="video-js side-bar-video card-img-top" controls
                                    preload="auto" poster="img/video/subpage-video-poster.jpg" data-setup="{}">
                                    <source
                                        src="http://distribution.bbb3d.renderfarming.net/video/mp4/bbb_sunflower_1080p_30fps_normal.mp4"
                                        type='video/mp4'>
                                </video>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="list-item-heading mb-4">Homemade Cheesecake with Fresh Berries and Mint
                            </p>
                            <footer>
                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                            </footer>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body text-center pt-5 pb-5">
                            <div>
                                <img alt="thumb"
                                    class="img-thumbnail border-0 rounded-circle mb-4 list-thumbnail mx-auto"
                                    src="img/profiles/l-7.jpg" />
                                <h5 class="mb-0 font-weight-semibold color-theme-1 mb-3">codebars</h5>
                                <select class="rating" data-current-rating="5" data-readonly="true">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <p class="text-muted text-small">Code Quality</p>
                            </div>
                            <div class="pl-3 pr-3 pt-3 pb-0 flex-grow-1 d-flex align-items-center">
                                <p class="mb-0 ">
                                    Objectively innovate empowered manufactured products whereas
                                    parallel platforms. Holisticly predominate extensible testing
                                    procedures for reliable supply chains.
                                </p>
                            </div>
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
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/baguetteBox.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/video.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>