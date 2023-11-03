<?php
include "header.php";
?>

<html>
<body>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-activo">Iniciar Sesion</span>
    </div>
</div>
<div class="caja-blanca">
    <form id="login" action="alta.php" method="post" class="formulario login" novalidate>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <hr>
        <input type="submit" value="Login" class="boton">
    </form>
</div>
<script src="js/script2.js"></script>
</body>
</html>