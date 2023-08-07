<?php 

include('funzioni.php'); //Includo il file con tutte le funzioni

echo $_POST["user"];
echo $_POST["pwd"];

//Scrivo il contenuto preso dal form nel file user.txt

$file = "user.txt"; //Ricordo il nome del file da usare e lo salvo in una variabile

//Prima di scrivere il nuovo utente controllare se il nome inserito è già presente nel file
//1)Leggo il file
$content = file_get_contents($file);

//2) Trasformo le righe in elementi di un array
$ar_contenuto = explode("\n", $content);
//3)Scorro l'array

$trovato = false; //Imposto una variabile di controllo a false

foreach($ar_contenuto as $el){
    $ar_el = explode(" ", $el); //Trasfomo ogni riga in un nuovo array
    print_r($ar_el);
    //Controllo se alla posizine 0 della stringa trasfomata in array trovo il nome utente insertio
    if($ar_el[0] == pulisciTesto($_POST["user"])){
        $trovato = true; //Se lo trovo cambio la variabile di controllo a true
    }
}

if($trovato){
    //Significa che è stato trovato
    header('Location: agg_utenti.php?esito=2');
}else{
    //User non trovata e posso aggiungere
    file_put_contents($file, pulisciTesto($_POST["user"]). " ". md5($_POST["pwd"])."\n", FILE_APPEND);
    header('Location: agg_utenti.php?esito=1');
}

//Scrivo i nominativi sul file
// file_put_contents($file, pulisciTesto($_POST["user"]). " ". $_POST["pwd"]."\n", FILE_APPEND);

// header('Location: agg_utenti.php?esito=1');


?>