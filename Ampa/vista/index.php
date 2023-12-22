<?php
include "header.php";
?>

<body>
    <?php
    if (isset($_GET['mensaje'])){
        echo "<span>" . $_GET['mensaje'] . "</div></span>";
    }
    ?>
    <a href="forms.php" class="centered-button">Hazte Socio</a>
</body>

