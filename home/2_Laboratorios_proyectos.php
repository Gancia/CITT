<?php
// Incluir el encabezado
include '../shared/header.php';

// Cargar la página solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>



    
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