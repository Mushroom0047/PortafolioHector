<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer:PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version 1.0 \r\n";
    $header .= "Content-Type: text/plain";
    
    $message = "Este mensaje fue envidao por: " . $name . " \r\n";
    $message .= "Su e-mail es: " .$mail . "\r\n";
    $message .= "Teléfono de contacto: " . $phone . "\r\n";
    $message .= "Enviado el: " .date('d/m/y', time());

    $para = 'hectorvaldesm47@gmail.com';

    mail($para, $subject, utf8_decode($message), $header);

    header("Location:index.html");
?>