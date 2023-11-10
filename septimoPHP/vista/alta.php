<?php
global $link;
include "../modelo/conexion.php";
$link = conectar();
if (!empty($_POST["email"] && !empty($_POST["pass"] && !empty($_POST["nombre"])))){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $paso = true;

    if (validarEmail($email)){
        echo "Email validado correctamente";
    }else{
        echo "Email en formato incorrecto";
        $paso=false;
    }
    if (validarPass($pass)){
        echo "<br> Password cumple los requisitos <br>";
    }else{
        echo "<br> Aumente la seguridad <br>";
        $paso=false;
    }
    //funcion que se llama para buscar si existe el email en la bbdd
    if (!validarEmailBBDD($email)){
        $mensaje = "El email existe";
        echo "El email existe";
        $paso = false;
    }
    if ($paso){
        $passSeguro = password_hash($pass, PASSWORD_BCRYPT);
        $insertarUser="insert into usuario (email,pass,nombre) values ('" . $email . "','" . $passSeguro . "','$nombre')";

        $result = mysqli_query($link,$insertarUser);
        if ($result){
            echo "<br> Alta realizado correctamente";
            header("Location:http://localhost:63342/PHP/septimoPHP/vista/login.php?");
        }else{
            $mensaje = "Existe un error al realizar el alta";
            echo "<br> Existe un error al realizar el alta";
        }
        mysqli_close($link);

    }header("Location:http://localhost:63342/PHP/septimoPHP/vista/login.php?mensaje=$mensaje");
}

function validarEmail($email){
    $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (preg_match($regex, $email)){
        return true;
    }else{
        return false;
    }

}
function validarPass($pass){
    $regex = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
    if (preg_match($regex, $pass)){
        return true;
    }else{
        return false;
    }

}
//Funcion para validar que el email no exista en la bbdd
function validarEmailBBDD($email){
    global $link;
    $consulta = "select * from usuario where email='$email'; ";
    $resultado = mysqli_query($link,$consulta);
    //Verifica que existe y devuelve el nº registro
    $numRegistro = mysqli_num_rows($resultado);
    if ($numRegistro!=0){//Ya existe ese email
        return false;
    }else{
        return true;
    }
}
