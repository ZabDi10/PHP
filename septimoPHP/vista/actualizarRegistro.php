<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:http://localhost:63342/PHP/septimoPHP/vista/login.php?mensaje = Usuario no autorizado");
}
if (!empty($_POST['id'])){
    include "../modelo/conexion.php";
    $link= conectar();
    $query = "UPDATE cliente SET nombre='".$_POST['nombre']."',apellido1='".$_POST['apellido1']."',apellido2='".$_POST['apellido2']."',dni='".$_POST['dni']."',email='".$_POST['email']."',edad=".$_POST['edad'].",telefono=".$_POST['telefono']." WHERE id=" . $_POST['id'];
    $result = mysqli_query($link, $query);
    if ($result){
        $mensaje = "Registro Actualizado";
        header("Location:http://localhost:63342/PHP/septimoPHP/vista/dashboard.php?mensaje=$mensaje");
    }
}else{
    $mensaje = "No se ha podido actualizar";
    header("Location:http://localhost:63342/PHP/septimoPHP/vista/dashboard.php?mensaje=$mensaje");
}