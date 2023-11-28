<?php
session_start();
include('../connect_db.php');
if (isset($_POST['Guardar'])) {
    
    $id = $_POST['productid'];
    $rutaimg = $_POST['imgruta'];
    $query = "DELETE FROM productos WHERE id=$id";

    $resultado = mysqli_query($mysqli, $query);
    
    $delete_product = unlink("../$rutaimg");

    if ($resultado) {
        $_SESSION['mensaje'] = 'se ha eliminado correctamente';
        $_SESSION['tipo'] = 'delete';
        $_SESSION['query'] = $query;
        echo "<script>location.href='../successProduct.php'</script>";
    } else {
        $_SESSION['mensaje'] = 'ocurrió un error en el servidor';

        $_SESSION['tipo'] = 'danger';

        echo "<script>location.href='../successProduct.php'</script>";
    }
}
