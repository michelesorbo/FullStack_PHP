<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Benvenuto <?php if(isset($_COOKIE["username"])){
        echo $_COOKIE["username"];
    }else{
        echo "Anonimo";
    } ?></h1>

    <a href="logout.php">LogOut</a>
</body>
</html>