<?php

function saluta(){
    echo "Ciao Mondo!!!!<br>";
}


saluta();
saluta();

$str_nome = $_POST["nome"];
$str_nome = strtolower($str_nome);

echo $str_nome;

?>