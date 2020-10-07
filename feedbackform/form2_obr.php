<?php
$mail = 'webdevelop301020@gmail.com';
$email = $_POST["email"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$tel = $_POST["phone"];
$msg = $_POST["msg"];
$topic = $_POST["topic"];
$message = "From:" . $name . " " . $surname. "\r\n" .
           "Telephone :" . $tel . "\r\n" .
           "E-mail :" . $email . "\r\n" .
           "To :" . $mail . "\r\n" .
           "Subject :" . $topic . "\r\n" .
           "Message :" . $msg;

$to = $mail . ", " . $email;
$subject = $topic;
$message = wordwrap($message, 70, "\r\n");
$headers = "Reply-To: " . $email . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

$isSend = mail($to, $subject, $message, $headers);
if ($isSend) {
  echo "success";
}else{
  echo "error";}
?>
