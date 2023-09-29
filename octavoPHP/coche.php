<?php

/*
 * La Clase es el molde que va a definir nuestros objetos
 * En términos de programacion, define los datos y la lógica de los objetos
 * Dentro de la Clase tenemos los atributos y los métodos
 *
 *
 * */
class coche
{
    /*ATRIBUTOS*/
    public $color;//La palabra resevada public define que el atributo se puede acceder desde cualquier otro
                    //Archivo del proyecto.
    public $potencia;
    public $marca;


    //Metodo constructor: Funcion que es utilizada en el momento que se cree un objeto.
    //Instancia de un objeto: Son las diferentes llamadas o creaciones de objetos de una clase.
    /**
     * @param $color
     * @param $potencia
     * @param $marca
     */
    public function __construct($color, $potencia, $marca)
    {
        $this->color = $color;
        $this->potencia = $potencia;
        $this->marca = $marca;
    }


    //get: coger - obtener
    //set: asignar
    //Metodos genericos getter y setter
    //public function getColor(){
    //  return $this -> marca;
    //}

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
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
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
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
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }





}

$miCoche = new coche("Rojo","1.6cv","Ford");
$cocheAdrian = new coche("Negro","1.2cv","Hyundai");
//Aqui el coche que definimos en el constructor, cambia de valor en la siguiente linea
$cocheAdrian -> color="Azul";
var_dump($miCoche);
echo "<br>";
var_dump($cocheAdrian);
//Utilizando los getter y setter llamamos los métodos para asignar o recuperar valores
$cocheAdrian->setColor("Naranja");
echo "<br> El Coche de Adrian es ahora ". $cocheAdrian -> getColor();
echo "<br> Mi coche es de ". $miCoche -> getColor(). " y tiene una potencia de " . $miCoche -> getPotencia(). ". La marca es: " .$miCoche -> getMarca();

//Actividad: Crea una instancia de la clase coche, que llamaremos $CocheAlumno1 que tenga como valores verde, 2.0cv y Audi, luego muestra todos los datos en pantalla.

$cocheAlumno1 = new coche("Verde", "2.0cv","Audi");
mostrarDatosCoche($cocheAlumno1);

//Crear funciones o metodos para asuntos repetitivos

function mostrarDatosCoche($unCoche){
    echo "<br> Mi coche es ". $unCoche -> getColor(). " y tiene una potencia de " . $unCoche-> getPotencia(). ". La marca es: " .$unCoche-> getMarca();
}

$segundoCoche = new coche("Blanco","3.0cv","BMW");
mostrarDatosCoche($segundoCoche);

if ($_GET["color"]!="" && $_GET["potencia"]!="" && $_GET["marca"]!=""){
    $color = $_GET["color"];
    $potencia = $_GET["potencia"];
    $marca = $_GET["marca"];
    $nuevoCoche = new coche($color,$potencia,$marca);
    mostrarDatosCoche($nuevoCoche);
}else{
    header("Location: http://localhost:63342/PHP/octavoPHP/index.php?msn=Los campos son obligatorios");
}
?>