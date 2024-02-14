<?php
include('auth/connectdb.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
if (isset($_POST['sendmail'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0; //อาร์ม : "SET = 0 to redirect , SET = SMTP::DEBUG_SERVER to Defaul
        $mail->isSMTP();                                  //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                   //Set the SMTP server to send through
        $mail->SMTPAuth = true;                           //Enable SMTP authentication
        $mail->Username = 'alarm.1993@gmail.com';         //SMTP username
        $mail->Password = 'lego iiqz cpzp fjdm';          //SMTP password
        $mail->SMTPSecure = "SSL";                        //Enable implicit TLS encryption
        $mail->Port = 587;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('alarm.1993@gmail.com', 'BBA-Body');
        $mail->addAddress('alarm.1993@gmail.com', 'User');     //Add a recipient
        $mail->addReplyTo('noryply@gmail.ac.th', 'Information');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'BBA New Member';
        $mail->Body = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


        if ($mail->send()) {
            echo '<script language="javascript">';
            echo 'alert("ข้อความถูกส่งไปแล้ว")';
            echo '</script>';
            header("refresh: 1; url=contact.php");
        } else {
            echo '<script language="javascript">';
            echo "ไม่สามารถส่งข้อความได้ เกิดเหตุผิดพลาดบางประการ";
            echo '</script>';
            header("refresh: 1; url=contact.php");
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>