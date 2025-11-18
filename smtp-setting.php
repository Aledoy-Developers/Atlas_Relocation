<?php

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host       = 'mail.example.com';       // SMTP server
$mail->SMTPAuth   = true;
$mail->Username   = 'user@example.com';  // SMTP username
$mail->Password   = 'password here';           // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port       = 25;
$mail->setFrom('noreply@example.com', 'Atlas Relocation Services');
$mail->isHTML(true);


?>