<?php
    session_start();
    if(!isset($_SESSION['user'])) {
    header("Location: /pages/profile/signin.php");
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('uk', 'phpmailer/language/');
    $mail->isHTML(true);

    $user_email = $_SESSION['user']['email'];
    $user_login = $_SESSION['user']['login'];

    $mail->setFrom($user_email, $user_login);
    $mail->addAddress('info@olegvoloshyn.pp.ua');
    $mail->Subject = "Зворотній зв'язок";

    if (trim(!empty($_POST['message_problem']))) {
        $body.="<h1>" . $_POST['message_problem'] . "</h1>";
    }

    $mail->Body = $body;

    if(!$mail->Send()) {
        $message = "Непередбачена помилка при відправці, спробуйте ще раз!";
    } else {
        $message = "Лист відправлений, чекайте зворотнього зв'язку!";
    }
    $responce = ['message' => $message];
    header('Content-type: application/json');
    echo json_encode($responce);
?>
