<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($to , $title , $body){
    include "mail/Exception.php" ; 
    include "mail/PHPMailer.php" ; 
    include "mail/SMTP.php" ; 
    
    $mail = new PHPMailer;
    $mail->isSMTP(); 
    // $mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 587; // TLS only
    $mail->SMTPSecure = 'tls'; // ssl is deprecated
    $mail->SMTPAuth = true;
    $mail->Username = 'ahmedhassn1712017@gmail.com'; // email
    $mail->Password = 'ealvslqugjnjtfbe'; // password
    $mail->setFrom('ahmedhassn1712017@gmail.com', 'Trend Market'); // From email and name
    $mail->addAddress($to); // to email and name
    $mail->Subject = $title;
    $mail->msgHTML($body); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    // $mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
    // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
    // $mail->SMTPOptions = array(
    //                     'ssl' => array(
    //                         'verify_peer' => false,
    //                         'verify_peer_name' => false,
    //                         'allow_self_signed' => true
    //                     )
    //                 );
    if(!$mail->send()){
        echo "Mailer Error";
    }else{
        // echo "Message sent!";
    }
};