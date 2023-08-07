<?php 

include('funzioni.php'); //Includo il file con tutte le funzioni

echo $_POST["user"];
echo $_POST["pwd"];

//Scrivo il contenuto preso dal form nel file user.txt

$file = "user.txt"; //Ricordo il nome del file da usare e lo salvo in una variabile

//Scrivo i nominativi sul file
file_put_contents($file, pulisciTesto($_POST["user"]). " ". $_POST["pwd"]."\n", FILE_APPEND);

header('Location: agg_utenti.php?esito=1');


?>