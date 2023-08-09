<?php

session_start();
//Evita sia che una persona non loggata veda la pagina sia chi non è amministratore
if (!$_SESSION["user_id"] || $_SESSION["ruolo"] != "amministratore") {
    header('Locategoriaion: dashboard.php');
}

//Includo i file di configurazione
include("conf/funzioni.php");
include("conf/connessioneDB.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizza Utente</title>
    <!-- CSS BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }
    </style>
</head>

<body>
    <!-- inizio Navbar -->
    <?php
    include('template/menu.php');
    // if($_SESSION["ruolo"] == "amministratore"){
    //     include('template/menu_amministratore.php');    
    // }else{
    //     include('template/menu.php');
    // }
    ?>
    <!-- Fine Navbar -->

    <div class="container">
        <?php 
         $id_categoria = $_GET["id_cat"];

         $ris = $conn->query("SELECT * FROM categorie WHERE id = $id_categoria");
 
         $riga = $ris->fetch_assoc();
        ?>

        <h1>Dattagli Categoria <?php echo formattaTesto($riga["nome"]); ?></h1>

        <form method="post" action="categoria_modifica_update.php" enctype="multipart/form-data">
        <table class="table">
        <?php

        
        echo "<tr><td>Nome</td><td><input type='text' name='nome' value='" . formattaTesto($riga["nome"]) . "'></td></tr>";
        echo "<tr><td>Descrizione</td><td><textarea name='descrizione' cols='30' rows='10'>".$riga["descrizione"]."</textarea></td></tr>";

        //Controllo se è presente l'immagine di categoria
        if(is_null($riga["img_categoria"])){
            echo "<tr><td>Immagine categoria</td><td><img src='img/catogorie/no_img.jpeg' class='img-thumbnail'></td></tr>";
        }else{
            $img_cat = $riga["img_categoria"]; //Salvo nella variabile per non dover concategoriaenare
            echo "<tr><td>Immagine categoria</td><td><img src='img/categorie/$img_cat' class='img-thumbnail' height='150px'></td></tr>";
        }

        echo "<tr><td>Aggiorna Immagine di categoria</td><td><input type='file' height='150px' name='img_cat' accept='image/jpeg, image/png'>";


        echo "<input type='hidden' name='id_categoria' value='$id_categoria'>";
        //echo "<tr><td>Ruolo</td><td>" . $riga["ruolo"] . "</td></tr>";
        echo "<tr><td colspan='2'><button type='submit' class='btn btn-primary'>Modifica</button></td></tr>";

        ?>

        </table>
        </form>

    </div>

    <!-- inizio Footer -->
    <?php include('template/footer.php') ?>
    <!-- fine Footer -->
    <!-- JS BooTstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>