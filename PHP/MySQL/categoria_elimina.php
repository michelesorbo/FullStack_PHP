<?php 

include('conf/connessioneDB.php');

$id_cat = $_GET["id_cat"];
echo $_GET["img_categoria"];

//Controllo se devo cancellare l'immagine
if($_GET["img_categoria"] != "no_img.jpeg"){
    $filename = "img/categorie/".$_GET["img_categoria"];
    unlink($filename);
}

//Creo la queri per eliminare un utente
//DELETE FROM table_name WHERE condition;
$sql = "DELETE FROM categorie WHERE id = $id_cat";

if($conn->query($sql) === true){
    header('Location: categorie_visualizza.php?esito=1');
}else{
    header('Location: categorie_visualizza.php?esito=2');
}

?>