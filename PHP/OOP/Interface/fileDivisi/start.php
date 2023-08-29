<?php

require_once("Auto.php");
require_once("Bici.php");

//Testo il programma
$a1 = new Auto("FIAT","Rosso","Benzina");
$b1 = new Bici("Legnano","Verde","Corsa");
$b2 = new Bici("Legnano","Nera","BMX");

echo $a1;
echo $b1;
echo $b2;