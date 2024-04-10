<?php

 require "vendor/autoload.php";

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;

 $name = $_POST["name"];
 $email = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];

//  $file_path = $_FILES["file"]["tmp_name"];
//  $file_path = $_FILES["file"]["tmp_name"];
//  $file_path = $_FILES["file"]["tmp_name"];




 $mail = new PHPMailer(true);

 $mail->SMTPDebug = true;
 $mail->isSMTP();
 $mail->SMTPAuth = true;

 $mail->Host = "smtp.gmail.com";
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 $mail->Port = 587;

 $mail->Username = "alexandrulcoca@gmail.com";
 $mail->Password = "pqxn xvcf knqy wjvo";

 $mail->setFrom($email,$name);
 $mail->addAddress("alexandru.coca@yahoo.com", "Alex");

 if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
    $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']); // Add attachment
}

 $mail->Subject = $subject;
 $mail->Body = $message;
 
 $mail->send();

 if(!$mail->Send()) {
    echo $mail->ErrorInfo;
} else { 
        echo "Mail sent...";
}