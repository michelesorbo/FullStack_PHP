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
    <title>Visualizza Utenti</title>
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

        <h1>Elenco utenti del sito</h1>

        <!-- gestione avvisi -->
        <?php if(isset($_GET["esito"])): ?>
            <?php if($_GET["esito"] == 1): ?>
                <div class="alert alert-success" id="avviso" role="alert">
                    Utente modificato correttamente
                </div>
            <?php else: ?>
                <div class="alert alert-danger" id="avviso" role="alert">
                    Errore modifica utente
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <!-- fine gestione avvisi -->

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Email</th>
                    <th>Roulo</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Creo la query per estrarre tutti gli utenti con ruoo utente
                $ris = $conn->query("SELECT * FROM utenti WHERE ruolo='utente'");

                while ($riga = $ris->fetch_assoc()) {
                    $id_utente = $riga["id"]; //Salvo l'id in una variabile
                    echo "<tr>";
                    echo "<td>" . formattaTesto($riga["nome"]) . "</td>";
                    echo "<td>" . formattaTesto($riga["cognome"]) . "</td>";
                    echo "<td>" . $riga["email"] . "</td>";
                    echo "<td>" . $riga["ruolo"] . "</td>";
                    echo "<td>
                    <a href='utente_visualizza.php?id_utente=$id_utente'><span class='material-symbols-outlined'>person</span></a>
                    <a href='utente_modifica.php?id_utente=$id_utente'><span class='material-symbols-outlined'>edit</span></a>
                    <a href='utente_elimina.php?id_utente=$id_utente'><span class='material-symbols-outlined'>delete</span></a>
                    </td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>

    </div>

    <!-- inizio Footer -->
    <?php include('template/footer.php') ?>
    <!-- fine Footer -->
    <!-- JS BooTstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- mio JS -->
    <script>
        const avviso = document.querySelector("#avviso");
       
        function nascondiAvviso(){
            //alert("Ciao")
            avviso.style.display = "none"
            clearInterval(nascondi)
        }
        
        let nascondi = setInterval(nascondiAvviso, 3000);

       
    </script>
</body>

</html>