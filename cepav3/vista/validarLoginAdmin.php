<?php
	session_start();
	if (!empty($_POST['email']) && !empty($_POST["pass"])){
		$email=$_POST["email"];
		$passFormulario=$_POST["pass"];

		include "../modelo/conexion.php";
		$link=conectar();

		$consulta="select * from usuario_adm where email='".$email."';";
		echo "<br>$consulta";

		$resultado=mysqli_query($link,$consulta);
		$row=mysqli_num_rows($resultado);

		if ($row!=0){
			$registro=mysqli_fetch_assoc($resultado);
			$emailBBDD=$registro["email"];
			echo "<br>El usuario ".$emailBBDD." existe";

			$passBBDD=$registro["pass"];
			if (validarPass($passFormulario,$passBBDD)){
				echo "<br>La contraseña es correcta";
				$_SESSION["usuario"]=$registro["nombre"];
				header("Location:http://localhost:63342/PHP/cepav3/vista/dashboard.php");
			}else{
				$mensaje="Error, Clave incorrecta";
				header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=$mensaje");
			}

		}else{
			$mensaje="No existe el usuario";
		header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=$mensaje");
		}
	}else{
        $mensaje = "Ha ocurrido un error contacte con el administrador";
        header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=$mensaje");
    }
	function validarPass($passFormulario,$passBBDD){

		$verificacion=password_verify($passFormulario,$passBBDD);
		if ($verificacion){
			return true;
		}else{
			return false;
		}
	}
