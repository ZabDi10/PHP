<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>
<?php
include 'header.php';
?>
<h1>Formulario de Datos</h1>
<div class="formulario">

    <form method="get" action="lectura.php">
    <div>
        <p>
            <label for="nombre">Nombre:</label>
            <input class="datos" type="text" id="nombre" maxlength="50" name="nombre">
        </p>
    </div>
    <div>
        <p>
            <label for="edad" >Edad:</label>
            <input class="datos" type="number" id="edad" name="edad" min="0" max="100" step="1">
        </p>
    </div>
        <div>
            <p>
                <input type="submit" value="Enviar" class="boton" name="enviar">
            </p>
        </div>
    </form>
        <form method="post" action="lectura.php">
        <div>
            <p>
                <label for="apellidos">Apellidos:</label>
                <input class="datos" type="text" id="apellidos" maxlength="50" name="apellidos">
            </p>
        </div>
        <div>
            <p>
                <label for="altura" >Altura en cm:</label>
                <input class="datos" type="number" id="altura" name="altura" min="0" max="200" step="1">
            </p>
        </div>
    <div>
        <p>
            <input type="submit" value="Enviar" class="boton" name="enviar2">
        </p>
    </div>


</form>
</div>
<?php
    include 'footer.php';
?>
</body>
</html>