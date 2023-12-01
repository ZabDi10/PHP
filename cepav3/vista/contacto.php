<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Contacto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="formulario">
    <?php
    include "../modelo/conexion.php";
    include "header.php";
    ?>
    <h1>Formulario de Contacto</h1>
    <h3 class="error">
        <?php
            if (isset($_GET['mensaje'])){
                echo $_GET['mensaje'];
            }
        ?>
    </h3>
    <form action="validarContacto.php" method="post" novalidate>
        <!-- Nombre del contacto -->
        <label for="nombre_contacto">Nombre del Contacto:</label>
        <input type="text" id="nombre_contacto" name="nombre_contacto" required placeholder="Mª Dolores"><br>	<label for="apellidos_contacto">Apellidos del Contacto:</label>
        <input type="text" id="apellidos_contacto" name="apellidos_contacto" required placeholder="López Espinosa"><br>

        <!-- Teléfono del contacto -->
        <label for="telefono_contacto">Teléfono del Contacto:</label>
        <input type="tel" id="telefono_contacto" name="telefono_contacto" required placeholder="666666666"><br>

        <!-- Correo electrónico del contacto -->
        <label for="email_contacto">Correo Electrónico del Contacto:</label>
        <input type="email" id="email_contacto" name="email_contacto" required placeholder="ejemplo@gmail.com"><br>


        <!-- Parentesco -->
        <label for="parentesco">Parentesco:</label>
        <select id="parentesco" name="parentesco" required>
            <option value=""></option>
            <?php
                $link=conectar();
                $queryParentesco="select * from relacion;";
                $result=mysqli_query($link,$queryParentesco);
                while($fila=mysqli_fetch_assoc($result)){
                    echo "<option  value=" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                }
                mysqli_free_result($result);
            ?>
        </select><br>

        <!-- Botón de enviar -->
        <input type="submit" value="Enviar">
    </form>

</body>
</html>