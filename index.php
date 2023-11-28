<?php
session_start();
include('connect_db.php');
include 'includes/cabecera.php';?>

<div id="body-inicio" >

   <!--==========================
     Menu de Navegacion
     ============================-->

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


 <!--==========================
  slider 
  ============================-->

  <?php include 'includes/slide.php';?>



 <div id="separador"   >


 </div>

 <!--==========================
     secciones o cuerpo principal de la pagina
     ============================-->

 <?php include 'includes/secciones.php'?>

 

<?php include 'includes/footer.php' ?>

</div>
  
