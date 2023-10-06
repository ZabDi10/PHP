<?php
//Ejercicio: Enviar varias cadenas a al pagina del index, y muestralo como lista.
//La idea es validar dia, mes año .... y mostrar mensajes que se acumulen en un array y despues mostrarlos en el index
session_start();
$dia = $_GET["dia"];
$mes = $_GET["mes"];
if(!empty($_GET["mes"])) {
    $i = $_GET["mes"];
    switch ($i) {
        case "0":{$mes="";break;}
        case "1":
        {
            $mes = "Enero";
            break;
        }
        case "2":
        {
            $mes = "Febrero";
            break;
        }
        case "3":
        {
            $mes = "Marzo";
            break;
        }
        case "4":
        {
            $mes = "Abril";
            break;
        }
        case "5":
        {
            $mes = "Mayo";
            break;
        }
        case "6":
        {
            $mes = "Junio";
            break;
        }
        case "7":
        {
            $mes = "Julio";
            break;
        }
        case "8":
        {
            $mes = "Agosto";
            break;
        }
        case "9":
        {
            $mes = "Septiembre";
            break;
        }
        case "10":
        {
            $mes = "Octubre";
            break;
        }
        case "11":
        {
            $mes = "Noviembre";
            break;
        }
        case "12":
        {
            $mes = "Diciembre";
            break;
        }
    }
}
$ano = $_GET["ano"];
$mensajes = array();

if ($_GET["dia"]==""){
    array_push($mensajes,"El dia no puede estar vacio");
}
if ($_GET["mes"]==""){
    array_push($mensajes, "El mes no puede estar vacio");
}
if ($_GET["ano"]==""){
    array_push($mensajes, "El ano no puede estar vacio");
}
if (count($mensajes)>=1){
    $_SESSION["mensaje"] = $mensajes;
}else{
    array_push($mensajes, "Tu cumple es el $dia de $mes del $ano");
}
$_SESSION["mensaje"] = $mensajes;
header("Location:http://localhost:63342/PHP/repaso/index.php?");

