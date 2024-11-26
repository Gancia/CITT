<?php
// Incluir el encabezado
include '../shared/header.php';

// Cargar la página solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>


    <main>
      <div class="container-fluid">
        <div class="row">
          
          <!-- <div class="mb-2">  -->
              
           
          <!-- <div class="separator mb-5"></div>  -->
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-xl-8 col-center">
            <div class="card mb-4">
              <div class="card-body">
                <div class="content-container">
                  <!-- Contenido de Simuladores -->
                  <div class="container my-5">
                  <div class="btn-group mb-3 row w-100">
                      <button
                        type="button"
                        class="btn btn-primary active"
                        data-view="simuladores"
                        onclick="showContent('simuladores')">
                        Simuladores
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-view="videosTutoriales"
                        onclick="showContent('videosTutoriales')">
                        Tutoriales
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-view="descargas"
                        onclick="showContent('descargas')">
                        Descargas
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-view="documentosPDF"
                        onclick="showContent('documentosPDF')">
                        Documentación
                      </button>
                    </div>
                
                    <div class="content-container">
                      <!-- Contenido de Simuladores -->
                      <div class="content-section" data-view="simuladores">
                      <iframe src="proyects\sample\application.html" width="100%" height="400px" style="border:none;"></iframe>
                        
                      </div>
                
                      <!-- Contenido de Recorridos 360 -->
                      <div
                        class="content-section"
                        data-view="videosTutoriales"
                        style="display: none">
                        <div class="video-container">
                          <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/Z4AuIpzZUTc"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                          ></iframe>
                        </div>
                        
                        <style>
                          .video-container {
                            position: relative;
                            padding-bottom: 56.25%;
                            height: 0;
                            overflow: hidden;
                          }
                        
                          .video-container iframe {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                          }
                        </style>
                      </div>
                
                      <!-- Descargas -->
                      <div
                        class="content-section"
                        data-view="descargas"
                        style="display: none">
                        <div class="video-container">
                          <div class="download-container">
                            <a target="_blank" href="https://drive.usercontent.google.com/download?id=1etvtcT9jrVF0ab33cub3EgRkHPRchguz&export=download&authuser=0" class="download-btn">
                              <img src="img/pdfIcon.png" alt="PDF Icon" class="download-icon"> Descargar Archivo
                            </a>
                          </div>
                        </div>
                        
                        <style>
                          .video-container {
                            position: relative;
                            padding-bottom: 56.25%;
                            height: 0;
                            overflow: hidden;
                            background-color: bisque;
                          }
                        
                          .video-container iframe,
                          .video-container .download-container {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                          }
                        
                          .download-container {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                          }
                        
                          .download-btn {
                            display: inline-flex;
                            align-items: center;
                            background-color: #007bff;
                            color: #fff;
                            text-decoration: none;
                            padding: 10px 20px;
                            border-radius: 5px;
                            transition: background-color 0.3s ease;
                          }
                        
                          .download-btn:hover {
                            background-color: #0056b3;
                          }
                        
                          .download-icon {
                            width: 20px;
                            height: 20px;
                            margin-right: 10px;
                          }
                        </style>
                                              
                      </div>
                
                      <!-- PDF Viewer -->
                      <div
                        class="content-section"
                        data-view="documentosPDF"
                        style="display: none">
                        <div class="video-container">
                          <div class="pdf-viewer-container">
                            <iframe
                              src="documents\Proyecto __ PLANTA INDUSTRIAL AUTOMATIZACIÓN.pdf"
                              frameborder="0"
                              allowfullscreen
                            ></iframe>
                          </div>
                        </div>
                        
                        <style>
                          .video-container {
                            position: relative;
                            padding-bottom: 56.25%;
                            height: 0;
                            overflow: hidden;
                          }
                        
                          .video-container .pdf-viewer-container {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                          }
                        
                          .pdf-viewer-container iframe {
                            width: 100%;
                            height: 100%;
                          }
                        </style>
                      </div>
                
                    </div>
                  </div>
                
                  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
                  <script>
                    function showContent(view) {
                      var contentAreas = document.querySelectorAll('.content-section');
                      contentAreas.forEach(function(area) {
                        if (area.getAttribute('data-view') === view) {
                          area.style.display = 'block';
                        } else {
                          area.style.display = 'none';
                        }
                      });
                
                      var buttons = document.querySelectorAll('.btn-group button');
                      buttons.forEach(function(button) {
                        if (button.getAttribute('data-view') === view) {
                          button.classList.add('active');
                        } else {
                          button.classList.remove('active');
                        }
                      });
                
                      if (view === 'simuladores') {
                        new Glide('.glide.details', {
                          type: 'carousel',
                          perView: 1,
                          autoplay: 3000,
                          hoverpause: true
                        }).mount();
                
                        new Glide('.glide.thumbs', {
                          type: 'carousel',
                          perView: 5,
                          focusAt: 'center',
                          gap: 10,
                          autoplay: 3000,
                          hoverpause: true
                        }).mount();
                      }
                    }
                  </script>

                  <!-- Contenido de Recorridos 360 -->
                  <div
                    class="content-section"
                    data-view="videosTutoriales"
                    style="display: none"
                  >
                    <!-- Agrega el contenido de Recorridos 360 aquí -->
                  </div>

                  <!-- Contenido de Visualización 3D -->
                  <div
                    class="content-section"
                    data-view="descargas"
                    style="display: none"
                  >
                    <!-- Agrega el contenido de Visualización 3D aquí -->
                  </div>

                  <!-- Contenido de Realidad Virtual -->
                  <div
                    class="content-section"
                    data-view="documentosPDF"
                    style="display: none"
                  >
                    <!-- Agrega el contenido de Realidad Virtual aquí -->
                  </div>

                  <!-- Contenido de Realidad Aumentada -->
                  <div
                    class="content-section"
                    data-view="realidadAumentada"
                    style="display: none"
                  >
                    <!-- Agrega el contenido de Realidad Aumentada aquí -->
                  </div>
                </div>
              </div> 

              <div class="card-body">
                <div class="tab-content">
                  <div
                    class="tab-pane fade show active"
                    id="first"
                    role="tabpanel"
                    aria-labelledby="first-tab"
                  >
                    
                    <h1>Nombre del proyecto</h1>
                    <p>
                      Descripcion augue vitae commodo condimentum. Nullam
                      faucibus eros eu mauris feugiat, eget consectetur tortor
                      tempus. Sed volutpat mollis dui eget fringilla. Vestibulum
                      blandit urna ut tellus lobortis tristique. Vestibulum ante
                      ipsum primis in faucibus orci luctus et ultrices posuere
                      cubilia Curae; Pellentesque quis cursus mauris. Nam in
                      ornare erat. Vestibulum convallis enim ac massa dapibus
                      consectetur. Maecenas facilisis eros ac felis mattis, eget
                      auctor sapien varius.
                      <br />
                      <br />
                      Categoria purus fermentum, pulvinar dui condimentum,
                      malesuada nibh. Sed viverra quam urna, at condimentum ante
                      viverra non. Mauris posuere erat sapien, a convallis
                      libero lobortis sit amet. Suspendisse in orci tellus.
                    </p>
                    <br />

                    <p class="font-weight-bold">Phasellus Efficitur</p>

                    <p>
                      Tellus a sem condimentum, vitae convallis sapien feugiat.
                      Aenean non nibh nec nunc aliquam iaculis. Ut quis suscipit
                      nunc. Duis at lectus a est aliquam venenatis vitae eget
                      arcu. Sed egestas felis eget convallis maximus. Curabitur
                      maximus, ligula vel sagittis iaculis, risus nisi tincidunt
                      sem, ut ultricies libero nulla eu ligula. Nam ultricies
                      mollis nulla, sed laoreet leo convallis ac. Mauris nisl
                      risus, tincidunt ac diam aliquet, convallis pellentesque
                      nisi. Nam sit amet libero at odio malesuada ultricies a
                      vitae dolor. Cras in viverra felis, non consequat quam.
                      Praesent a orci enim. Vivamus porttitor nisi at nisl
                      egestas iaculis. Nullam commodo eget dui sollicitudin
                      sagittis. Duis id nibh mollis, hendrerit metus
                      consectetur, ullamcorper risus. Morbi elementum ultrices
                      nunc, quis porta nisi ornare sit amet.
                      <br />
                      <br />
                      Etiam tincidunt orci in nisi aliquam placerat. Aliquam
                      finibus in sem ut vehicula. Morbi eget consectetur leo.
                      Quisque consectetur lectus eros, sed sodales libero ornare
                      cursus. Etiam elementum ut dolor eget hendrerit.
                      Suspendisse eu lacus eu eros lacinia feugiat sit amet non
                      purus.
                      <br />
                      <br />
                      Pellentesque quis cursus mauris. Nam in ornare erat.
                      Vestibulum convallis enim ac massa dapibus consectetur.
                      Maecenas facilisis eros ac felis mattis, eget auctor
                      sapien varius.
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
                  <div
                    class="tab-pane fade"
                    id="second"
                    role="tabpanel"
                    aria-labelledby="second-tab"
                  >
                    <div
                      class="d-flex flex-row mb-3 border-bottom justify-content-between"
                    >
                      <a href="#">
                        <img
                          src="img/proyects/proyecto1.jpg"
                          alt="Mimi Carreira"
                          class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"
                        />
                      </a>
                      <div class="pl-3 flex-grow-1">
                        <a href="#">
                          <p class="font-weight-medium mb-0">Mimi Carreira</p>
                          <p class="text-muted mb-0 text-small">Two Days Ago</p>
                        </a>
                        <p class="mt-3">Pellentesque quis cursus mauris.</p>
                      </div>
                      <div class="comment-likes">
                        <span class="post-icon"
                          ><a href="#"
                            ><span>12 Likes</span>
                            <i class="simple-icon-heart ml-2"></i></a
                        ></span>
                      </div>
                    </div>

                    <div
                      class="d-flex flex-row mb-3 border-bottom justify-content-between"
                    >
                      <a href="#">
                        <img
                          src="img/proyects/proyecto2.jpg"
                          alt="Kathryn Mengel"
                          class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"
                        />
                      </a>
                      <div class="pl-3 flex-grow-1">
                        <a href="#">
                          <p class="font-weight-medium mb-0">Kathryn Mengel</p>
                          <p class="text-muted mb-0 text-small">Two Days Ago</p>
                        </a>
                        <p class="mt-3">
                          Vestibulum ante ipsum primis in faucibus orci luctus
                          et ultrices posuere cubilia Curae; Pellentesque quis
                          cursus mauris. Nam in ornare erat. Vestibulum
                          convallis enim ac massa dapibus consectetur. Maecenas
                          facilisis eros ac felis mattis, eget auctor sapien
                          varius.
                        </p>
                      </div>
                      <div class="comment-likes">
                        <span class="post-icon"
                          ><a href="#"
                            ><span>2 Likes</span>
                            <i class="simple-icon-heart ml-2"></i></a
                        ></span>
                      </div>
                    </div>

                    <div
                      class="d-flex flex-row mb-3 border-bottom justify-content-between"
                    >
                      <a href="#">
                        <img
                          src="img/proyects/proyecto3.jpg"
                          alt="Philip Nelms"
                          class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"
                        />
                      </a>
                      <div class="pl-3 flex-grow-1">
                        <a href="#">
                          <p class="font-weight-medium mb-0">Philip Nelms</p>
                          <p class="text-muted mb-0 text-small">Two Days Ago</p>
                        </a>
                        <p class="mt-3">
                          Quisque consectetur lectus eros, sed sodales libero
                          ornare cursus. Etiam elementum ut dolor eget
                          hendrerit. Suspendisse eu lacus eu eros lacinia
                          feugiat sit amet non purus.
                        </p>
                      </div>
                      <div class="comment-likes">
                        <span class="post-icon"
                          ><a href="#"
                            ><span>5 Likes</span>
                            <i class="simple-icon-heart ml-2"></i></a
                        ></span>
                      </div>
                    </div>

                    <div
                      class="d-flex flex-row mb-3 border-bottom justify-content-between"
                    >
                      <a href="#">
                        <img
                          src="img/proyects/proyecto4.png"
                          alt="Latarsha Gama"
                          class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"
                        />
                      </a>
                      <div class="pl-3 flex-grow-1">
                        <a href="#">
                          <p class="font-weight-medium mb-0">Latarsha Gama</p>
                          <p class="text-muted mb-0 text-small">Two Days Ago</p>
                        </a>
                        <p class="mt-3">
                          Taking seamless key performance indicators offline to
                          maximise the long tail.
                        </p>
                      </div>
                      <div class="comment-likes">
                        <span class="post-icon"
                          ><a href="#"
                            ><span>6 Likes</span>
                            <i class="simple-icon-heart ml-2"></i></a
                        ></span>
                      </div>
                    </div>

                    <div
                      class="d-flex flex-row mb-3 border-bottom justify-content-between"
                    >
                      <a href="#">
                        <img
                          src="img/proyects/proyecto5.png"
                          alt="Velva Valdovinos"
                          class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"
                        />
                      </a>
                      <div class="pl-3 flex-grow-1">
                        <a href="#">
                          <p class="font-weight-medium mb-0">
                            Velva Valdovinos
                          </p>
                          <p class="text-muted mb-0 text-small">Two Days Ago</p>
                        </a>
                        <p class="mt-3">
                          Nulla non purus fermentum, pulvinar dui condimentum,
                          malesuada nibh. Sed viverra quam urna, at condimentum
                          ante viverra non. Mauris posuere erat sapien, a
                          convallis libero lobortis sit amet. Suspendisse in
                          orci tellus.
                        </p>
                      </div>
                      <div class="comment-likes">
                        <span class="post-icon"
                          ><a href="#"
                            ><span>4 Likes</span>
                            <i class="simple-icon-heart ml-2"></i></a
                        ></span>
                      </div>
                    </div>
                    <div
                      class="d-flex flex-row mb-3 border-bottom justify-content-between"
                    >
                      <a href="#">
                        <img
                          src="img/profiles/l-7.jpg"
                          alt="Mimi Carreira"
                          class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"
                        />
                      </a>
                      <div class="pl-3 flex-grow-1">
                        <a href="#">
                          <p class="font-weight-medium mb-0">Mimi Carreira</p>
                          <p class="text-muted mb-0 text-small">Two Days Ago</p>
                        </a>
                        <p class="mt-3">Pellentesque quis cursus mauris.</p>
                      </div>
                      <div class="comment-likes">
                        <span class="post-icon"
                          ><a href="#"
                            ><span>Like</span>
                            <i class="simple-icon-heart ml-2"></i></a
                        ></span>
                      </div>
                    </div>

                    <div
                      class="d-flex flex-row mb-3 border-bottom justify-content-between"
                    >
                      <a href="#">
                        <img
                          src="img/profiles/l-3.jpg"
                          alt="Kathryn Mengel"
                          class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"
                        />
                      </a>
                      <div class="pl-3 flex-grow-1">
                        <a href="#">
                          <p class="font-weight-medium mb-0">Kathryn Mengel</p>
                          <p class="text-muted mb-0 text-small">Two Days Ago</p>
                        </a>
                        <p class="mt-3">
                          Vestibulum ante ipsum primis in faucibus orci luctus
                          et ultrices posuere cubilia Curae; Pellentesque quis
                          cursus mauris. Nam in ornare erat. Vestibulum
                          convallis enim ac massa dapibus consectetur. Maecenas
                          facilisis eros ac felis mattis, eget auctor sapien
                          varius.
                        </p>
                      </div>
                      <div class="comment-likes">
                        <span class="post-icon"
                          ><a href="#"
                            ><span>Like</span>
                            <i class="simple-icon-heart ml-2"></i></a
                        ></span>
                      </div>
                    </div>

                    <div class="d-flex flex-row mb-3 justify-content-between">
                      <a href="#">
                        <img
                          src="img/profiles/l-4.jpg"
                          alt="Philip Nelms"
                          class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"
                        />
                      </a>
                      <div class="pl-3 flex-grow-1">
                        <a href="#">
                          <p class="font-weight-medium mb-0">Philip Nelms</p>
                          <p class="text-muted mb-0 text-small">Two Days Ago</p>
                        </a>
                        <p class="mt-3">
                          Quisque consectetur lectus eros, sed sodales libero
                          ornare cursus. Etiam elementum ut dolor eget
                          hendrerit. Suspendisse eu lacus eu eros lacinia
                          feugiat sit amet non purus.
                        </p>
                      </div>
                      <div class="comment-likes">
                        <span class="post-icon"
                          ><a href="#"
                            ><span>11 Likes</span>
                            <i class="simple-icon-heart ml-2"></i></a
                        ></span>
                      </div>
                    </div>

                    <div class="comment-contaiener">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Add a comment"
                        />
                        <div class="input-group-append">
                          <button class="btn btn-secondary" type="button">
                            <span class="d-inline-block">Send</span>
                            <i class="simple-icon-arrow-right ml-2"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="third"
                    role="tabpanel"
                    aria-labelledby="third-tab"
                  >
                    <div id="accordion">
                      <div>
                        <button
                          class="btn btn-link p-0 pb-2 font-weight-bold"
                          data-toggle="collapse"
                          data-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne"
                        >
                          <p>Craft beer labore wes anderson cred nesciunt?</p>
                        </button>

                        <div
                          id="collapseOne"
                          class="collapse show"
                          data-parent="#accordion"
                        >
                          <div class="pb-4">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid. 3
                            wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                            a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident.
                          </div>
                        </div>
                      </div>
                      <div>
                        <button
                          class="btn btn-link collapsed p-0 pb-2 font-weight-bold"
                          data-toggle="collapse"
                          data-target="#collapseTwo"
                          aria-expanded="false"
                          aria-controls="collapseTwo"
                        >
                          <p>
                            Labore wes anderson cred nesciunt sapiente ea
                            proident?
                          </p>
                        </button>
                        <div
                          id="collapseTwo"
                          class="collapse"
                          data-parent="#accordion"
                        >
                          <div class="pb-4">
                            3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                            a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt
                            you probably haven't heard of them accusamus labore
                            sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div>
                        <button
                          class="btn btn-link collapsed p-0 pb-2 font-weight-bold"
                          data-toggle="collapse"
                          data-target="#collapseThree"
                          aria-expanded="false"
                          aria-controls="collapseThree"
                        >
                          <p>Sunt aliqua put a bird on it squid?</p>
                        </button>
                        <div
                          id="collapseThree"
                          class="collapse"
                          data-parent="#accordion"
                        >
                          <div class="pb-4">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid. 3
                            wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod.Nihil anim keffiyeh helvetica, craft beer
                            labore wes anderson cred nesciunt sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw
                            denim aesthetic synth nesciunt you probably haven't
                            heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div>
                        <button
                          class="btn btn-link collapsed p-0 pb-2 font-weight-bold"
                          data-toggle="collapse"
                          data-target="#collapseFour"
                          aria-expanded="false"
                          aria-controls="collapseFour"
                        >
                          <p>Nihil anim keffiyeh helvetica?</p>
                        </button>
                        <div
                          id="collapseFour"
                          class="collapse"
                          data-parent="#accordion"
                        >
                          <div class="pb-4">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid. 3
                            wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                            a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo.
                          </div>
                        </div>
                      </div>
                      <div>
                        <button
                          class="btn btn-link collapsed p-0 pb-2 font-weight-bold"
                          data-toggle="collapse"
                          data-target="#collapseFive"
                          aria-expanded="false"
                          aria-controls="collapseFive"
                        >
                          <p>High life accusamus terry richardson?</p>
                        </button>
                        <div
                          id="collapseFive"
                          class="collapse"
                          data-parent="#accordion"
                        >
                          <div class="pb-4">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid. 3
                            wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                            a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo.
                            <br />
                            <br />

                            Sed volutpat mollis dui eget fringilla. Vestibulum
                            blandit urna ut tellus lobortis tristique.
                            Vestibulum ante ipsum primis in faucibus orci luctus
                            et ultrices posuere cubilia Curae; Pellentesque quis
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
                  
                </div>
                <p class="mb-3">
                  Reseña del proyecto augue vitae commodo condimentum. Nullam
                  faucibus eros eu mauris feugiat, eget consectetur tortor
                  tempus.
                  <br /><br />
                  Sed volutpat mollis dui eget fringilla. Vestibulum blandit
                  urna ut tellus lobortis tristique. Vestibulum ante ipsum
                  primis in faucibus orci luctus et ultrices posuere cubilia
                  Curae; Pellentesque quis cursus mauris.
                  <br /><br />
                  Nulla non purus fermentum, pulvinar dui condimentum, malesuada
                  nibh. Sed viverra quam urna, at condimentum ante viverra non.
                  Mauris posuere erat sapien, a convallis libero lobortis sit
                  amet. Suspendisse in orci tellus.
                </p>
                <div class="mb-3">
                  <div class="post-icon mr-3 d-inline-block">
                    <a href="#"><i class="simple-icon-heart mr-1"></i></a>
                    <span>4 Likes</span>
                  </div>
                  <div class="post-icon d-inline-block">
                    <i class="simple-icon-bubble mr-1"></i>
                    <span>1 Comment</span>
                  </div>
                </div>
                <p class="text-muted text-small mb-2">Tags</p>
                <p class="mb-3">
                  <a href="#">
                    <span class="badge badge-pill badge-outline-theme-2 mb-1"
                      >FRONTEND</span
                    >
                  </a>
                  <a href="#">
                    <span class="badge badge-pill badge-outline-theme-2 mb-1"
                      >JAVASCRIPT</span
                    >
                  </a>
                  <a href="#">
                    <span class="badge badge-pill badge-outline-theme-2 mb-1"
                      >SECURITY</span
                    >
                  </a>
                  <a href="#">
                    <span class="badge badge-pill badge-outline-theme-2 mb-1"
                      >DESIGN</span
                    >
                  </a>
                </p>
              </div>
            </div>

            <div class="card mb-4 d-none d-lg-block">
              <div class="card-body">
                <h5 class="card-title">
                  <span>Similar Projects</span
                  ><a class="btn-link float-right text-small pt-1" href="#"
                    >View All</a
                  >
                </h5>
                <div class="row social-image-row gallery">
                  <div class="col-6">
                    <a href="img/products/marble-cake.jpg">
                      <img
                        class="img-fluid border-radius"
                        src="img/products/marble-cake-thumb.jpg"
                      />
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="img/products/parkin.jpg">
                      <img
                        class="img-fluid border-radius"
                        src="img/products/parkin-thumb.jpg"
                      />
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="img/products/fruitcake.jpg">
                      <img
                        class="img-fluid border-radius"
                        src="img/products/fruitcake-thumb.jpg"
                      />
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="img/products/tea-loaf.jpg">
                      <img
                        class="img-fluid border-radius"
                        src="img/products/tea-loaf-thumb.jpg"
                      />
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="img/products/napoleonshat.jpg">
                      <img
                        class="img-fluid border-radius"
                        src="img/products/napoleonshat-thumb.jpg"
                      />
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="img/products/magdalena.jpg">
                      <img
                        class="img-fluid border-radius"
                        src="img/products/magdalena-thumb.jpg"
                      />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
  </body>
</html>
