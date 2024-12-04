<?php
// Incluir el encabezado
include '../shared/header.php';

// Cargar la página solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>
<!--Prácticas-->
</div>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="mb-2">
                    <h1>Prácticas</h1> <!--TITULO-->
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
        </div> <!-- INICIO-->
        </div>
</div>

<div class="d-block d-md-inline-block"> <!--FILTRO DE CATEGORIA-->>
    <div class="btn-group float-md-left mr-1 mb-1">
        <button class="btn btn-outline-dark btn-xs dropdown-toggle " type="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categoría
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Diseño</a>
            <a class="dropdown-item" href="#">Logistica</a>
            <a class="dropdown-item" href="#">Próyecto Colaborativo</a>
        </div>
    </div>
    <div class="search-sm calendar-sm d-inline-block float-md-left mr-1 mb-1 align-top">
        <input class="form-control datepicker" placeholder="Search by day">
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

<div class="row">
    <div class="col-12 col-lg-6 mb-2">
        <div class="card flex-row listing-card-container">
            <div class="w-40 position-relative">
                <a href="img\proyects\proyecto1.jpg">
                    <img class="card-img-left" src="img\proyects\proyecto1.jpg" alt="Card image cap">
                    <span class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                </a>
            </div>
            <div class="w-60 d-flex align-items-center">
                <div class="card-body">
                    <a href="Pages.Product.Detail.php">
                        <h5 class="mb-3 listing-heading ellipsis"> Gestion de Distribucion </h5>
                    </a>
                    <p class="listing-desc text-muted ellipsis">
                        Se centra en el conocimiento de los estudiantes, para que 
                        apliquen y lleve a cabo una experiencia realista 
                        
                       

                    </p>
                    <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                        class="simple-icon-heart mr-1"></i></a> <span>4
                    Likes</span></div>
            <!--div class="post-icon d-inline-block"><i
                    class="simple-icon-bubble mr-1"></i> <span>1
                    Comment</span></div-->
                </div>

            </div>
        </div>
    </div>

    <div class="col-12 col-lg-6 mb-5">
        <div class="card flex-row listing-card-container">
            <div class="w-40 position-relative">
                <a href="Pages.Product.Detail.php">
                <!--a href="Pages.Blog.Detail.ejemplo.html" class="video-play-icon"--> <!--COLOCAR UN VIDEO-->
                    <span></span>
                </a>
                <img class="card-img-left" src="img\proyects\proyecto2.jpg" alt="Card image cap">
            </div>
            <div class="w-60 d-flex align-items-center">
                <div class="card-body">
                    <a href="Pages.Product.Detail.php">
                        <h5 class="mb-3 listing-heading ellipsis">Almacenamiento</h5>
                    </a>
                    <p class="listing-desc text-muted ellipsis">
                        Credibly reintermediate backend ideas for cross-platform models.
                        Continually reintermediate integrated processes through technically
                        sound intellectual capital.
                    </p>
                    <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                        class="simple-icon-heart mr-1"></i></a> <span>4
                    Likes</span></div>
            <!--div class="post-icon d-inline-block"><i
                    class="simple-icon-bubble mr-1"></i> <span>1
                    Comment</span></div-->
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-lg-6 mb-5">
        <div class="card flex-row listing-card-container">
            <div class="w-40 position-relative">
                <a href="Pages.Product.Detail.php">
                    <img class="card-img-left" src="img\proyects\proyecto3.jpg" alt="Card image cap">
                </a>
            </div>
            <div class="w-60 d-flex align-items-center">
                <div class="card-body">
                    <a href="Pages.Product.Detail.php">
                        <h5 class="mb-3 listing-heading ellipsis"> Empaque</h5>
                    </a>
                    <p class="listing-desc text-muted ellipsis">
                        Keeping your eye on the ball while performing a deep dive on the
                        start-up mentality to derive convergence on cross-platform integration.
                    </p>
                    <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                        class="simple-icon-heart mr-1"></i></a> <span>4
                    Likes</span></div>
            <!--div class="post-icon d-inline-block"><i
                    class="simple-icon-bubble mr-1"></i> <span>1
                    Comment</span></div-->
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-6 mb-5">
        <div class="card flex-row listing-card-container">
            <div class="w-40 position-relative">
                <a href="Pages.Blog.Detail.ejemplo.html">
                    <img class="card-img-left" src="img\proyects\proyecto4.jpg" alt="Card image cap">
                </a>
            </div>
            <div class="w-60 d-flex align-items-center">
                <div class="card-body">
                    <a href="Pages.Blog.Detail.ejemplo.html">
                        <h5 class="mb-3 listing-heading ellipsis">Inventario</h5>
                    </a>
                    <p class="listing-desc text-muted ellipsis">
                        Quickly deploy strategic networks with compelling e-business. Credibly
                        pontificate highly efficient manufactured products and enabled data.
                    </p>
                    <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                        class="simple-icon-heart mr-1"></i></a> <span>4
                    Likes</span></div>
            <!--div class="post-icon d-inline-block"><i
                    class="simple-icon-bubble mr-1"></i> <span>1
                    Comment</span></div-->
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 col-lg-6 mb-5">
        <div class="card flex-row listing-card-container">
            <div class="w-40 position-relative">
                <a href="Pages.Blog.Detail.ejemplo.html">
                    <img class="card-img-left" src="img\proyects\proyecto5.jpg" alt="Card image cap">
                </a>
            </div>
            <div class="w-60 d-flex align-items-center">
                <div class="card-body">
                    <a href="Pages.Blog.Detail.ejemplo.html">
                        <h5 class="mb-3 listing-heading ellipsis">Objectively Innovate
                            Empowered Manufactured Products</h5>
                    </a>
                    <p class="listing-desc text-muted ellipsis">
                        Completely synergize resource taxing relationships via premier niche
                        markets. </p>
                        <div class="post-icon mr-3 d-inline-block"><a href="#"><i
                            class="simple-icon-heart mr-1"></i></a> <span>4
                        Likes</span></div>
                <div class="post-icon d-inline-block"><i
                        class="simple-icon-bubble mr-1"></i> <span>1
                        Comment</span></div>
                </div>
            </div>
        </div>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/baguetteBox.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>