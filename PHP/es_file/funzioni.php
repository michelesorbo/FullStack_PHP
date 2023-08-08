<?php 

function pulisciTesto($str){
    $str = trim($str); //Elimino gli spazzi ad inizio e fine stringa
    $str = strtolower($str); //Porto tutto in minuscolo
    return $str;
}

function generaToken($max){
    $caratteriToken = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ{}[]#*@!?';
    //echo strlen($caratteriToken);
    //$toke_ar = [];
    $toke_str = '';
    for($i = 1; $i<=$max;$i++){
        //array_push($toke_ar, $caratteriToken[random_int(0,strlen($caratteriToken)-1)]);
        $toke_str .= $caratteriToken[random_int(0,strlen($caratteriToken)-1)];
    }
    //return implode('',$toke_ar); //Trasformo l'array in stringa
    return $toke_str;
}


?>