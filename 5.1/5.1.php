<?php
/**
 * Created by PhpStorm.
 * User: Victo
 * Date: 2018-05-14
 * Time: 17:10
 */


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'C:\Users\Victor\Documents\GitHub\webbutvecklingServersidan\PHPMailer-master\src\Exception.php';
require 'C:\Users\Victor\Documents\GitHub\webbutvecklingServersidan\PHPMailer-master\src\PHPMailer.php';
require 'C:\Users\Victor\Documents\GitHub\webbutvecklingServersidan\PHPMailer-master\src\SMTP.php';


//require 'PHPMailerAutoload.php';
$mail = new PHPMailer(true);

$from = $_POST['mailFrom'];
$to = $_POST['mailTo'];
$subject = $_POST['mailSubject'];
$message = $_POST['messageMail'] . 'Observera! Detta meddelande är skickat från ett formulär på Internet och avsändaren kan vara felaktig!';
$password = $_POST['passwordInput'];
if (valid_email($from) == false){
    echo 'Sender email not right';
    echo file_get_contents('5.1.html');
}elseif (!valid_email($to)) {
    echo 'reciver email not right';
    echo file_get_contents('5.1.html');
}elseif($password!== '1234') {
    echo 'Password not right';
    echo file_get_contents('5.1.html');
}






else {
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'victor.jendelheim@hotmail.com';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->setFrom($from);
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;


    $mail->send();
    echo 'Message has been sent';










/*    $mail = new PHPMailer(true);
    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );*/


/*    $mail->SMPTDebug = 2;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;                                      //Kan även använda porten 587
    $mail->SMTPAuth = true;
    $mail->Username = 'Victor.Jendelheim@gmail.com';                  //Byta ut till eget id
    $mail->Password = 'tgcmxzqw9';                   //Byta ut till eget lösenord
    $mail->SMTPSecure = 'ssl';
    $mail->setFrom($from);
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );*/

/*    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }*/
}
function valid_email($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("$email is a valid email address");
        return true;
    } else {
        echo("$email is not a valid email address");
        return false;
    }
}
