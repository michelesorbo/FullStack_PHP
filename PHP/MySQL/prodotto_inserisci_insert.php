<?php 

include('conf/connessioneDB.php');
include('conf/funzioni.php');

$nome = formattaIns($_POST["nome"]);
$descrizione = $_POST["descrizione"];
$prezzo = $_POST["prezzo"];
$categoria = $_POST["categoria"];
$qta = $_POST["qta"];


//Vedo se è inseria un immagine
if($_FILES["img_prodotto"]["error"] == 0){
    $filename = time().$_FILES["img_prodotto"]["name"];

    //Carico l'mmagine sul server
    move_uploaded_file($_FILES["img_prodotto"]["tmp_name"], "img/prodotti/".$filename);
}else{
    $filename = "no_img.jpeg";
}

//Creo la query per inserire
$sql = "INSERT INTO prodotti VALUE(NULL, '$nome','$descrizione', '$filename',$qta,$prezzo,$categoria)";

//Eseguo la query
if($conn->query($sql) === true){
    //echo "Prodotto inserito";
    header('Location: prodotti_visualizza.php?esito=1&msg="Prodotto inserito correttamente"');
}else{
    //echo "errore";
    header('Location: prodotti_visualizza.php?esito=2&msg="Errore Prodotto non inserito"');
}

?>