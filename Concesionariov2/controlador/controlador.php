<?php
if (isset($_POST["enviar"])){
    if (!empty($_POST['matricula']) && !empty($_POST['bastidor']) && !empty($_POST['marca'])){
        $matricula = $_POST['matricula'];
        $bastidor = $_POST['bastidor'];
        $modelo = $_POST['modelo'];
        $precio = $_POST['precio'];
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $observaciones = $_POST['observaciones'];
        $marca = $_POST['marca'];
        $color = $_POST['color'];
        $metalizado = $_POST['metalizado'];
        $motor = $_POST['motor'];
        $cilindrada = $_POST['cilindrada'];
        $potencia = $_POST['potencia'];
        $foto = $_POST['foto'];
        $paso = true;
        include "../servicios/validaciones.php";
        if (validarMatricula($matricula)) {
            echo "entra Matricula";
        }else{
            echo "no entra Matricula";
        }
        if (validarBastidor($bastidor)) {
            echo "entra bastidor";
        }else{
            echo "no entra bastidor";
        }

        include "../Modelo/Vehiculo.php";
        $unVehiculo = new Vehiculo($matricula, $bastidor, $marca);
        $unVehiculo -> setPotencia($potencia);
        $unVehiculo -> setCilindradas($cilindrada);
        $unVehiculo -> setFechaFabricacion($fecha);
//        $unVehiculo -> setExtras();
        $unVehiculo -> setDescripcion($descripcion);
        $unVehiculo -> setObservaciones($observaciones);
        $unVehiculo -> setIdColor($color);
        $unVehiculo -> setIdMotor($motor);
        $unVehiculo -> setModelo($modelo);
        $unVehiculo -> setMetalizado($metalizado);
        $unVehiculo -> setUrlFoto($foto);
        $unVehiculo -> setPrecio($precio);
        var_dump($unVehiculo);
        if ($paso){
            $query = "INSERT INTO automovil( matricula, bastidor, modelo, precio, fechaFabricacion, observaciones, foto, descripcion,id_marca, id_color, id_motor) VALUES ('".$unVehiculo->getMatricula()."','".$unVehiculo->getBastidor()."','".$unVehiculo->getModelo()."',".$unVehiculo->getPrecio().",'".$unVehiculo->getFechaFabricacion()."','".$unVehiculo->getObservaciones()."','foto','".$unVehiculo->getDescripcion()."',".$unVehiculo->getIdMarca().",".$unVehiculo->getIdColor().",".$unVehiculo->getIdMotor().")";
            include "../Modelo/conexion.php";
            $link = conectar();
            $resultado = mysqli_query($link, $query);
            if ($resultado){
                echo "Se ha dado de alta";
            }else{
                echo "No se ha podido dar de alta";
            }
        }
    }


}else{



}
