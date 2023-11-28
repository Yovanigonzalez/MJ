<?php include 'includes/cabecera.php' ;
?>
<div id="body-inicio" >
<?php include 'includes/nav-menu.php' ?>
<div class="login-cont" >   

    <form action="php/login.php" method="POST" >
        
            <div class="form">
                <h1>Iniciar Sesión</h1>

                <?php if (isset($_SESSION['completado'])) : ?>
                <div class="alerta alerta-exito">
                    <?= $_SESSION['completado'] ?>
                </div>
           
                <?php endif; ?>

                


                <?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['error_login'];?>
			</div>
        
		<?php endif; ?>


    
    
    
    
              
                
                <div class="grupo">
                    <input type="email" name="email" id="" required  ><span class="barra"></span>
                    <label>Email</label>
                </div>
             
    
    
    
               
    
                <div class="grupo">
                    <input type="password" name="password" id="" required><span class="barra"></span>
                    <label>Contraseña</label>
                
    
                       </div>

                       
               




                <button type="submit" name="login">    Iniciar   </button>
                
              <div>
                <h5>Si no tiene un cuenta <a href="registro.php"> &nbsp; &nbsp; <strong>   Registrarse </strong></a></h5>
                <a href="olvide_pass.php"> &nbsp; &nbsp;   olvidé mi contraseña </strong></a>
            </div>

              </div>
     

      


    
                </form>

             
         
     
    
        </div>

        <?php include '/php/session.php' ?>










       


		


  
<?php include 'includes/footer.php' ?>

</div>
  