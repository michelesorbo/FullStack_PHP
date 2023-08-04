<?php 

function formattaTesto($str){
    $str_pulita = $str; //Assegno il contenuto di post alla variabile
    $str_pulita = strtolower($str_pulita); //Cambio tutti i caratteri in minusoclo
    $str_pulita = trim($str_pulita); //Elimino eventuali spazzi vuoti ad inizio o fine stringa
    $str_pulita = str_replace(",", "",$str_pulita); //Elimino eventuali ,
    $str_pulita = str_replace(".", "",$str_pulita); //Elimino eventuali . 
    $str_pulita = str_replace("  ", "",$str_pulita); //Elimino i doppi spazzi con un solo spazzio
    $str_pulita = str_replace("  ", "",$str_pulita);
    return $str_pulita;
}

function visualizzaTesto($str){
    return ucfirst($str);
}

function stampaAR($ar){
    foreach($ar as $el){
        echo "<br>".$el;
    }
}

function dividi($a,$b){
    if($b == 0){
        return "Operazione non consentita";
    }else{
        return $a/$b;
    }
}

?>