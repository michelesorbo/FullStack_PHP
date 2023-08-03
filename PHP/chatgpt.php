<?php
// Imposta i valori minimo e massimo per il range di numeri casuali
$minimo = 1;
$massimo = 90;

// Genera il numero casuale tra il valore minimo e massimo
$numeroCasuale = mt_rand($minimo, $massimo);

// Stampa il numero casuale generato
echo "Numero casuale: " . $numeroCasuale;
?>