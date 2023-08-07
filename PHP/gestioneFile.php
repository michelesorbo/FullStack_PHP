<?php 

//Documentazione
//Tutorial repubic: https://www.tutorialrepublic.com/php-tutorial/php-file-system.php

$file = "note.txt"; //Salvo il nome del file da usare nella variabile file

//Controllo se il file è presente sul mio server
/* if(file_exists($file)){
    echo "File Trovato<br>";

    //Lettura FILE metodo fopen e fread
    //Apro il file in lettura
    //$handle = fopen($file,"r") or die("Errore nell'apertra del file");

    //Vado a leggere i primi 10 caratteri del file e li salvo in una variabile
    // $content = fread($handle, "10"); //L'hendler del file aperto e il numero di caratteri da leggere

    //echo filesize($file); //Restituisce il numero di caratteri del file
    //$content = fread($handle, filesize($file)); //Stampo tutto il contenuto del file

    //Chiudo il file
    //fclose($handle);

    //Lettura file metodo file_get_contents
    $content = file_get_contents('https://it.wikipedia.org/wiki/Mark_Clark') or die("Errore nella letture del file");

    //Stampo a video il contenuto
    echo $content;
}else{
    echo "File non trovato";
} */

//Scrivere su un file
/*
//Metodo FOPEN e FWRITE

$dati_da_inserire = "Ciao a tutti";

//$handle_w = fopen($file, 'w') or die("Errore apertura file"); //Apro in sola lettura ma cancello il contenuto del file
//$handle_w = fopen($file, 'w+') or die("Errore apertura file");//Apro in lettura e scrittura ma cancelllo il contenuto del file
$handle_w = fopen($file, 'a+') or die("Errore apertura file");//Apro in lettura e scrittura ma non cancelllo il contenuto del file, aggiungio il nuovo testo alla fine del file


//Scrivo i dati sul file
fwrite($handle_w, "\nCiao per la quinta volta") or die("Errore scrittura file"); //\n serve per creare una nuova riga nel file sarebbe il <br> in HTML

//Leggo il contenuto del file, non posso leggere perchè aperto in modalità w, cambio in w+
//Potrebbe esserci un errore perché dopo la scrittura il cursore è già alla fine del file
//Uso la funzione fseek() per portare il cursore all'inizio del file
fseek($handle_w,0);
$content = fread($handle_w, filesize($file)) or die("Errore nell alettura del file");

//Dopo fopen chiudere smepre il file
fclose($handle_w);
$content = str_replace("\n", "<br>",$content);//Cambio \n con br per avere la stessa forma del file sul server
echo $content;
*/

/*
//Metodo FILE_PUT_CONTENTS
//Scrivo in modalità append 
file_put_contents($file, "\nScrivo con file_put per la terza volta", FILE_APPEND);

*/
$content = file_get_contents($file);
//Salvo il contenuto del file in un array
$ar_file = explode("\n",$content);
print_r($ar_file);

echo "<ul>";

foreach($ar_file as $riga){
    
    if($riga == "Michele Sorbo"){
        echo "<li>".$riga." TROVATO</li>";
    }else{
        echo "<li>".$riga."</li>";
    }
}

echo "</ul>";
?>