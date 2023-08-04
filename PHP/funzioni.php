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

// $str_pulita = $_POST["nome"];
// $str_pulita = strtolower($str_pulita);

// echo $str_pulita;

//Funzione ocn parametri dichiarati come tipo e ritorno dichiarato come tipo
function sommaInteri(int $a, int $b): int {
    return $a+$b;
}

echo "<br>".sommaInteri(2,4);

echo "<br>";

function formattaTesto($str){
    $str_pulita = $str; //Assegno il contenuto di post alla variabile
    $str_pulita = strtolower($str_pulita); //Cambio tutti i caratteri in minusoclo
    $str_pulita = trim($str_pulita); //Elimino eventuali spazzi vuoti ad inizio o fine stringa
    $str_pulita = str_replace(",", "",$str_pulita); //Elimino eventuali ,
    $str_pulita = str_replace(".", "",$str_pulita); //Elimino eventuali . 
    $str_pulita = str_replace("  ", " ",$str_pulita); //Elimino i doppi spazzi con un solo spazzio
    $str_pulita = str_replace("  ", " ",$str_pulita);
    return $str_pulita;
}

function visualizzaTesto($str){
    return ucfirst($str);
}

$nome_form = formattaTesto($_POST["nome"]);

echo visualizzaTesto($nome_form);


?>