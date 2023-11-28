<?php
session_start();
include './includes/cabecera.php' ?>

<?php include './includes/nav-menu.php' ?>

<div class="div-message-products">
    <?php if ($_SESSION['tipo'] == "success") { ?>
        <img src="img/like.png" alt="">
        <h1>Producto Agregado correctamente</h1>

        <a href="admin.php">Regresar</a>
    <?php } else if ($_SESSION['tipo'] == "danger") { ?>
        <img src="img/error.png" alt="">
        <h1>Ocurrió un error en el servidor</h1>
        <a href="admin.php">Regresar</a>
    <?php } else if ($_SESSION['tipo'] == "delete") { ?>
        <img src="img/check.png" alt="">
        <h1>Se ha eliminando el producto correctamente.</h1>
        <a href="admin.php">Regresar</a>
    <?php } else if ($_SESSION['tipo'] == "img") { ?>
        <img src="img/confused.png" alt="">
        <h1>Solo se permite archivos jpeg, gif, webp, png</h1>
        <a href="admin.php">Regresar</a>
    <?php } else { ?>
        <img src="img/warning.png" alt="">
        <h1>Upps, no podemos mostrarle esta pagina.</h1>
        <a href="index.php">Regresar</a>
    <?php } ?>

</div>

<?php include './includes/footer.php' ?>