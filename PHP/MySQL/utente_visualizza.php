<?php

session_start();
//Evita sia che una persona non loggata veda la pagina sia chi non è amministratore
if (!$_SESSION["user_id"] || $_SESSION["ruolo"] != "amministratore") {
    header('Location: dashboard.php');
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
         $id_utente = $_GET["id_utente"];

         $ris = $conn->query("SELECT * FROM utenti WHERE id = $id_utente");
 
         $riga = $ris->fetch_assoc();
        ?>

        <h1>Dattagli Utente <?php echo formattaTesto($riga["nome"]) . " ". formattaTesto($riga["cognome"])?></h1>

        <table class="table table-striped">
        <?php

       
        echo "<tr><td>Nome</td><td>" . formattaTesto($riga["nome"]) . "</td></tr>";
        echo "<tr><td>Cognome</td><td>" . formattaTesto($riga["cognome"]) . "</td></tr>";
        echo "<tr><td>Email</td><td>" . $riga["email"] . "</td></tr>";
        echo "<tr><td>Ruolo</td><td>" . $riga["ruolo"] . "</td></tr>";
        //Controllo se è presente l'immagine di profilo
        if(is_null($riga["img_profilo"])){
            echo "<tr><td>Immagine Profilo</td><td><img src='img/default-user-image.png' class='img-thumbnail'></td></tr>";
        }else{
            $img_pro = $riga["img_profilo"]; //Salvo nella variabile per non dover concatenare
            echo "<tr><td>Immagine Profilo</td><td><img src='img/$img_pro' class='img-thumbnail'></td></tr>";
        }


        ?>

        </table>


    </div>

    <!-- inizio Footer -->
    <?php include('template/footer.php') ?>
    <!-- fine Footer -->
    <!-- JS BooTstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>