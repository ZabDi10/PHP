<?php
include "header.php";
$nombre = $_GET['nombre'];
$email = $_GET['email'];
?>
<h1>Prueba que se llama</h1>
<div class="registro">
    <h2>Gracias <i><?=$nombre?></i> por contactar con nosotros</h2>
    <p>En breve recibiras un email a <i><?=$email?></i></p>
</div>
<?php
$destinatario = $email;
$asunto = "Bienvenido a nuestra Web";
$cuerpo = '
<html>
<head>
   <title>Bienvenido a nuestra Web</title>
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
<h1>Hola amigos!</h1>
<p>
<b>Bienvenidos a mi correo electrónico de prueba</b>. Estoy encantado de tener tantos lectores. Este cuerpo del mensaje es del artículo de envío de mails por PHP.

</p>
</body>
</html>
';

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
$headers .= "From: $email\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
$headers .= "Reply-To: irina@ceatformacion.com\r\n";

//ruta del mensaje desde origen a destino
$headers .= "Return-path: irina@ceatformación.com\r\n";

//direcciones que recibián copia
//	$headers .= "Cc: direccion@dominio.com\r\n";

//direcciones que recibirán copia oculta
//	$headers .= "Bcc: direccion@dominio.com,direccion@dominio.com\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)
?>
<?php
include "footer.php";
?>
