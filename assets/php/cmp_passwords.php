<?php 
    session_start();
    require 'registration/connect.php';
    $email = $_SESSION['reset']['email'];
    $pass = $_POST['passwd'];
    $con_pass = $_POST['confirm_passwd'];
    
    if(strcmp($pass, $con_pass) == 0) {
        $pass = md5($pass);
        mysqli_query($connect, "UPDATE `users` SET `password` = '$pass' WHERE `email` = '$email'");
        $responce = [
            "status" => true,
            "message" => "Пароль успішно встановлено!"
        ];
        echo json_encode($responce);
    } else {
        $responce = [
            "status" => false,
            "type" => 1,
            "message" => "Паролі не співпадають"
        ];
        echo json_encode($responce);
    }
?>