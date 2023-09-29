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
            <input type="submit" value="Enviar">
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