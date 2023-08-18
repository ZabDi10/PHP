<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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

    echo 'He\' is a boy <br> ';
    echo "El dijo \"hola\" <br> ";
    echo 'El dijo "HoLa" <br> ';
    //Depende de que comillas se usan unas cosas u otras

    echo "El usuario continua con el nombre de $usuario <br> "; // lo reconoce con "" pero con '' no
    echo "El usuario continua con el nombre de \$usuario <br>";
    echo "\$usuario = $usuario <br>";
    $fruta = "manzana";
    echo "Una $fruta no es cara <br>"; //Una manzana no es cara
    echo "10 kilos de {$fruta}s si serían caras <br>";
    //Si se quiere mostrar el nombre con llaves
    echo "10 kilos de {{$fruta}s} si serían caras <br>";
    echo $fruta[2] . "<br>" ;
    $abe = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    echo $abe[12] . "<br>"; //ojo a las Ñ
    //Podemos sumar una cadena con un entero
    $numero = "2";
    echo "El resultado es " . (2+$numero) . "<br>";
?>
</body>
<script src="js/script.js"></script>
</html>