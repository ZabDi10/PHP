<?php

//Un for sin llaves
//Ejercicio: Crea un bucle for sin llaes que muestre desde 1 hasta 12 que representan los meses del año
//for ($i=1;$i<13;$i++){
//    echo "<br>" . $i;
//    switch ($i){
//        case "1": {echo " <br> Enero"; break;}
//        case "2": {echo " <br> Febrero"; break;}
//        case "3": {echo " <br> Marzo"; break;}
//        case "4": {echo " <br> Abril"; break;}
//        case "5": {echo " <br> Mayo"; break;}
//        case "6": {echo " <br> Junio"; break;}
//        case "7": {echo " <br> Julio"; break;}
//        case "8": {echo " <br> Agosto"; break;}
//        case "9": {echo " <br> Septiembre"; break;}
//        case "10": {echo " <br> Octubre"; break;}
//        case "11": {echo " <br> Noviembre"; break;}
//        case "12": {echo " <br> Diciembre"; break;}
//    }
//}

//realizamos un switch case, donde dependiendo el mes, imprimimos su numero
if(!empty($_GET["mes"])){
    $i = $_GET["mes"];
    switch ($i){
        case "1": {echo "Enero"; break;}
        case "2": {echo "Febrero"; break;}
        case "3": {echo "Marzo"; break;}
        case "4": {echo "Abril"; break;}
        case "5": {echo "Mayo"; break;}
        case "6": {echo "Junio"; break;}
        case "7": {echo "Julio"; break;}
        case "8": {echo "Agosto"; break;}
        case "9": {echo "Septiembre"; break;}
        case "10": {echo "Octubre"; break;}
        case "11": {echo "Noviembre"; break;}
        case "12": {echo "Diciembre"; break;}
    }
}else{
    header("Location:http://localhost:63342/PHP/repaso/index.php?mensaje=El mes no es valido");
}


//realiza una captura de datos en el index, preguntando el mes a seleccionar

//para seleccionarlo, haz un select del 1 al 12 -> explicar yo

//While

if(!empty($_GET["name"])){
    $flag=false;
    while (!$flag){
        if ($_GET["name"]=="Juan"){

        echo" <br> El nombre es el esperado. ";
        var_dump($_GET["name"]);
        $flag=true;
        }else{
            header("Location:http://localhost:63342/PHP/repaso/index.php?mensaje=el nombre no es valido");$flag=true;
        }
    }
}


//Ejercicio: Enviar varias cadenas a al pagina del index, y muestralo como lista.
//La idea es validar dia, mes año .... y mostrar mensajes que se acumulen en un array y despues mostrarlos en el index


?>

