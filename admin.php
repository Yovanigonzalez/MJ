<?php
session_start();

include 'includes/cabecera.php' ?>

<?php include 'includes/menuAdmin.php' ?>

<?php

//Incluimos la conexion a la base de datos

require ('connect_db.php');


//conseguir productos

//Conseguir usuarios

?>

<!-- CÓDIGO HTML DE VISTA ADMIN -->
<div class="main">
    <h1>PANEL DE ADMINISTRADOR</h1>
    
    
    <div class="list-products">
        <h2>Lista de Productos</h2>
        <div class="containt-produts">
            
            <div class="add-product">
                <img src="img/add.svg" alt="" id="button-add-product">
                <h4>Agregar Producto</h4>
            </div>

            <div class="add-product"> 
            <a href="redes.php"><img src="img/eyes.png"  alt=""></a>
            <h4>Ver productos de</h4>
            <h4>"Redes"</h4>
            </div>

            <div class="add-product">
            <a href="camaras.php"><img src="img/eyes.png"  alt=""></a>
            <h4>Ver productos de</h4>
            <h4>"Camaras"</h4>
            </div>

            <div class="add-product">
            <a href="antenas.php"><img src="img/eyes.png"  alt=""></a>
            <h4>Ver productos de</h4>
            <h4>"Antenas"</h4>
            </div>

            <div class="add-product">
            <a href="logeados.php"><img src="img/eyes.png"  alt=""></a>
            <h4>Ver usuarios</h4>
            </div>

            <div class="add-product">
            <a href="footer.php"><img src="img/eyes.png"  alt=""></a>
            <h4>Modificar logotipo</h4>
            </div>

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

    
        </form>
    </div>
</div>

<?php include 'includes/footer.php' ?>