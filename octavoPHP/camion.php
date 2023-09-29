<?php
    include_once  ("coche.php");


class camion extends coche{ //La clase camion hereda atributos y metodos de la clase coche

    public $pesoMaximo;

    public function __construct($color, $potencia, $marca, $pesoMaximo)
    {
        parent::__construct($color, $potencia, $marca);
        $this->pesoMaximo = $pesoMaximo;
    }

    /**
     * @return mixed
     */
    public function getPesoMaximo()
    {
        return $this->pesoMaximo;
    }

    /**
     * @param mixed $pesoMaximo
     */
    public function setPesoMaximo($pesoMaximo): void
    {
        $this->pesoMaximo = $pesoMaximo;
    }



}

//Creamos el objeto Camion que hereda las caracteristicas del coche
$miCamion = new camion("Negro","3.0cv","Peugeot","450Kg");
mostrarDatosCoche($miCamion);
echo ". Y puede llevar un peso máximo de ". $miCamion->getPesoMaximo();

if ($_GET["color"]!="" && $_GET["potencia"]!="" && $_GET["marca"]!="" && $_GET["pesoMax"]!="") {
    $color = $_GET["color"];
    $potencia = $_GET["potencia"];
    $marca = $_GET["marca"];
    $pesoMaximo = $_GET["pesoMax"];
    $nuevoCoche = new camion($color,$potencia,$marca,$pesoMaximo);
    mostrarDatosCoche($nuevoCoche);
    echo ". Y puede llevar un peso máximo de ". $nuevoCoche->getPesoMaximo();
}else{
    header("Location: http://localhost:63342/PHP/octavoPHP/formularioCamion.php?msn=Los campos son obligatorios");
}
?>