<?php 

include('conf/connessioneDB.php');
include('conf/funzioni.php');

$id_utente = $_POST["id_utente"];
$tipo_contatto = $_POST["tipo_contatto"];
$contatto = $_POST["contatto"];

$sql = "INSERT INTO contatti VALUE(NULL, '$tipo_contatto', '$contatto', $id_utente)";

//Eseguo la query
if($conn->query($sql) === true){
    header('Location: utente_contatti.php?esito=1&msg="Contatto inserito correttamente"&id_utente='.$id_utente);
}else{
    header('Location: utente_contatti.php?esito=2&msg="Errore contatto non inserito"&id_utente='.$id_utente);
}

?>