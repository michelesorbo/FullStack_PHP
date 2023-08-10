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
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizza Categorie</title>
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

        .testo_rosso{
            color: red;
        }

        .testo_verde{
            color: green;
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

        <h1>Elenco Categorie del sito</h1>

        <!-- gestione avvisi -->
        <?php if (isset($_GET["esito"])) : ?>
            <?php if ($_GET["esito"] == 1) : ?>
                <div class="alert alert-success" id="avviso" role="alert">
                    Categoria modificata correttamente
                </div>
            <?php else : ?>
                <div class="alert alert-danger" id="avviso" role="alert">
                    Errore modifica categoria
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <!-- fine gestione avvisi -->

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Creo la query per estrarre tutti gli utenti con ruoo utente
                $ris = $conn->query("SELECT * FROM categorie");

                while ($riga = $ris->fetch_assoc()) {
                    $id_cat = $riga["id"]; //Salvo l'id in una variabile
                    echo "<tr>";
                    echo "<td>" . formattaTesto($riga["nome"]) . "</td>";
                    echo "<td>" . $riga["descrizione"] . "</td>";
                    echo "<td>
                    <a href='categoria_visualizza.php?id_cat=$id_cat'><span class='material-symbols-outlined'>category</span></a>
                    <a href='categoria_modifica.php?id_cat=$id_cat'><span class='material-symbols-outlined testo_verde'>edit</span></a>
                    <a href='#' data-bs-toggle='modal' data-bs-target='#conferma-elimina-$id_cat' ><span class='material-symbols-outlined testo_rosso'>delete</span></a>
                    </td>";
                    echo "</tr>";
                ?>
                    <!-- Modal -->
                    <div class="modal fade" id="conferma-elimina-<?php echo $id_cat ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Elimina Categoria</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro che vuoi eliminare la categoria <?php echo formattaTesto($riga["nome"]); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                    <a href="categoria_elimina.php?id_cat=<?php echo $id_cat; ?>&img_categoria=<?php echo $riga["img_categoria"]; ?>" class="btn btn-primary">Elimina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
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

        function nascondiAvviso() {
            //alert("Ciao")
            avviso.style.display = "none"
            clearInterval(nascondi)
        }

        let nascondi = setInterval(nascondiAvviso, 3000);
    </script>
</body>

</html>