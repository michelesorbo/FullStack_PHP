<?php 

//Documentazione: 
//HTM.it: https://www.html.it/pag/60273/le-espressioni-regolari-in-php/
//W3S: https://www.w3schools.com/php/php_regex.asp
//Tutorial Republic: https://www.tutorialrepublic.com/php-tutorial/php-regular-expressions.php
//PHP.net: https://www.php.net/manual/en/function.preg-match.php

$testo = "Oggi è una splendida giornata, possiamo andare al mare";



/*
CARATTERI REG EX
/ / servono ad indicare inizio e fine della regola

^ indica che la stringa deve iniziare con quelle caratteristiche

$ indica la fine della regola

i fuori dal / attiva la modalità case insensitive

[aeiou]	Le parentesi quadre: Uno dei caratteri compresi nella parentesi

{} inizio e fine dell'intervallo. {minimo, massimo} {masismo}
*/

$nome = "Michele";
$cap = "00600";
$cf = "RSSMRR23L56B657S";

$pattern = "/^mi/i"; //Pattern per testare l'espressione regolare
$pattern_cap = "/^[0-9]{5}$/"; //Regola per testare la corretta scrittura di un CAP
$pattern_CF = "/^[A-Z]{6}[0-9]{2}[A-Z]{1}[0-9]{2}[A-Z]{1}[0-9]{3}[A-Z]{1}$/"; //CCC CCC 11 C 11 C 111 C  SRB MHL 79 L 26 B 715 S 
$pattern_mail = "/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(.\w{2,4})+$/";

//Vado a testare il Pattern sulla stringa, la funzione ritorna un booleano
// 0 (false) pattern non trovato
// 1 (true) pattern trovato

if(preg_match($pattern_CF, $cf)){
    echo "Pattern trovato";
}else{
    echo "Pattern non trovato";
}


?>