<?php
include "header.php";
?>

<html>
<body>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-activo">Registro Usuario</span>
    </div>
</div>
<div class="caja-blanca">
    <form id="login" action="alta.php" method="post" class="formulario login" novalidate>
        <input type="text" name="nombre" placeholder="Nombre y Apellidos" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <input type="submit" value="Login" class="boton">
    </form>
    <h4>Las contraseñas deben cumplir los siguientes criterios:</h4>
    <ul class="lista">
        <li>Longitud 8 caracteres</li>
        <li>Al menos una mayúscula</li>
        <li>Al menos una minúscula</li>
        <li>Al menos un número</li>
    </ul>
</div>
<script src="js/script2.js"></script>
</body>
</html>