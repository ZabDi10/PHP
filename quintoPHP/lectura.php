<?php
if (isset($_GET['enviar'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    echo "Hola $nombre, tienes $edad años!";
}
if (isset($_POST['enviar2'])){
    $apellidos = $_POST['apellidos'];
    $altura = $_POST['altura'];
    echo "Tu apellido es $apellidos, y mides $altura";
}
?>
