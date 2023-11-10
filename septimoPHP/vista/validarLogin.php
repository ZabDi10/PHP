<?php
session_start();
include "../modelo/conexion.php";
$link = conectar();
if (!empty($_POST["email"] && !empty($_POST["pass"]))) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    //Debo hacer una consulta a bbdd verificando que ese email existe y recuperar la constraseña de la bbdd para compararla con la constraseña insertada en formulario
    //Tambien me traigo el nombre para mostrarlo en caso positivo en dassboard
    $consulta = "select * from usuario where email='$email'; ";
    $resultado= mysqli_query($link, $consulta);
    $row = mysqli_num_rows($resultado);
    if ($row!=0){
        $registro = mysqli_fetch_assoc($resultado);
        $emailBBDD=$registro["email"];
        if(validarPass($pass,$registro["pass"])){
//          echo "<br> La constraseña es correcta";
            $_SESSION["usuario"]=$registro["nombre"];
            header("Location: http://localhost:63342/PHP/septimoPHP/vista/dashboard.php");
        }else{
            $mensaje = "Error, clave incorrecta";
            header("Location:http://localhost:63342/PHP/septimoPHP/vista/login.php?mensaje=$mensaje");
//            echo "<br> Error, password no correcto";
        }
    }else{
        $mensaje = "No existe el usuario";
        header("Location:http://localhost:63342/PHP/septimoPHP/vista/login.php?mensaje=$mensaje");
//        echo "<br> No existe el usuario";
    }

}
//Funcion que valida el password ingresado con el password guardado en la BBDD
function validarPass($passFormulario, $passBBDD){
    //el metodo password verify($passwordFormulario, $passwordBBDD) y los compara, da un bool.
    $verificacion = password_verify($passFormulario, $passBBDD);
    if ($verificacion){
        return true;
    }else{
        return false;
    }

}
