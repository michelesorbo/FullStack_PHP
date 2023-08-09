<?php 

include('conf/connessioneDB.php');
include('conf/funzioni.php');

$nome = formattaTesto($_POST["nome"]);
$cognome = formattaTesto($_POST["cognome"]);
$mail = $_POST["email"];
//$pwd = $_POST["pwd"];
$ruolo = $_POST["ruolo"];
$id_utente = $_POST["id_utente"];

//print_r($_FILES["img_pro"]);

if($_FILES["img_pro"]["error"] == 0){
    $filename = time()."_".$_FILES["img_pro"]["name"];

    //Carico l'mmagine sul server
    move_uploaded_file($_FILES["img_pro"]["tmp_name"], "img/".$filename);
}else{
    $filename = "default-user-image.png";
}

//Faccio la query di update per i dati senza la password

if($_POST["pwd"] != ""){
    $pwd = md5($_POST["pwd"]); //Codifico la password inserita in md5
    
    $sql = "UPDATE utenti 
    SET nome = '$nome', cognome = '$cognome', email = '$mail', ruolo = '$ruolo', pwd = '$pwd', img_profilo = '$filename'
    WHERE id = $id_utente";
}else{
    $sql = "UPDATE utenti 
    SET nome = '$nome', cognome = '$cognome', email = '$mail', ruolo = '$ruolo', img_profilo = '$filename'
    WHERE id = $id_utente";
}

if($conn->query($sql) === true){
    header('Location: utenti_visualizza.php?esito=1');
}else{
    header('Location: utenti_visualizza.php?esito=2');
}

//Faccio l'update della password se è settata

?>