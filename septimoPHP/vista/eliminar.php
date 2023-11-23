<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:http://localhost:63342/PHP/septimoPHP/vista/login.php?mensaje = Usuario no autorizado");
}

if (isset($_GET['id'])){
    include "../modelo/conexion.php";
    $link = conectar();
    $query = "DELETE FROM cliente WHERE id=" . $_GET['id'];
    $result = mysqli_query($link, $query);
    if ($result){
        $mensaje = "El registro se elimino correctamente";

    }else{
        $mensaje="Error al intentar borrar el registro";
    }
    header("Location: http://localhost:63342/PHP/septimoPHP/vista/dashboard.php?mensaje=$mensaje");
}
?>