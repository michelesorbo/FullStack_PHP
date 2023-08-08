<?php 

include('conf/connessioneDB.php');
$email = $_POST["email"];
$pwd = $_POST["pwd"];

$sql = "SELECT * FROM utenti WHERE email = '$email'";

$ris = $conn->query($sql);

if($ris->num_rows > 0){
    $riga = $ris->fetch_assoc(); //Trasformo il risultato della query in riga
    if($riga["email"] == $email && $riga["pwd"] == md5($pwd)){ //Confronto se la mail e la password sono esatte
        //echo "Utente loggato";
        //Creo la SESSION
        session_start(); //Creo la sessione
        $_SESSION["user_id"] = $riga["id"]; //Salvo l'id dell'utente
        $_SESSION["user_nome"] = $riga["nome"];
        $_SESSION["user_cognome"] = $riga["cognome"];
        $_SESSION["user_email"] = $riga["email"];
        $_SESSION["ruolo"] = $riga["ruolo"];
        header('Location: dashboard.php');
    }else{
        header('Location: login.php?esito=2');
    }
}else{
    header('Location: login.php?esito=1');
}

?>