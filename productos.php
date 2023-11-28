<?php 
session_start();
include 'connect_db.php';

include 'includes/cabecera.php';
?>



<?php
?>




<!DOCTYPE html>

<?php
if(isset($_SESSION['user'])){
if (!$_SESSION['user']) {
} elseif ($_SESSION['rol'] == 1) {
  echo "<script>location.href='admin.php'</script>";
}
}
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


<html>
<div id="body-productos">


  <!-- Tab panes -->



  <div id="cont-productos">

    <section id="seccion-productos" class=" appear clearfix">
      <div class="container-productos">





        <div class="row">


          <h2 class="title-products">Nuestros Productos</h2>
          <div id="filter" class="col-md-12 text-center filter">
            <ul>







              <!--- para agregar una nueva categoria de pruductos copiar y pegar la etiqueta A -->

              
              <a href="#" class="btn-theme btn-small" data-filter=".redes">Redes</a></>
              <a href="#" class="btn-theme btn-small" data-filter=".camaras">Video-vigilancia</a></>
              <a href="#" class="btn-theme btn-small" data-filter=".antenas">Antenas</a></>


            </ul>
          </div>

          <div class="col-md-12 items-cont ">
            <div class="row">
              <div class=" isotopeWrapper clearfix grid-articles">
                <!-- Aquí inician los productos -->

                <!---Copiar el bloque article para agregar mas productos---->
                <?php 
                $sql = "SELECT * FROM productos";
                $resultado = mysqli_query($mysqli,$sql);
                while($productos = mysqli_fetch_array($resultado)){ 
                ?>
                  <?php $category = "";
                  if ($productos['categoria'] == 1) {
                    $category = "redes";
                  } elseif ($productos['categoria'] == 2) {
                    $category = "antenas";
                  } elseif ($productos['categoria'] == 3) {
                    $category = "camaras";
                  } ?>
                  <article class="col-md-3 isotopeItem isotope-item <?php echo ("$category") ?>">
                    <div class="productos-item">
                      <div class="item-img">
                        <img src=<?php echo ($productos['imagen']) ?> alt="">
                      </div>
                      <div class="nombre-producto">
                        <a><?php echo ($productos['nombre']) ?></a>
                      </div>
                      <div class="detalles-producto">
                        <?php echo ($productos['descripcion']) ?>
                      </div>
                      <div class="precio-producto">
                        <!--- Si existe la session se mostrara el precio del producto y si no dira ver precio -->
                        <strong class="det-bs-itm"> </strong>
                        <?php if (isset($_SESSION['user'])) : ?>

                          <!--- Precio el prodcuto aqui -->
                          <strong class="det-bs-itm">Precio: $<?php echo ($productos['precio']) ?></strong>
                        <?php else : ?>
                          <strong class="det-bs-itm"> <a href="login.php"> Ver precio</a> </strong>
                        <?php endif; ?>

                      </div>
                    </div>
                  </article>
                <?php } ?>

                      <?php if (isset($_SESSION['user'])) : ?>


                      <?php else : ?>
                      <?php endif; ?>

                    </div>

                  </div>
                </article>





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

</html>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js-cap/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js-cap/jquery.isotope.min.js"></script>

<script src="js-cap/functions.js"></script>




<?php include 'includes/footer.php' ?>