<?php 

session_start();

if(!$_SESSION["user_id"]){
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
    <title>Document</title>
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

    <h1>Benvenuto <?php echo formattaTesto($_SESSION["user_nome"]) . " " . formattaTesto($_SESSION["user_cognome"]) . " " . $_SESSION["ruolo"]; ?></h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos culpa magnam sapiente reprehenderit neque animi illo ullam quod reiciendis, incidunt expedita eius eaque vel laborum labore maiores officiis dolores obcaecati.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos culpa magnam sapiente reprehenderit neque animi illo ullam quod reiciendis, incidunt expedita eius eaque vel laborum labore maiores officiis dolores obcaecati.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos culpa magnam sapiente reprehenderit neque animi illo ullam quod reiciendis, incidunt expedita eius eaque vel laborum labore maiores officiis dolores obcaecati.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos culpa magnam sapiente reprehenderit neque animi illo ullam quod reiciendis, incidunt expedita eius eaque vel laborum labore maiores officiis dolores obcaecati.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos culpa magnam sapiente reprehenderit neque animi illo ullam quod reiciendis, incidunt expedita eius eaque vel laborum labore maiores officiis dolores obcaecati.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos culpa magnam sapiente reprehenderit neque animi illo ullam quod reiciendis, incidunt expedita eius eaque vel laborum labore maiores officiis dolores obcaecati.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos culpa magnam sapiente reprehenderit neque animi illo ullam quod reiciendis, incidunt expedita eius eaque vel laborum labore maiores officiis dolores obcaecati.</p>

    </div>

    <!-- inizio Footer -->
    <?php include('template/footer.php') ?>
    <!-- fine Footer -->
<!-- JS BooTstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>