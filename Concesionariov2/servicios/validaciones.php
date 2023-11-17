<?php
function validarMatricula($matricula)
{
    $expresion = "/^[0-9]{1,4}[BCDFGHJKLMNPRSTVWXYZ]{3}/";
    if(preg_match($expresion,$matricula)){
        return true;
    }else{
        return false;
    }
}

function validarBastidor($bastidor)
{
    $expresion = "/^[0-9 A-Z]{12}/";
    if(preg_match($expresion,$bastidor)){
        return true;
    }else{
        return false;
    }
//    if (strlen($bastidor)==12){
//        return true;
//    }else{
//        return false;
//    }
}
