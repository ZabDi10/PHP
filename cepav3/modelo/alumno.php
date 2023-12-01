<?php
session_start();
	class alumno
	{
       public $nombre;
	   public $apellidos;
	   public $edad;
	   public $telefono;
	   public $email;
	   public $direccion;
	   public $dni;

		/**
		 * @param $nombre
		 * @param $apellidos
		 * @param $edad
		 * @param $telefono
		 * @param $email
		 * @param $direccion
		 * @param $dni
		 */
		public function __construct($nombre, $apellidos, $edad, $telefono, $email, $direccion, $dni)
		{
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			$this->edad = $edad;
			$this->telefono = $telefono;
			$this->email = $email;
			$this->direccion = $direccion;
			$this->dni = $dni;
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
		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}

		/**
		 * @return mixed
		 */
		public function getApellidos()
		{
			return $this->apellidos;
		}

		/**
		 * @param mixed $apellidos
		 */
		public function setApellidos($apellidos)
		{
			$this->apellidos = $apellidos;
		}

		/**
		 * @return mixed
		 */
		public function getEdad()
		{
			return $this->edad;
		}

		/**
		 * @param mixed $edad
		 */
		public function setEdad($edad)
		{
			$this->edad = $edad;
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
		public function setTelefono($telefono)
		{
			$this->telefono = $telefono;
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
		public function setEmail($email)
		{
			$this->email = $email;
		}

		/**
		 * @return mixed
		 */
		public function getDireccion()
		{
			return $this->direccion;
		}

		/**
		 * @param mixed $direccion
		 */
		public function setDireccion($direccion)
		{
			$this->direccion = $direccion;
		}

		/**
		 * @return mixed
		 */
		public function getDni()
		{
			return $this->dni;
		}

		/**
		 * @param mixed $dni
		 */
		public function setDni($dni)
		{
			$this->dni = $dni;
		}


	}

	if (!empty($_SESSION["nombre"]) && !empty($_SESSION["apellidos"]) && !empty($_SESSION["edad"]) && !empty
		($_SESSION["telefono"]) && !empty($_SESSION["email"])  && !empty($_SESSION["direccion"]) && !empty
		($_SESSION["dni"])){
		$unAlumno=new alumno ($_SESSION["nombre"],$_SESSION["apellidos"],$_SESSION["edad"],$_SESSION["telefono"],$_SESSION["email"],$_SESSION["direccion"],$_SESSION["dni"]);

		include "conexion.php";
		$link=conectar();
		$consultaInsert="insert into alumno (nombre,apellidos,edad,telefono,email,direccion,dni) values ('"
			.$unAlumno->nombre."','".$unAlumno->apellidos."','".$unAlumno->edad."','".$unAlumno->telefono."',"
			.$unAlumno->email.",'".$unAlumno->direccion."',".$unAlumno->dni.");";
		//echo $consultaInsert; comprobar la consulta
		$resultado=mysqli_query($link,$consultaInsert);
		if ($resultado){
			echo "<br>Registro insertado correctamente.";
		}else{
			echo "<br>Existe un error al insertar el Registro.";
		}



	}
