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
    <form id="login" action="validarLogin.php" method="post" class="formulario login" novalidate>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <input type="submit" value="Login" class="boton">
    </form>
    <p>Si no tiene usuario puede registrarse <a href="registro.php" title="Registro de usuario">Aqui</a></p>
    <?php
    if (isset($_GET["mensaje"])){
        echo "<p class='error'>". $_GET['mensaje'] ."</p> ";
    }
    ?>
</div>
<script src="js/script2.js"></script>
</body>
</html>