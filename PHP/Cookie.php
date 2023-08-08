<?php 

//Documentazione:
//Tutorial Replubic: https://www.tutorialrepublic.com/php-tutorial/php-cookies.php
//PHP.net: https://www.php.net/manual/en/reserved.variables.cookies.php
//W3S: https://www.w3schools.com/php/php_cookies.asp

//Per creare un cookie si usa setcookie() per calcolare il tempo time()+secondi*minuti*ore*giorni

setcookie("bg_body","red",time()+60*60*24*30);

//Leggere un Cookie
if(isset($_COOKIE["bg_body"])){
    echo $_COOKIE["bg_body"];
}else{
    echo "non hai scelto il colore";
}

//Rimuovere un Cookie, si usa sempre setcookie() ma con il tempo al passato
setcookie("bg_body","",time()-3600);

?>