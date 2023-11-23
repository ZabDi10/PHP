<?php
session_start();
if(!isset($_SESSION["usuario"])){
        header("Location:http://localhost:63342/PHP/septimoPHP/vista/login.php?mensaje = Usuario no autorizado");
}

include "header.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Panel de control</title>
</head>
<body>
<div class="caja-negra negra dash">
    <div class="numeros">
        <span class="numero-activo">Sistema de Alta Clientes</span>
    </div>
    <div class="opciones">
        <span class="material-symbols-outlined">account_circle</span><p>
        <?= $_SESSION["usuario"] ?></p>
    </div>
    <div class="opciones">
        <a href="javascript:window.print()" title="Imprimir Página"><span class="material-symbols-outlined">
        file_save
        </span></a>
        <a href="" title="Descargar"><span class="material-symbols-outlined">
        download
        </span></a>
        <a href="password.php" title="Cambiar Contraseña"><span class="material-symbols-outlined">
        lock_reset
        </span></a>
        <a href="destroy.php" title="Salir"><span class="material-symbols-outlined">
        logout
        </span></a>
    </div>
</div>
<div class="caja-blanca dash">
    <h3></h3>
    <?php if (isset($_GET["mensaje"])){
            echo "<div class='mensajeL' <p>". $_GET['mensaje'] ."</p></div>";
        }
        ?>
    <table class="tabla-cliente">
        <tr>
            <th>Nª Registro</th>
            <th>Nombre</th>
            <th>1º Apellido</th>
            <th>2º Apellido</th>
            <th>Edad</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Opciones</th>
        </tr>

<!--       hacemos un bucle y después mostramos todos los clientes-->
            <?php
            include "../modelo/conexion.php";
            $link = conectar();
            $query = "SELECT * FROM cliente;";
            $result = mysqli_query($link, $query);
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['apellido1']."</td>
                <td>".$row['apellido2']."</td>
                <td>".$row['edad']."</td>
                <td>".$row['dni']."</td>
                <td>".$row['email']."</td>
                <td>".$row['telefono']."</td>
                <td><a href='actualizar.php?id=".$row['id']."' title='Actualizar'><span class='material-symbols-outlined'>edit_note</span></a>
                <!-- Icono eliminar -->
                <a href='eliminar.php?id=".$row['id']."' title='Eliminar'><span class='material-symbols-outlined'>delete</span></a></td></tr>";
            }
            ?>
        </tr>
    </table>
</div>
</body>
<script src="js/confirmacion.js"></script>