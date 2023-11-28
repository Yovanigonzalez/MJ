
<?php 
#conectar base de datos#

$server = "localhost";
$username = "mjsoluci_mjslt";
$password = "Lesysteme$2121/";
$database = "mjsoluci_mjslt";


$db = mysqli_connect($server, $username, $password, $database);




    
   
   
// codificacion de caracteres 


mysqli_query($db, "SET NAMES 'utf8'");

//si no existe sesion iniciada
if(!isset($_SESSION)){
    session_start();
    var_dump($_SESSION);
}


?>