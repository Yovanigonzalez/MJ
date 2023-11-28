<?php
session_start();

include 'includes/cabecera.php' ?>

<link href="css/modal.css" rel="stylesheet">

<?php include 'includes/menuAdmin.php' ?>

<?php

//Incluimos la conexion a la base de datos

require ('connect_db.php');


//conseguir productos

$sql = "SELECT * FROM footer";
$resultado = mysqli_query($mysqli, $sql);

?>

<!-- CÓDIGO HTML DE VISTA ADMIN -->
<div class="main">
    <h1>PANEL PARA ADMINISTRAR BANNER</h1>
    
    <div class="list-products">
        <h2>Banner Agregados</h2>
        <div class="containt-produts">
            <label for="btn-modal">
                <img src="img/add.svg" alt="" class="button-bar">
                <br>
                Agregar Footer
                </label>

            <?php while($mostrar = mysqli_fetch_array($resultado)) { ?>
                <div class="card">
                    <img src=<?php echo $mostrar['Ubicacion']?> alt="">
                    <form class="form" action="modelo/subirFooter.php" method="POST" enctype="multipart/form-data">
                        <button type:"submit" value="<?php echo $mostrar['id_Img'] ?>" name="Eliminar">ELIMINAR</button>
                    </form>
                </div>
            <?php } ?>

        </div>
    </div>
    
    <!--Ventana Modal-->
    <input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
            
            <form action="modelo/subirFooter.php" method="POST" enctype="multipart/form-data">
            <h2>Guardar Banner</h2>
            <p>Agrega una imagen</p>
            <input id="input-file-product" type="file" accept="image/*" name="imagen[]" required>
            <div class="btn-cerrar">
                <label for="btn-modal">Cerrar</label>
            </div>
            <button type:"submit" value="Guardar" name="Guardar">Guardar</button>
            </form>
            
        </div>
        <label for="btn-modal" class="cerrar-modal"></label>
    </div>
<!--Fin de Ventana Modal-->

    <div class="div-form-delete">
        <form action="modelo/deleteproduct.php" method="POST">

            <div class="form">
                <h4>¿Está seguro de eliminar el producto <span id="name-product-delete"></span> de la base de datos? </h4>

                <input type="hidden" style="display:none; visibility:hidden; opacity:hidden;" id="id-product-delete" name="productid" value="">
                <input type="hidden" style="display:none; visibility:hidden; opacity:hidden;" id="imagen-product-delete" name="imgruta" value="">


                <div class="div-buttons">
                    <button class="cancel" id="close-form-delete">NO</button>
                    <button type="submit" name="Guardar" value="registro">SÍ</button>

                </div>


            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php' ?>