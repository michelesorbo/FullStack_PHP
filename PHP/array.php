<a href="https://www.php.net/manual/en/ref.array.php" target="_blank">Documentazione</a><br>
<?php

$auto = ["Audi", "FIAT", "Toyota"];
$cars = array("Audi","FIAT","BMW");

echo $auto[1];
echo "<br>".$cars[1];

//Conoscere il numeri di elemnti di un array
echo "<br>Elementi in array: ". count($auto);

//Per inserire elementi in array uso array_push(array, elemnti da inserire)
array_push($auto,"BMW");
echo "<br>";
print_r($auto);

array_unshift($cars, "Toyota", "Ford");
echo "<br>";
print_r($cars);

//Ordiniamo l'array
sort($cars); //Ordino l'array
echo "<br>";
print_r($cars);

//ForEach su array
$ar_1 = ["Michele", 44, "Sorbo", true];

echo "<br>";
//foreach(array, come chiamo il valore)
foreach($ar_1 as $el){
    echo $el . "<br>";
}



//Array Associativi

$persona = [
    "nome" => "Michele",
    "cognome" => "Sorbo",
    "eta" => 44,
    "citta" => "Napoli",
    1 => 33
];

echo "<br>Array Associativo: ".$persona[1]. "<br>";

//Come stampare un array associativo
foreach($persona as $chiave => $valore){
    echo $chiave . " => " . $valore . "<br>";
}


//Array multidimensionali (detti anche array 2D)
$classi = [
    ["Michele", "Claudio", "Loredana"], //0
    ["Davide", "Marco", "Alessandro"], // 1
    ["Gloria", "Paolo", "Maria", "Giuseppe"], //2
    [33,"Napoli", true] //3
];

echo "<br>Leggo array Multidimendsionale: " . $classi[1][1] . "<br>";

//Stampiamo l'array multidimensionale con il for annidato

for($classe = 0; $classe < count($classi); $classe++){
    echo "Classe: " . $classe . "<br>";
    echo "<ol>";
    for($alunno = 0; $alunno < count($classi[$classe]); $alunno++){
        echo "<li>". $classi[$classe][$alunno] . "</li>"; //$classi[0][0] [0][1]...[3][3]
    }
    echo "</ol>";
}

// echo $classi[0][0];
// echo $classi[0][1];
// echo $classi[0][2];
// echo $classi[1][0];
// echo $classi[1][1];

//FOR ANNIDATI
echo "<br>";
for ($i=0; $i < 5; $i++) { 
    for ($y=0; $y < 5; $y++) { 
        echo "Valore di i = " . $i . " volare di y = " . $y . "<br>";
    }
}

?>