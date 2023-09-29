<?php

class moto
{
    public $cc;
    public $marca;
    public $tipo;

    /**
     * @param $cc
     * @param $marca
     * @param $tipo
     */
    public function __construct($cc, $marca, $tipo)
    {
        $this->cc = $cc;
        $this->marca = $marca;
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param mixed $cc
     */
    public function setCc($cc): void
    {
        $this->cc = $cc;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }




}

$motoMami = new moto("1000cc","BMW","Autopista");
var_dump($motoMami);


function mostrarDatosMoto($unaMoto){
    echo "<br> Mi moto es ". $unaMoto -> getCc(). ". La marca es: " . $unaMoto-> getMarca(). ". El tipo es: " .$unaMoto-> getTipo();
}

mostrarDatosMoto($motoMami);

if ($_GET["cc"]!="" && $_GET["marca"]!="" && $_GET["tipo"]!=""){
    $color = $_GET["cc"];
    $potencia = $_GET["marca"];
    $marca = $_GET["tipo"];
    $nuevoMoto = new moto($color,$potencia,$marca);
    mostrarDatosMoto($nuevoMoto);
}else{
    header("Location: http://localhost:63342/PHP/octavoPHP/index1.php?msn=Los campos son obligatorios");
}