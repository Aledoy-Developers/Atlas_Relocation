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
$title       = $_POST['title'] ?? '';
$gender      = $_POST['gender'] ?? '';
$fullname    = htmlspecialchars(strip_tags(trim($_POST['fullname'] ?? '')));
$email       = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$phone       = htmlspecialchars(strip_tags(trim($_POST['phone'] ?? '')));
$address     = htmlspecialchars(strip_tags(trim($_POST['address'] ?? '')));
$city        = htmlspecialchars(strip_tags(trim($_POST['city'] ?? '')));
$country     = $_POST['country'] ?? '';
$dob         = $_POST['dob'] ?? '';
$website     = htmlspecialchars(strip_tags(trim($_POST['website'] ?? '')));
$company     = htmlspecialchars(strip_tags(trim($_POST['company'] ?? '')));
$payment_method = $_POST['payment_method'] ?? '';

$start_date  = $_POST['start_date'] ?? '';
$end_date    = $_POST['end_date'] ?? '';
$grp_id      = $_POST['grp_id'] ?? '';
$pln_id      = $_POST['pln_id'] ?? '';
$member_id   = $_POST['member_id'] ?? '';
$plan_amount = $_POST['plan_amount'] ?? '';

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
$subject = "New Payment/Booking Submission - Atlas Relocation Services";

$body = "
<h2>New Booking/Payment Submission</h2>

<h3>Personal Information</h3>
<strong>Title:</strong> $title <br>
<strong>Full Name:</strong> $fullname <br>
<strong>Gender:</strong> $gender <br>
<strong>Email:</strong> $email <br>
<strong>Phone:</strong> $phone <br>
<strong>Address:</strong> $address <br>
<strong>City/State:</strong> $city <br>
<strong>Country:</strong> $country <br>
<strong>Date of Birth:</strong> $dob <br>
<strong>Website:</strong> $website <br>
<strong>Company/Occupation:</strong> $company <br><br>

<h3>Booking/Payment Details</h3>
<strong>Payment Method:</strong> $payment_method <br>
<strong>Service Start Date:</strong> $start_date <br>
<strong>Service End Date:</strong> $end_date <br>
<strong>Group ID:</strong> $grp_id <br>
<strong>Plan ID:</strong> $pln_id <br>
<strong>Member ID:</strong> $member_id <br>
<strong>Total Amount:</strong> ₦$plan_amount <br><br>

<hr>
Submitted On: " . date("Y-m-d H:i:s") . "
";

// =====================================
// SEND TO ADMIN
// =====================================
$admin_email = "";
$mail->addAddress($admin_email);
$mail->addReplyTo($email, $fullname);

$mail->Subject = $subject;
$mail->Body    = $body;

if ($mail->send()) {
    echo "<script>
            alert('Booking submitted successfully! Please proceed to payment.');
            window.location.href='index.php';
          </script>";
} else {
    echo "<script>
            alert('Booking could not be submitted. Mailer Error: {$mail->ErrorInfo}');
            window.location.href='index.php';
          </script>";
}
?>
