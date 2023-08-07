<?php 

include('funzioni.php');

//echo pulisciTesto($_POST["username"]);
//$_POST["pwd"];

$file = "user.txt";
//1)Cerco in nome utente nella lista dei nomi utente
//1)Leggo il file
$content = file_get_contents($file);

//2) Trasformo le righe in elementi di un array
$ar_contenuto = explode("\n", $content);
//3)Scorro l'array
foreach($ar_contenuto as $riga){
    //Trasformo ogni riga in un array di 2 elementi posizione 0 username, 1 password codificata
    $ar_riga = explode(" ", $riga);
    //Cerco il nome utente inserito
    if($ar_riga[0] == pulisciTesto($_POST["username"])){
        echo "Utente trovato";
        //Se entro nel if significa che ho trovato la username
        //Controllo sel la password inserita è corretta
        if($ar_riga[1] == md5($_POST["pwd"])){
            echo "ok";
            header('Location: dashboard.php');
            break; //Fermo il ciclo forEach
        }else{
            echo "PWD errata";
            header('Location: login.php?esito=2');
            break;//Fermo il ciclo forEach
        }
    }else{
        header('Location: login.php?esito=1');
    }
}


?>