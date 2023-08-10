<?php 

function formattaTesto($str){
    $str = trim($str);
    $str = ucfirst($str);
    return $str;
}

function formattaIns($str){
    $str = trim($str);
    $str = strtolower($str);
    return $str;
}

?>