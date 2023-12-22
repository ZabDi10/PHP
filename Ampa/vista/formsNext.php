<?php
include "header.php";
session_start();
include "../modelo/conexion.php";

$tutor1 = $_POST['tutor1'];
$tutor2 = $_POST['tutor2'];
$address = $_POST['address'];

if(isset($_POST['phoneTutor1']) && isset($_POST['phoneTutor2']) && isset($_POST['emailTutor1']) && isset($_POST['emailTutor2'])) {
    $phoneTutor1 = $_POST['phoneTutor1'];
    $phoneTutor2 = $_POST['phoneTutor2'];
    $emailTutor1 = $_POST['emailTutor1'];
    $emailTutor2 = $_POST['emailTutor2'];
    $paso=true;
    $mensaje="";


     if (!validarEmail($emailTutor1) || empty($emailTutor1)) {
         $mensaje=$mensaje. "Email Tutor en formato incorrecto";
         $paso=false;
     }
     if (!validarEmailBBDD($emailTutor1)){
         $mensaje=$mensaje."Error: El Email ya existe";
         $paso=false;
     }

     if (!validarTelefono($phoneTutor1) || empty($phoneTutor1)){
         $mensaje=$mensaje." El telefono es incorrecto";
         $paso=false;
     }
    if (!validarPhoneBBDD($phoneTutor1)){
        $mensaje=$mensaje."Error: El telefono ya existe";
        $paso=false;
    }
    if ($paso) {
        $_SESSION['tutor1'] = $tutor1;
        $_SESSION['tutor2'] = $tutor2;
        $_SESSION['address'] = $address;
        $_SESSION['phoneTutor1'] = $phoneTutor1;
        $_SESSION['phoneTutor2'] = $phoneTutor2;
        $_SESSION['emailTutor1'] = $emailTutor1;
        $_SESSION['emailTutor2'] = $emailTutor2;
    }else{
        header("Location:http://localhost:63342/PHP/Ampa/vista/forms.php?mensaje=$mensaje");
    }
}
function validarEmail($email)
{
    // las expresiones regulares
    $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/";
    if (preg_match($regex,$email)){//compara que la expresion regular se cumple en variable $email
        return true;
    }else{
        return false;
    }
}
function validarTelefono($telefono) {
    $numeros ="/^[6789]\d{8}$/";
    if (preg_match($numeros,$telefono)) {
        return true;
    } else {
        return false;
    }
}
function validarEmailBBDD($email){
    $link=conectar();
    $consulta="select * from familia where email_tutor1='".$email."';";
    $resultado=mysqli_query($link,$consulta); //ejecutar la consulta
    //verifica que existe y devuelve el nº de registros...
    $row=mysqli_num_rows($resultado);
    if ($row!=0){
        return false;
    }else{
        return true;
    }
}
function validarPhoneBBDD($phone){
    $link=conectar();
    $consulta="select * from familia where telefono_tutor1=$phone;";
    $resultado=mysqli_query($link,$consulta); //ejecutar la consulta
    //verifica que existe y devuelve el nº de registros...
    $row=mysqli_num_rows($resultado);
    if ($row!=0){
        return false;
    }else{
        return true;
    }
}

?>

<body>
<div class="container-div">
    <h2>Ponga los nombres de sus hijos</h2>
    <form class="forms" method="GET" action="formsEnd.php">
        <label for="name1">Nombre:</label><br>
        <input type="text" id="name1" name="name1"><br>

        <label for="course1">Curso:</label>
        <select id="course1" name="course1">
            <option value=""></option>
            <?php
            $link=conectar();
            $queryNivel="select * from curso;";
            $result2=mysqli_query($link,$queryNivel);
            while($fila=mysqli_fetch_assoc($result2)){
                echo "<option  value=" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
            }
            mysqli_free_result($result2)
            ?>
        </select><br>

        <input type="submit" value="Submit">
    </form>
    <span>Si tiene mas hijos ponganse en contacto con nosotros</span>
    <?php

    ?>
</div>
</body>