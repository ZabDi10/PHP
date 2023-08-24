<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>23/08</title>
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
    echo "<h2>Casting</h2>";
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

    echo "<hr>";
    echo "<h1>24/08</h1>";
    echo "<h2>Ambito de las variables</h2>";

    //Ambito de las variables
    //Ambito local se refiere que su utilidad y valor esta dentro de una funcion

    function variableLocal(){
        $miVariable = 5; //Variable de ambito local
        echo "Mi variable \$miVarible tiene valor de $miVariable";
    }
    variableLocal();
    echo "<br>";
    $miVariableG = 15;
    function variableGlobal(){
        global $valorDecimal, $miVariableG;
        $miVariableG += $valorDecimal;
        echo "Ahora \$miVaraibleG vale $miVariableG";

    }
    variableGlobal();
    echo "<br> Ahora \$miVariableG fuera de la funcion tiene un valor de $miVariableG";
    echo "<br>";
    variableGlobal();
    echo "<br> Ahora \$miVariableG fuera de la funcion tiene un valor de $miVariableG";//Puedo manejarla fuera de la funcion;

    //Variables static su valor se ve afectado cada vez que se invoca la función. Es convertir una variable local en usable cuando su valor se invoque nuevamente la funcion

    function variableStatic(){
        static $edad = 18;
        echo "<br> La edad es $edad";
        $edad++;
    }
    variableStatic();
    variableStatic();
    variableStatic();
    unset($edad);//Despues que no le necesito puedo eliminarla -> No, porque es estatica.
    variableStatic();

    //Ejercicio: Declara tres funciones como las anteriores, donde exista
    // 1) una que sus variables locales sean $x y $y, realiza una suma entre ellas.
    // 2) declara una variable llamada $yy y declarara dentro de la funcion como global e incrementala en 2, muestra su valor fuera de la función.
    // 3) Crea una funcion llamanda puntuacion, y dentro declara una variable static llamada puntos, incrementala cada vez que se invoque y muestra su valor.

    echo "<hr>";
    echo "<h2>EJERCICIO</h2>";
    function local(){
        $x = 4;
        $y = 6;
        echo "\$x + \$y = " . $x+$y. "<br>";
    }
    local();
    $yi = 4;
    function globall(){
        global $yi;
        $yi++;
        $yi++;
    }

    globall();
    echo "\$yi es igual a $yi";

    function puntuacion(){
        static $puntos = 0;
        echo "<br> Tienes $puntos puntos";
        $puntos++;
    }
    puntuacion();
    puntuacion();

?>
</body>
</html>