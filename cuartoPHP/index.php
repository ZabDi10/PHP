<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

    echo "<h1>24/08</h1>";
    echo "<h2>Metodos de matrices</h2>";
    $paises = ['España', 'Portugal', 'Italia', 'Francia', 'Alemania', 'Malta', 'Reino Unido'];
    echo "<h3>count()/in_array</h3>";
    echo "Mi matriz tiene " . count($paises) . " paises. <br>"; //Muestra cuantos elementos tiene una matriz
    //Saber si existen un valor en el array

    $consulta = in_array('Alemania', $paises);
    //Operador ternario hay que almacenarlo en una variable o en parentesis en echo
    $resultado = $consulta == 1 ? 'true' : 'false';
    echo "Alemania esta en mi array? => " . $resultado;
    echo "<hr>";
    echo "<h3>array_search()</h3>";
    $indice = array_search('Alemania', $paises);
    echo "<br> La poscion de Alemania en mi Array es $indice <br>";
    $indice = array_search('Holanda', $paises);
    echo "<br> La poscion de Holanda en mi Array es $indice ";
    var_dump($indice);
    echo "<br> ¿Existe Holanda en el array? " . ($indice!=false?"Si existe y es el indice $indice":"No existe");
    //Reemplazar valores en un array => arrayOriginal y arrayRemplazo
    //Array_replace(arrayOriginal, arrayRemplazo)
    //Se le puede dar valor de posicion a los arrays
    $paisesReemplazo=[7=>"Suiza",9=>"Suecia"];
    echo "<br>";
echo "<br>";
    $arrayNuevo = array_replace($paises, $paisesReemplazo);
    var_dump($arrayNuevo);
    //array con dos indices ... CA y CC
    $comunidades = ["Castilla la Mancha" => "Toledo","Andalucia"=>"Sevilla", "Aragon" => "Zaragoza", "Castilla y Leon" => "Valladolid", "Cataluña"=>"Barcelona","Murcia"=>"Murcia"];
echo "<br>";
echo "<br>";
    var_dump($comunidades);
    $remplazo = ["Castilla y Leon"=>"Salamanca"];
    $comunidades=array_replace($comunidades, $remplazo);
echo "<br>";
echo "<br>";
    var_dump($comunidades);

    //Ejercicios: Mostrar tipo tabla... lo mejor que se pueda... el array de comunidades...
    echo "<table> 
    <thead> 
    <td>Comunidad</td><td>Capital</td>
    </thead>";

    function comunidad($comunidades){
    foreach($comunidades as $comu => $elemento){
        echo "<tr> <td>$comu</td> <td>$elemento</td></tr> ";
    }}

    echo comunidad($comunidades) . "</table>";

    echo "<hr>";
    echo "<h2>Ejercicio Array</h2>";
    //Darle estilos a la tabla
    //Crear una tabla de productos y precios, ejemplo: producto de Adidas min 10 productos!!
    //Muestralo en una tabla formateada ... con estilos


?>
</body>
</html>