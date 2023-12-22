<?php
include "header.php";
session_start();

if(isset($_GET['name1']) && isset($_GET['course1'])) {
    $name1 = $_GET['name1'];
    $course1 = $_GET['course1'];
    $paso = true;
    $mensaje = "";

    if ($paso) {
        $_SESSION['name1'] = $name1;
        $_SESSION['course1'] = $course1;
    }
}
?>
<body>
<div class="container-div">
    <form class="forms" method="POST" action="validarUser.php">
        <label for="user">Usuario</label><br>
        <input type="text" id="user" name="user"><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" id="pass" name="pass"><br>

        <input type="submit" value="Submit">
        <?php
        if (isset($_GET['mensaje'])){
            echo "<span><strong>Cuidado! </strong>" . $_GET['mensaje'] . "</div></span>";
        }
        ?>
    </form>


</div>
</body>
