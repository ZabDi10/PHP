<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POO con formulario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div
    class="container">
        <h1>Ponga los datos de su Moto</h1>
        <form class="formu"
        action="moto.php"
        method="get"
        >
            <p>
                <label for="cc">Cc</label>
                <input type="text" name="cc" id="ccr">
            </p>
            <p>
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca">
            </p>
            <p>
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" id="tipo">
            </p>
            <div class="botones">
                <a class="enviar" href="index.html"><</a>
                <input class="enviar" type="submit" value="Enviar">
            </div>
        </form>
        <?php
        $msn="";
        if(isset($_GET["msn"])){
            echo "<p class='error'>" . $_GET["msn"] . "</p>";
        }
        ?>
    </div>
</body>
</html>