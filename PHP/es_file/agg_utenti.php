<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci nuovo utente</title>
    <!-- CSS BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <p>Creare un form dove inserire una username e una password. Creare la pagina che riceverà i dati del form
        e dopo aver pulito in campo username dagli spazzi vuoiti prima e dopo il testo e portato tutot il testo 
        in minuscolo salvare le credenziali sul file user.txt
        il file sarà utente password
    </p>

    <div class="container">
        <h1>Inserisci nuovo Utente</h1>
        <form method="post" action="insUser.php">
            <table>
                <tr>
                    <td>Nome utente</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pwd"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Iscrivi" class="btn btn-primary"></td>
                </tr>
            </table>

        </form>

        <!-- mostro ok se è settata la variabile get esito -->
        <?php if(isset($_GET["esito"])): ?>
            <div class="alert alert-success" role="alert">
                Utente inserito correttamente
            </div>
        <?php endif; ?>
            
        
    </div>
    
    <!-- JS BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>