<?php
session_start();
if (!empty($_POST["nombre"]) && !empty($_POST["nivel"])&& !empty($_POST["telefono"]) && !empty($_POST["apellidos"])&& !empty($_POST["edad"])&& !empty($_POST["direccion"])&& !empty($_POST["dni"]) && !empty($_POST["email"])){
    //debo hacer una consulta a bbdd verificando que ese email existe y recuperar la contraseña de la bbdd para
    // compararla con la contraseña insertada en formulario
    //tambien me traigo el nombre para mostrarlo en caso positivo en dashboard
    include "../modelo/conexion.php";
    $link=conectar();
    $email=$_POST["email"];
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["edad"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["direccion"];
    $dni=$_POST["dni"];
    $nivel = $_POST["nivel"];
    $paso=true;
    $mensaje="";

    if (!validarEmail($email)) {
        $mensaje=$mensaje. "Email en formato incorrecto";

        $paso=false;
    }
    if (!validarEmailBBDD($email)){
        $mensaje=$mensaje."Error: El email ya existe";
        $paso=false;
    }

    if (!validarTelefono($telefono)){
        $mensaje=$mensaje." El telefono es incorrecto";
        $paso=false;
    }

    if (!validarDni($dni)){
        $mensaje=$mensaje." El dni es incorrecto";
        $paso=false;
    }


	if($paso) {
		$_SESSION["nombre"] = $nombre;
		$_SESSION["apellidos"] = $apellidos;
		$_SESSION["edad"] = $edad;
		$_SESSION["telefono"] = $telefono;
		$_SESSION["email"] = $email;
		$_SESSION["direccion"] = $direccion;
		$_SESSION["dni"] = $dni;
		$_SESSION["nivel"]= $nivel;

		$insertarAlumno = "insert into alumno (nombre,apellidos,edad, telefono, email, direccion, dni, id_estudios) values 
            ('$nombre','$apellidos',$edad,$telefono,'$email','$direccion','$dni',$nivel);";
		echo "<br>$insertarAlumno";
		$result = mysqli_query($link, $insertarAlumno);
	}
	if ($result){
        mysqli_close($link);
	    header("Location:http://localhost:63342/PHP/cepav3/vista/contacto.php?");
	}else{
        mysqli_close($link);
	    header("Location:http://localhost:63342/PHP/cepav3/vista/formulario.php?mensaje=$mensaje");
	    echo "El correo electrónico ya está registrado.";

	}
    mysqli_close($link);
}else{
    header("Location:http://localhost:63342/PHP/cepav3/vista/formulario.php?mensaje=Rellene los datos");
}




function validarEmail($email)
{
    // las expresiones regulares
    $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/";
    if (preg_match($regex,$email)){//compara que la expresion regular se cumple en variable $email
        return true;
    }else{
        return false;
    }
}


function validarTelefono($telefono) {
    $numeros ="/^[6789]\d{8}$/";
    if (preg_match($numeros,$telefono)) {
        return true;
    } else {
        return false;
    }
}

function validarDni($dni)
{
    $expresion = '/[0-9]{7,8}[A-Z]/';
    if(preg_match($expresion,$dni)){
        return true;
    }else{
        return false;
    }
}

function validarEmailBBDD($email){
    global $link;
    $consulta="select email from alumno where email='".$email."';";
    echo $consulta;
    $resultado=mysqli_query($link,$consulta); //ejecutar la consulta
    //verifica que existe y devuelve el nº de registros...
    $row=mysqli_num_rows($resultado);
    if ($row!=0){
        return false;
    }else{
        return true;
    }
}
//funcion que se llama para buscar si existe el email en la bbdd





