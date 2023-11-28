<?php include 'includes/cabecera.php' ;
include('connect_db.php');
?>

<?php include 'includes/nav-menu.php' ?>

<?php require_once 'php/helpers.php'; ?>

<div  id="formulario-restablecer-pass"  > 
    <div class="container" > 


    <div class="row">
   




        <!-- CAJA PRINCIPAL -->
        <div id="principal">

            <h1>Recuperar constraseña </h1>


            <div id="for-envio-code" >

            <form action="php/email-code.php" method="POST">
              
                 <p> Ingrese el correo de su cuenta para solicitar su contraseña </p>
                <input type="email" name="email" required>

                <button class="txtrecuperar" type="sumbit" name="btnrecuperar" value="Enviar" onClik="javascript: return confirm('¿Deseas enviar tu contraseña a tu correo?');"> Solicitar</button>
                
                <a href="login.php"> &nbsp; &nbsp;   Regresar </strong></a>

                
               
            </form>

            </div>



            


            </form>
        



        </div>
        <!--fin principal-->






















    </div>


</div>

</div>






















  
<?php include 'includes/footer.php' ?>
