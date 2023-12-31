<?php
    include "header.php";
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
    }
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cambio de contraseña</title>
</head>
<body class="dash">
<div>
	<div class="numeros">
		<span class="numero-activo">Cambiar Contraseña</span>
	</div>
</div>
<div class="loginAdmin">
	<form action="" class="cambiarPass loginAdmin" method="get">
		<input type="email" name="email" placeholder="Email"  required>
		<input type="password" name="pass" placeholder="Contraseña" required>
		<input type="password" name="pass2" placeholder="Repetir Contraseña">
		<div class="botonesCambiar">
            <input type="button" class="button" onclick="history.back()" value="Cancelar">
            <input type="submit" class="button" value="Cambiar">
        </div>
            <div class="criterios">
                <h5>Su contraseña debe tener</h5>
                <div>
                    <ul class="lista">
                        <li>Minúscula / Mayúscula</li>
                    </ul>
                    <ul class="lista">
                        <li>8 carácteres / 1 Números</li>
                    </ul>
                    <ul class="lista">
                        <li>Símbolos</li>
                    </ul>
                </div>
            </div>

		<?php
			if (isset($_GET["mensaje"])){
				echo "<p class='error'>".$_GET['mensaje']."</p>";
			}
		?>
    </div>

<?php

	if (!empty($_GET["email"]) && !empty($_GET["pass"]) && !empty($_GET["pass2"])){
		$email=$_GET["email"];
		$passFormulario=$_GET["pass"];
		$passFormulario2=$_GET["pass2"];

		$consulta="select * from usuario_adm where email='$email'";
		include "../modelo/conexion.php";
		$link=conectar();
		$resultado=mysqli_query($link,$consulta);
		$row=mysqli_num_rows($resultado);
		if ($row>0){
			$registro=mysqli_fetch_assoc($resultado);

			if ($passFormulario==$passFormulario2 && validarPass($passFormulario)){

				echo "Vamos a actualizar la BBDD";

				$encriptar=password_hash($_GET["pass"],PASSWORD_BCRYPT);
				$actualizar="update usuario_adm set pass='$encriptar' where email='$email'";

				$resultadoUpd=mysqli_query($link,$actualizar);
				if ($resultadoUpd){
					$mensaje="Registro actualizado correctamente";
				header("Location:http://localhost:63342/PHP/cepav3/vista/dashboard.php?mensaje=$mensaje");
					exit();
				}else{
					$mensaje="Error al actualizar password";
					header("Location:http://localhost:63342/PHP/cepav3/vista/paswordAdmin.php?mensaje=$mensaje");
				}
			}else{
				$mensaje="Los password no son iguales o no cumplen son los criterios de complejidad";
			}
		}else{
			$mensaje="El email no existe";
		}
		header("Location:http://localhost:63342/PHP/cepav3/vista/paswordAdmin.php?mensaje=$mensaje");
	}
	function validarPass($pass){
		$regex ="/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
		if (preg_match($regex,$pass)){
			return true;
		}else{
			return false;
		}
	}
?>
</body>
</html>

