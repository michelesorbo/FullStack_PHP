<?php 

include('conf/connessioneDB.php');
include('conf/funzioni.php');

$nome = formattaTesto($_POST["nome"]);
$descrizione = $_POST["descrizione"];
$id_categoria = $_POST["id_categoria"];

//print_r($_FILES["img_cat"]);

if($_FILES["img_cat"]["error"] == 0){
    $filename = time()."_".$_FILES["img_cat"]["name"];

    //Carico l'mmagine sul server
    move_uploaded_file($_FILES["img_cat"]["tmp_name"], "img/categorie/".$filename);
}else{
    $filename = "no_img.jpeg";
}

//Faccio la query di update per i dati senza la password

$sql = "UPDATE categorie 
SET nome = '$nome', descrizione = '$descrizione', img_categoria = '$filename'
WHERE id = $id_categoria";

if($conn->query($sql) === true){
    header('Location: categorie_visualizza.php?esito=1');
}else{
    header('Location: categorie_visualizza.php?esito=2');
}

//Faccio l'update della password se è settata

?>