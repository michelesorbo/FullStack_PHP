<?php 

//Cancello i cookie
setcookie("login","",time()-3600);
setcookie("username","",time()-3600);

//Rimano sulla pagina di login
header('Location: login.php');

?>