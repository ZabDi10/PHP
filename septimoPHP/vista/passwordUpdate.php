<?php
//1. Verificar que el email existe

if (!empty($_GET["email"]) && !empty($_GET["pass"]) && $_GET["pass2"]) {
    include "../modelo/conexion.php";
    $link = conectar();
    $email = $_GET["email"];
    $pass = $_GET["pass"];
    $pass2 = $_GET["pass2"];
    //La consulta
    $consulta = "select * from usuario where email='$email'; ";
    $resultado = mysqli_query($link, $consulta);
    $row = mysqli_num_rows($resultado);

    //Comprobamos que haya registro
    if ($row!=0){
        $registro = mysqli_fetch_assoc($resultado);

        //Comprobamos que cumpla con el regex
        if (validarPass($pass) && $pass==$pass2){
//            echo "<br> Vamos a actualizar la BBDD";

            /******/

            $encriptacion = password_hash($pass, PASSWORD_BCRYPT);
            $actualizar = "update usuario set pass='$encriptacion' where email='$email'";
            $resultado = mysqli_query($link, $actualizar);

            if ($resultado){
                $mensaje = "Registro actualizado correctamente";
//                echo "<br> Registro actualizado correctamente";
            }else{
                $mensaje = "Error al actualizar";
//                echo "<br> Error al actualizar";
            }
        }else if(!validarPass($pass)){
            $mensaje = "La clave no coincide con los criteterios de seguridad";
//            echo"<br> La contraseña no coincide con los criteterios de seguridad";
        }else{
            $mensaje = "Los password no son iguales";
//            echo"<br> $mensaje2";
        }
    }else{
        $mensaje = "el email no existe";
//        echo "<br>" . $mensaje;
    }


}header("Location:http://localhost:63342/PHP/septimoPHP/vista/password.php?mensaje=$mensaje");

function validarPass($pass){
    $regex = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
    if (preg_match($regex, $pass)){
        return true;
    }else{
        return false;
    }

}
?>
