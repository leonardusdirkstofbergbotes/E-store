<?php 
    session_start();
    $id = $_SESSION['id'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; 
    $mail->isSMTP(); 
    $mail->Host       = 'smtp.mailtrap.io'; 
    $mail->SMTPAuth   = true; 
    $mail->Username   = 'e5aa578e3d8566'; 
    $mail->Password   = '94d35a635840a3'; 
    $mail->SMTPSecure = 'TLS'; 
    $mail->Port       = 25;

    //Recipients
    $mail->setFrom('todoapp@gmail.com.com', 'Admin');
    $mail->addAddress($_SESSION['email'], $_SESSION['name']);
    $mail->addReplyTo('info@example.com', 'Information');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Todo APP Signup Confirmation';
    $mail->Body    = "Thank you ".$_SESSION['name']." for signing up<br>
                     <p>You are succsesfully registered. Please click on the link below to confirm your registration</p>
                     <br>Please note! You cannot use the Todo app if you have not yet been verified <br> <a href=\"http://myprojects.com/E-store/sections/user_data.php? id=$id\"> Click here</a> <br><br> Once you click on this link you will be redirected to the login page";
                      
    $mail->AltBody = "Thank you ".$_SESSION['name']." for signing up
                      You are succsesfully registered. Please click on the link below to confirm your registration
                      http://myprojects.com/E-store/sections/user_data.php? id=$id  Once you click on this link you will be redirected to the login page";

    if ($mail->send() === TRUE) { //If it is successful
        // header("Location: ../login.php? success= yes");
        session_destroy();
        echo "created";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>