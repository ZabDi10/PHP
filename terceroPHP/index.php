<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "<hr>";

echo "<h2>Ver tipo de datos</h2>";
//Para ver el tipo de datos y el valor que contiene se usa la funcion dump
$numerico=3245;
$decimal=234234.23432;
$bool = true;
$cadena = "Hola que tal";
     echo "Con var_dump() se ve el tipo de dato y valor ";
     echo "<br>";
    var_dump($numerico);
    echo "<br>";
    var_dump($decimal);
    echo "<br>";
    var_dump($bool);
    echo "<br>";
    var_dump($cadena);
    echo "<br>";

    $paises = ["Alemania", "España", "Portugal", "Francia", "Malta", "Reino Unido"];
    var_dump($paises);
?>
</body>
</html>