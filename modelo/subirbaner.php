<?php
include('../controlador/Conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'mp4') || strpos($tipo,'png')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, mp4., png';
          $_SESSION['tipo'] = 'danger';
          header('location: ../vista/login/admin/baner.php');
       }else{
         $query = "INSERT INTO baner (imagen,nombre) values('$imagen', '$nombre')";
         $resultado = mysqli_query($mysqli,$query);
         if($resultado){
              move_uploaded_file($temp,'../img/baner/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location: ../vista/login/admin/baner.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>