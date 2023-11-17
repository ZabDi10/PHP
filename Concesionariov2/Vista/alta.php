<?php
global $link;
include "../modelo/conexion.php";
$link = conectar();
if (!empty($_POST["matricula"]) && !empty($_POST["marca"]) && !empty($_POST["bastidor"])){
    $matricula = $_POST["matricula"];
    $marca = $_POST["marca"];
    $motor = $_POST["motor"];
    $cc = $_POST["cilindrada"];
    $color = $_POST["color"];
    $descripcion = $_POST["descripcion"];
    $bastidor = $_POST["bastidor"];
    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];
    $potencia = $_POST["potencia"];
    $metal = $_POST["metalizado"];
    $fecha = $_POST["fecha"];
    $observacion = $_POST["observaciones"];

    echo "$matricula $marca $motor $cc $color $descripcion $bastidor $modelo $precio $potencia $metal $fecha $observacion";
    $insert = "Insert into automovil (matricula, id_marca, id_motor, id_color, descripcion, bastidor, modelo, precio, fechaFabricacion, observaciones) values 
('$matricula', $marca, $motor, '$cc', $color, '$descripcion', '$bastidor', '$modelo', $precio, '$fecha', '$observacion')";
    $result = mysqli_query($link,$insert);
    if ($result){
        $mensaje =  "Alta realizado correctamente";
        header("Location:http://localhost:63342/PHP/EvaluacionConcesionario/Vista/index.php?mensaje=$mensaje");
    }else{
        $mensaje = "Existe un error al realizar el alta";
        header("Location:http://localhost:63342/PHP/EvaluacionConcesionario/Vista/index.php?mensaje=$mensaje");
    }
    mysqli_close($link);

}else{
    header("Location:http://localhost:63342/PHP/EvaluacionConcesionario/Vista/index.php?mensaje=Rellene bien los datos");
}
