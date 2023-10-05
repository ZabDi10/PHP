<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fin</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<?php
session_start();
if (!empty($_SESSION["nombre"]) && !empty($_SESSION["email"]) && !empty($_SESSION["telefono"]) && !empty($_SESSION["fecha"]) && !empty($_SESSION["hora"] && !empty($_SESSION["seleccion"]))){

    $nombre = $_SESSION["nombre"];
    $email = $_SESSION["email"];
    $telefono = $_SESSION["telefono"];
    $fecha = $_SESSION["fecha"];
    $hora = $_SESSION["hora"];
    $seleccion = $_SESSION["seleccion"];

}else{
    header("Location: http://localhost:63342/PHP/citaPrevia/index.html?mensaje=Por favor complete los campos del formulario");
}
?>
<body>
    <div class="formulario">
        <p>Gracias por solicitar su Cita
            <?php
            echo "<strong>".$nombre."</strong>";
            ?>. Recibira un email en la dirección
            <?php
            echo "<strong>".$email."</strong>";
            ?> para confirmar su cita con el Departamento de
            <?php
            echo "<strong>".$seleccion."</strong>";
            ?></p>

        <p>Datos de la Cita:</p>
        <p>Fecha:
            <?php
            echo "<strong>".$fecha."</strong>";
            ?> </p>
        <p>Hora:
            <?php
            echo "<strong>".$hora."</strong>";
            ?></p>
        <div class="caja4">
            <a class="boton2" href="http://localhost:63342/PHP/citaPrevia/index.html">Salir</a>
        </div>
    </div>
</body>
</html>