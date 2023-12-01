<?php
	session_start();
	if (!isset($_SESSION["usuario"]) || empty($_GET['id']>0)){
		header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
	}
	include "header.php";
	if(!isset($_GET['id']) || empty($_GET['id'])){
	header("Location:http:http://localhost:63342/PHP/cepav3/vista/dashboard.php");
}else{
	$consulta="select * from alumno where id=".$_GET['id'];
	include "../modelo/conexion.php";
	$link=conectar();
	$resultado=mysqli_query($link,$consulta);
	while ($row=mysqli_fetch_assoc($resultado)){

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Aztualizar</title>
</head>
<body>
<div class="caja-negra">
	<div class="numeros">
		<span class="numero-activo">Aztualizar Cliente</span>
	</div>
</div>
<div class="caja-blanca">
	<form id="formulario" method="post" class="formulario" action="acRegistro.php" novalidate>
		<input type="hidden" value="<?=$row['id'] ?>" name="id">
		<div class="input-izquierda">
			<input class="validar" type="text" required id="dni" name="dni" placeholder="DNI" value="<?=$row['dni'] ?>">
			<p>00000000A</p>
			<input class="validar" type="email" id="email" name="email" placeholder="EMAIL" required
			       value="<?=$row['email'] ?>">
			<p>usuario@dominio.ext</p>
            <input class="validar" type="email" id="email" name="email2" placeholder="REPETIR EMAIL" required
                   value="<?=$row['email'] ?>">
            <p>usuario@dominio.ext</p>
			<input class="validar" type="text" id="direccion" name="direccion" placeholder="DIRECCIÓN" required
			       value="<?=$row['direccion'] ?>">
			<p>Calle Falsa, 1234</p>
			<input class="validar" type="text" id="movil" name="movil" placeholder="TELÉFONO MÓVIL" required
			       value="<?=$row['telefono'] ?>">
			<p>000 000 000</p>
		</div>
		<div class="input-derecha">
			<input type="text" name="nombre" required placeholder="NOMBRE" value="<?=$row['nombre'] ?>">
			<p>Ej: María</p>
			<input type="text" required placeholder="NIVEL DE ESTUDIOS" name="nivelEstudios" value="<?=$row['id_estudios']
			?>">
			<p>Ej: Secundaria</p>
			<input type="text" placeholder="APELLIDOS" name="apellidos" value="<?=$row['apellidos'] ?>">
			<p>Ej: Martinez</p>
			<p>Indica tu edad. Mínimo 18 años</p>
			<input type="number" required min="18" max="85" placeholder="EDAD" name="edad"value="<?=$row['edad'] ?>">
		</div>
		<div class="acciones">
			<p class="centrado">
				<input type="submit" class="boton entrada"  name="enviar" value="Actualizar" id="enviar">
			</p>
		</div>
	</form>
</div>
<?php
	}
	}
?>
</body>

</html>
