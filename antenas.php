<?php
session_start();

include 'includes/cabecera.php' ?>

<?php include 'includes/menuAdmin.php' ?>

<?php

require ('connect_db.php');

?>

<!-- CÓDIGO HTML DE VISTA ADMIN -->
<div class="main">
    <h1>PANEL DE ADMINISTRADOR</h1>
    
    <a href="productos.php" align="left"> &nbsp; &nbsp; Regresar </strong></a>

    <div class="list-products">
        <h2>Antenas</h2>
        <div class="containt-produts">
            

        <?php
            $sql = "SELECT * FROM productos WHERE categoria=2"; 
            $category = mysqli_query($mysqli, $sql);
            while($usuarios = mysqli_fetch_array($category)) { 
            $i = 0;
            $i++;
            ?>
                <div class="card">
                    <img src=<?php echo ($usuarios['imagen']) ?> alt="">
                    <h4><?php echo ($usuarios['nombre']) ?></h4>
                    <button class="edit-product" data-id=<?php echo ("$i") ?>>EDITAR</button>
                    <button class="delete-product" data-id=<?php echo ("$i") ?>>ELIMINAR</button>
                    <span id=<?php echo ("product-name-$i") ?> style="display: none;"><?php echo ($usuarios['nombre']) ?></span>
                    <span id=<?php echo ("product-descripcion-$i") ?> style="display: none;"><?php echo ($usuarios['descripcion']) ?></span>
                    <span id=<?php echo ("product-precio-$i") ?> style="display: none;"><?php echo ($usuarios['precio']) ?></span>
                    <span id=<?php echo ("product-categoria-$i") ?> style="display: none;"><?php echo ($usuarios['categoria']) ?></span>
                    <span id=<?php echo ("product-img-$i") ?> style="display: none;"><?php echo ($usuarios['imagen']) ?></span>
                    <span id=<?php echo ("product-id-$i") ?> style="display: none;"><?php echo ($usuarios['id']) ?></span>

                </div>
            <?php } ?>

        </div>
    </div>



    <div class="div-form">
        <form action="modelo/subircatalogo.php" method="POST" enctype="multipart/form-data">
            <a class="close-form" id="close-form">x</a>
            <div class="form">
                <h1 id="title-form">Agregar Producto </h1>

                <div class="grupo">
                    <input id="input-name-product" type="text" maxlength="145" name="nombre" required> <span class="barra"></span>
                    <label>Nombre del Producto:</label>
                </div>

                <div class="grupo">
                    <input id="input-desc-product" type="text" maxlength="245" name="descripcion" required><span class="barra"></span>
                    <label>Descripción:</label>
                </div>

                <div class="grupo">
                    <input id="input-precio-product" type="number" name="precio" required><span class="barra"></span>
                    <label>Precio: (MX)</label>
                </div>

                <div class="grupo">
                    <input id="input-file-product" type="file" accept="image/*" name="imagen" required>
                    <label>Imagen del Producto:</label>
                </div>

                <div class="grupo">
                    <label class="label-option">Categoría:</label>
                    <select id="input-categ-product" name="categoria" required>
                        <option value="0" disabled selected>Seleccione su categoría</option>
                        <option value="1">Redes</option>
                        <option value="2">Antenas</option>
                        <option value="3">Cámaras</option>
                    </select>
                </div>

                <input type="hidden" style="display:none; visibility:hidden; opacity:hidden;" id="form-method" name="method" value="">
                <input type="hidden" style="display:none; visibility:hidden; opacity:hidden;" id="form-id-product" name="productid" value="">

                <button class="" type="submit" name="Guardar" value="registro">Agregar</button>
            </div>
        </form>
    </div>

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


