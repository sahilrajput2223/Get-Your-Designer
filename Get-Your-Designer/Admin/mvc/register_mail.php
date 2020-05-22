<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$email = $_POST['email'];
try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '***** YOUR EMAIL ID *****';                    // SMTP username
    $mail->Password   = '***** YOUR EMAIL PASSWORD *****';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    
    //Recipients
    $mail->setFrom('***** YOUR EMAIL ID *****', 'Profile');
    $mail->addAddress($email);     // Add a recipient
    $mail->addReplyTo('no-reply@gmail.com', 'No Reply');
    
    // Content
    #$url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetpassword.php?code=$code";
    #$url1 = "http://" . $_SERVER["HTTP_HOST"] . "/dao1/login.php";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Profile Complection';
    $mail->Body    = "<h1> Please Complete Your Profile </h1>";
    #$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();

    echo "Mail Send";
    header("Location:../all_designer.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    exit();
?>