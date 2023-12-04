<?php
session_start();
include "header.php";
if (!isset($_SESSION["usuario"])){
    header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
}
?>
<body>
    <h1>ACTUALIZAR ESTUDIOS</h1>
    <?php
        include "../modelo/conexion.php";
        $link=conectar();
        //Actualizar un registro seleccionado

        if($_POST){

            $consultaUP="update nivel_estudios set nombre_estudios='".$_POST['nombre_estudios']."' where ID=".$_POST["id"];

            $resultado=mysqli_query($link,$consultaUP);

            if($resultado){
                echo "<br>Registro actualizado con éxito";
            }else{
                echo "<br>Un error ha ocurrido en la actualización";
            }
        }

        if(isset($_GET["opcion"]) && $_GET["opcion"]=="delete"){
            $consultaDelete="delete from nivel_estudios where id=".$_GET["id"].";";

            echo "<br>".$consultaDelete;

            $resultadoDelete=mysqli_query($link,$consultaDelete);

            if ($resultadoDelete){
                echo "<br>Registro eliminado correctamente";
            }else{
                echo "<br>Existe un error al borrar el registro";
            }
        }

        //consulta de todos los registros
        $consulta="select * from nivel_estudios";
        $resultado=mysqli_query($link,$consulta);
    ?>
    <table>
        <tr>
            <th>Estudios</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($resultado)){
            echo"<tr>";
            echo"<td>";
            echo $row["nombre_estudios"];
            echo"</td>";
            echo"<td>";

            echo"<a href=\"?id=".$row["id"] ."&opcion=update\">Actualizar</a> / " ; //Actualiza por medio de la url

            echo"<a href=\"?id=".$row["id"]."&opcion=delete\">Borrar</a>"; //Borrar por medio de la url

            echo"</td>";
            echo"</tr>";
        }
        ?>
    </table>
    <?php
        if(isset($_GET['id'])){
            //Consulta del id que ha sido seleccionado
            $consultaXid = "select * from nivel_estudios where id=" . $_GET['id'] . ";";
            $rowRes = mysqli_query($link, $consultaXid); //Tenemos guardado el registro que se ha seleccionado
            $rowQ = mysqli_fetch_array($rowRes); //Obtenemos un array asociativo con el registro seleccionado
            if ($_GET["opcion"]=="update"){
                ?>

                <!-- Formulario de Actualización -->
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$rowQ["id"]?>">
                    <p><label for="nombre_estudios">Nivel de Estudios:</label>
                        <input type="text" name="nombre_eestudios" id="nombre_estudios" value="<?=$rowQ["nombre_estudios"]?>"></p>
                    <input type="submit" value="Registrar">
                </form>
                <?php
            }
        }
        mysqli_close($link);
    ?>
    <a href="insertarNivelEstudios.php">Volver</a>
</body>

