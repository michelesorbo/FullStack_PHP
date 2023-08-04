<?php 

//Documentazione https://www.php.net/manual/en/function.date.php
//W3S: https://www.w3schools.com/php/func_date_date.asp

//La finizone time() ritorna in timestamp è una sequenza di caratteri che rappresentano una data e/o un orario
echo time();

//Vecchio metodo fino a php 7
$data = date('D-M-Y H:i:s', time()); //Ritorna l'ora del server

echo "<br>Data PHP 7: " . $data;

//Da PHP 8 in poi 
$data2 = date('d-m-Y');
echo "<br>Data PHP 8: " . $data2;
?>

<p id="tempo"></p><button onclick="stopData()">Ferma la data</button>
<p id="timer"></p>

<script>
    const tempo = document.querySelector("#tempo")
    const timer = document.querySelector("#timer")

    console.log(Date.now())
    const oggi = new Date(Date.now())

    console.log(oggi.toDateString())

    //Altro metodo
    // let oggi2 = new Date()
    // console.log(oggi2.getHours() + " " + oggi2.getMinutes() + " " + oggi2.getSeconds())
    
    function segnaTempo(){
        let oggi2 = new Date()
        tempo.innerHTML = "<br>Ora di JS presa dal PC del client: " + oggi2.getHours() + " " + oggi2.getMinutes() + " " + oggi2.getSeconds()
    }

    //SetInterval serve a far fare delle cose ogni tot di secondi o minuti o ore
    let miaData = setInterval(segnaTempo, 1000) //Ogni secondo vado a richiamare la funzione segna tempo

    function stopData(){
        clearInterval(miaData)
    }

    //Mi fate un conto alla rovescia di 10 secondi
    let timer_2 = 3
    function timerF(){
        if(timer_2 == 0){
            clearInterval(mioTimer)
        }
        timer.innerHTML = timer_2 //Stampo il valore di timer
        timer_2-- //Decremento la variabile timer
    }    

    let mioTimer = setInterval(timerF, 1000)

</script>