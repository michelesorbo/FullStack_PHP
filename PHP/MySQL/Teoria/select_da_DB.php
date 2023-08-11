<?php 

include('../conf/connessioneDB.php');

?>

<select>
    <option>--Seleziona Categoria--</option>
    <<?php 
        $ris = $conn->query("SELECT id, nome FROM categorie");
        
        while($riga = $ris->fetch_assoc()){
            echo "<option value='".$riga["id"]."'>".$riga["nome"]."</option>";
        }
    ?>
</select>