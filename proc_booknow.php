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
$salutation       = $_POST['salutation'] ?? '';
$fullName         = $_POST['fullName'] ?? '';
$email            = $_POST['email'] ?? '';
$phone            = $_POST['phone'] ?? '';
$arrivalDeparture = $_POST['arrivalDeparture'] ?? '';
$service          = $_POST['service'] ?? '';

$airport          = $_POST['airport'] ?? '';
$airline          = $_POST['airline'] ?? '';
$flightNumber     = $_POST['flightNumber'] ?? '';
$flightDate       = $_POST['flightDate'] ?? '';
$flightTime       = $_POST['flightTime'] ?? '';
$destination      = $_POST['destination'] ?? '';

$meetGreet        = $_POST['meetGreet'] ?? 'No';
$numBags          = $_POST['numBags'] ?? '';

$country          = $_POST['country'] ?? '';
$nature           = $_POST['nature'] ?? '';
$inquiry          = $_POST['inquiry'] ?? '';

// =====================================
// EMAIL CONTENT
// =====================================
$subject = "New Booking Inquiry - Atlas Relocation Services";

$message = "
<h2>New Booking Inquiry Submitted</h2>

<h3>Personal Information</h3>
<strong>Salutation:</strong> $salutation <br>
<strong>Full Name:</strong> $fullName <br>
<strong>Email:</strong> $email <br>
<strong>Phone:</strong> $phone <br><br>

<h3>Service Details</h3>
<strong>Arrival/Departure:</strong> $arrivalDeparture <br>
<strong>Service Needed:</strong> $service <br><br>

<h3>Airport Details</h3>
<strong>Airport:</strong> $airport <br>
<strong>Airline:</strong> $airline <br>
<strong>Flight Number:</strong> $flightNumber <br>
<strong>Date:</strong> $flightDate <br>
<strong>Time:</strong> $flightTime <br>
<strong>Destination:</strong> $destination <br><br>

<h3>Meet & Greet</h3>
<strong>Meet & Greet:</strong> $meetGreet <br>
<strong>No. of Bags:</strong> $numBags <br><br>

<h3>Inquiry Information</h3>
<strong>Country:</strong> $country <br>
<strong>Nature of Inquiry:</strong> $nature <br><br>

<strong>Inquiry Message:</strong><br>
$inquiry <br><br>

<hr>
Submitted On: " . date("Y-m-d H:i:s") . "
";

// =====================================
// SEND TO ADMIN
// =====================================
$admin_email = "";
$mail->addAddress($admin_email);

// Allow replying to the user
$mail->addReplyTo($email, $fullName);

$mail->Subject = $subject;
$mail->Body    = $message;

if ($mail->send()) {
   echo "<script>
            alert('Message sent successfully!');
            window.location.href='index.php';
          </script>";
} else {
      echo "<script>
            alert('Message could not be sent. Please try again later.');
            window.location.href='index.php';
          </script>";
}
?>
