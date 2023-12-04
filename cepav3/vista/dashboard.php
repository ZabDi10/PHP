<?php
	session_start();
	include "header.php";
	if (!isset($_SESSION["usuario"])){
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
	<script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
    "></script>
	<link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
    " rel="stylesheet">
	<script src="js/scriptconfirmar.js"></script>
	<title>DashBoard</title>
</head>
<body>
<div class="caja-negra">
	<div class="numeros">
		<span class="numero-activo">Sistema de Alta de los Clientes</span>
	</div>
	<div class="opciones">
    <span class="material-symbols-outlined">
    contacts_product
    </span>
		<p><?=$_SESSION["usuario"]?></p>

	</div>
	<div class="opciones">
		<a href="listado.php?opcion=Listar" title="Imprimir">
			<span class="material-symbols-outlined">print<a href=""></a></span>
		</a>
		<a href="listado.php?opcion=exportar" title="Descargar">
			<span class="material-symbols-outlined">download<a href=""></a></span>
		</a>
		<a href="paswordAdmin.php" title="Cambiar Password">
			<span class="material-symbols-outlined">change_circle</span>
		</a>
		<a href="borrarCoockies.php" title="Salir">
			<span class="material-symbols-outlined">logout</span>
		</a>
	</div>
</div>
<div class="caja-blanca">
	<h3></h3>
	<p>
		<?php
			if (isset($_GET['mensaje'])){
				echo $_GET['mensaje'];
			}
		?>
	</p>
	<table class="tabla-cliente">
		<tr>
			<th>ID</th>
            <th>Nivel de Estudio</th>
            <th>Nombre</th>
			<th>Apellidos</th>
			<th>Email</th>
			<th>Edad</th>
			<th>DNI</th>
			<th>Telefono </th>
			<th>Dirección</th>
            <th>Opciones</th>
		</tr>

		<?php
			include "../modelo/conexion.php";
			$link=conectar();
			$consulta="select * from alumno;";
			$resultado=mysqli_query($link,$consulta);
			while ($row=mysqli_fetch_assoc($resultado)){
				echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['id_estudios']."</td>
                            <td>".$row['nombre']."</td>
                            <td>".$row['apellidos']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['edad']."</td>
                            <td>".$row['dni']."</td>
                            <td>".$row['telefono']."</td>
                            <td>".$row['direccion']."</td>
                            <td><a href='actualizar.php?id=".$row['id']."' title='Actualizar'><span class='material-symbols-outlined'>edit_note</span></a>
                                <a href='eliminar.php?id=".$row['id']."' title='Eliminar' onclick='confirmar()'><span class='material-symbols-outlined'>delete</span></a>
                            </td>
                          </tr>";
			}
		?>
	</table>
    <div>
        <button><a href="insertarNivelEstudios.php">Nivel de Estudios</a></button>
        <button><a href="insertarRelacion.php">Relación</a></button>
    </div>

</div>
</body>
</html>

