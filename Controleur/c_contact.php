<?php

function contact(){
    require("./Vue/v_contact.php");
}

function envoiMail(){

    $message = wordwrap($_POST["sujet"],70,"\r\n");

    $headers = 'From: ' . $_POST["mail"] . "\r\n" .
     'Reply-To: ' . $_POST["mail"] . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

    mail("chaufournais.loic@gmail.com",$_POST["objet"],$message,$headers);
}