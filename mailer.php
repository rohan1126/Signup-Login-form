<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// include("mailer.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions


if (isset($_POST["send"])) {
  $mail = new PHPMailer(true);

  $mail->isSMTP(); //Send using SMTP
  $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
  $mail->SMTPAuth = true; //Enable SMTP authentication
  $mail->Username = 'lab4sql@gmail.com'; //SMTP username
  $mail->Password = 'mufypodzrtcdhoyn'; //SMTP password
  $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
  $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('lab4sql@gmail.com');
  $mail->addAddress($_POST["email"]); //Add a recipient

  //Content
  $mail->isHTML(true); //Set email format to HTML
  $mail->Subject = "Hello there," ;
  $mail->Body = $_POST["message"];

  $mail->send();




header("Location: index.php");
  echo
    "
    <script>
    alert('Sent');
    </script>
    
    ";
  


  
}

?>

