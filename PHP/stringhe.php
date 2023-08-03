<a href="https://www.w3schools.com/php/php_ref_string.asp" target="_blank">Documentazione</a>
<br>
<?php

//Dichiaro una stringa
$nome = "Michele";

echo $nome;

//Per conoscere la lunghezza di una stringha e anche le altre cose si usa le funzioni stringhe

echo "<br>Lunghezza di stringa ".strlen($nome); //strlen restituisce il numero di caratteri

$str = "Ciao Mondo";

echo "<br>Il numero di parole è: ".str_word_count($str); //Conto parole

echo "<br>Il revers di str è: ".strrev($str); //Scrivo al contrario

echo "<br>".$str[0]; //Prima lettera
echo "<br>Ultima lettera: ".$str[strlen($str)-1]; //Stampo ultimo carattere

$str2 = "Ciao ragazzi dal corso di PHP";

//strpos(Stringa dove ricercare, Parola da cercare)
echo "<br>La posizione di ragazzi nella stringa è: ".strpos($str2, "ragazzi");

//str_replace(Parola da cambiare, Come cambiarla, Stringa che contiene la parola)
echo "<br>".str_replace("PHP", "JavaScript", $str2);

$ar_str = explode(" ", $str2); //Trasfrmo la str2 in array


//Leggo e stampo l'array per sapere il numero di elementi in un array uso la funzione count
for($i = 0; $i < count($ar_str); $i++){
    echo "<br>".$ar_str[$i];
}


?>