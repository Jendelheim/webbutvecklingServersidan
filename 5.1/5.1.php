<?php
/**
 * Created by PhpStorm.
 * User: Victo
 * Date: 2018-05-14
 * Time: 17:10
 */

require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

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
    $mail = new PHPMailer(true);
    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );
    $mail->SMPTDebug = 2;
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;                                      //Kan även använda porten 587
    $mail->SMTPAuth = true;
    $mail->Username = 'Victor.Jendelheim@gmail.com';                  //Byta ut till eget id
    $mail->Password = '';                   //Byta ut till eget lösenord
    $mail->SMTPSecure = 'ssl';
    $mail->setFrom($from);
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
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
