<?php
	session_start();
	if (!empty($_POST["nombre"]) && !empty($_POST["nivel"])&& !empty($_POST["telefono"])){


		//debo hacer una consulta a bbdd verificando que ese email existe y recuperar la contraseña de la bbdd para
		// compararla con la contraseña insertada en formulario
		//tambien me traigo el nombre para mostrarlo en caso positivo en dashboard
		include "modelo/conexion.php";
		$link=conectar();
	$email=$_POST["email"];
	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$edad=$_POST["edad"];
	$telefono=$_POST["telefono"];
	$direccion=$_POST["direccion"];
	$dni=$_POST["dni"];
	$paso=true;
	$mensaje="";
		if (!validarEmail($email)) {
			$mensaje= "Email en formato incorrecto";
			$paso=false;
		}
		if (!validarEmailBBDD($email)){
			$mensaje="Error: El email ya existe";
			$paso=false;
		}else{
			$paso=true; //
		}

	if($paso){
		/*$_SESSION["nombre"]=$nombre;$_SESSION["apellidos"]=$apellidos;$_SESSION["edad"]=$edad;$_SESSION["telefono"]=$telefono;$_SESSION["email"]=$email;$_SESSION["direccion"]=$direccion;$_SESSION["dni"]=$dni;
*/
		$insertarAlumno="insert into alumno (nombre,apellidos,edad, telefono, email, direccion, dni) values 
            ('".$nombre."','".$apellidos."','".$edad."','".$telefono."','".$email."','".$direccion."','".$dni."' );";
		echo "<br>$insertarAlumno";
		$result=mysqli_query($link,$insertarAlumno);
		if ($result){
		header("Location:http://localhost:63342/cepa/cepa/contacto.php?");
	}else{
		header("Location:http://localhost:63342/cepa/cepa/index.php?mensaje=$mensaje");
		echo "El correo electrónico ya está registrado.";
	}}



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

		function validarEmailBBDD($email){
			global $link;
			$consulta="select email from alumno where email='".$email."';";
			echo $consulta;
			$resultado=mysqli_query($link,$consulta); //ejecutar la consulta
			//verifica que existe y devuelve el nº de registros...
			$row=mysqli_num_rows($resultado);
			if ($row!=0){
				return false;
			}else{
				return true;
			}
		}
        function validarDni($dni)
        {
            $expresion = '/[0-9]{7,8}[A-Z]/';
            if(preg_match($expresion,$dni)){
                return true;
            }else{
                return false;
            }
        }
			//funcion que se llama para buscar si existe el email en la bbdd





