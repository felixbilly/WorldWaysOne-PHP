<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// --------------------------------------------------
// CAPTURE FORM DATA SAFELY
// --------------------------------------------------
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');
$package = htmlspecialchars($_POST['package'] ?? 'Not specified');
$preferred_date = htmlspecialchars($_POST['preferred_date'] ?? 'Not provided');
$destination = htmlspecialchars($_POST['destination'] ?? 'Not provided');
$adult_group_size = htmlspecialchars($_POST['adult_group_size'] ?? '0');
$kids_group_size = htmlspecialchars($_POST['kids_group_size'] ?? '0');

if (!$name || !$email) {
    echo json_encode(['status' => 'error', 'msg' => 'All required fields must be filled.']);
    exit;
}

$mail = new PHPMailer(true);

try {
    // --------------------------------------------------
    // SMTP CONFIG
    // --------------------------------------------------
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'felixbillyonyango@gmail.com';
    $mail->Password = 'xrag qjdr ohrk bigk'; // Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // --------------------------------------------------
    // ADMIN EMAIL
    // --------------------------------------------------
    $mail->setFrom('info@worldwaysone.co.ke', 'World Ways One');
    $mail->addAddress('akeloinnvestments@gmail.com', 'Booking Department');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "New Booking Request — {$package}";

    $mail->Body = "
        <h2>New Booking Request</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Selected Package:</strong> {$package}</p>
        <p><strong>Preferred Travel Date:</strong> {$preferred_date}</p>
        <p><strong>Preferred Destination:</strong> {$destination}</p>
        <p><strong>Number of Adults:</strong> {$adult_group_size}</p>
        <p><strong>Number of Kids (below 12):</strong> {$kids_group_size}</p>
        <p><strong>Message / Special Requests:</strong><br>{$message}</p>
        <hr>
        <p>Sent via <em>World Ways One</em> booking form.</p>
    ";

    $mail->AltBody = "New Booking Request:
    Name: {$name}
    Email: {$email}
    Phone: {$phone}
    Package: {$package}
    Preferred Date: {$preferred_date}
    Destination: {$destination}
    Adults: {$adult_group_size}
    Kids: {$kids_group_size}
    Message: {$message}";

    // Optional: Add logo attachment
    $mail->addAttachment('images/one.png', 'WorldWaysOneLogo');

    $mail->send(); // Send to admin first

    // --------------------------------------------------
    // CLIENT CONFIRMATION EMAIL
    // --------------------------------------------------
    $clientMail = new PHPMailer(true);
    $clientMail->isSMTP();
    $clientMail->Host = 'smtp.gmail.com';
    $clientMail->SMTPAuth = true;
    $clientMail->Username = 'felixbillyonyango@gmail.com';
    $clientMail->Password = 'xrag qjdr ohrk bigk'; // same Gmail App Password
    $clientMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $clientMail->Port = 587;

    $clientMail->setFrom('info@worldwaysone.co.ke', 'World Ways One');
    $clientMail->addAddress($email, $name);

    $clientMail->isHTML(true);
    $clientMail->Subject = "Booking Confirmation — World Ways One";
    $clientMail->Body = "
        <h3>Dear {$name},</h3>
        <p>Thank you for your booking inquiry for <strong>{$destination}</strong>!</p>
        <p>Here’s a summary of your request:</p>
        <ul>
            <li><strong>Preferred Date:</strong> {$preferred_date}</li>
            <li><strong>Preferred Destination:</strong> {$destination}</li>
            <li><strong>Adults:</strong> {$adult_group_size}</li>
            <li><strong>Kids (below 12):</strong> {$kids_group_size}</li>
        </ul>
        <p>Our travel consultant will reach out shortly to confirm your itinerary and next steps.</p>
        <p>Warm regards,<br>
        <strong>World Ways One Team</strong><br>
        <a href='https://worldwaysone.co.ke'>worldwaysone.co.ke</a></p>
        <hr>
        // <p>This is an automated message — please do not reply.</p>
    ";

    $clientMail->AltBody = "Dear {$name},\n\nThank you for your booking inquiry for {$package}!\n
    Preferred Date: {$preferred_date}\nDestination: {$destination}\nAdults: {$adult_group_size}\nKids: {$kids_group_size}\n\nOur travel consultant will contact you shortly.\n\nWorld Ways One Team";

    // Optional: Add logo attachment
    $clientMail->addAttachment('images/one.png', 'WorldWaysOneLogo');
    $clientMail->send();

    echo json_encode(['status' => 'success', 'msg' => 'Booking request sent and confirmation email delivered to client.']);

} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'msg' => "Mailer Error: {$mail->ErrorInfo}"]);
}
?>