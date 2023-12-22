<?php
include "header.php";
?>
<body>
<div class="container-div">
    <h2>Introduzca los datos que se solicitan:</h2>
    <form class="forms" method="POST" action="formsNext.php">

        <label for="tutor1">Tutor 1:</label><br>
        <input type="text" id="tutor1" name="tutor1"><br>

        <label for="tutor2">Tutor 2:</label><br>
        <input type="text" id="tutor2" name="tutor2"><br>

        <label for="address">Direccion:</label><br>
        <input type="text" id="address" name="address"><br>

        <div class="responsive-input">
            <div>
                <label for="phoneTutor1">Telefono Tutor 1:</label><br>
                <input type="tel" id="phoneTutor1" name="phoneTutor1">
            </div>

            <div>
                <label for="phoneTutor2">Telefono Tutor2:</label><br>
                <input type="tel" id="phoneTutor2" name="phoneTutor2">
            </div>
        </div>

        <div class="responsive-input">
            <div>
                <label for="emailTutor1">Email Tutor 1:</label><br>
                <input type="email" id="emailTutor1" name="emailTutor1">
            </div>

            <div>
                <label for="emailTutor2">Email Tutor2:</label><br>
                <input type="email" id="emailTutor2" name="emailTutor2">
            </div>
        </div>

        <input type="submit" value="Submit">
        <?php
        if (isset($_GET['mensaje'])){
            echo "<span><strong>Cuidado! </strong>" . $_GET['mensaje'] . "</div></span>";
        }
        ?>
    </form>
</div>
</body>
