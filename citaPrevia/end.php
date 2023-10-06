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
    header("Location: http://localhost:63342/PHP/citaPrevia/index.php?mensaje=Por favor complete los campos del formulario");
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
<!--Envio de email recordar que $email tiene que ser la variable-->
<?php
$destinatario = $email;
$asunto = "Bienvenido a nuestra Web";
$cuerpo = '
<html>
<head>
   <title>Confirmacion de la Cita</title>
   <style>
   h1{
   color: darkred;
   }
   p{
   color: dimgray;
   }
</style>
</head>
<body>
<h1>Hola '. $nombre . '</h1>
<p>
<b>Recuerda que tienes una cita el '. $fecha . ' A las ' . $hora . '</b>. En el departamento de '. $seleccion .'.

</p>
<p>Gracias por solicitar una cita con nosotros.</p>
</body>
</html>
';

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
$headers .= "From: dzaballos@ceatformacion.com\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
$headers .= "Reply-To: irina@ceatformacion.com\r\n";

//ruta del mensaje desde origen a destino
$headers .= "Return-path: dzaballos@ceatformacion.com\r\n";

//direcciones que recibián copia
//	$headers .= "Cc: direccion@dominio.com\r\n";

//direcciones que recibirán copia oculta
//	$headers .= "Bcc: direccion@dominio.com,direccion@dominio.com\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)
?>