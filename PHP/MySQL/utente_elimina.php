<?php 

include('conf/connessioneDB.php');

$id_utente = $_GET["id_utente"];

if($_GET["img_profilo"] != "default-user-image.png"){
    $filename = "img/utenti/".$_GET["img_profilo"];
    unlink($filename);
}

//Creo la queri per eliminare un utente
//DELETE FROM table_name WHERE condition;
$sql = "DELETE FROM utenti WHERE id = $id_utente";

if($conn->query($sql) === true){
    header('Location: utenti_visualizza.php?esito=1&msg="Utente Eliminato"');
}else{
    header('Location: utenti_visualizza.php?esito=2&msg="Erorre eliminazione utente"');
}

?>