<?php
    include "header.php";
    include "../Modelo/conexion.php";

?>
<body>
    <div class="caja-negra">
        <div class="numeros">
            <img src="img/Quatre%20Rodes.png" alt="Banca Online" class="logo">
        </div>
    </div>
    <div class="caja-blanca">
        <p class="frase">Por favor complete los campos según las indicaciones</p>
        <form method="post" id="formulario" class="formulario" action="../controlador/controlador.php">

<!--            Matricula-->
            <div class="input-izquierda">
                <input type="text" name="matricula" id="matricula" placeholder="1111BBB" required maxlength="7" minlength="7">
                <p>Matricula (4 Números y 3 letras mayusculas sin vocales)<span style="color:#ff0000">*</span></p>

<!--                Marca-->
                <select name="marca" id="marca" required>
                    <option value="">Selecciona la Marca</option>
                    <?php
                    $link=conectar();
                    $queryMarca="select * from marca;";
                    $result=mysqli_query($link,$queryMarca);
                    while($fila=mysqli_fetch_assoc($result)){
                        echo "<option  value=" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                    }
                    mysqli_free_result($result)
                    ?>
                </select>
                <p>Marca del Vehículo<span style="color:#ff0000">*</span></p>

<!--                Motor-->
                <select name="motor" id="motor">
                    <option value="">Seleccione Motor</option>
                    <?php
                    $link=conectar();
                    $queryMotores="select * from motor;";
                    $result=mysqli_query($link,$queryMotores);
                    while($fila=mysqli_fetch_assoc($result)){
                        echo "<option  value=" . $fila['id'] . ">" . $fila['motor'] . "</option>";
                    }
                    mysqli_free_result($result);
                    ?>
                </select>
                <p>Motor</p>

<!--                CC-->
                <input type="text" id="cilindrada" name="cilindrada" PLACEHOLDER="1000" >
                <p>Cilindrada en CC</p>

<!--                Color-->
                <select name="color" id="color">
                    <option value="">Selecciona el Color</option>
                    <?php
                    $link=conectar();
                    $queryColor="select * from color;";
                    $result=mysqli_query($link,$queryColor);
                    while($fila=mysqli_fetch_assoc($result)){
                        echo "<option  value=" . $fila['id'] . ">" . $fila['color'] . "</option>";
                    }
                    ?>
                </select>
                <p>Rojo</p>


                <input type="file" name="foto" id="foto" placeholder="">
                <p>Suba una foto</p>


                <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                <p>Descripción</p>
                <textarea name="extras" id="extras" cols="30" rows="10"></textarea>
                <p>Extras</p>
            </div>



            <div class="input-derecha">

<!--                Bastidor-->
                <input type="text" id="bastidor" name="bastidor" minlength="12" maxlength="12" PLACEHOLDER="123456ABCDEF" required>
                <p>NºBastidor (12 Número o letras en mayusculas)<span style="color:#ff0000">*</span></p>


                <input type="text" id="modelo" name="modelo" PLACEHOLDER="X-29" >
                <p>Modelo</p>


                <input type="text" name="precio" id="precio" placeholder="20000" >
                <p>Precio</p>


                <input type="text" name="potencia" id="potencia" placeholder="200" >
                <p>Potencia en CV</p>

<!--                Metalizado-->
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
