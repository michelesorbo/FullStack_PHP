<?php 

include('conf/connessioneDB.php');
include('conf/funzioni.php');

$nome = formattaIns($_POST["nome"]);
$cognome = formattaIns($_POST["cognome"]);
$email = $_POST["email"];
$pwd = md5($_POST["pwd"]);
$ruolo = $_POST["ruolo"];

//Vedo se è inseria un immagine
if($_FILES["img_pro"]["error"] == 0){
    $filename = time().$_FILES["img_pro"]["name"];

    //Carico l'mmagine sul server
    move_uploaded_file($_FILES["img_pro"]["tmp_name"], "img/utenti/".$filename);
}else{
    $filename = "default-user-image.png";
}

//Creo la query per inserire
$sql = "INSERT INTO utenti VALUE(NULL, '$nome','$cognome','$email','$pwd','$ruolo','$filename')";

//Eseguo la query
if($conn->query($sql) === true){
    header('Location: utenti_visualizza.php?esito=1&msg="Utente inserito correttamente"');
}else{
    header('Location: utenti_visualizza.php?esito=2&msg="Errore Utente non inserito"');
}

?>