<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
</head>
<body>

    <h1>Prima form con PHP</h1>

    <!--Per inserire php in una pagina si devono aprire i tag "< ?php ?>" -->
    <?php
    //Scrivo il mio codice php che non sarà visibile nel browser
    $nome = "Michele"; //è una variabile di PHP

    //Il comando per stampare nella pagina html è echo
    echo "<p>Nome inserito: ".$nome."</p>";

    ?>

    <form method="post" action="form_ricevi.php">

    Nome: <input type="text" name="nome"><br>

    <select name="giorno">
        <?php
            //FOR in PHP
            for($i = 1; $i <= 31; $i++){
                echo "<option value='".$i."'>".$i."</option>";
            }
        ?>
    </select>

    <br>
    <input type="submit" value="Invia Form">
    </form>

</body>
</html>