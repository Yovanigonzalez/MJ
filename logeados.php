<?php
session_start();

include 'includes/cabecera.php' ?>

<?php include 'includes/menuAdmin.php' ?>

<?php

require ('connect_db.php');

?>

<!-- CÓDIGO HTML DE VISTA ADMIN -->
<div class="main">
    <h1>Usuarios Registrados</h1>
    
    <a href="productos.php" align="left"> &nbsp; &nbsp; Regresar </strong></a>
   
      
        

<div class="list-users">
        
        <div class="contains-users">
            <?php 
            $sql = "SELECT * FROM login";
            $resultado2 = mysqli_query($mysqli, $sql);
            while ($usr = mysqli_fetch_array($resultado2)){ ?>
                <div class="user">
                    <img src="img/user.svg" alt="">
                    <h5><?php echo ($usr['user']) ?></h5>
                </div>
            <?php } ?>
        </div>
    </div>
            </div>

    <?php include 'includes/footer.php' ?>