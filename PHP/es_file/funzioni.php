<?php 

function pulisciTesto($str){
    $str = trim($str); //Elimino gli spazzi ad inizio e fine stringa
    $str = strtolower($str); //Porto tutto in minuscolo
    return $str;
}

?>