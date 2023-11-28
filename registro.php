<?php include 'includes/cabecera.php' ;
include('connect_db.php');
?>
<div id="body-registro" >
<?php include 'includes/nav-menu.php' ?>

<?php require_once 'php/helpers.php'; ?>


<div class="registro-cont" >   
    
<form action="" method="POST" >
    


        <div class="form">
            <h1>Registro        </h1>    




            <div class="grupo">
                <input type="text" name="realname" placeholder="Ingresa tu nombre" required ><span class="barra" ></span>
                <label>Nombre</label>
            </div>


            
            <div class="grupo">
                <input type="text" name="apellidos"  placeholder="Ingresa tus apellidos" required><span class="barra"  ></span>
                <label>Apellidos</label>
            </div>



            <div class="grupo">
                <input type="email" name="nick"   placeholder="Ingresa tu correo" required ><span class="barra" ></span>
                <label>Correo</label>
            </div>


         
            <div class="grupo">
                <input type="number" name="tel" pattern="[0-9]{10}" maxlength="10" placeholder="Ingresa tu numero de telefono" required><span class="barra"  ></span>
                <label>Telefono</label>
            </div>


           

            <div class="grupo">
                <input type="password" name="pass"  placeholder="Ingresa tu contraseña" required><span class="barra"></span>
                <label>Contraseña</label>


                   </div>
                   <div class="grupo">
                <input type="password" name="rpass" placeholder="Ingresa tu contraseña nuevamente" required><span class="barra"></span>
                <label>Confirmar contraseña</label>
        </div>
 
                
            <button type="submit" name="submit" value="registro"  >Registrar</button>

            </form>

            <div>
                <h5>Si ya tiene un cuenta <a href="login.php"> &nbsp; &nbsp; <strong>   Iniciar session </strong></a></h5>
             
            </div>



    </div>

    </div>



    <?php
		if(isset($_POST['submit'])){
			require("registro1.php");
		}
	?>
<!--Fin formulario registro -->
    


  










<?php include 'includes/footer.php' ?>