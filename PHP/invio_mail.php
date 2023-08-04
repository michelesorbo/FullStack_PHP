<?php 

// MAIL BASE
// $to = "torinocsi@gmail.com"; //A
// $subject = "Oggetto: Corso PHP"; //Oggetto
// $message = "Ciao dal corpo del messaggio"; //Testo del messaggio

// //La funzione per inviare la mail è mail() ritorna true se il messaggio è stato inviato false se ci sono problemi

// if(mail($to,$subject,$message)){
//     echo "Mail Inviata";
// }else{
//     echo "Mail non inviata";
// }

//Mail Completa

//Definire il mettente e il destinatario
$nome_mittente = "Mio Nome";
$mail_mittente = "michele.sorbo@gmail.com";
$mail_destinatario = "csitorino@gmail.com";

//Cado a definire l'oggetto della mail
$mail_oggetto = "Messaggio di prova";

//Definisco il contenuto della mail
$mail_corpo = "Qusto messaggio è una prova per testare l'invio della mail";

//Vado a creare l'headers della mail
//In questa sezione posso definire il campo mittente(From)
//E posso definire i campi Cc, Bcc, ReplayTo e X-Mailer
$mail_headers = "From: " . $nome_mittente . "<" . $mail_mittente . ">\r\n";
$mail_headers .= "Replay-TO: " . $mail_mittente . "\r\n"; //+= di JS
//$mail_headers .= "X-Mailer: PHP/" . phpversion();
$mail_headers .= "MIME-Version 1.0 \r\n";
$mail_headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
//Possiamo inviar ela mail
if(mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers)){
    echo "Mail inviata";
}else{
    echo "Errore invio mail";
}


?>