<?php

require "vendor/autoload.php";
//require "config.php"; // Load configuration file for credentials and settings

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function exitWithMessage($message) {
    echo "<script>alert('{$message}'); history.go(-1);</script>";
    exit;
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePostFields($fields) {
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            return false;
        }
    }
    return true;
}

if (!validatePostFields(['name', 'email', 'subject', 'message'])) {
    exitWithMessage('All fields are required.');
}

$email = $_POST['email'];
if (!validateEmail($email)) {
    exitWithMessage('Invalid email format.');
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = "alexandrulcoca@gmail.com";
    $mail->Password = "pqxn xvcf knqy wjvo";

    //Recipients
    $mail->setFrom($email, $_POST['name']);
    $mail->addAddress("alexandru.coca@yahoo.com", "Alex");
    $mail->addReplyTo("alexandru.coca@yahoo.com", "Alex");

    // Content
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];

    // Attachments
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
        $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
    }

    $mail->send();
    echo "<script>alert('Email sent successfully'); document.location.href = 'contacts.php';</script>";
} catch (Exception $e) {
    exitWithMessage("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}
?>