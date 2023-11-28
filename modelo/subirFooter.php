<?php
include('../connect_db.php');

if(isset($_POST['Guardar'])){
foreach ($_FILES['imagen']['name'] as $key => $name){
    $newFilename = time() . "_" . $name;
	move_uploaded_file($_FILES['imagen']['tmp_name'][$key], '../img/footer/' . $newFilename);
	$ruta = 'img/footer/' . $newFilename;
	
	$queryFoto="INSERT INTO footer(Ubicacion) VALUES ('$ruta')";

	mysqli_query($mysqli, $queryFoto);
	echo "<script>location.href='../footer.php'</script>";
}
}

if(isset($_POST['Eliminar'])){
    
    $id_img = $_POST['Eliminar'];
    
    $sqlBus = "SELECT * FROM footer WHERE id_Img='$id_img'";
    $resul = mysqli_query($mysqli,$sqlBus);
    while($mostrar = mysqli_fetch_array($resul)){
        $ubi = $mostrar['Ubicacion'];
        $id = $mostrar['id_Img'];
        $eliminar = unlink("../$ubi");
        
        $sqlEli = "DELETE FROM footer WHERE id_Img='$id'";
        mysqli_query($mysqli,$sqlEli);
    }
    
    echo "<script>location.href='../footer.php'</script>";
}
?>