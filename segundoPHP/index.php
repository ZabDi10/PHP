<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>18/08</title>
</head>
<body>
<?php
echo "Hola";
const SERVIDOR = 'https://google.es';
$usuario = 'juan';

// Se puede concatenar con . y ,
echo "<p>El servidor que mas visito es " . SERVIDOR . "</p>";
echo "El usuario que utilizo es " , $usuario;
?>
<h1>
    Muestra un texto
</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci autem blanditiis commodi eligendi ex ipsum, iure laboriosam molestiae saepe sed soluta, velit voluptate voluptatibus. Amet doloribus ea eius impedit libero?</p>
<?php
    // Otro codigo PHP
    $usuario = 123456;
    echo "<p> Ahora mi usuario es " . ($usuario + 0.01). "</p>"; //Le puedo realizar operaciones

    echo "<hr>";
    echo "<h2>Tipo de comillas</h2>";
    echo 'He\' is a boy <br> ';
    echo "El dijo \"hola\" <br> ";
    echo 'El dijo "HoLa" <br> ';
    //Depende de que comillas se usan unas cosas u otras

    echo "El usuario continua con el nombre de $usuario <br> "; // lo reconoce con "" pero con '' no
    echo "El usuario continua con el nombre de \$usuario <br>";
    echo "\$usuario = $usuario <br>";

    echo "<hr>";
    echo "<h2>Ejercicio de la manzana</h2>";
    $fruta = "manzana";
    echo "Una $fruta no es cara <br>"; //Una manzana no es cara
    echo "10 kilos de {$fruta}s si serían caras <br>";
    //Si se quiere mostrar el nombre con llaves
    echo "10 kilos de {{$fruta}s} si serían caras <br>";
    echo $fruta[2] . "<br>" ;

    echo "<hr>";
    echo "<h2>abc</h2>";
    $abe = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    echo $abe[13] . "<br>"; //ojo a las Ñ
    //Podemos sumar una cadena con un entero
    $numero = "2";
    echo "El resultado es " . (2+$numero) . "<br>";
    echo "<hr>";

    //resultados en booleanos segun valor
    echo "<h2>Resultados de if</h2>";

    if ($usuario=="Irina")
        echo "El nombre es Irina, Es verdadero <br>";
    else
        echo "El nombre no es Irina, es falso <br>";

    $numero = -5;
    if ($numero==0)
        echo $numero . " false <br>";
    else
        echo $numero . " true <br>";

    echo "<hr>";
    //Declaracion o conversion de datos
    echo "<h2>Conversion de datos/Indicando el tipo de dato que sale</h2>";
    echo "Float " . (float) (0.2545*5875)*10 . "<br>";
    echo "Int " . (int) (0.2545*5875)*10 . "<br>";
    $otroValor = (int) 5;
    echo $otroValor;
    echo "<hr>";
    echo "<h2>Matrices</h2>";
    $matrizDeNumeros[]=array();
    $matrizDeNumeros[0]=1;
    for ($i=0;$i<10;$i++){
        $matrizDeNumeros[$i]=$i*10 ;
    }
    print_r($matrizDeNumeros);
    echo "<br>";
    for ($i=0;$i<=30;$i++){
        if ($i<15)
            $matrizDeNumeros[$i]="a";
        else
            $matrizDeNumeros[$i]="b";
    }
    print_r($matrizDeNumeros);
    echo "<br>";
    $matrizABC[] = array();
    for ($i=0;$i<=27;$i++) {
        $matrizABC[$i] = $abe[$i];
    }
    print_r($matrizABC);

    echo "<hr>";
    echo "<h2>Tablas de multiplicar</h2>";
    for ($i=0;$i<=10;$i++){
        for ($u=0;$u<=10;$u++){
            echo "$i x $u = ". $i*$u ."<br>";
        }
        echo "<br>";
    }
    echo "<hr>";
    echo "<h2>Dia 23/08/2023</h2>";
    echo "<h2>Tablas de multiplicar con while</h2>";
    echo "<p>Atentos a esto que con while al terminar el segundo bucle x se queda con 10 luego hay que resetear x siempre que salga del segundo bucle</p>";

    $i = 1;

    while($i<=10){
        $x = 0;
        while($x<=10){
            echo "$i x $x = " . $i * $x . "<br>";
            $x++;
        }
        $i++;
        echo "<br>";
    }


?>
</body>
<script src="js/script.js"></script>
</html>