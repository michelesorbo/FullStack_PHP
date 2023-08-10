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

        .testo_rosso {
            color: red;
        }

        .testo_verde {
            color: green;
        }
    </style>
</head>

<body>
    <!-- inizio Navbar -->
    <?php
    include('template/menu.php');
    ?>
    <!-- Fine Navbar -->

    <div class="container">

        <h1>Elenco Contatti Utente</h1>

        <!-- gestione avvisi -->
        <?php if (isset($_GET["esito"])) : ?>
            <?php if ($_GET["esito"] == 1) : ?>
                <div class="alert alert-success" id="avviso" role="alert">
                    <?php echo $_GET["msg"]; ?>
                </div>
            <?php else : ?>
                <div class="alert alert-danger" id="avviso" role="alert">
                    <?php echo $_GET["msg"]; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <!-- fine gestione avvisi -->

        <table class="table table-striped">
            <thead>
                <tr>
                    <td colspan="3" align="right"><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Agg. Contatto</button></td>
                </tr>
                <tr>
                    <th>Tipo Contatto</th>
                    <th>Contatto</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id_utente = $_GET["id_utente"];
                //Creo la query per estrarre tutti gli utenti con ruoo utente
                $ris = $conn->query("SELECT * FROM contatti WHERE id_utente='$id_utente'");

                while ($riga = $ris->fetch_assoc()) {
                    $id_contatto = $riga["id"]; //Salvo l'id in una variabile
                    echo "<tr>";
                    echo "<td>" . formattaTesto($riga["tipo_contatto"]) . "</td>";
                    echo "<td>" . $riga["contatto"] . "</td>";

                    echo "<td>
                    <a href='utente_contatto_modifica.php?id_utente=$id_utente'><span class='material-symbols-outlined testo_verde'>edit</span></a>
                    <a href='#' data-bs-toggle='modal' data-bs-target='#conferma-elimina-$id_utente' ><span class='material-symbols-outlined testo_rosso'>delete</span></a>
                    </td>";
                    echo "</tr>";
                ?>
                    <!-- Modal -->
                    <div class="modal fade" id="conferma-elimina-<?php echo $id_utente ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Elimina Contatto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro che vuoi eliminare il contatto <?php echo formattaTesto($riga["tipo_contatto"]); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                    <a href="utente_contatto_elimina.php?id_utente=<?php echo $id_utente; ?>&img_profilo=<?php echo $riga["img_profilo"]; ?>" class="btn btn-primary">Elimina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </tbody>
        </table>

        <!-- MODAL INSERIMENTO CONTATTI -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Aggiungi Nuovo Contatto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="utente_contatti_insert.php">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Titpo Contatto:</label>
                                <select class="form-select" name="tipo_contatto">
                                    <option>---Scegli tipo contatto---</option>
                                    <option value="email">Email</option>
                                    <option value="email lavoro">Email Lavoro</option>
                                    <option value="telefono casa">Telefono Casa</option>
                                    <option value="telefono ufficio">Telefono Ufficio</option>
                                    <option value="cellulare personale">Cellulare Personale</option>
                                    <option value="cellulare lavoro">Cellulare Lavoro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="contatto" class="col-form-label">Contatto:</label>
                                <input type="text" name="contatto" class="form-control">
                            </div>
                            <input type="hidden" name="id_utente" value="<?php echo $id_utente; ?>">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FINE MODAL INSERIMENTO CONTATTI -->

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