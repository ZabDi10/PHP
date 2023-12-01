<?php
	session_start();
	include "header.php";

	if (!isset($_SESSION["usuario"])){
		header("Location:http:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
	}else{
	if ($_GET['opcion']=='exportar'){
		$file="archivo.xls";
		echo pack("CCC",0xef,0xbb,0xbf);
		header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=$file");
	}
	if ($_GET['opcion']=="Listar"){
		echo "<script>window.print()</script>";
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

	<div class="numeros">
		<span class="numero-activo">Sistema de Alta de los Clientes</span>
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
			<th>Nombre</th>
			<th>Nivel de Estudio</th>
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
</div>
	<?php
		}
	?>

</body>
</html>