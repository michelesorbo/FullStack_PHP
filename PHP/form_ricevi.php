<?php
if($_POST["nome"] == "Davide"){
    header('Location: davide.html');
}else{
    //header('Location: errore.html'); //Serve a fare il reindirizzamnto su una pagina
    header('Location: http://www.google.it');
}

?>