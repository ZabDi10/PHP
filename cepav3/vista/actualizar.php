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
	<title>Actualizar</title>
</head>
<body class="formulario">
<div class="caja-negra">
	<div class="numeros">
		<span class="numero-activo">Actualizar Datos</span>
	</div>
</div>
<div>
	<form id="formulario" method="post" action="acRegistro.php">
		<input type="hidden" value="<?=$row['id'] ?>" name="id">
		<div>
            <!--Nombre-->
            <label for="nombre">Nombre del Alumno:</label>
            <input type="text" name="nombre" placeholder="NOMBRE" value="<?=$row['nombre'] ?>">

            <!--Apellidos-->
            <label for="apellidos">Apellidos del Alumno:</label>
            <input type="text" placeholder="APELLIDOS" name="apellidos" value="<?=$row['apellidos'] ?>">
            <!--EDAD-->
            <label for="edad">Edad:</label>
            <input type="text" placeholder="Edad" name="edad" value="<?=$row['edad'] ?>">
            <!-- Nivel de estudios -->
            <label for="nivel">Nivel de Estudios:</label>
            <select id="nivelEstudios" name="nivelEstudios" required>
                <?php
                echo "<option  value=" . $row['id_estudios'] . ">" . $row['id_estudios'] . "</option>";
                $link=conectar();
                $queryNivel="select * from nivel_estudios;";
                $result=mysqli_query($link,$queryNivel);
                while($fila=mysqli_fetch_assoc($result)){
                    echo "<option  value=" . $fila['id'] . ">" . $fila['nombre_estudios'] . "</option>";
                }
                mysqli_free_result($result)
                ?>
            </select>
            <label for="telefono">Número de Teléfono:</label>
            <input class="validar" type="text" id="movil" name="movil" placeholder="TELÉFONO MÓVIL" value="<?=$row['telefono'] ?>">

            <label for="email">Correo Electrónico:</label>
			<input class="validar" type="email" id="email" name="email" placeholder="EMAIL" value="<?=$row['email'] ?>">
            <label for="email">Repetir Correo Electrónico:</label>
            <input class="validar" type="email" id="email" name="email2" placeholder="REPETIR EMAIL" value="<?=$row['email'] ?>">

            <label for="direccion">Dirección:</label>
			<input class="validar" type="text" id="direccion" name="direccion" placeholder="DIRECCIÓN" value="<?=$row['direccion'] ?>">
            <!--DNI-->
            <label for="dni">Dni:</label>
            <input class="validar" type="text" id="dni" name="dni" placeholder="00000000X" value="<?=$row['dni'] ?>">
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
