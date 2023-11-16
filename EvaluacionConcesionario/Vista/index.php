<?php
    include "header.php";

?>
<body>
    <div class="caja-negra">
        <div class="numeros">
            <img src="img/Quatre%20Rodes.png" alt="Banca Online" class="logo">
        </div>
    </div>
    <div class="caja-blanca">
        <p class="frase">Por favor complete los campos segun las indicaciones</p>
        <form method="post" id="formulario" class="formulario" action="alta.php" novalidate>
            <div class="input-izquierda">
                <input type="text" name="matricula" id="matricula" placeholder="1111-EEE" required>
                <p>Matricula</p>
                <input type="text" id="marca" name="marca" PLACEHOLDER="Citroen" >
                <p>Marca del Vehiculo</p>
                <input type="text" name="motor" id="motor" placeholder="Gasolina/Diesel" >
                <p>Motor</p>
                <input type="text" id="cilindrada" name="cilindrada" PLACEHOLDER="1000" >
                <p>Cilindrada en CC</p>
                <input type="text" name="color" id="color" placeholder="Color" >
                <p>Rojo</p>
                <input type="text" name="foto" id="foto" placeholder="" >
                <p>Suba una foto</p>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                <p>Descripción</p>
            </div>
            <div class="input-derecha">
                <input type="text" id="bastidor" name="bastidor" PLACEHOLDER="111111" required>
                <p>NºBastidor</p>
                <input type="text" id="modelo" name="modelo" PLACEHOLDER="X-29" >
                <p>Modelo</p>
                <input type="text" name="precio" id="precio" placeholder="20000" >
                <p>Precio</p>
                <input type="text" name="potencia" id="potencia" placeholder="200" >
                <p>Potencia en CV</p>
                <select name="metalizado" id="metalizado">
                    <option value="">¿Es metalizado?</option>
                    <option value="True">Si</option>
                    <option value="False">No</option>
                </select>
                <p>Metalizado</p>
                <input type="date" name="fecha" id="fecha" >
                <p>Fecha de Fabricación</p>
                <textarea name="observaciones" id="observaciones"></textarea>
                <p>Observaciones</p>

            </div>
            <div class="acciones">
                <p class="centrado">
                    <input type="submit" value="Alta" class="boton" name="enviar">
                    <input type="reset" value="Borrar" class="boton">
                </p>
            </div>
        </form>
        <div class="acciones">
            <?php
            $mensaje="";

            if (isset($_GET["mensaje"])){
                $mensaje = $_GET["mensaje"];
                echo "<p class = error>$mensaje</p>";
            }

            ?>
        </div>
    </div>
</body>
