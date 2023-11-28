<?php
session_start();
include 'includes/cabecera.php' ;
?>
<?php include 'includes/nav-menu.php' ?>
<?php require_once 'php/helpers.php'; ?>



 <div  id="formulario-restablecer-pass"  > 

 <div class="container">

 <div class="row" >  




 <!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Mis Datos</h1>
	
		
	<form action="/php/actualizar-usuario.php" method="POST"> 




    <div class="form">
            <h1>Registro        </h1>    


             <!-- El id es para poder nombrar los datos del usuario logeado -->
         <?php

require ('connect_db.php');

         $id = $_SESSION['id'];
         $sql="SELECT * FROM login WHERE id = $id";
         $result=mysqli_query($mysqli, $sql);
         if($mos=mysqli_fetch_array($result)){ 
            ?>
             <!-- La letra "$mos"  es solo una variable -->
             <!-- No borra nada en absoluto ya que si no, no dara los datos del usuario -->
             


            <div class="grupo">
                <input type="text" name="nombre" id="" value="<?php echo $mos['user']?>"><span class="barra"></span>
                <label>Nombre</label>
            </div>


            
            <div class="grupo">
                <input type="text" name="apellidos" id="" value="<?php echo $mos['apellidos']?>"><span class="barra"></span>
                <label>Apellidos</label>
            </div>



            <div class="grupo">
                <input type="email" name="email" id="" value="<?php echo $mos['email']?>"><span class="barra"></span>
                <label>Email</label>
            </div>


         
            <div class="grupo">
                <input type="tel" name="tel" id=""pattern="[0-9]{10}" maxlength="10" value="<?php echo $mos['tel']?>"><span class="barra"></span>
                <label>Tel</label>
            </div>

            <?php } ?>



            <div>
         </div>



                





	</form>


</div> <!--fin principal-->



 </div>

 
 </div>

 </div>

 
 
 <?php include 'includes/footer.php'?>