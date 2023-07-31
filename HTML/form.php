<?php

echo "Ciao dal form.php";
// echo "<br>Il nome inserito è: ".$_GET["nome"];
// echo "<br>La password inserita è: ".$_GET["pwd"]; 

echo "<br>Il nome inserito è: ".$_POST["nome"];
echo "<br>La password inserita è: ".$_POST["pwd"];
echo "<br>La tua auto è: ".$_POST["auto"];
echo "<br>Hai scelto come prino: ".$_POST["primo"];
echo "<br>Hai scelto come secondo: ".$_POST["secondi"];
echo "<br>I tuoi veicoli sono: ".$_POST["veicoli"];

?>