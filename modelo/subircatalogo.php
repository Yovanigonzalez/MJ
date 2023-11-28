<?php

include('../connect_db.php');

if (isset($_POST['Guardar'])) {

    $imagen = $_FILES['imagen']['name'];

    $nombre = $_POST['nombre'];

    $descripcion = $_POST['descripcion'];

    $precio = $_POST['precio'];

    $categoria = $_POST['categoria'];
    $ruta_img = "img/productos/$imagen";

    $method = $_POST['method'];
    session_start();

    if ($method == "INSERT") {
        if (isset($imagen) && $imagen != "") {

            $tipo = $_FILES['imagen']['type'];

            $temp  = $_FILES['imagen']['tmp_name'];

            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'webp') || strpos($tipo, 'png')))) {
                $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp, png';
                $_SESSION['tipo'] = 'img';
                header('location: ../successProduct.php');
            } else {
                $query = "INSERT INTO productos(id,nombre,descripcion,precio,imagen,categoria) values('','$nombre','$descripcion','$precio','$ruta_img','$categoria')";
                $resultado = mysqli_query($mysqli, $query);

                if ($resultado) {
                    move_uploaded_file($temp, "../$ruta_img");
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    $_SESSION['query'] = $query;
                    header('location: ../successProduct.php');
                } else {

                    $_SESSION['mensaje'] = 'ocurrió un error en el servidor';

                    $_SESSION['tipo'] = 'danger';

                    header('location: ../successProduct.php');
                }
            }
        }
    } elseif ($method == "UPDATE") {
        $id = $_POST['productid'];
        if (isset($imagen) && $imagen != "") {

            $tipo = $_FILES['imagen']['type'];
            $temp  = $_FILES['imagen']['tmp_name'];


            if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'webp') || strpos($tipo, 'png')))) {
                $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp, png';
                $_SESSION['tipo'] = 'img';
                header('location: ../successProduct.php');
            } else {
                $query = "UPDATE productos SET nombre='$nombre',descripcion='$descripcion',precio='$precio',imagen='$ruta_img',categoria='$categoria' WHERE id='$id';";
                $resultado = mysqli_query($mysqli, $query);

                if ($resultado) {
                    move_uploaded_file($temp, "../$ruta_img");
                    $_SESSION['mensaje'] = 'se ha subido correctamente';
                    $_SESSION['tipo'] = 'success';
                    $_SESSION['query'] = $query;
                    header('location: ../successProduct.php');
                } else {

                    $_SESSION['mensaje'] = 'ocurrió un error en el servidor';

                    $_SESSION['tipo'] = 'danger';

                    header('location: ../successProduct.php');
                }
            }
        } else {
            $query = "UPDATE productos SET nombre='$nombre',descripcion='$descripcion',precio='$precio',categoria='$categoria' WHERE id='$id';";
            $resultado = mysqli_query($mysqli, $query);

            if ($resultado) {

                $_SESSION['mensaje'] = 'se ha subido correctamente';
                $_SESSION['tipo'] = 'success';
                $_SESSION['query'] = $query;
                header('location: ../successProduct.php');
            } else {

                $_SESSION['mensaje'] = 'ocurrió un error en el servidor';

                $_SESSION['tipo'] = 'danger';

                header('location: ../successProduct.php');
            }
        }
    }
}
