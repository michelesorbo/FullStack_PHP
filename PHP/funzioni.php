<?php
/*
function lavareDenti(){
    prendo lo spazzolino
    apro il dentifricio
    apro il rubinetto
    lavo lo spazzolino 
    metto il dentifricio sullo spazzolino
    lavo i denti
    lavo lo spazzolino
    poso lo spazzolino
}

*/

//Funzione semplice senza parametri e senza ritorno
function saluta(){
    echo "Ciao Mondo!!!!<br>";
}

function salutaNome($nome){
    echo "Ciao da " . $nome . "<br>";
}

function somma($a, $b){
    return $a+$b;
}

$somma1 = somma(3,6);

echo $somma1 ."<br>";

echo somma(3,2)."<br>";

saluta();
saluta();
salutaNome("Michele");
salutaNome("Davide");

// $str_nome = $_POST["nome"];
// $str_nome = strtolower($str_nome);

// echo $str_nome;

//Funzione ocn parametri dichiarati come tipo e ritorno dichiarato come tipo
function sommaInteri(int $a, int $b): int {
    return $a+$b;
}

echo "<br>".sommaInteri(2.5,4);

?>