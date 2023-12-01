<?php
include "header.php";
?>
<body>
	<h1>ACTUALIZAR RELACIÓN</h1>
	<?php
		include "../modelo/conexion.php";
		$link=conectar();
		//Actualizar un registro seleccionado

        if($_POST){

            $consultaUP="update relacion set nombre='".$_POST['nombre']."' where ID=".$_POST["id"];

            $resultado=mysqli_query($link,$consultaUP);

            if($resultado){
                echo "<br>Registro actualizado con éxito";
            }else{
                echo "<br>Un error ha ocurrido en la actualización";
            }
        }

        if(isset($_GET["opcion"]) && $_GET["opcion"]=="delete"){
            $consultaDelete="delete from relacion where ID=".$_GET["id"].";";

			echo "<br>".$consultaDelete;

			$resultadoDelete=mysqli_query($link,$consultaDelete);

			if ($resultadoDelete){
				echo "<br>Registro eliminado correctamente";
			}else{
				echo "<br>Existe un error al borrar el registro";
			}
        }

		//consulta de todos los registros
		$consulta="select * from relacion";
		$resultado=mysqli_query($link,$consulta);
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Acción</th>
        </tr>
        <?php
            while($row=mysqli_fetch_array($resultado)){
                echo"<tr>";
                echo"<td>";
                echo $row["nombre"];
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
                    $consultaXid = "select * from relacion where id=" . $_GET['id'] . ";";
                    $rowRes = mysqli_query($link, $consultaXid); //Tenemos guardado el registro que se ha seleccionado
                    $rowQ = mysqli_fetch_array($rowRes); //Obtenemos un array asociativo con el registro seleccionado
            if ($_GET["opcion"]=="update"){
        ?>

        <!-- Formulario de Actualización -->
        <form action="" method="post">
            <input type="hidden" name="id" value="<?=$rowQ["id"]?>">
            <p><label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?=$rowQ["nombre"]?>"></p>
            <input type="submit" value="Registrar">
        </form>
	<?php
		}
		}
		mysqli_close($link);
	?>
</body>