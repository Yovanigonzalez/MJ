<!DOCTYPE html>
<html lang="en">

<head>
  <!-- csss -->
 
  <link href="csss/slippry.css" rel="stylesheet">
 
  <link href="csss/style.css" rel="stylesheet">
 
</head>

<div id="inicio" >  </div>

  <div class="container-bg"  >
<div class="container-sl"  >



  
  <!-- Section: home slide -->
  <section id="intro  "  class="home-slide text-light">
    <ul id="valera-slippry">




    <!--Bloque de imagen 1 Slider -->

    <!-- cada bloque li tiene una imagen para agregar mas simplemente duplicamos uno -->
<?php
    $sqlBus = "SELECT * FROM banner";
    $resul = mysqli_query($mysqli,$sqlBus);
    while($mostrar = mysqli_fetch_array($resul)){
        $ubi = $mostrar['Ubicacion'];
?>
      
    <li>
        <div>
         <a href="#footer">     <!--link hacia el producto-->

              <img src="<?php echo $ubi?>" alt="">      <!--  Imagen del slider  -->
            
            </a>

        </div>
      </li>

<?php } ?>


    </ul>
  </section>


  
  <!-- /Section: slider -->



  </div>

  </div>


  




    <!-- Core JavaScript Files -->
  <script src="jss/jquery.min.js"></script>
  <script src="jss/jquery.sticky.js"></script>
  <script src="jss/slippry.min.js"></script>
  <script src="jss/jquery.flexslider-min.js"></script>
  <script src="jss/jquery.appear.js"></script>
  <script src="jss/wow.min.js"></script>
  <script src="jss/nivo-lightbox.min.js"></script>
  <script src="jss/jquery.nicescroll.min.js"></script>
  <script src="jss/custom.js"></script>


</body>

</html>
