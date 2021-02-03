<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $para = 'contacto@hectorvaldesm.com';

    $message = "Este mensaje fue envidao por: " . $name . " \r\n";
    $message .= "Su e-mail es: " .$mail . "\r\n";
    $message .= "Enviado el: " .date('d/m/y', time());

    mail($para, $subject, utf8_decode($message), $header);

    
    header("Location:index.html");
?>