<?php 

print_r($_FILES["file"]);

//Inserimento senza nessun controllo
//Vado a prendere le informazioni che mi servono dall'array
$filename = $_FILES["file"]["name"]; //Assegno lo stesos nome del file che mi è stato caricato

//Controllo se nella cartella img è già presente un'immagine con lo stesso nome 
if(file_exists("img/".$filename)){
    echo "File già presente";
}else{
    //Carico il file, sposto il file dalla cartella temp del browser nella cartella img del server
    //Si usa move_uploaded_files(temp_file,cartella_del_server)
    move_uploaded_file($_FILES["file"]["tmp_name"], "img/".$filename);
    echo "Immagine caricata";
}

?>