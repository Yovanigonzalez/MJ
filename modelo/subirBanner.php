<?php
include('../connect_db.php');

if(isset($_POST['Guardar'])){
foreach ($_FILES['imagen']['name'] as $key => $name){
    $newFilename = time() . "_" . $name;
	move_uploaded_file($_FILES['imagen']['tmp_name'][$key], '../img/banner/' . $newFilename);
	$ruta = 'img/banner/' . $newFilename;
	
	$queryFoto="INSERT INTO banner(Ubicacion) VALUES ('$ruta')";

	mysqli_query($mysqli, $queryFoto);
	echo "<script>location.href='../adminBan.php'</script>";
}
}

if(isset($_POST['Eliminar'])){
    
    $id_img = $_POST['Eliminar'];
    
    $sqlBus = "SELECT * FROM banner WHERE id_Img='$id_img'";
    $resul = mysqli_query($mysqli,$sqlBus);
    while($mostrar = mysqli_fetch_array($resul)){
        $ubi = $mostrar['Ubicacion'];
        $id = $mostrar['id_Img'];
        $eliminar = unlink("../$ubi");
        
        $sqlEli = "DELETE FROM banner WHERE id_Img='$id'";
        mysqli_query($mysqli,$sqlEli);
    }
    
    echo "<script>location.href='../adminBan.php'</script>";
}
?>