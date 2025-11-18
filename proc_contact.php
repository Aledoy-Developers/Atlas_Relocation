<?php
// =====================================
// PHPMailer CONFIGURATION
// =====================================
require_once('PHPMailer/PHPMailerAutoload.php');

include('smtp-setting.php');

// =====================================
// CHECK IF FORM IS POST
// =====================================
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request.");
}

// =====================================
// COLLECT FORM DATA
// =====================================
$name    = htmlspecialchars(strip_tags(trim($_POST['name'] ?? '')));
$email   = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(strip_tags(trim($_POST['message'] ?? '')));

// =====================================
// VALIDATE EMAIL
// =====================================
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email address.'); window.location.href='index.php';</script>";
    exit();
}

// =====================================
// EMAIL CONTENT
// =====================================
$subject = "New Contact Form Submission";

$body = "
<h3>Contact Form Submission</h3>
<p><strong>Name:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Message:</strong><br>$message</p>
<hr>
Submitted On: " . date("Y-m-d H:i:s") . "
";

// =====================================
// SEND TO ADMIN
// =====================================
$admin_email = "";
$mail->addAddress($admin_email);
$mail->addReplyTo($email, $name);

$mail->Subject = $subject;
$mail->Body    = $body;

if ($mail->send()) {
    echo "<script>
            alert('Message sent successfully!');
            window.location.href='index.php';
          </script>";
} else {
    echo "<script>
            alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
            window.location.href='index.php';
          </script>";
}
?>
