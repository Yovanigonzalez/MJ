<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
    $db = mysqli_connect("localhost", "root","", "academ");

    //si no existe la session iniciar
    if(!isset($_SESSION)){
        session_start();
    }





	// Recorger los valores del formulario de actulizacion
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $password_hash = isset($_POST['password_hash']) ? mysqli_real_escape_string($db, $_POST['password_hash']) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    $password2 = isset($_POST['password2']) ? mysqli_real_escape_string($db, $_POST['password2']) : false;

    //comprobar si hay link por metodo get

	$codigo = isset($_GET['codigo']) ? mysqli_real_escape_string($db, $_GET['codigo']) : false;


  
   

    // Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$login = mysqli_query($db, $sql);
	


	// Array de errores
	$errores = array();


	if($login && mysqli_num_rows($login) == 1){
		$usuario = mysqli_fetch_assoc($login);

        //obtener codigo en base de datos del usuario 
        $codigo = $usuario['codigo'];

        // Comprobar la contraseña
        $verify = password_verify($password_hash, $usuario['password']);

    
        $verificar = $password_hash == $usuario['codigo']  ;
      


        //verificar que la contraseña sea correcta
        if( $verificar || $verify){

            //verificar que las nuevas contraseñas coincidan
            if($password == $password2){

                //cifrar la nueva contraseña
                $password_segura= password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

                //actualizar la contraseña en la base de datos
                $sql = "UPDATE usuarios SET password = '$password_segura' WHERE email = '$email'";
                $guardar = mysqli_query($db, $sql);

                //comprobar la actualizacion
                if($guardar){
                    $_SESSION['completado'] = "La contraseña se ha actualizado con exito hora puedes  Iniciar session   ";

                    session_destroy();

             

                    //redirigir al perfil en 3 segundos
                    



                }else{
                    $_SESSION['errores']['general'] = "Fallo al actualizar la contraseña";
                }


  





             }else{
                //mensaje de error
                $_SESSION['errores']['general'] = " Tus contraseñas no coinciden";
                    }

        }else{
            //mensaje de error
            $_SESSION['errores']['general'] = " Tu antigua contraseña  <br> o codigo de verificacion no son correctos  !!";
        }

       






        

       
        

	}else{
		// mensaje de error
        $_SESSION['errores']['general'] = " No existe el usuario!!";

    }
 

  
   
		
	
}

















//si la session es completada redirigir al perfil en 3 segundos con script




//si no existe session errores redirigir al login
 
if (!isset($_SESSION['errores'])) {
    //iniciar session si no existe
    $_SESSION['completado'] = "La contraseña se ha actualizado con exito hora puedes  Iniciar session   ";
    header('Location: ../login.php');
} else {
    header('Location: ../olvide_pass.php');

}


 




