<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrittura php su HTML</title>
</head>
<body>

<p>
    Scrivo ul for in php metodo classico
    <ul>
        <?php 
            for ($i=1; $i <= 10; $i++) { 
                echo "<li>" . $i . "</li>";
            }
        ?>
    </ul>
</p>

<p>
    Come scrivere un for nuovo metodo 
    <ul>
        <?php for($i = 1; $i <= 10; $i++): ?>
            <li><?php echo $i; ?></li>
        <?php endfor; ?>
    </ul>
</p>
    
</body>
</html>