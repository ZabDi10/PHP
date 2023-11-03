<?php

if (!empty($_POST["email"] && !empty($_POST["pass"]))){
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
    if ($paso){
        $insertarUser="insert into usuario (email,pass) values ('" . $email . "','" . $pass . "')";
        include "../modelo/conexion.php";
        $link = conectar();
        $result = mysqli_query($link,$insertarUser);
        if ($result){
            echo "<br> Alta realizado correctamente";
        }else{
            echo "<br> Existe un error al realizar el alta";
        }
    }
}

function validarEmail($email){
    $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (preg_match($regex, $email)){
        return true;
    }else{
        return false;
    }

}function validarPass($pass){
    $regex = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
    if (preg_match($regex, $pass)){
        return true;
    }else{
        return false;
    }

}
