<?php 
//Documentazione:
//Tutorial Republic: https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php
//PHP.net: https://www.php.net/manual/en/mysqli.insert-id.php
//W3S: https://www.w3schools.com/php/php_mysql_insert.asp

//Conoscere ID appena creato
//https://www.tutorialrepublic.com/php-tutorial/php-mysql-last-inserted-id.php

include('../conf/connessioneDB.php');

//Per comodità salvo tutti i contenuti da inserire in variabili
$nome = "test3";
$descrizione = "Bla Bla";
$img_categoria = "no_img.jpeg";

//1) Query senza indice (id) e con img di default

// $sql = "INSERT INTO categorie (nome,descrizione)
//         VALUE ('$nome', '$descrizione')";

//2) Query senza inserire i campi della tabella

$sql = "INSERT INTO categorie VALUE(NULL,'$nome','$descrizione','$img_categoria')";

if($conn->query($sql) === true){
    //Per conoscere l'id appena creato
    $id_nuovo = $conn->insert_id;
    echo "OK";
}else{
    echo "errore";
}

echo "Ultimo id creato: " . $id_nuovo;

?>