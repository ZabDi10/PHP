<?php
	 include "header.php";
     session_start();
    if ((isset($_SESSION["usuario"]))){
        header("Location:http://localhost:63342/PHP/cepav3/vista/dashboard.php");
    }
?>
<body class="admin">

<div class="loginAdmin">
    <div class="loginTitulo">
        <span>Iniciar Sesión</span>
    </div>
    <?php
    if (isset($_GET["mensaje"])){
        echo "<div class=\"alert alert-danger centrar2 centrar\">"
            . $_GET['mensaje'] . "</div>";
    }
    ?>
	<form id="login" method="post" class="" action="validarLoginAdmin.php" >
        <input type="email" name="email" placeholder="Email" value="<?php if(isset($_GET["email"])){echo $_GET["email"];} ?>" >
        <input type="password" name="pass" placeholder="Contraseña" >

		<input type="submit" value="Entrar" class="button entrada">
        <p>Si no tiene usuario puede registrarse,
            <a href="registroAdmin.php" title="Registro de Usuario">Aqui</a> </p>
	</form>

    <h3 class="formulario error">
    </h3>
</div>
</body>
