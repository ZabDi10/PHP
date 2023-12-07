<?php
session_start();
include "header.php";
if (!isset($_SESSION["usuario"])){
    header("Location:http://localhost:63342/PHP/cepav3/vista/loginAdmin.php?mensaje=Usuario no autorizado");
}
?>
<body>
	<h1 class="centrarTitulo">ACTUALIZAR RELACIÓN</h1>
	<?php
		include "../modelo/conexion.php";
		$link=conectar();
		//Actualizar un registro seleccionado

        if($_POST){

            $consultaUP="update relacion set nombre='".$_POST['nombre']."' where ID=".$_POST["id"];

            $resultado=mysqli_query($link,$consultaUP);

            if($resultado){
                echo "<div class=\"alert alert-success centrarAlerta\">Registro Actualizado</div>";
            }else{
                echo "<br>Un error ha ocurrido en la actualización";
            }
        }

        if(isset($_GET["opcion"]) && $_GET["opcion"]=="delete"){
            $consultaDelete="delete from relacion where ID=".$_GET["id"].";";

			echo "<br>".$consultaDelete;

			$resultadoDelete=mysqli_query($link,$consultaDelete);

			if ($resultadoDelete){
				echo "<div class=\"alert alert-danger centrarAlerta\">Registro eliminado correctamente</div>";
			}else{
				echo "<br>Existe un error al borrar el registro";
			}
        }

		//consulta de todos los registros
		$consulta="select * from relacion";
		$resultado=mysqli_query($link,$consulta);
    ?>
    <?php

//    Formulario de actualizar

    if(isset($_GET['id'])){
        //Consulta del id que ha sido seleccionado
        $consultaXid = "select * from relacion where id=" . $_GET['id'] . ";";
        $rowRes = mysqli_query($link, $consultaXid); //Tenemos guardado el registro que se ha seleccionado
        $rowQ = mysqli_fetch_array($rowRes); //Obtenemos un array asociativo con el registro seleccionado
        if ($_GET["opcion"]=="update"){
            ?>

            <!-- Formulario de Actualización -->
            <form class="form-update" action="" method="post">
                <input type="hidden" name="id" value="<?=$rowQ["id"]?>">
                <p><label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="<?=$rowQ["nombre"]?>"></p>
                <input type="submit"  class="button centrarButton" value="Registrar">
            </form>
            <?php
        }
    }
    mysqli_close($link);
    ?>
<!--    Tabla de parentesco-->
    <table class="tabla-estudios">
        <tr>
            <th>Nombre</th>
            <th>Acción</th>
        </tr>
        <?php
            while($row=mysqli_fetch_array($resultado)){
                echo"<tr>";
                echo"<td>";
                echo $row["nombre"];
                echo"</td>";
                echo"<td>";

                echo"<a href=\"?id=".$row["id"] ."&opcion=update\"><span class=\"material-symbols-outlined\">edit_note</span></a>" ; //Actualiza por medio de la url

                echo"<a href=\"?id=".$row["id"]."&opcion=delete\"><span class=\"material-symbols-outlined\">delete</span></a>"; //Borrar por medio de la url

                echo"</td>";
                echo"</tr>";
            }
        ?>
    </table>
    <a class="button botonesInsertar centrarVolver" href="insertarRelacion.php">Volver</a>
</body>