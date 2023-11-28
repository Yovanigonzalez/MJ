<?php



$paracorreo     ="yovanigonzar@outlook.com";
$titulo         ="Test correo";
$mensaje        ="Hola mundo";
$tucorreo       ="From: yovanigonzar@outlook.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "Correo enviado";
	
}else
{
	echo "Error";
}


?>