<?php
include('../controlador/Conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nombre'];
    $tema = $_POST['tema'];
    $categoria = $_POST['categoria'];
    $subcategoria = $_POST['subcategoria'];
    $descripcion = $_POST['descripcion'];
    $urlVideo = $_POST['url'];
    $urlCurso = $_POST['urlCurso'];


    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, mp4., png';
          $_SESSION['tipo'] = 'danger';
          header('location: ../vista/login/admin/subirmenu.php');
       }else{
         $query = "INSERT INTO misvideos (imagen,nombre,categoria,subcategoria,temas,urlVideo,urlCurso,descripcion) values('$imagen', '$nombre','$categoria','$subcategoria','$tema','$urlVideo','$urlCurso','$descripcion')";
         $resultado = mysqli_query($mysqli,$query);
         if($resultado){
              move_uploaded_file($temp,'../img/menu/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location: ../vista/login/admin/subirmenu.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>