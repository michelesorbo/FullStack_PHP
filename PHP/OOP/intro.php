<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto (Intro OOP)</title>
</head>
<body>
<h1>Pauda dalle 11:00 alle 11:15</h1>
<?php 
$marca = "BMW";
$colore = "Verde";
$modello = "Serie 1";

function getCarInfo($marca, $colore, $modello){
    return "Maraca: " . $marca . " Colore: " . $colore . " Modello: " . $modello;
}

echo getCarInfo($marca,$colore,$modello);

?>

<p>Scrivere una classe PHP chiamata "Prodotto" che ha tre proprietà: "codice", "nome" e "prezzo". Aggiungere un metodo per ottenere una descrizione del prodotto e creare l'incapsulamento delle proprità.</p>

    
</body>
</html>