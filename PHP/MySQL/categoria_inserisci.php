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
    <title>Inserisci Categoria</title>
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

        <h1>Inserisci nuova Categoria</h1>

        <form method="post" action="categoria_inserisci_insert.php" enctype="multipart/form-data">
        <table class="table">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome"></td>
        </tr>
        
        <tr>
            <td>Descrizione</td>
            <td><textarea name="descrizione" id="" cols="30" rows="10"></textarea></td>
        </tr>

        <tr>
            <td>Immagine Categoria</td>
            <td><input type="file" name="img_cat" accept='image/jpeg, image/png'></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="Inserisci" class="btn btn-primary"></td>
        </tr>
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