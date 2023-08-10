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

        <h1>Inserisci Utente</h1>

        <form method="post" action="utente_inserisci_insert.php" enctype="multipart/form-data">
        <table class="table">
        <?php

        
        echo "<tr><td>Nome</td><td><input type='text' name='nome' required></td></tr>";
        echo "<tr><td>Cognome</td><td><input type='text' name='cognome' required></td></tr>";
        echo "<tr><td>Email</td><td><input type='email' name='email' required></td></tr>";
        echo "<tr><td>Password</td><td><input type='password' name='pwd' required></td></tr>";
        //Creo la select per ruolo
        echo "<tr><td>Ruolo</td><td><select name='ruolo'>";
            echo "<option value='utente'>Utente</option>";
            echo "<option value='amministratore'>Amministratore</option>";
        echo "</select></td>";

        echo "<tr><td>Immagine di Profilo</td><td><input type='file' height='150px' name='img_pro' accept='image/jpeg, image/png'>";

        echo "<tr><td colspan='2'><button type='submit' class='btn btn-primary'>Inserisci</button></td></tr>";

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