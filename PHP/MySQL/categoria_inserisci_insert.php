<?php 

include('conf/connessioneDB.php');
include('conf/funzioni.php');

$nome = formattaTesto($_POST["nome"]);
$descrizione = $_POST["descrizione"];

if($_FILES["img_pro"]["error"] == 0){
    $filename = time()."_".$_FILES["img_cat"]["name"];

    //Carico l'mmagine sul server
    move_uploaded_file($_FILES["img_cat"]["tmp_name"], "img/categorie/".$filename);
}else{
    $filename = "no_img.jpeg";
}

$sql = "INSERT INTO categorie VALUE(NULL, '$nome', '$descrizione', '$filename')";

if($conn->query($sql) === true){
    header('Location: categorie_visualizza.php?esito=1');
}else{
    header('Location: categorie_visualizza.php?esito=2');
}

?>