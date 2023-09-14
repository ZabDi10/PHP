<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
<!--    Necesitamos de este meta para que funcione el media query-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="col-6 cuadro">

    </div>
    <div class="col-6 cuadroL">

    </div>
    <div class="row">
        <div class="col-6 centrado">
            <h1>Manipular los números</h1>
            <p>Las funciones más útiles para manipular los numeros son las siguientes</p>
            <h2>Valor absoluto de un número</h2>
            <?php
//            Funcion para enviar a imprimir con salto de lineas
            $numero = -365;
            function mostrar($cad){ // paso de parametros
                echo $cad. "<br>";
            }
            //Enviar el avlor absoluto de -365
            mostrar("El valor absoluto de -365 es ".abs($numero));
            mostrar("El valor absoluto de 4587 es ".abs(4587));

            ?>
            <h2>Redondeo de un número al entero superior.</h2>
            <?=mostrar("El numero 6456.56 redondeado al superior es ". ceil(6456.56));?>
            <h2>Redondeo de un número al entero inferior.</h2>
            <?=mostrar("El numero 6456.56 redondeado al superior es ". floor(6456.56));?>
            <h2>Cociente de la division entera de dos enteros.</h2>
            <?=mostrar(" 15/3 es = " . intdiv(15, 3));?>
            <h2>Máximos y Mínimos de un conjunto de valores.</h2>
            <?php
                $juan = 15;
                $pedro = 17;
                $maria = 19;
                mostrar("La mayor edad entre Juan, Pedro y María tiene " . max($juan, $pedro,$maria). " años");
            mostrar("La menor edad entre Juan, Pedro y María tiene " . min($juan, $pedro,$maria). " años");
            mostrar("Menor valor entre a g y es " . min("a", "g", "y"));
            mostrar("Mayor valor entre a g y es " . max("a", "g", "y"));
            ?>
            <h2>Números aleatorios: devuelve un número aleatorio entero entre el limite mínimo y el limite máximo.</h2>
            <?php
            //si no le indicamos ni el minimo ni maximo, nos da un numeor aleatorio cualquiera
            mostrar("Numero aleatorio sin delimitar min y max: " . rand());
            mostrar("Numero aleatorio desde el 1 a 100: " . rand(1,100));
            ?>
            <h2>La función round(): redondea un número.</h2>
            <?php
            $numero= 17.32;
            mostrar($numero . " redondeado con la funcion round() es ". round($numero));
            $numero= 2.5;
            mostrar($numero . " redondeado con la funcion round() es ". round($numero));
            //PHP_ROUND_HALF_UP (valor por defecto): redondeado superior (2.5 da 3 en un redondeado al entero).
            //PHP_ROUND_HALF_DOWN: Redondeo inferior (2.5 da 2 en un redondeado al entero)
            //PHP_ROUND_HALF_ODD: redondeo al numero impar más proximo
            mostrar("Utilizando PHP_ROUND_HALF_UP de $numero el resultado es ". round($numero, 0,1));
            mostrar("Utilizando PHP_ROUND_HALF_DOWN de $numero el resultado es ". round($numero, 0,2));
            mostrar("Utilizando PHP_ROUND_HALF_EVEN de $numero el resultado es ". round($numero, 0,3));
            mostrar("Utilizando PHP_ROUND_HALF_ODD de $numero el resultado es ". round($numero, 0,4));
            //es mas fácil utilizar ceil y floor
            ?>



        </div>
        <hr>
        <div class="col-6 centrado">
            <h1>Manipulacion de cadenas</h1>
            <h2>Las funciones mas utiles para la maniputalcion de cadenas de caracteres son las siguientes:</h2>
            <h2>Conocer la longitud de una cadena strlen (string lenght)</h2>
            <?php
            $cadena="En un lugar de la Mancha, donde...";
            mostrar("$cadena tiene ". strlen($cadena). " caracteres");
            ?>
            <h2>Convertir una cadena en minúscula</h2>
            <?=mostrar(strtolower($cadena));
            mostrar(strtoupper($cadena));
            $cadena=strtoupper($cadena);
            ?>
            <h2>Poner la primera letra en mayúscula</h2>
            <h4>"Cuidado porque de antes viene en mayus todo luego no se va a ver bien"</h4>
            <?=
            mostrar(ucfirst(strtolower($cadena)));
            ?>
            <h2>Poner cada palabra de la cadena la primera en mayuscula</h2>
            <?=
            mostrar(ucwords(strtolower($cadena)));
            ?>
            <h2>Poner la primera letra en minuscula</h2>
            <?=
            mostrar(lcfirst($cadena));
            ?>
            <h2>Comparar dos cadenas teniendo en cuenta o no las mayúsculas y minúsculas</h2>
            <?php
            $otraCadena = "En un lugar de la Mancha, donde...";

            //compara las dos cadenas strcmp compara mayus y minus si no son iguales da un numero negativo
            echo "<h4>strcmp</h4>";
            mostrar("Las dos cadenas son iguales(-no +si) " . strcmp($cadena, $otraCadena));
            echo "<h4>strcasecmp</h4>";
            // compara con strcasecmp si da 0 es porque so iguales pero no toma en cuenta las mayus o minus
            mostrar("Las dos cadenas son iguales(-no +si) " . strcasecmp($cadena, $otraCadena));
            //Comparar con un if y decir si son iguales o no
            echo "<h4>Comparar</h4>";
            $otraCadena=strtoupper($otraCadena);
            echo $cadena;
            echo "<br>";
            echo $otraCadena;
            echo "<br>";
            if(strcmp($cadena,$otraCadena)!=0){
                mostrar("Las cadenas no son iguales, o podrían ser iguales pero difieren en mayusculas y minusculas");
            }else{
                mostrar("Las cadenas son iguales");
            }
            /*
             * strcmp es sensible a las mayusculas y minusculas,
             * mientras que strcasecmp no lo es.
             *
             */
            ?>


        </div>
    </div>
    <div class="col-6 cuadro">

    </div>
    <div class="col-6 cuadroL">

    </div>
</body>
</html>