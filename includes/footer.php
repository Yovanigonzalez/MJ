<!DOCTYPE html>
<html lang="en">

<!-- footer -->

<footer class="contai">


  <div class="container">
    <div id="footer-logo" class=" ">


   

<!--  Imagen de logotipo de la empresa  dentro de la base de datos de footer-->

<?php
    $sqlBus = "SELECT * FROM footer";
    $resul = mysqli_query($mysqli,$sqlBus);
    while($mostrar = mysqli_fetch_array($resul)){
        $ubi = $mostrar['Ubicacion'];
?>
              <img src="<?php echo $ubi?>" alt="">      <!--  Imagen de logotipo de la empresa  -->

<?php } ?>

<!-- footer modificar pero no en el codigo si no en un boton -->
 
      <div id="footer-left">

        <div class=" wow fadeInUp ">
          <h6 class="text-uppercase font-weight-bold">Información</h6>
          <hr>

          <p class=" wow fadeInLeft ">
            Politicas de privacidad
          </p>
          <p class=" wow fadeInLeft ">
            Soporte técnico
          </p>
          <p class=" wow fadeInLeft ">
            Ayuda
          </p>




        </div>

      </div>






      <div id="footer-contact" class=" wow fadeInRight ">
        <div class=" container col-md-12  justify-content-center  ">
          <div class="col-md-12  ">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold ">Contacto</h6>
            <hr class="">

            <p>
              <i class="fa fa-map-marker mr-3"></i> <a target="blank" href="https://goo.gl/maps/tJQRZw7Aj1JR5sHv9 "> Av Juárez 1504 Tecamachalco Puebla</a>
            </p>
            <i class="fas fa-map-marker-alt"></i>
            <p>
              <i class="fa fa-envelope mr-3"></i> <a href="mailto:admon@mjsolucionesenti.com"> admon@mjsolucionesenti.com </a>
            </p>

            <p>
              <i class="fa fa-phone mr-3"></i> <a href="tel:+52 2492324717 "> 249 162 6659</a>
            </p>


            <a href="https://www.facebook.com/MJ-Soluciones-en-TI-101161488631787/"><i class="fa fa-facebook"></i></a>

            <a href="https://api.whatsapp.com/send?phone=+ 52 2492324717&text=Hola, Nececito mas información!" target="blank">
              <i class="fa fa-whatsapp "></i>
            </a>

          </div>
        </div>
      </div>

    </div>

  </div>
</footer>






<!-- / footer -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CTHLT6ZFG0"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-CTHLT6ZFG0');
</script>





<!-- Messenger plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101161488631787");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



<!-- Required JavaScript Libraries -->

<!-- Required JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>

<script src="lib/morphext/morphext.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/stickyjs/sticky.js"></script>
<script src="lib/easing/easing.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>
<script src="js/products.js"></script>



</body>

</html>