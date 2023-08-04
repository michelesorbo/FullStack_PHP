<?php 

for($i = 0; $i < 11; $i++){
    echo $i."<br>";
}

$i = 0; //Dichiari indice
while($i <= 10){ //Vedo Condizione
    echo $i."<br>";
    $i++;//Incremento indice
}

$i = 4;
do{
    echo $i . "<br>";
    $i++;
}while($i < 5);


//Brack e continue
echo "<br>Esempio Continue<br>";

for ($i=0; $i < 5; $i++) { 
    if($i == 3){
        continue; //Voglio che quando arrivi a 3 deve andare avanti con la i e non deve eseguire il codice sotto
    }
    echo $i . "<br>";
}

echo "<br>Esempio Breack<br>";

for($i = 0; $i < 5; $i++){
    if($i == 3){
        break; //Finisce il FOR prima della condizione messa nel for
    }
    echo $i . "<br>";
}
echo "<br>Esercizio <br>";
$ar = [1,3,5,8,9,6];
//Usando continue stamoare solo i numeri pari
for($i=0; $i<count($ar);$i++){
    if($ar[$i]%2 != 0){
        continue;
    }
    echo $ar[$i] . "<br>";
}
echo "<br>Esercizio for each <br>";

foreach($ar as $el){
    if($el%2 != 0){
        continue;
    }
    echo $el . "<br>";
}
?>