<?php 
//Per iniziare a creare le sessioni si usa session_start()
session_start(); 

//Inioz a memorizzare i dati della sessione
$_SESSION["nome"] = "Michele";
$_SESSION["cognome"] = "Sorbo";


echo $_SESSION["nome"];

?>