<?php
	session_start();
	if (!isset($_SESSION["usuario"])){
		header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
	}
	if (isset($_GET['id'])){
		$consulta="delete from alumno where id=".$_GET['id'];
		include "../modelo/conexion.php";
		$link=conectar();
		$resultado=mysqli_query($link,$consulta);
		if ($resultado){
			$mensaje="El Registro se elimino correctamente";
		}else{
			$mensaje="Eror al intentar borrar el regsitro";
		}
		header("Location:http://localhost:63342/PHP/cepav3/vista/dashboard.php?mensaje=$mensaje");
	}