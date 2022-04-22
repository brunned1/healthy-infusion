<?php

$name = $_POST['name'];
$visitor_email  = $_POST['email'];
$message  = $_POST['message'];

$email_from = 'brunner.daniel01@gmail.com';

$email_subject = "Nachricht von Gesunder Aufguss";

$email_body = "Name: $name./n" . 
                "Email: $visitor_email./n" . 
                "Nachricht: $message./n";


$to = "pikon.vanessa@gmail.com";

$headers = "Von: $email_from /r/n";

$headers .= "Antworten an: $visitor_email /r/n";

$mail($to,$email_subject,$email_body,$headers);

$header("Location: contact.html");

?>