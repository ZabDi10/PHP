
<body>
<?php
session_start();
include "header.php";
if (!isset($_SESSION["usuario"])){
    header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
}
include "../modelo/conexion.php";
$link=conectar();

if ($_POST){
    $nombre=$_POST["nombre"];
    $insertar="insert into relacion (nombre) values ('$nombre');";
    $resultadoInsert=mysqli_query($link,$insertar);
    if($resultadoInsert){
        echo "<br>Registro correcto";
    }else{
        echo "<br>Error";
    }
}

$consulta="Select * from relacion";

$resultado=mysqli_query($link,$consulta);

while($row=mysqli_fetch_array($resultado))
{
    echo "<li>".$row['nombre']."</li>";
}
?>
<hr>
<h2>Nueva Relacion</h2>
<form action="" method="post">
    <p><label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"></p>
    <input type="submit" value="Registrar">
    <br>
</form>
<?php

mysqli_free_result($resultado);

mysqli_close($link);
?>
<a href="dashboard.php">Volver</a>
<a href="updateRelacion.php">Actualizar</a>