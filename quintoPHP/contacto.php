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

<div class="formulario">

    <form method="get" action="lectura.php" class="formu">
        <h1>Formulario de Datos</h1>
        <?php
        if (isset($_GET["mns"])){
            echo $_GET['mns'];
        }
        ?>
        <div>
        <p>
            <label for="nombre">Nombre:</label>
            <input class="datos nombre" type="text" id="nombre" maxlength="50" name="nombre">
        </p>
    </div>
    <div>
        <p>
            <label for="email">Email:</label>
            <input class="datos email" type="email" id="email" name="email">
        </p>
    </div>
        <div>
            <p>
                <input type="submit" value="Enviar" class="boton" name="enviar">
            </p>
        </div>
    </form>
</div>
<?php
    include 'footer.php';
?>
</body>
<script src="js/script.js"></script>
</html>