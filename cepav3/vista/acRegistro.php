<?php
	session_start();
	if (!isset($_SESSION["usuario"])){
		header("Location:http:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
	}
    include "header.php";

	if(empty($_POST['id']) || empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['direccion']) ||
		empty($_POST['nivelEstudios']) ||
		empty($_POST['email']) || empty($_POST['edad']) || empty($_POST['movil']) || empty($_POST['dni']) || empty
		($_POST['email2'])){

		header("Location:http://localhost:63342/PHP/cepav3/vista/actualizar.php?id="

			.$_POST['id']."&mensaje=Los datos no pueden estar vacios");

	}else{
		include "../modelo/conexion.php";
		$link=conectar();

		$actualizar="update alumno set nombre='".$_POST['nombre']."',apellidos='".$_POST['apellidos']."',id_estudios="
			.$_POST['nivelEstudios'].",email='".$_POST['email']."',edad=".$_POST['edad'].",telefono=".$_POST['movil']
			.",dni='".$_POST['dni']."',direccion='".$_POST['direccion']."' where id=" .$_POST['id'] .";";

		$resultado=mysqli_query($link,$actualizar);

		if ($resultado){
			if ($_POST['email']!=$_POST['email2']){

				$mensaje="Los correos electronicos no coinciden";

			}else{

				$mensaje="El cliente ".$_POST['nombre']." ".$_POST['apellidos']." se actualizo exitosamente";

			}
		}else{
			$mensaje="ERROR al actualizar el cliente ".$_POST['nombre']." ".$_POST['apellidos'];
		}
		header("Location:http://localhost:63342/PHP/cepav3/vista/dashboard.php?mensaje=".$mensaje);
	}


