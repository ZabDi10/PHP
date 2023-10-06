<?php
    session_start();
class solicitud
{
    public $nombre;
    public $email;
    public $telefono;
    public $fecha;
    public $hora;
    public $seleccion;

    /**
     * @param $nombre
     * @param $email
     * @param $telefono
     * @param $fecha
     * @param $hora
     */
    public function __construct($nombre, $email, $telefono, $fecha, $hora, $seleccion)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->seleccion = $seleccion;
    }

    /**
     * @return mixed
     */
    public function getSeleccion()
    {
        return $this->seleccion;
    }

    /**
     * @param mixed $seleccion
     */
    public function setSeleccion($seleccion): void
    {
        $this->seleccion = $seleccion;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora): void
    {
        $this->hora = $hora;
    }


}
if ($_POST["nombre"]!="" && $_POST["email"]!="" && $_POST["telefono"]!=""&& $_POST["fecha"]!=""&& $_POST["hora"]!="" && $_POST["servicio"]!=""){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $seleccion = $_POST["servicio"];
    $solicitud = new solicitud($nombre, $email, $telefono, $fecha, $hora, $seleccion);
    $_SESSION["nombre"] = $solicitud -> getNombre();
    $_SESSION["email"] = $solicitud -> getEmail();
    $_SESSION["telefono"] = $solicitud -> getTelefono();
    $_SESSION["fecha"] = $solicitud -> getFecha();
    $_SESSION["hora"] = $solicitud -> getHora();
    $_SESSION["seleccion"] = $solicitud -> getSeleccion();
    header("Location: http://localhost:63342/PHP/citaPrevia/end.php");
}else{
    header("Location: http://localhost:63342/PHP/citaPrevia/index.php?mensaje=Por favor complete los campos del formulario");

}