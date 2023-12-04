<?php
session_start();
include "header.php";
include "../modelo/conexion.php"
?>
<body class="formulario">
<h1>Formulario de Inscripción</h1>
         <?php
            if (isset($_GET['mensaje1'])){
                echo "<div class=\"alert alert-success centrar\">
            <strong>Felicidades! </strong>" . $_GET['mensaje1']. "<div/>";
            }
            ?>
        <?php
        if (isset($_GET['mensaje'])){
            echo "<div class=\"alert alert-danger centrar\">
            <strong>Cuidado! </strong>" . $_GET['mensaje'] . "</div>";
        }
        ?>
    <form action="validarFormulario.php" method="post" novalidate>
        <!-- Nombre del alumno -->
        <label for="nombre">Nombre del Alumno:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Pedro" required><br>

        <label for="apellidos">Apellidos del Alumno:</label>
        <input type="text" id="apellidos" name="apellidos" placeholder="Muñoz Molinos" required><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required placeholder="35"><br>

        <!-- Nivel de estudios -->
        <label for="nivel">Nivel de Estudios:</label>
        <select id="nivel" name="nivel" required>
            <option value=""></option>
            <?php
            $link=conectar();
            $queryNivel="select * from nivel_estudios;";
            $result=mysqli_query($link,$queryNivel);
            while($fila=mysqli_fetch_assoc($result)){
                echo "<option  value=" . $fila['id'] . ">" . $fila['nombre_estudios'] . "</option>";
            }
            mysqli_free_result($result)
            ?>


            <!--		<option value="primaria">Primaria</option>-->
            <!--		<option value="secundaria">Secundaria</option>-->
            <!--		<option value="preparatoria">Preparatoria</option>-->
            <!--		<option value="universidad">Universidad</option>-->
        </select><br>

        <!-- Número de teléfono -->
        <label for="telefono">Número de Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required placeholder="666666666"><br>

        <!-- Correo electrónico -->
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required placeholder="cepa@ejemplo.com"><br>

        <!-- Dirección -->
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required placeholder="Larios, 43 6ºB Málaga 28006"><br>


        <!-- Fecha de Nacimiento -->
        <label for="dni">Dni:</label>
        <input type="text" id="dni" name="dni" required placeholder="00000000X"><br>



        <input type="submit" value="Enviar" >
    </form>
</body>
<?php
include "footer.php";
?>

