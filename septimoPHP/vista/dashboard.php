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
<div class="caja-negra negra">
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
<div class="caja-blanca">