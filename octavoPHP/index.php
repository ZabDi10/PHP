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
        <form
        action="coche.php"
        method="get"
        >
            <p>
                <label for="color">Color</label>
                <input type="text" name="color" id="color">
            </p>
            <p>
                <label for="potencia">Potencia</label>
                <input type="text" name="potencia" id="potencia">
            </p>
            <p>
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca">
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