<?php
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Name: ". $name ."
Email: ". $email ."
Message: ". $message ."

";

mail ("danypolo18@hotmail.com" , "New Message Form Your Porfolio", $email_message);
header("Location:../index.html");
?>

