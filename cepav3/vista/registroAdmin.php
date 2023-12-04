<?php
    include "header.php"
?>
<body>
<div class="loginAdmin loginRegistro">
    <div class="loginTitulo">
        <span>Registro de Usuario</span>
    </div>
    <?php
    if (isset($_GET["mensaje"])){
        echo "<div class=\"alert alert-danger centrar3\">" . $_GET['mensaje'] . "</div>";
    }
    ?>
	<form id="login" method="post" class="login" action="valiarRegistroAdmin.php" >
		<input type="text" name="nombre" placeholder="Nombre y Apellido" value="<?php if(isset($_GET["nombre"])){echo $_GET["nombre"];} ?>">
		<input type="email" name="usuario" placeholder="Email" value="<?php if(isset($_GET["email"])){echo $_GET["email"];} ?>">
		<input type="email" name="usuario2" placeholder="Repetir Email">
		<input type="password" name="pass" placeholder="Contraseña">

		<input type="submit" value="Entrar" class="button entrada">
        <div class="criterios">
            <h5>Su contraseña debe tener</h5>
            <div>
                <div>
                    <ul class="lista">
                        <li>Minúscula</li>
                        <li>Mayúscula</li>
                    </ul>
                    <ul class="lista">
                        <li>8 carácteres</li>
                        <li>Números</li>
                    </ul>
                </div>
                <div>
                    <ul class="lista">
                        <li>Símbolos</li>
                    </ul>
                </div>
            </div>
        </div>
	</form>
</div>
</body>
<?php
include "footer.php";
?>

