<?php
	 include "header.php"
?>
<body>
<div>
	<div>
		<span class="numero-activo">Iniciar Sesión</span>
	</div>
</div>
<div>
	<form id="login" method="post" class="login" action="validarLoginAdmin.php" novalidate>
        <input type="email" name="email" placeholder="Email"  required>
        <input type="password" name="pass" placeholder="Contraseña" required>

		<input type="submit" value="Entrar" class="boton entrada">
	</form>
	<p>Si no tiene usuario puede registrarse,
		<a href="registroAdmin.php" title="Registro de Usuario">Aqui</a> </p>
	<h3 class="formulario error">
        <?php
            if (isset($_GET["mensaje"])){
                echo "<p class='error'>".$_GET['mensaje']."</p>";
            }
        ?>
    </h3>
</div>
</body>