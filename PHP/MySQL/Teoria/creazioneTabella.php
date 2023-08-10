<?php 
//Documentazione: https://www.tutorialrepublic.com/php-tutorial/php-mysql-create-table.php


include('../conf/connessioneDB.php');

$sql = "CREATE TABLE contatti(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tipo_contatto VARCHAR(50) NOT NULL,
    contatto VARCHAR(150),
    id_utente INT(5)
)";

if($conn->query($sql) === true){
    echo "Tabella creata";
}else{
    echo "Errore creazione";
}

?>