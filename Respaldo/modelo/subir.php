<?php
include('../controlador/Conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];
    $descripcioncorta = $_POST['descripcioncorta'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $tipopro = $_POST['tipopro'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp, png';
          $_SESSION['tipo'] = 'danger';
          header('location: ../vista/login/admin/subircatalogo.php');
       }else{
         $query = "INSERT INTO imagenes(imagen,nombre,descripcioncorta,descripcion,precio,categoria,tipopro) values('$imagen','$nombre','$descripcioncorta','$descripcion','$precio','$categoria','$tipopro')";
         $resultado = mysqli_query($mysqli,$query);
         if($resultado){
              move_uploaded_file($temp,'../img/catalogo/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location: ../vista/login/admin/subircatalogo.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>