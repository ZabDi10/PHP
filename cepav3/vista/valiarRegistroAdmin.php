<?php
	include "../modelo/conexion.php";
	global $link;
	$link=conectar();
    $nombre=$_POST["nombre"];
    $usuario = $_POST["usuario"];

	if (!empty($_POST["usuario"]) && !empty($_POST["usuario2"]) && !empty($_POST["pass"] && !empty($_POST["nombre"]))) {
        $usuario2 = $_POST["usuario2"];
		$pass = $_POST["pass"];
		$paso=true;
		$mensaje="";

        if (!validarEmailBBDD($usuario)){
            $mensaje=$mensaje."El email existe";
            $paso=false;
        }
        if (!validarEmail($usuario)) {
			$mensaje = $mensaje. "<br>Email en formato incorrecto";
			$paso = false;

		}
		if ($_POST["usuario"] != $_POST["usuario2"]) {
				$mensaje= $mensaje. "<br>Los email deben ser iguales";
			$paso = false;

		}


		if (!validarPass($pass)) {
			$mensaje=$mensaje."<br>El password NOO cumple los requisitos de complejidad";
			$paso=false;
		}




		if ($paso) {
			$passSeguro = password_hash($pass, PASSWORD_BCRYPT);

			$insertarUser = "insert into usuario_adm (email,pass,nombre) values 
            ('" . $usuario . "','" . $passSeguro . "','" . $nombre . "');";

			$result = mysqli_query($link, $insertarUser);
			if ($result) {
                mysqli_close($link);
				$mensaje = "Alta realizada correctamente ya puede iniciar sesion";
				header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=$mensaje");
			} else {
                mysqli_close($link);
				$mensaje = "Existe un error al relizar el alta";
				header("Location:http://localhost:63342/PHP/cepav3/vista/registroAdmin.php?mensaje=$mensaje");
			}
		}else{
	        header("Location:http://localhost:63342/PHP/cepav3/vista/registroAdmin.php?mensaje=$mensaje&nombre=$nombre&email=$usuario");
		}

	}else{
		$mensaje="Todos los campos son requeridos";
		header("Location:http://localhost:63342/PHP/cepav3/vista/registroAdmin.php?mensaje=$mensaje&nombre=$nombre&email=$usuario");
	}
	function validarEmail($email)
	{

		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/";
		if (preg_match($regex,$email)){
			return true;
		}else{
			return false;
		}

	}

	function validarPass($pass){
		$regex ="/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
		if (preg_match($regex,$pass)){
			return true;
		}else{
			return false;
		}
	}


	function validarEmailBBDD($email){
		global $link;
		$consulta="select email from usuario_adm where email='".$email."';";
		$resultado=mysqli_query($link,$consulta);

		$numeroRegistros=mysqli_num_rows($resultado);

		if ($numeroRegistros!=0){
			return false;
		}else{
			return true;
		}
	}

