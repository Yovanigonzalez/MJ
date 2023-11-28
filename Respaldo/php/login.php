<?php
// Recoger datos del formulario
if(!isset($_SESSION)){
	session_start();
}

if(isset($_POST['login'])){
	//iniciar session si no esta iniciada
	
$db = mysqli_connect("localhost","mjsoluci_mjslt","Lesysteme$2121/","mjsoluci_mjslt");
 
	
	//borrar error de session
	if(isset($_SESSION['error_login'])){
		unset($_SESSION['error_login']);
	}
	

	// Recoger datos del formulario
	$email = trim($_POST['email']);
	$password = $_POST['password'];
	
	// Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$login = mysqli_query($db, $sql);
	
	if($login && mysqli_num_rows($login) == 1){
		$usuario = mysqli_fetch_assoc($login);
		
		// Comprobar la contraseña
		$verify = password_verify($password, $usuario['password']);
		
		if($verify){
			// Utilizar una sesión para guardar los datos del usuario logueado
			session_start();
			$_SESSION['usuario'] = $usuario;
			
		

			
		}else{
			// Si algo falla enviar una sesión con el fallo
			$_SESSION['error_login'] = "Usuario o contraseña Incorrectos!!";  }
     }else{
		// mensaje de error
		$_SESSION['error_login'] = "correo desconocido!!";
		
        
	     }

	
	
	// Redirigir a la página principal si no hay fallos
	if(!isset($_SESSION['error_login'])){
		header('Location: ../index.php');
	
	}else{
	     
	
		header('Location: ../login.php');
	}	




	

	
}else{
	// Enviar a la página de inicio
	
	
	header('Location: ../index.php');
	
	
}




	



