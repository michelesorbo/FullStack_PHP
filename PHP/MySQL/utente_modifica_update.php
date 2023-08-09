<?php 

include('conf/connessioneDB.php');
include('conf/funzioni.php');

$nome = formattaTesto($_POST["nome"]);
$cognome = formattaTesto($_POST["cognome"]);
$mail = $_POST["email"];
//$pwd = $_POST["pwd"];
$ruolo = $_POST["ruolo"];
$id_utente = $_POST["id_utente"];

//Faccio la query di update per i dati senza la password

if($_POST["pwd"] != ""){
    $pwd = md5($_POST["pwd"]); //Codifico la password inserita in md5
    
    $sql = "UPDATE utenti 
    SET nome = '$nome', cognome = '$cognome', email = '$mail', ruolo = '$ruolo', pwd = '$pwd'
    WHERE id = $id_utente";
}else{
    $sql = "UPDATE utenti 
    SET nome = '$nome', cognome = '$cognome', email = '$mail', ruolo = '$ruolo'
    WHERE id = $id_utente";
}

if($conn->query($sql) === true){
    header('Location: utenti_visualizza.php');
}else{
    echo "Errore inserimento";
}

//Faccio l'update della password se è settata

?>