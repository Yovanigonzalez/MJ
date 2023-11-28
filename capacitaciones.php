<?php 

session_start();

include 'includes/cabecera.php' ;
include('connect_db.php');
?>




<?php

if(isset($_SESSION['rol'])){
        if ($_SESSION['rol'] == 1) {
            include('includes/menuAdmin.php');
        }else{
        include('includes/nav-menu.php');
    }
    }else{
        include('includes/nav-menu.php');
    }
?>



<div id="body-capacitaciones" >

  <!-- Tab panes -->
  <div class="container">
    <div class="row">
      <div class="pag-cap">
       
        <div class="" id="portfolio">
          <section id="section-works" class="section appear clearfix">
            <div class="container">


              <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                    <h2>Cursos</h2>
                    <div class="section-title-divider"></div>
                    <p>Solicita algunos de nuestros cursos de capacitacion en las siguientes areas</p>
                  </div>
                       <!-- si el usuario no esta logueado -->
                        <?php if(!isset($_SESSION['usuario'])): ?>
                      
                        <marquee><h3> Inicia sesion para reproducir los videos </h3></marquee>
                        
                        <?php endif; ?>
                </div>
              </div>

              <!---- para listar una nueva categoria copiar y pegar un nuevo li siguiendo metodologia -->


              <div class="row">
                <nav id="filter" class="col-md-12 text-center">
                  <ul>
                    <!---- <li><a href="#" class="current btn-theme btn-small " data-filter="*">Todos</a></li> -->
                    <li><a href="#" class="btn-theme btn-small" data-filter=".mantenimineto">Mantenimiento</a></li>
                    <li><a href="#" class="btn-themebtn-small" data-filter=".redes">Redes</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".capacitaciones">Capacitaciones</a></li>

                    
                    <li><a href="#" class="btn-theme btn-small" data-filter=".bd">Base de Datos</a></li>
                    
                 

                  </ul>
                </nav>
                <div class="col-md-12">
                  <div class="row">
                    <div class="portfolio-items isotopeWrapper clearfix" id="3">

                    <!--cada articulo representa un video-->
                    <!-- para agregar nueva capacitacion copiar y pegar bloque 'article' -->


                      <article class="col-md-4 isotopeItem mantenimineto"> <!-- mantenimineto representa la categoria -->
                        <div class="portfolio-item">

                        <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>

                      <!-- en esta linea va la ruta del video -->
        
                           <source src="video/1.webm" type="Video/webm" />
                             
                                  </video>
                                  <!-- h4 para el titulo de la capacitacion-->

                                  <h4>Mantenimiento de pc </h4>
                                  <!-- p para la descripcion de la capacitacion-->
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                   
                                   <a href="index.php#about"> <button>solicitar</button> </a>

                        </div>
                      </article>

                      <!-- fin de articulo -->

                      <!-- para agregar nueva capacitacion copiar y pegar bloque 'article' -->







                      <article class="col-md-4 isotopeItem redes">
                        <div class="portfolio-item">

                           <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>
              <!--===== Links de video =======-->
                              
                        
                             <source src="video/1.webm" type="video/webm" />
                                  </video>

                                  <h4>Mantenimiento de pc </h4>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                    <a href="index.php#about"> <button>solicitar</button> </a>
                        </div>
                      </article>



                      
                      <article class="col-md-4 isotopeItem redes">
                        <div class="portfolio-item">
                           <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>
              <!--===== Links de video =======-->
                              
                        
                             <source src="video/2.webm" type="video/webm" />
                                  </video>

                                  <h4>Mantenimiento de pc </h4>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                    <a href="index.php#about"> <button>solicitar</button> </a>
                        </div>
                      </article>

                       <!-- fin de articulo -->




                      <article class="col-md-4 isotopeItem mantenimineto">
                        <div class="portfolio-item">
                             <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>
              <!--===== Links de video =======-->
                              
                        
                             <source src="video/3.webm" type="video/webm" />
                                  </video>

                                  <h4>Mantenimiento de pc </h4>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                    <a href="index.php#about"> <button>solicitar</button> </a>
                        </div>
                      </article>




                      <article class="col-md-4 isotopeItem redes">
                        <div class="portfolio-item">
                               <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>
              <!--===== Links de video =======-->
                              
                        
                             <source src="video/4.webm" type="video/webm" />
                                  </video>

                                  <h4>Mantenimiento de pc </h4>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                    <a href="index.php#about"> <button>solicitar</button> </a>
                        </div>
                      </article>

                      <article class="col-md-4 isotopeItem mantenimiento">
                        <div class="portfolio-item">
                          <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>
              <!--===== Links de video =======-->
                              
                        
                             <source src="video/4.webm" type="video/webm" />
                                  </video>

                                  <h4>Mantenimiento de pc </h4>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                    <a href="index.php#about"> <button>solicitar</button> </a>
                        </div>
                      </article>

                      <article class="col-md-4 isotopeItem capacitaciones ">
                        <div class="portfolio-item">
                          <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>
              <!--===== Links de video =======-->
                              
                        
                             <source src="video/1.webm" type="video/webm" />
                                  </video>

                                  <h4>Mantenimiento de pc </h4>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                    <a href="index.php#about"> <button>solicitar</button> </a>
                        </div>
                      </article>

                      <article class="col-md-4 isotopeItem redes">
                        <div class="portfolio-item">
                          <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>
              <!--===== Links de video =======-->
                              
                        
                             <source src="video/3.webm" type="video/webm" />
                                  </video>

                                  <h4>Mantenimiento de pc </h4>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                    <a href="index.php#about"> <button>solicitar</button> </a>
                        </div>
                      </article>

                      <article class="col-md-4 isotopeItem mantenimiento">
                        <div class="portfolio-item">
                          <!-- si el usuario esta logueado -->
                      <?php if (isset($_SESSION['user'])) : ?>
                        <video controls>
                      <?php else : ?>
                        <video>
                      <?php endif; ?>
              <!--===== Links de video =======-->
                              
                        
                             <source src="video/3.webm" type="video/webm" />
                                  </video>

                                  <h4>Mantenimiento de pc </h4>
                                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ducimus voluptates, iste similique natus </p>
                                    <a href="index.php#about"> <button>solicitar</button> </a>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    </div>
    
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js-cap/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js-cap/jquery.isotope.min.js"></script>

    <script src="js-cap/functions.js"></script>
   






       


		


  
<?php include 'includes/footer.php' ?>

