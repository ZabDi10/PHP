<?php
	session_start();
	if (!empty($_POST["nombre_contacto"]) && !empty($_POST["telefono_contacto"]) && !empty($_POST["apellidos_contacto"]) && !empty($_POST["email_contacto"]) && !empty($_POST["parentesco"])){


		//debo hacer una consulta a bbdd verificando que ese email existe y recuperar la contraseña de la bbdd para
		// compararla con la contraseña insertada en formulario
		//tambien me traigo el nombre para mostrarlo en caso positivo en dashboard
		include "../modelo/conexion.php";
		$link=conectar();
		$email=$_POST["email_contacto"];
		$nombre=$_POST["nombre_contacto"];
		$apellidos=$_POST["apellidos_contacto"];
		$telefono=$_POST["telefono_contacto"];
		$parentesco=$_POST["parentesco"];


		$paso=true;
		$mensaje="";
		if (empty($_SESSION["email"])){
			$paso=false;
			$mensaje="Se necesitan los datos del alumno";
			header("Location:http://localhost:63342/PHP/cepav3/vista/formulario.php?mensaje=$mensaje");
		}
		echo $_SESSION["email"];
		if (!validarEmail($email)) {
			$mensaje= "Email en formato incorrecto";
			echo "$mensaje";
			$paso=false;
		}


		if (!validarTelefono($telefono)){
			$mensaje=" El telefono es incorrecto";
			echo $mensaje;
			$paso=false;
		}



		if($paso) {
			$_SESSION["nombre_contacto"] = $nombre;
			$_SESSION["apellidos_contacto"] = $apellidos;
			$_SESSION["telefono_contacto"] = $telefono;
			$_SESSION["email_contacto"] = $email;
			$_SESSION["parentesco"] = $parentesco;
			$email_alumno= $_SESSION["email"];


			$queryIdAlu="select id from alumno where email='$email_alumno';";
			echo $queryIdAlu;
			$result=mysqli_query($link,$queryIdAlu);


			$fila=mysqli_fetch_assoc($result);
				$idalumno=  $fila['id'];


			$insertarContacto = "insert into datos_contacto (nombre,apellidos, telefono, email, id_relacion, id_alumno) values 
            ('$nombre','$apellidos',$telefono,'$email','$parentesco', $idalumno);";
			echo "<br>$insertarContacto";
			$result = mysqli_query($link, $insertarContacto);

			if ($result){
				session_destroy();
				header("Location:http://localhost:63342/PHP/cepav3/vista/formulario.php?mensaje1=Tus datos se han registrado correctamente.");
			}else{
				$mensaje="Datos no validos";
				header("Location:http://localhost:63342/PHP/cepav3/vista/contacto.php?mensaje=$mensaje");
				echo "Datos no válidos.";

			}
		}

		mysqli_close($link);

	}




	function validarEmail($email)
	{
		// las expresiones regulares
		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/";
		if (preg_match($regex,$email)){//compara que la expresion regular se cumple en variable $email
			return true;
		}else{
			return false;
		}
	}


	function validarTelefono($telefono) {
		$numeros ="/^[6789]\d{8}$/";
		if (preg_match($numeros,$telefono)) {
			return true;
		} else {
			return false;
		}



	}

