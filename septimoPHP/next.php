<?php
    include "header.php";
?>
<div class="caja-negra">
    <div class="numeros">
        <span class="numero-inactivo">1</span>
        <span class="material-symbols-outlined">
                arrow_forward
            </span>
        <span class="numero-activo">2</span>
        <span class="material-symbols-outlined">
                arrow_forward
            </span>
        <span class="numero-inactivo">3</span>
    </div>
</div>

<div class="caja-blanca">
    <h3>¡Continuamos!</h3>
    <p>Por favor necesitamos estos datos para continuar con el proceso de alta:</p>
    <form id="formulario2" method="post" class="formulario" action="end.php" novalidate>
        <div class="input-izquierda">
            <input type="text" name="nombre" id="nombre" placeholder="NOMBRE" required>
            <p>Alba</p>
            <input type="number" id="edad" name="edad" PLACEHOLDER="EDAD" required min="18" max="80">
            <p>Indica tu edad. Mínimo 18 años</p>
        </div>
        <div class="input-derecha">
            <input type="text" id="apellido" name="apellido" PLACEHOLDER="PRIMER APELLIDO" required>
            <p>Ej: García </p>
            <input type="text" id="apellido2" name="apellido2" PLACEHOLDER="SEGUNDO APELLIDO" required>
            <p>Ej: Navarro</p>
        </div>
        <p class="centrado">
            <input type="submit" value="Siguiente" class="boton" name="enviar">
            <input type="reset" value="Limpiar" class="boton">
        </p>
    </form>
</div>
<script src="js/script.js"></script>