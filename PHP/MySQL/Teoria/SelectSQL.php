<?php 
//Documentazione:
//Tutorial Republic: https://www.tutorialrepublic.com/php-tutorial/php-mysql-select-query.php


include('../conf/connessioneDB.php');

//Voglio selzionare tutti gli elementi della tabellu utenti

//Per estrarre i dati da una tabella in sql si usa SELECT
$sql = "SELECT * FROM utenti"; //Scrivo la Query in SQL

//Faccio eseguira la query e ricordo il risultato della queri in una variabile
$ris = $conn->query($sql);

//Voglio conoscere quante righe mi sono state restituite
echo "<br>".$ris->num_rows;

//Per stampare il contenuto di tutte le righe presenti in $ris
while($riga = $ris->fetch_array()){
    echo "<br>";
    echo "ID: " . $riga["id"]. "<br>";
    echo "Nome: " . $riga["nome"] . "<br>";
    echo "Cognome: " . $riga["cognome"]. "<br>";
    echo "Email: " . $riga["email"]. "<br>";
    echo "Password: " . $riga["pwd"]. "<br>";
}
?>