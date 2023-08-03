<?php
if($_POST["user"] == "Michele" && $_POST["pwd"] == "1234"){
    header('Location: michele.html');
}else{
    header('Location: errore.html');
}
?>