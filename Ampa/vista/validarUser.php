<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
if (!empty($user) && !empty($pass)){

    include "../modelo/conexion.php";
    $link=conectar();

    $consulta="select * from familia where usuario='".$user."';";
    echo "<br>$consulta";

    $resultado=mysqli_query($link,$consulta);
    $row=mysqli_num_rows($resultado);

    if ($row!=0){
        $registro=mysqli_fetch_assoc($resultado);
        $userBBDD=$registro["usuario"];
        $mensaje = "El nombre de usuario ".$userBBDD." ya existe. Ponga otro";
        mysqli_close($link);
        header("Location:http://localhost:63342/PHP/Ampa/vista/formsEnd.php?mensaje=$mensaje");

    }else{
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $_POST['pass'];
        mysqli_close($link);
        header("Location:http://localhost:63342/PHP/Ampa/modelo/ampa.php");
    }
}else{
    $mensaje = "Debe rellenar todos los campos";
    echo $mensaje;
    header("Location:http://localhost:63342/PHP/Ampa/vista/formsEnd.php?mensaje=$mensaje");
}

