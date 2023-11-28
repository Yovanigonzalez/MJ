<?php include 'includes/cabecera.php' ;
include('connect_db.php');
?>
<div id="body-inicio" >
<?php include 'includes/nav-menu.php' ?>
<div class="login-cont" >   

    <form action="validar.php" method="POST" >

    
        
            <div class="form">
                <h1>Iniciar Sesión</h1>              
                
                <div class="grupo">
                    <input type="email" name="mail"  required placeholder="Ingresa tu correo"  ><span class="barra"></span>
                    <label>Correo</label>
                </div>
             
    
    
    
               
    
                <div class="grupo">
                    <input type="password" name="pass"  required placeholder="Ingresa tu contraseña"><span class="barra"></span>
                    <label>Contraseña</label>
                
    
                       </div>

                       
               




                <button type="submit" name="submit" value="login">    Iniciar   </button>
                
              <div>
                <h5>Si no tiene un cuenta <a href="registro.php"> &nbsp; &nbsp; <strong>   Registrarse </strong></a></h5>
                <a href="olvide_pass.php"> &nbsp; &nbsp;   olvidé mi contraseña </strong></a>
            </div>

              </div>
    
                </form>
        </div>
		

        <?php
		if(isset($_POST['submit'])){
			require("registro1.php");
		}
	?>
<!--Fin formulario registro -->
  
<?php include 'includes/footer.php' ?>

</div>
  