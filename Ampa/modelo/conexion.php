<?php
	$servidor="localhost:3306";
	$userBBDD="root";
	$pass="";
	$bbdd="ampa";

	function conectar(){
		global $servidor,$userBBDD,$pass,$bbdd;
		$link=mysqli_connect($servidor,$userBBDD,$pass,$bbdd);
		if (mysqli_error($link)){
//			echo "Existe un error al conectar con el servidor o BBDD";
		}else{
//			echo "Conexión establecida correctamente";
		}
		return $link;
	}
