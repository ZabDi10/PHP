<?php
	session_start();
    $email=$_POST["email"];
	if (!empty($_POST['email']) && !empty($_POST["pass"])){
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
                mysqli_close($link);
				$_SESSION["usuario"]=$registro["nombre"];
				header("Location:http://localhost:63342/PHP/cepav3/vista/dashboard.php");
			}else{
				$mensaje="Error, Clave incorrecta";
                mysqli_close($link);
				header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=$mensaje&email=$email");
			}

		}else{
			$mensaje="No existe el usuario";
            mysqli_close($link);
		    header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=$mensaje");
		}
	}else if(!empty($_POST["email"]) && empty($_POST["pass"])){
        $mensaje = "No hay password";
        header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=$mensaje&email=$email");
    }else{
        $mensaje = "Debe rellenar todos los campos";
        header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=$mensaje&email=$email");
    }
	function validarPass($passFormulario,$passBBDD){

		$verificacion=password_verify($passFormulario,$passBBDD);
		if ($verificacion){
			return true;
		}else{
			return false;
		}
	}
