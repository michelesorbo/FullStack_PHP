<?php 

//Documentazione:
//Tutorial Republic: https://www.tutorialrepublic.com/php-tutorial/php-mysql-connect.php
//W3S: https://www.w3schools.com/php/php_mysql_connect.asp

//Connettimao il nostro database con il metodo mysqli

//Pe connettere un DB devo conoscere 4 cose:
//1) devo conoscere l'indirizzo del servere dove è presente il DB (nel nostro caso sarà localhost)
//2) Username del DB
//3) Password del DB
//4) Nome del DB da utilazzare

//$con mi serve per poter fare tutte le azioni sul db
//Connessione DB locale
$conn = new mysqli("localhost","root","root","frontendphp");

//Connessione DB 000WEBHOST
//$conn = new mysqli("localhost","id21110970_michele","Corso#20223","id21110970_frontendphp");

//Testo se la connessione è andata a buon fine
if($conn === false){
    die("Errore nello stabilire una connesisone con il DB: " . $conn->connect_error);
}

//echo "Connesisone riuscita: " . $conn->host_info;

?>