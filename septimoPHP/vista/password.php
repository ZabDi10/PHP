<?php
include "header.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convertir a hash</title>
</head>
<body>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-activo">Cambio de Contraseña</span>
    </div>
</div>
<div class="caja-blanca">
<form action="passwordUpdate.php" method="get" class="login">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="pass" placeholder="Contraseña" required>
    <input type="password" name="pass2" placeholder="Repetir Contraseña" required>
    <input type="submit" class="boton">
</form>
    <h4>Las contraseñas deben cumplir los siguientes criterios:</h4>
    <ul class="lista">
        <li>Longitud 8 caracteres</li>
        <li>Al menos una mayúscula</li>
        <li>Al menos una minúscula</li>
        <li>Al menos un número</li>
    </ul>
    <?php
    if (isset($_GET["mensaje"])){
        echo "<p class='error'>". $_GET['mensaje'] ."</p> ";
    }
    ?>


</div>
</body>
</html>
