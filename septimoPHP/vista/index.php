<?php
    include "header.php";

?>
<body>
    <div class="caja-negra">
        <div class="numeros">
            <span class="numero-activo">1</span>
            <span class="material-symbols-outlined">
                arrow_forward
            </span>
            <span class="numero-inactivo">2</span>
            <span class="material-symbols-outlined">
                arrow_forward
            </span>
            <span class="numero-inactivo">3</span>
        </div>
    </div>
    <div class="caja-blanca">
        <h3>¡Comencemos!</h3>
        <p>Por favor necesitamos mas datos para continuar tu proceso de alta:</p>
        <form method="post" id="formulario" class="formulario" action="next.php" novalidate>
            <div class="input-izquierda">
                <input type="text" name="dni" id="dni" placeholder="DNI" required>
                <p>00000000A</p>
                <input type="email" id="email" name="email" PLACEHOLDER="EMAIL" required>
                <p>ejemplo@ejemplo.es</p>
            </div>
            <div class="input-derecha">
                <input type="text" name="movil" id="movil" placeholder="TELEFONO MÓVIL" required>
                <p>000 000 000</p>
                <input type="email" id="email2" name="email2" PLACEHOLDER="CONFIRMA TU EMAIL" required>
                <p>ejemplo@ejemplo.es</p>
            </div>
            <div class="acciones">
                <p>
                    <input type="checkbox" id="casilla">
                    He leido y acepto la <a target="_blank" href="https://aepd.es">Politica de privacidad y de protección de datos</a>
                </p>
                <p class="centrado">
                    <input type="submit" value="Siguiente" class="boton" disabled style="cursor: not-allowed" name="enviar">
                    <input type="reset" value="Limpiar" class="boton">
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
<script src="js/script.js"></script>
