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
?>