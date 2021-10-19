<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$empresa = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "This message was sent by " . $nombre . ",\r\n";
$message .= "Your email is: " . $mail . " \r\n";
$message .= "Message: " . $_POST['message'] . " \r\n";
$message .= "Sent on " . date('d/m/Y', time());

$from = 'danypolo18@hotmail.com';
$issue = 'Mensaje de mi sitio web';

mail($from, $issue, utf8_decode($message), $header);

header("Location:../index.html");
?>

