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
            mostrar("Las dos cadenas son iguales(-+no 0si) " . strcmp($cadena, $otraCadena));
            echo "<h4>strcasecmp</h4>";
            // compara con strcasecmp si da 0 es porque so iguales pero no toma en cuenta las mayus o minus
            mostrar("Las dos cadenas son iguales(-+no 0si) " . strcasecmp($cadena, $otraCadena));
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
            <h2>Dar formato a una salida de número</h2>
            <?php
                $numero=13254.853;
                mostrar("number_format() ->" . number_format($numero));
                mostrar("number_format($numero,1) -> Muestra 1 decimal -> " . number_format($numero,1));
                mostrar("number_format($numero,2,',','.') -> Muestra 1 decimal -> " . number_format($numero,2,","," "));

            ?>
            <h2>Dar formato a una cadena</h2>
            <?php
            /*
             * Sprintf devuelve el resultado en forma, mientras que printf muestra directamente el resultado (como la instruccion echo) y devuelve la longitud de la cadena.
             * Importante: siempre la cadenas de formato comienzan con el %seguido de 5 o menos
             *
             */
            //d -> digito f -> float c -> caracter
            //longitud de como se quiere que se muestre
            $numero = 23;
            mostrar("El $numero con un nuevo formato de ceros delante es ". sprintf("%05d",$numero));
            mostrar("El $numero con un nuevo formato de ceros delante es ". sprintf("%.2f",$numero));
            mostrar("El $numero con un nuevo formato de ceros delante es ". sprintf("%2f",$numero));
            $numero = sprintf("%f", $numero);//sprintf puede asignar a una variable el formato que le indiques
            mostrar("Ahora \$numero es -> $numero");
            $dia = 1;
            $mes = 6;
            $anio=2023;
            mostrar("La fecha es : " . sprintf("%02d/%02d/%04d", $dia,$mes,$anio));
            ?>
            <form method="get">
                <input type="date" name="fecha">
                <input type="submit" name="enviar" value="Enviar">
            </form>
            <?php
            if (isset($_GET["enviar"])){
                $fecha=$_GET["fecha"];
                mostrar($fecha);
            }
            //unset($variable) -> destruye la variable
            $cadena=sprintf("",$cadena);//genera y asigna el formato a $cadena
            printf("",$cadena)//muestra directamene el formato sin pasar por echo.
            ?>
            <h2>Estas funciones permiten eliminar los caracteres "blancos"</h2>
            <?php
            //Eliminar espacios en blanco del principio y final de una cadena
            $cadena=" Es un ejemplo   a        ";
            mostrar( "La cadena tiene ".strlen($cadena). " digitos");
            mostrar(trim($cadena));
            mostrar( "La cadena tiene ".strlen(trim($cadena)). " digitos");
            ?>
            <h2>Remplazar una cadena en otra</h2>
            <?php
            $cadena1=array("a","e","i","o","u","A","E","I","O","U","m","M");
            $cadena3="Porque negra tengo el alma";
            $cadena2=array("4","3","1","0","5","4","3","1","0","5","?","?");
            mostrar(str_replace($cadena1,$cadena2,$cadena3));
            //con el algoritmo anterior, creo una contraseña segura
            $cadena3 = "TotillamCebolla";
            mostrar(str_replace($cadena1,$cadena2,$cadena3)."$");
            $abc= array('a','b','c','d','e','f','g','h','i','j','k','l', 'ñ','m','n','o','p','q','r','s','t','u','v','w','x','y','z', ' ');
            $cifrado= array('4','b','$','2','3','✨','6','h','1','j','k','L', 'ñ','%','😶‍🌫️','0','·','9','r','s','t','5','v','w','!','♥','?', "__");
            $res = "El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja.";
             mostrar(str_replace($abc,$cifrado,$res)."$");
             $res = str_replace($abc,$cifrado,$res);
             mostrar(str_replace($cifrado,$abc,$res));
            ?>
            <h2>Calcula el hash md5 de un string</h2>
            <p>hash es utilizado para contraseñas, por ejemplo: Wordpress. </p>
            <?php
            $password= "Desarrollo";
            $newPass=md5($password);
            mostrar("La contraseña $password en MD5 es " . $newPass);
            ?>
            <h2>Convierte en array la cadena mediante el delimitador</h2>
            <?php
            $cadenaTexto = "es una prueba de una cadena con espacios";
            $arrayTexto = explode(" ",$cadenaTexto);
            var_dump($arrayTexto);
            echo "<br>";
            echo "<h2>Ejercicio</h2>";
            /*
             * Práctica :
             *
             * 1.Con el siguiente texto:
             * Frase de Gandhi sobre la forma de vivir "Vive como si fueras a morir mañana. Aprende como si fueras a vivir siempre".
             * a) muestra la primera linea todo en mayuscula ,la segunda la primera letra en mayuscula y el resto en minuscula
             * b)muestra toda la frase en minuscula
             * c)Dime cuantos caracteres tiene cada frase
             * d)Remplaza las letras segun el primer algoritmo realizado a->4etc
             * e)Calcula el md5 del título
             * f)Transforma las frases en array
             */
            $primeraF = "Vive como si fueras a morir mañana.";
            $segundaF = "Aprende como si fueras a vivir siempre.";
            $frase= $primeraF . $segundaF;
            mostrar("Apartado a) " . mb_strtoupper($primeraF) . " " . ucfirst(strtolower($segundaF)));
            mostrar("Apartado b) " . strtolower($primeraF). " " . strtolower($segundaF));
            mostrar("Apartado c) " . str_replace($cadena1,$cadena2,$frase));
            mostrar("Apartado e) " . md5($frase));
            mostrar("Apartado f) ");
            var_dump(explode(" ", $frase));
            echo "<br>";

            ?>
        </div>
        <div class="col-6 centrado">
            <h2>Comienza por str_starts_with</h2>
            <?php
            if (str_starts_with($frase,"F")){
                mostrar("La cadena comienza por F");

            }else{
                mostrar("La cadena comienza por " . substr($frase, 0, 1));
            }
            ?><h2>Termina por str_end_with</h2>
            <?php
            if (str_ends_with($frase,"e")){
                mostrar("La cadena termina con una e");

            }else{
                mostrar("La cadena termina por " . substr($frase, strlen($frase)-2, 1));
            }
            ?>
            <h2>Ejercicio</h2>
<!--            Crea un array de al menos 10 nombres que   comiencen por a,b,c y luego muestra solo los que comiencen con b-->
            <?php
            $nombres = array("Antoñito","Anita","Alonso","Berengario","Bonifacio","Barbara","Carlos","Catwoman","Carmen","Diego");
            foreach ($nombres as $nom){
                if (str_starts_with($nom,"B")||str_starts_with($nom,"b")){
                    mostrar($nom);
                }
            }
            ?>
            <h2>Extraer una cadena en una subcadena</h2>
            <?php
            $cadena = "Hola, como te llamas";
            mostrar($cadena);
            mostrar(substr($cadena, 0,4));
            mostrar(substr($cadena, 6)); // si no indico la longitud, trae desde el indice el resto de la cadena
            ?>
            <h2>Repetir una cadena un determinado número de veces -> str_repeat</h2>
            <?php
                mostrar(str_repeat("Hola-", 10));
            ?>
        </div>
    </div>
    <div class="col-6 cuadroR2">

    </div>
    <div class="col-6 cuadroL2">

    </div>
</body>
</html>