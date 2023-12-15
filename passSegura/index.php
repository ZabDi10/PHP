<?php


// Abecedario en mayúsculas
$abcR = range('A', 'Z');
$abc = ['A', 'B', 'C', 'D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'] ;
// Abecedario en minúsculas
$ABCR= range('a', 'z');
$ABC = ['a', 'b', 'c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'];

// Dígitos del 0 al 9
$digitos = [0,1,2,3,4,5,6,7,8,9];

// Caracteres especiales
$caracteresEspeciales = array('!', '@', '#', '$', '%', '^', '&', '*','+','-','(',')','?','|','~','/','=','[',']');

// Codificar
$arrayN = ["A","E","I","O","U"," "];
$arrayC = ["4","3","1","0","2",""];
$ciudad = $_GET["name"];


$password = '';
$saveRandom = '';
$longitud = $_GET['longitud'] + strlen($ciudad);
if (isset($_GET['longitud'])) {

    while (strlen($password) < $longitud) {
//    Math random del case
        $randomCase = rand(0, 3);
        if ($randomCase == $saveRandom) {
            if ($saveRandom == 0) {
                $randomCase = 3;
            } else if ($saveRandom == 1) {
                $randomCase = 2;
            } else if ($saveRandom == 2) {
                $randomCase = 3;
            } else {
                $randomCase = 0;
            }
        }

        if (strlen($password)==5){
            $ciudadM= strtoupper($ciudad);
            $ciudadArray = str_split($ciudadM);
            $ciudadChanged = str_replace($arrayN, $arrayC, $ciudadArray);
            $ciudadPass = implode($ciudadChanged);
            $password .= $ciudadPass;
        }
//    Casos 1 Mayus, 1 Minus, 1 Numero, 1 Especial

        switch ($randomCase) {
//        Caso de las minusculas
            case 0 :
            {
                $keyAbc = array_rand($abc, 1);
                $abcMinusValue = $abc[$keyAbc];
                $password .= $abcMinusValue;
                break;
            }
//        Caso de las mayusculas
            case 1 :
            {
                $keyAbc = array_rand($ABC, 1);
                $abcMayusValue = $ABC[$keyAbc];
                $password .= $abcMayusValue;

                break;
            }
//        Caso digitos
            case 2 :
            {
                $keyDigitos = array_rand($digitos, 1);
                $digitosValue = $digitos[$keyDigitos];
                $password .= $digitosValue;

                break;
            }
//        Caso caracteres especiales
            case 3 :
            {
                $keyCaracteresEspeciales = array_rand($caracteresEspeciales, 1);
                $caracteresEspecialesValue = $caracteresEspeciales[$keyCaracteresEspeciales];
                $password .= $caracteresEspecialesValue;

                break;
            }

        }
        $saveRandom = $randomCase;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <h1 class="titulo centrar texto">🟡Aplicación para crear contraseñas seguras🟡</h1>
        <h1 class="subtitulo">Cree su contraseña:</h1>

        <div class="caja-copiar centrar">
            <input class="centrar contrasena" type="text" readonly value="<?= $password ?>" id="cuadro_texto">
            <button class="copiar" onclick="copiarContenido()" > <span class="material-symbols-outlined">content_copy</span></button>
        </div>

        <form action="index.php" method="get" class="centrar formulario">
        <div class="inputs">
            <label for="name"><b> Ciudad Favorita </b></label>
            <input type="text" name="name" id="name" value="<?php if (isset($_GET["name"])){echo $_GET["name"];}?>">

            <label for="longitud"> <b>Ponga la longitud</b></label>
            <input type="text" name="longitud" id="longitud" value="8">
        </div>
            <div class="enviar">
                <input type="submit" value="Crear Contraseña">
            </div>
        </form>

        <div>
<!--        <hr class="barra">-->
        <div class="publi">
            <h1 class="segura centrar texto">¡Su Contraseña más segura!</h1>
            <button class="button-50 texto" role="button">
                <b>🟡  KARSPERSKY SEGURIDAD  🟡</b>
            </button>
        </div>
        </div>
    </div>
    <div class="imagenes">
        <img src="img/44122.jpg" alt="Avatar" class="img1">
    </div>

</body>
<script src="script/script.js"></script>
</html>





