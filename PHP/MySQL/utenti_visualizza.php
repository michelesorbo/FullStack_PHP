<?php 

session_start();

if(!$_SESSION["user_id"] || $_SESSION["ruolo"] != "amministratore"){
    header('Location: login.php');
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
    <?php echo $_SESSION["ruolo"]; ?>
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

            while($riga = $ris->fetch_assoc()){
                echo "<tr>";
                echo "<td>". $riga["nome"] . "</td>";
                echo "<td>". $riga["cognome"] . "</td>";
                echo "<td>". $riga["email"] . "</td>";
                echo "<td>". $riga["ruolo"] . "</td>";
                echo "<td>Visualizza elimina modifica</td>";
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
</body>
</html>