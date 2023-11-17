<?php

class Vehiculo
{
public $matricula;
public $bastidor;
public $modelo;
public $cilindradas;
public $potencia;
public $precio;
public $fechaFabricacion;
public $extras;
public $observaciones;
public $urlFoto;
public $idMarca;
public $idColor;
public $idMotor;
public $Descripcion;
public $metalizado;

    /**
     * @param $matricula
     * @param $bastidor
     * @param $idMarca
     */
    public function __construct($matricula, $bastidor, $idMarca)
    {
        $this->matricula = $matricula;
        $this->bastidor = $bastidor;
        $this->idMarca = $idMarca;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getBastidor()
    {
        return $this->bastidor;
    }

    /**
     * @param mixed $bastidor
     */
    public function setBastidor($bastidor): void
    {
        $this->bastidor = $bastidor;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getCilindradas()
    {
        return $this->cilindradas;
    }

    /**
     * @param mixed $cilindradas
     */
    public function setCilindradas($cilindradas): void
    {
        $this->cilindradas = $cilindradas;
    }

    /**
     * @return mixed
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * @param mixed $potencia
     */
    public function setPotencia($potencia): void
    {
        $this->potencia = $potencia;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getFechaFabricacion()
    {
        return $this->fechaFabricacion;
    }

    /**
     * @param mixed $fechaFabricacion
     */
    public function setFechaFabricacion($fechaFabricacion): void
    {
        $this->fechaFabricacion = $fechaFabricacion;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param mixed $observaciones
     */
    public function setObservaciones($observaciones): void
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @return mixed
     */
    public function getUrlFoto()
    {
        return $this->urlFoto;
    }

    /**
     * @param mixed $urlFoto
     */
    public function setUrlFoto($urlFoto): void
    {
        $this->urlFoto = $urlFoto;
    }

    /**
     * @return mixed
     */
    public function getIdColor()
    {
        return $this->idColor;
    }

    /**
     * @param mixed $idColor
     */
    public function setIdColor($idColor): void
    {
        $this->idColor = $idColor;
    }

    /**
     * @return mixed
     */
    public function getIdMotor()
    {
        return $this->idMotor;
    }

    /**
     * @param mixed $idMotor
     */
    public function setIdMotor($idMotor): void
    {
        $this->idMotor = $idMotor;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param mixed $Descripcion
     */
    public function setDescripcion($Descripcion): void
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getMetalizado()
    {
        return $this->metalizado;
    }

    /**
     * @param mixed $metalizado
     */
    public function setMetalizado($metalizado): void
    {
        $this->metalizado = $metalizado;
    }

    /**
     * @return mixed
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * @param mixed $idMarca
     */
    public function setIdMarca($idMarca): void
    {
        $this->idMarca = $idMarca;
    }
}