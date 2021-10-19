<?
$addressee = 'danypolo18@hotmail.com';

$name = $_POST['name'];
$email = $_POST['email'];
$issue = $_POST['issue'];
$message = $_POST['message'];

$header = "Sent from your personal portfolio";
$completeMessage = $message . "\nSincerely: " . $name;

mail($addressee, $issue, $completeMessage, $header);

echo "<script> alert(' Mail sent successfully ') </script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";
?>


