<?php 

$testo = "Oggi è una splendida giornata, possiamo andare al mare";

$nome = "Michele";
$cap = "00600";

/*
CARATTERI REG EX
/ / servono ad indicare inizio e fine della regola

^ indica che la stringa deve iniziare con quelle caratteristiche

$ indica la fine della regola

i fuori dal / attiva la modalità case insensitive

[aeiou]	Le parentesi quadre: Uno dei caratteri compresi nella parentesi

{} inizio e fine dell'intervallo. {minimo, massimo} {masismo}
*/

$pattern = "/^mi/i"; //Pattern per testare l'espressione regolare
$pattern_cap = "/^[0-9]{5}$/"; //Regola per testare la corretta scrittura di un CAP
$pattern_CF = ""; //CCC CCC 11 C 11 C 111 C --> SRB MHL 79 L 26 B 715 S 

//Vado a testare il Pattern sulla stringa, la funzione ritorna un booleano
// 0 (false) pattern non trovato
// 1 (true) pattern trovato

if(preg_match($pattern_cap, $cap)){
    echo "Pattern trovato";
}else{
    echo "Pattern non trovato";
}


?>