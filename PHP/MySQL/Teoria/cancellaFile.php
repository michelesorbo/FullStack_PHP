<?php 
//Documentazione:
//PHP.net: https://www.php.net/manual/en/function.unlink.php
//W3S: https://www.w3schools.com/php/func_filesystem_unlink.asp

//Per cancellare un file si usa la funzione unlink()


$filename = "../img/categorie/1691597331_Python-logo-notext.svg.png"; //Creo il persorso del file dalla mia posizione

if(unlink($filename)){
    echo "File cancellato";
}else{
    echo "Errore nel cancellare il file";
}

?>