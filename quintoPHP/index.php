<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include 'header.php';
?>

<!--<div class="banner">-->
<!--    <img src="img/Casa-del-libro-banner.png">-->
<!--</div>-->
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">

        <img src="img/Casa-del-libro-banner.png" style="width:100%">
    </div>

    <div class="mySlides fade">

        <img src="img/banner-2.jpg" style="width:100%">

    </div>

    <div class="mySlides fade">

        <img src="img/banner-3.jpg" style="width:100%">

    </div>

    <!-- Next and previous buttons -->
<!--    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>-->
<!--    <a class="next" onclick="plusSlides(1)">&#10095;</a>-->
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<hr>
<div class="iconos">

        <img src="img/peres.webp">
    <div>
        <p>Sinopsis de EL PROBLEMA FINAL</p>
        <p>LA NUEVA NOVELA DE ARTURO PÉREZ-REVERTE</p>


        <p>Un crimen imposible. Un detective insospechado.</p>


            <p>No se trata de un desafío entre el asesino y el detective, sino de un duelo de inteligencia entre el autor y el lector.</p>
    </div>
</div>
<hr>
<h3>Novedades Manga</h3>
<div class="primer">
    <div>
        <img src="img/berserk41.webp">
        <p>Berserk Nº 41 </p>
    </div>
    <div>
        <img src="img/jujutsu.jpeg">
        <p>Jujutsu Kaisen Nº 21</p>
    </div>
    <div>
        <img src="img/kimetsu.jpeg">
        <p>Kimetsu no Yaiba Nº23</p>
    </div>
</div>
<h3>Novedades Ciencia Ficcion</h3>
<div class="primer">

    <div>
        <img src="img/yumi.jpg">
        <p>Yumi y el pintor de las pesadillas</p>
    </div>
    <div>
        <img src="img/juego-de-tronos.jpg">
        <p>Juego de tronos</p>
    </div>
    <div>
        <img src="img/pruebas-hechiceria.jpg">
        <p>Pruebas de Hechiceria</p>
    </div>
</div>
<h2>No se cobran los gastos de envio con envio superiores a 15€</h2>
<?php
include 'footer.php';
?>
<script src="js/script2.js"></script>
</body>

</html>