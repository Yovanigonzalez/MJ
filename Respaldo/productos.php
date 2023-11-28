<?php include 'includes/cabecera.php' ;
?>

<?php include 'includes/nav-menu.php' ?>

<div id="body-productos" >


  <!-- Tab panes -->
  

      
       <div id="cont-productos" >  
        
          <section id="seccion-productos" class=" appear clearfix">
            <div class="container-productos">

             



              <div class="row">



                <div id="filter" class="col-md-12 text-center">
                  <ul >


              

               

             

               
                  <a href="#" class="btn-theme btn-small current  " data-filter="*">todos</a></>
              <a href="#" class="btn-theme btn-small" data-filter=".redes">Redes</a></>
              <a href="#" class="btn-theme btn-small" data-filter=".camaras">Video-vigilancia</a></>
              <a href="#" class="btn-theme btn-small" data-filter=".antenas">Antenas</a></>


            </ul>
          </div>

          <div class="col-md-12 items-cont ">
            <div class="row">
              <div class=" isotopeWrapper clearfix">






                <!-- Aqui inician los productos -->

           <!---Copiar el bloque article para agregar mas productos---->

                <article class="col-md-3 isotopeItem redes">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/router-tp.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> Router Inalámbrico </a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  C7 AC1750 </strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> TP-Link </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->

                        Router Inalámbrico de Banda Dual Gigabit AC Router WiFi, 1 Puerto USB, 450Mbps a 2.4GHz, 1300Mbps a 5Ghz, IPv6, Red de Invitados
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $749.25</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->





                <article class="col-md-3 isotopeItem redes">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/router-tp.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> Router Inalámbrico </a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  C7 AC1750 </strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> TP-Link </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->

                        Router Inalámbrico de Banda Dual Gigabit AC Router WiFi, 1 Puerto USB, 450Mbps a 2.4GHz, 1300Mbps a 5Ghz, IPv6, Red de Invitados
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $749.25</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->





                <article class="col-md-3 isotopeItem redes">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/router-tp.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> Router Inalámbrico </a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  C7 AC1750 </strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> TP-Link </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->

                        Router Inalámbrico de Banda Dual Gigabit AC Router WiFi, 1 Puerto USB, 450Mbps a 2.4GHz, 1300Mbps a 5Ghz, IPv6, Red de Invitados
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $749.25</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->






                <article class="col-md-3 isotopeItem redes">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/router-tp.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> Router Inalámbrico </a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  C7 AC1750 </strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> TP-Link </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->

                        Router Inalámbrico de Banda Dual Gigabit AC Router WiFi, 1 Puerto USB, 450Mbps a 2.4GHz, 1300Mbps a 5Ghz, IPv6, Red de Invitados
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $749.25</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->





                <article class="col-md-3 isotopeItem antenas">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/ap.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> Access Point </a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  CPE610 </strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> TP-Link </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->
                        Access Point - 300 MBit/s, 23 dBi, Directional
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $749.25</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->






                <article class="col-md-3 isotopeItem antenas">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/ubiquiti.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> Antena Tipo Plato </a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  PBE-M5-400</strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> Ubiquiti Networks </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->
                        Ubiquiti Networks PBE-M5-400 Power Beam High-Performance Airmax con Antena Tipo Plato de 25 dBi, 802.11A/N, 5.1-5.8 GHz
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $749.25</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->




                

                <article class="col-md-3 isotopeItem camaras">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/easi.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> Cámara de Seguridad </a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  CPE220</strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> EASYTAO </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->
                        E T EASYTAO Cámara de Seguridad para Exteriores Impermeable IP66, Cámara WiFi Bala HD 1080P, Visión Nocturna, Audio Bidireccional, Detección de Movimiento, Alarmas, Control Remoto en Android/iOS
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $749.25</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->

                <article class="col-md-3 isotopeItem camaras">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/cam.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> CPE de Exterior</a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  CPE220</strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> TP-Link </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->
                        TP-Link CPE220 CPE de Exterior, 2.4 Ghz, 300Mbps, 12 dBi
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $749.25</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->




                
                <article class="col-md-3 isotopeItem camaras">   <!-- "redes" indica la categoria del prodcuto-->
                  <div class="productos-item">
                    <div class="item-img">

                    <!-- ruta de la imagen del prodcuto -->
                      <img src="img/productos/cam2.jpg" alt="">

                    </div>
                    <div class="nombre-producto">
                      <!------ Aqui ponemos el nombre del producto------------->

                      <a> Cámara de Seguridad Wifi </a>
                    </div>

                    <div class="modelo-prducto">

                       <!------ Modelo del producto ------------->
                      Modelo : <strong class="det-bs-itm">  CPE220</strong>
                    </div>
                    <div class="marca-producto">

                       <!------ Marca del producto ------------->
                      Marca : <strong class="det-bs-itm"> TP-Link </strong>
                    </div>
                    <div class="detalles-producto">
                      
                       <!------ Aqui una descripcion del producto------------->
                        <!----Podemos  usar listas '<li>' o '<br>' para darle formato---->
                        PTZ Cámara de Seguridad Wifi Al Exterior, Full HD 1080P, Pan&Tilt 360 Grados, Cámara Inalámbrica con Visión Nocturna con Audio Bidireccional, Detección de Movimiento con Alerta,Guardia Inteligente para el Hogar
                    </div>
                    <div class="precio-producto">
                      <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                      <strong class="det-bs-itm"> Precio: </strong>
                      <?php if (isset($_SESSION['usuario'])) : ?>

                        <!--- Precio el prodcuto aqui -->
                        <strong class="det-bs-itm"> $899</strong>
                      <?php else : ?>
                        <strong class="det-bs-itm"> <a href="login.php"> ver Precio</a> </strong>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>

                <!--- aqui termina el producto 1 Cada article representa un bloque o producto -->




                      





                    </div>
                  </div>
                </div>






                </div>

              </div>
            </div>
          </section>
        </div>
      </div>


   
   
    
    </div>














    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js-cap/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js-cap/jquery.isotope.min.js"></script>

    <script src="js-cap/functions.js"></script>
   


  
<?php include 'includes/footer.php' ?>


  