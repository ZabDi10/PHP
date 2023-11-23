<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banca Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="row ancho anchoL">
    <div class="col-6">
        <img src="img/banca.png" alt="Banca Online" class="logo">
    </div>
    <div class="col-6 derecha">
            <span class="material-symbols-outlined icono-verde">
            contact_support
            </span>
        <span class="ayuda">
                ¿Te ayudamos?
            </span>
    </div>
</div>
<div class="caja-negra anchoL">
    <div class="numeros">
        <span class="numero-activo">Iniciar Sesion</span>
    </div>
</div>
<div class="caja-blanca anchoL altoL">
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