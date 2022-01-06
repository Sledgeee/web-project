<?php

    session_start();
    require 'registration/connect.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    
    $email = $_POST['reset_input'];
    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    
    if(mysqli_num_rows($result) === 1) {
        $random_key_chars = 'qwertyuiopasdfghjklzxcvbnm1234567890';
        function generate_key($input, $strlength) {
            $input_length = strlen($input);
            $random_key = '';
            for ($i = 0; $i < $strlength; $i++) {
                $random_char = $input[mt_rand(0, $input_length - 1)];
                $random_key .= $random_char;
            }
            return $random_key;
        }
        $fetch = mysqli_fetch_assoc($result);
        $login = $fetch['login'];
        $key = generate_key($random_key_chars, 8);
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->setLanguage('uk', 'phpmailer/language/');
        $mail->isHTML(true);
        $mail->setFrom('no-reply@olegvoloshyn.pp.ua');
        $mail->addAddress($email);
        $mail->Subject = 'Відновлення паролю';
        $body.='<h1>Відновлення паролю для аккаунта '.$login.'</h1><p style="font-size:18px; font-weight:bold">Ваш код: '.$key.'</p>';
        $mail->Body = $body;
        $mail->send();
        
        $_SESSION['reset'] = [
            "key" => $key,
            "email" => $email
        ];
        
        $responce = [
            "status" => true,
            "message" => "Код відправлено, перевірте почту, якшо не знайдете письмо - перевірте папку Спам"
        ];
        echo json_encode($responce);
    } else {
        $responce = [
            "status" => false,
            "type" => 1,
            "message" => "Аккаунт з цією почтой не знайдено!",
            "fields" => ['email']
        ];
        echo json_encode($responce);
    }
?>