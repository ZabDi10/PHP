<?php
$mns="";

//if (isset($_GET['enviar'])) {
    //    echo "Hola $nombre, tienes $edad años!";
    if($_GET['nombre']){
        $nombre = $_GET['nombre'];
    }else{
        $mns = "<li>El nombre es obligatorio</li>";
    }
    if($_GET['email']){
        $email = $_GET['email'];
    }else{
        $mns = $mns .  "<li>El email es obligatorio</li>";
    }

    if ($mns!=""){
        header(header:"Location:http://localhost:63342/PHP/quintoPHP/contacto.php?mns=$mns");
    }else{
        header(header: "Location:http://localhost:63342/PHP/quintoPHP/registro.php?nombre=$nombre&email=$email");
    }

//}

//if (isset($_POST['enviar2'])){
//    $apellidos = $_POST['apellidos'];
//    $altura = $_POST['altura'];
//    echo "Tu apellido es $apellidos, y mides $altura";
//}
?>

