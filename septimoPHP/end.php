<?php
    session_start(); //abrimos la sesion
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["apellido2"]) && !empty($_POST["edad"])){

            $_SESSION["nombre"]=$_POST["nombre"];
            $_SESSION["apellido"]=$_POST["apellido"];
            $_SESSION["apellido2"]=$_POST["apellido2"];
            $_SESSION["edad"]=$_POST["edad"];

    }else{
        header("Location:http://localhost:63342/PHP/septimoPHP/next.php?mensaje=Por favor complete los campos del formulario");
    }
    include "header.php";
?>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-inactivo">1</span>
        <span class="material-symbols-outlined">
                arrow_forward
            </span>
        <span class="numero-inactivo">2</span>
        <span class="material-symbols-outlined">
                arrow_forward
            </span>
        <span class="numero-activo">3</span>
    </div>
</div>
<div class="caja-blanca">
    <h3>¡Terminamos!</h3>
    <div>
    <p>El alta en <span class="numero-activo">BANCA ONLINE</span> se ha realizado exitosamente. Recibira en breve un email para relaizar una videollamada para confirmar los datos</p>
    <h3>¡Gracias por dejarnos ser tu banco!</h3>
    </div>
    <hr>
    <a href="cliente.php" class="boton">Finalizar</a>
</div>


