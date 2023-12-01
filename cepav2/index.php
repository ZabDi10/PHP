<?php
session_start();
include "modelo/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Inscripción</title>
	<link rel="stylesheet" href="vista/css/style.css">
</head>
<body>
<img src="vista/img/logo.png">
<h1>Formulario de Inscripción</h1>
<h3><?php
	if (isset($_GET['mensaje'])){
		echo $_GET['mensaje'];
	}?></h3>
<form action="validarFormulario.php" method="post" novalidate>
	<!-- Nombre del alumno -->
	<label for="nombre">Nombre del Alumno:</label>
	<input type="text" id="nombre" name="nombre" required><br>

	<!-- Nivel de estudios -->
	<label for="nivel">Nivel de Estudios:</label>
	<select id="nivel" name="nivel" required>
        <option value=""></option>
		<?php
			$link=conectar();
			$queryNivel="select * from nivel_estudios;";
			$result=mysqli_query($link,$queryNivel);
			while($fila=mysqli_fetch_assoc($result)){
				echo "<option  value=" . $fila['id'] . ">" . $fila['nombre_estudios'] . "</option>";
			}
			mysqli_free_result($result)
		?>
<!--		<option value="primaria">Primaria</option>-->
<!--		<option value="secundaria">Secundaria</option>-->
<!--		<option value="preparatoria">Preparatoria</option>-->
<!--		<option value="universidad">Universidad</option>-->
	</select><br>

	<!-- Número de teléfono -->
	<label for="telefono">Número de Teléfono:</label>
	<input type="tel" id="telefono" name="telefono" required><br>

	<!-- Correo electrónico -->
	<label for="email">Correo Electrónico:</label>
	<input type="email" id="email" name="email" required><br>

	<!-- Dirección -->
	<label for="direccion">Dirección:</label>
	<input type="text" id="direccion" name="direccion" required><br>

	<!-- Ciudad -->
	<label for="ciudad">Ciudad:</label>
	<input type="text" id="ciudad" name="ciudad" required><br>

	<!-- Código Postal -->
	<label for="codigo_postal">Código Postal:</label>
	<input type="text" id="codigo_postal" name="codigo_postal" required><br>

	<!-- Provincia -->
	<label for="provincia">Provincia:</label>
	<input type="text" id="provincia" name="provincia" required><br>

	<!-- Fecha de Nacimiento -->
	<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
	<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>


	<input type="submit" value="Enviar" >
</form>


</body>
</html>