<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
    <!--CSS BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <!-- INIZIO NAVBAR -->
    <?php include 'menu.php' ?>
    <!-- Fine NAVBAR -->

    <!-- Inizio Contenuto sito -->
    <div class="container">
        <h1>Contatti</h1>
        <p>Se hai bisogno di aiuto inviaci un messaggio utilizzando il modulo sotto</p>
        <form action="contatti_invio.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Oggetto</label>
                <input type="text" name="ogg" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Messaggio</label>
                <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <input type="submit" value="Invia Messaggio" class="btn btn-primary">
            </div>
        </form>
    </div>

    <!-- Fine contenuto sito -->

    <!-- FOOTER SITO -->
    <?php include 'footer.php'; ?>
    <!-- FINE FOOTER -->


    <!--JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>