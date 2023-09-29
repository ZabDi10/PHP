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
        <h1>Ponga los datos de su Camion</h1>
        <form class="formu"
        action="camion.php"
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
            <p>
                <label for="pesoMax">Peso Máximo</label>
                <input type="text" name="pesoMax" id="pesoMax">
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