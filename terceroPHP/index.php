<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>28/08</title>
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
    echo "<br>";

    echo "<hr>";
    echo "<h2>empty()</h2>";
    //Verificar que una variable tiene valor
    $nombre = "Maria";
    if (empty($nombre)){
        echo "El Nombre es $nombre";
    }else{
        echo "Desconocido";

    }
    echo "<br>";
    echo "<hr>";
    echo "<h2>isset()</h2>";
    if (isset($nom)){
        echo "La variable \$nom esta definida";
    }else{
        echo "La variable \$nom no esta definida";
    }
    echo "<hr>";
    echo "<h2>unset()</h2>";
    unset($nombre);
    if (isset($nombre)){
        echo "La variable \$nombre esta definida";
    }else{
        echo "La variable \$nombre se borro";
    }
    echo "<hr>";
    echo "<h2>Parse</h2>";
    $valor="12345"; //Tipo cadena
    echo "<br> \$valor ";
    var_dump($valor); //$valor string(5) "12345"

    $valor = (int) $valor; //Aqui se convierte a entero
    echo "<br> \$valor ";
    var_dump($valor); //$valor int(12345)

    echo "<br>";
    $valorString = "1.58Abc"; //cadena
    $valorString = (float) $valorString; //casteo a float
    var_dump($valorString); //float(1.58) se carga lo no numerico

    echo "<hr>";
    echo "<h2>Metodos de cadena</h2>";
    $cadena = "esta es una cadena";
    echo "<br> $cadena ";
    $cadena2 = ucfirst($cadena); //La primera mayus
    echo "<br> $cadena2 " . "/ucfirst()"; //Esta es una cadena
    $cadena2 = strtoupper($cadena); //Mayus toda la cadena
    echo "<br> $cadena2 " . "/strtoupper()"; //Esta es una
    $cadena2 = strtolower($cadena2); //Minus toda la cadena
    echo "<br> $cadena2 " . "/strtolower()"; //Esta es una cadena
    $valorString = strtolower($valorString); //Error del programador
    echo "<br> $valorString"; //1.58

    echo "<hr>";
    echo "<h2>Metodos de validación</h2>";
    echo "<p>is_string()/is_int()/is_float()/etc</p>";
    $nuevoValor = 23523453;
    if (is_string($nuevoValor)){
        echo " \$nuevoValor es una cadena <br>";
    }else{
        echo "\$nuevoValor no es una cadena <br>";
    }
    if (is_int($nuevoValor)){
        echo " \$nuevoValor es un entero <br>";
    }else{
        echo "\$nuevoValor no es un entero <br>";
    }
    $telefono = "926845980";
    if (is_numeric($telefono)){
        echo "El telefono es correcto <br>";
    }else{
        echo "El telefono no es correcto <br>";
    }
    echo "<hr>";
    echo "<h2>Metodos de redondeo round()</h2>";
    $valorDecimal = 59.98;
    echo "El valor de \$valorDecimal = " . round($valorDecimal);
?>
</body>
</html>