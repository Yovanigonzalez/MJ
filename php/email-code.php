<?php
	require("../connect_db.php");

	$mail=$_POST['email'];


	$sql = mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$f= mysqli_num_rows($sql);
		if ($f == 1)
		{
	$mostrar		= mysqli_fetch_array($sql); 
	$enviarpass 	= $mostrar['password'];
	
	$paracorreo 		= $mail;
	$titulo				= "Recuperar Password";
	$mensaje			= "Tu password es: ".$enviarpass;
	$tucorreo			= "From: admon@mjsolucionesenti.com";
	
	if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
	{
		echo "<script> alert('Contraseña enviada');window.location= '../login.php' </script>";
	}else
	{
		echo "<script> alert('Error');window.location= '../login.php' </script>";
	}
	}
	else
	{
		echo "<script> alert('Este correo no existe');window.location= '../login.php' </script>";
	}
	?>