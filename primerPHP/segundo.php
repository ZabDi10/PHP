<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/*
 * Creamos 3 variables en php y luego lo mostramos en el html
 *
 */
$nombre = 'Diego Zaballos';
$fecha = date('d/m/Y'); //Fecha del dia
$hora = date('H:i:s');  //hora
$precio = 5;
$cantidad = 10;
/*
 * Nombre que respete las siguientes reglas:

    empezar con una letra o guión bajo (_);

    a continuación, debe contener letras, números o guiones bajos.
 *
 */
$_edad = 15;
$Edad = 25;

// Constantes
define('NOMBRE' ,'Diego Zaballos');
const OTRONOMBRE = 'Alumno de DATW';

?>
<p>
    Hola <?=$nombre;?>
</p>
<p> Hoy es <?=$fecha;?> y la hora es <?=$hora;?></p>
<p> El total es  <?= $precio + $cantidad?> Euros</p>
<?php
echo "El nombre de la constante es => ", NOMBRE, "<br>" , "el nombre del alumno es => ", OTRONOMBRE;
?>
</body>
</html>