<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  require("PHPMailer-master/src/PHPMailer.php");
  require("PHPMailer-master/src/SMTP.php");

   $id = $_SESSION['idbase'];
    $name = $_SESSION['firstname'];
    $email = $_SESSION['Email'];


    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = 'geraldchris84@gmail.com';
    $mail->Password = '090866937N@ruga1';
    $mail->From = 'geraldchris84@gmail.com';
    $mail->FromName = 'Jereme Davis';
    $mail->addAddress($email, $name);

    $mail->Subject = 'Verify your email address';
    $mail->Body = "<a href = 'localhost/EdgarDavis(close)/Database/Query/Verified.php?id=$id'>Verify my email</a>";
    $mail->AltBody =  "<a href = 'localhost/EdgarDavis(close)/Database/Query/Verified.php?id=$id'>Verify my email</a>";

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
         header("Location: ../Profile.php");
     }
?>