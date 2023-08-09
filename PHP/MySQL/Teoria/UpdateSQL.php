<?php 
include('../conf/connessioneDB.php');

//UPDATE <nome_tabella> SET campo = nuovo_valore WHERE chiave_primaria

$sql = "UPDATE utenti SET email = 'davide@rossi.it', nome = 'mario' WHERE id = 4";

if($conn->query($sql) === true){
    echo "Update Riuscito";
}else{
    echo "Errore in update";
}

?>