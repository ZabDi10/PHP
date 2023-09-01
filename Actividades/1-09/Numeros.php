<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numeros</title>
</head>
<body>
<?php
echo "<h1>Actividad Mostrar Numeros</h1>";
echo "<h3>1 al 1000 pares no</h3>";
for ($i=0; $i<=1000; $i++){
    echo "\$i = $i <br>";
    $i++;
}
echo "<h3>1000 al 0</h3>";
for ($i=1000; $i>=0; $i--){
    echo "\$i = $i <br>";

}
?>
<h3>1 al 1000 pares no Con JS</h3>
<div id="numeros"></div>
<h3>1000 al 0 Con JS</h3>
<div id="numeros2"></div>
</body>
<script src="js/script.js"></script>
</html>