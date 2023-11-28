<?php

$db = mysqli_connect("localhost","mjsoluci_mjslt","Lesysteme$2121/","mjsoluci_mjslt");

//si no existe la session iniciar
if(!isset($_SESSION)){
	session_start();
}


if(isset($_POST)){
	
	// Conexión a la base de datos
	
	// Recorger los valores del formulario de actulizacion
    $email_code = isset($_POST['email-code']) ? mysqli_real_escape_string($db, $_POST['email-code']) : false;

	

	
	//iniciar session para guardar el correo
	$_SESSION['email_code'] = $email_code;

    // Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email_code'";
	$login = mysqli_query($db, $sql);
	

	// Array de errores
	$errores = array();

	if ($login && mysqli_num_rows($login) == 1) {
		$usuario = mysqli_fetch_assoc($login);
		$email_usuario = $usuario['email'];

		//guardar un codigo de verificacion en la base de datos para el usuario
		$codigo = mt_rand(100000, 999999);
	


		$sql = "UPDATE usuarios SET codigo = '$codigo' WHERE email =  '$email_usuario'";

		$guardar = mysqli_query($db, $sql);

	

		$name = $usuario['nombre'];
		$mail = $usuario['email'];
		$email_soporte = 'admon@mjsolucionesenti.com';
		
		

		$header = 'from: ' . $email_soporte . "\r\n";
		$header .= "X-Mailer:PHP/" . phpversion() . "\n";
		$header .= "Mime-Version:1.0 \r\n";
		$header .= "content-Type:text/plain";

		$message = "Estimado: " . $name . "\r\n";
		$message .= " Recientemente recibimos usa solicitutud para cambio de contraseña\r\n";
		$message .= "Su codigo es : \r\n  " . $codigo . "\r\n  ";
		$message .= "Si prefiere usar el enlace: \n https://www.mjsolucionesenti.com/olvide_pass.php?codigo=".$codigo.  "\r\n ";
		$message .= "Si usted no solicito ningun codigo por favor omita este correo "  . "\r\n";

		$message .= "enviado el: " . date('d/m/Y', time());

		$para = $usuario['email'];
		$asunto = 'Solicitud de Cambio de contraseña';

		if (mail($para, $asunto, utf8_decode($message), $header)){ 
				// mensaje de error
	
			echo "<script type='text/javascript'>alert('Hemos enviado un codigo al correo proporcionado');</script>";
		     echo "<script type='text/javascript'>window.location.href='../olvide_pass.php';</script>";

		}else{
			echo "<script type='text/javascript'>alert('correo no valido');</script>";
			echo "<script type='text/javascript'>window.location.href='../olvide_pass.php';</script>";

		}
	        
		

	} else {
		echo "<script type='text/javascript'>alert('El correo no existe en nuestros registros, intenta de nuevo o contacta con soporte.');</script>";
			echo "<script type='text/javascript'>window.location.href='../olvide_pass.php';</script>";
	}

	
}



