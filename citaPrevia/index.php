<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Citas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <h2 class="head">Solicitud de Cita Previa</h2>
    <div class="formulario">
        <h3>Indique el servicio al que desea solicitar la cita</h3>
        <form action="solicitud.php" method="post">
            <div class="seleccion caja">
                <label for="seguros" class="input2">Seguros</label>
                <input type="radio" name="servicio" id="seguros" value="Seguros" >
                <label for="consultoria" class="input2">Consultoría Jurídica</label>
                <input type="radio" name="servicio" id="consultoria" value="Consultoría Jurídica" >
                <label for="administracion" class="input2">Administración de Comunidades</label>
                <input type="radio" name="servicio" id="administracion" value="Administración de Comunidades" >
            </div>
            <div class="caja1">
                <label for="fecha">Seleccione la fecha</label>
                <input type="date" name="fecha" id="fecha" class="input">
                <select name="hora" id="hora" class="input">
                <option value="">Selecciones</option>
                <option value="9:30">9:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                </select>
            </div>
            <div class="datos caja2">
                <label for="nombre">Nombre y Apellidos:</label>
                <input type="text" name="nombre" id="nombre" class="input">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="input">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="input">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
            </div>
            <div class="errorM">
                <p class="msg">
                    <?php
                    $msg="";
                    if (isset($_GET["mensaje"])){
                        $msg = $_GET["mensaje"];
                    }
                    echo $msg;
                    ?>
                </p>
            </div>
            <div>
                <input type="submit" value="Solicitar Cita" class="allowed boton" disabled>
                <input type="reset" value="Limpiar" class=" boton cursor">
            </div>
            <div class="caja3">
                <input type="checkbox" name="check" id="check"><span>Acepta la Política de <a target="_blank" href="https://aepd.es" class="politica">Protección de Datos</a></span>
            </div>
        </form>

    </div>
</body>
<script src="script/script.js"></script>
</html>