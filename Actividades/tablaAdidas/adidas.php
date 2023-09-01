<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla adidas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$zapatillas = ["Air Adidas" => "200","Punkdidas"=>"100", "AdiCyber" => "150", "Spectro" => "120", "Liberty"=>"100","Canvas"=>"90", "PinkLove"=>"150", "Adidas 5000"=>"300", "Strech"=>"90", "Collab Conver"=>"150", "IbaiDidas"=>"200"];
var_dump($zapatillas);
echo "<h2>Listado de precio de zapatillas</h2>";
echo "<br>";
echo "<br>";

//Darle estilos a la tabla
//Crear una tabla de productos y precios, ejemplo: producto de Adidas min 10 productos!!
//Muestralo en una tabla formateada ... con estilos
echo "<table>
    <tr class='tra'>
    <th>Zapatilla</th><th>Precio</th>
    </tr>";

    function zapatilla($zapatillas){
    foreach($zapatillas as $zapa => $precio){
    echo "<tr class='tra'> <td>$zapa</td> <td>$precio \$</td></tr> ";
    }}

    echo zapatilla($zapatillas) . "</table>";
?>

<h2>Lista de productos con imagen</h2>

<?php
$productos2 = array(
            array("img/1.avif", "Adidas Super", 110),
            array("img/2.avif", "Adidas Hyper", 130),
            array("img/3.avif", "Adidas Goods", 140),
    );
for ($fila=0; $fila<3; $fila++){
    echo "Fila Nº $fila <br>";
    echo "<list><ul></ul>";
    for ($col=0;$col<3;$col++){
        echo "<li>";
        if($col==0){
            echo"<img src='".$productos2[$fila][$col]."'></li>";
        }else{
            echo $productos2[$fila][$col]."</li>";
        }
    }
}
?>
<h2>Tabla de productos con imagen</h2>
<table>
    <thead class='tabla2'>
    <td>Producto</td>
    <td>Descripcion</td>
    <td>Precio</td>
    </thead>
    <?php
    $productos2 = array(
            array("img/1.avif", "Adidas Super", 110),
            array("img/2.avif", "Adidas Hyper", 130),
            array("img/3.avif", "Adidas Goods", 140),
    );
    for($fila=0; $fila<3; $fila++){
        echo"<tr class='tabla2'>";
        for($col=0;$col<3;$col++){

            if ($col==0){
                echo "<td><img src='".$productos2[$fila][$col]. "' ></td>";
            }else{
                echo "<td class='izq'>".$productos2[$fila][$col]."</td>";
            }


        }
        echo "</tr>";
    }
    ?>
</table>

<h2>Tabla de productos con imagen for each</h2>
<table>
    <thead class='tabla2'>
    <td>Producto</td>
    <td>Descripcion</td>
    <td>Precio</td>
    </thead>
    <?php
    $productos2 = array(
            array("img/1.avif", "Adidas Super", 110),
            array("img/2.avif", "Adidas Hyper", 130),
            array("img/3.avif", "Adidas Goods", 140),
    );
    foreach ($productos2 as $filas){
        echo "<tr>";
        foreach ($filas as $indice=>$col){
            if ($indice==0){
               echo "<td><img src=$col></td>"  ;
            }else{
                echo "<td class='izq'>$col</td>";
            }

        }
        echo "</tr>";
    }
    ?>
</table>
//Actividad: Crea una tabla de las comunidades autonomas, capital y poblacion (al menos 5) y muestralo en la lista, con for y con foreach
<h2>Tabla de Comunidades</h2>
<table>
    <thead class='tabla2'>
    <td>Comunidad Autonoma</td>
    <td>Capital</td>
    <td>Poblacion</td>
    </thead>
    <?php
    $productos2 = array(
            array("Castilla la Mancha", "Toledo", "86.906"),
            array("Madrid", "Madrid", "3.339.931"),
            array("Barcelona", "Barcelona", "1.660.435"),
            array("Valencia", "Valencia", "809.501"),
            array("Andalucia", "Sevilla ", "8.600.441"),
    );
    for($fila=0; $fila<5; $fila++) {
        echo "<tr class='tabla2'>";
        for ($col = 0; $col < 3; $col++) {
            echo "<td class='izq'>" . $productos2[$fila][$col] . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
    <h2>Tabla de Comunidades foreach</h2>
    <table>
        <thead class='tabla3'>
        <td>Comunidad Autonoma</td>
        <td>Capital</td>
        <td>Poblacion</td>
        </thead>
        <?php
        $productos2 = array(
            array("Castilla la Mancha", "Toledo", "86.906"),
            array("Madrid", "Madrid", "3.339.931"),
            array("Barcelona", "Barcelona", "1.660.435"),
            array("Valencia", "Valencia", "809.501"),
            array("Andalucia", "Sevilla ", "8.600.441"),
        );
        foreach($productos2 as $fila) {
            echo "<tr class='tabla3'>";
            foreach ($fila as $col) {
                echo "<td class='izq'>" . $col . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>