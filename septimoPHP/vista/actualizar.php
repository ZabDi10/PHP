<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:http://localhost:63342/PHP/septimoPHP/vista/login.php?mensaje = Usuario no autorizado");
}
include "header.php";
if (!empty($_GET['id'])){
    include "../modelo/conexion.php";
    $link= conectar();
    $query = "SELECT * FROM cliente WHERE id=" . $_GET['id'];
    $result = mysqli_query($link, $query);
    if ($result){
        $row=mysqli_fetch_assoc($result);
        $dni = $row['dni'];
        $id = $row['id'];
        $nombre = $row['nombre'];
        $email = $row['email'];
        $telefono = $row['telefono'];
        $apellido1 = $row['apellido1'];
        $apellido2 = $row['apellido2'];
        $edad = $row['edad'];
    }
}else{
    header("Location:http://localhost:63342/PHP/septimoPHP/vista/dashboard.php?");
}

?>
<body>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-activo">Actualizar Cliente</span>
    </div>
</div>
<div class="caja-blanca">
    <h3></h3>
    <form method="post" id="formulario" class="formulario" action="actualizarRegistro.php">
        <div class="input-izquierda">
            <input type="text" name="id" id="id" hidden value="<?=$id?>">
            <input type="text" name="dni" id="dni" placeholder="DNI" required value="<?=$dni?>">
            <p>00000000A</p>
            <input type="email" id="email" name="email" PLACEHOLDER="EMAIL" required value="<?=$email?>">
            <p>ejemplo@ejemplo.es</p>
            <input type="text" name="nombre" id="nombre" placeholder="NOMBRE" required value="<?=$nombre?>">
            <p>Alba</p>
            <input type="number" id="edad" name="edad" PLACEHOLDER="EDAD" required min="18" max="80" value="<?=$edad?>">
            <p>Indica tu edad. Mínimo 18 años</p>
        </div>
        <div class="input-derecha">
            <input type="text" name="telefono" id="telefono" placeholder="TELEFONO MÓVIL" required value="<?=$telefono?>">
            <p>000 000 000</p>
            <input type="email" id="email2" name="email2" PLACEHOLDER="CONFIRMA TU EMAIL" required value="<?=$email?>">
            <p>ejemplo@ejemplo.es</p>
            <input type="text" id="apellido1" name="apellido1" PLACEHOLDER="PRIMER APELLIDO" required value="<?=$apellido1?>">
            <p>Ej: García </p>
            <input type="text" id="apellido2" name="apellido2" PLACEHOLDER="SEGUNDO APELLIDO" required value="<?=$apellido2?>">
            <p>Ej: Navarro</p>
        </div>
        <div class="acciones">
            <p class="centrado">
                <input type="submit" value="Actualizar" class="boton" style="cursor: pointer" name="enviar">
            </p>
        </div>
        <div class="acciones">
            <?php
            $mensaje="";

            if (isset($_GET["mensaje"])){
                $mensaje = $_GET["mensaje"];
                echo $mensaje;
            }

            ?>
        </div>
    </form>
</div>
</body>
