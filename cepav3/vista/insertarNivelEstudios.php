
<?php
    session_start();
    include "header.php";
    if (!isset($_SESSION["usuario"])){
        header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
    }
    include "../modelo/conexion.php";
    $link=conectar();
    if (isset($_POST["nivel_estudios"])){
        if (!empty($_POST["nivel_estudios"])){
            $nivelEstudios=$_POST["nivel_estudios"];
            $insertar="insert into nivel_estudios (nombre_estudios) values ('$nivelEstudios');";
            $resultadoInsert=mysqli_query($link,$insertar);
            if($resultadoInsert){
                echo "<div class=\"alert alert-success centrarAlerta\">Registro realizado correctamente</div>";
            }else{
                echo "<div class=\"alert alert-danger centrarAlerta\">Ha habido un error contacte con el administrador</div>";
            }
        }else{
            echo "<div class=\"alert alert-danger centrarAlerta\">Introduzca un nivel de estudios valido</div>";
        }
    }

    $consulta="Select * from nivel_estudios";

    $resultado=mysqli_query($link,$consulta);
    echo "<div class='lista4'><ul class='lista4'>";
    while($row=mysqli_fetch_array($resultado))
    {
        echo "<li>".$row['nombre_estudios']."</li>";
    }
    echo "</ul></div>";
?>
<hr>
<h2>Nuevo Registro de Estudios</h2>
<form action="" method="post">
    <p><label for="nombre">Nombre:</label>
        <input type="text" name="nivel_estudios" id="nivel_estudios"></p>
    <input type="submit" value="Registrar">
    <br>
</form>
<?php

mysqli_free_result($resultado);

mysqli_close($link);
?>
<a href="dashboard.php">Volver</a>
<a href="updateNivelEstudios.php">Actualizar</a>


