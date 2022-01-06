<?php
    session_start();
    require 'registration/connect.php';
    $email = $_SESSION['reset']['email'];
    $right_key = $_SESSION['reset']['key'];
    $entered_key = $_POST['reset_input_key'];
    
    if(strcmp($right_key, $entered_key) == 0) {
        mysqli_query($connect, "UPDATE `users` SET `password` = NULL WHERE `email` = '$email'");
        $responce = [
            "status" => true,
            "message" => "Пароль успішно скинуто, перехід на сторінку встановлення паролю"
        ];
        echo json_encode($responce);
    } else {
        $responce = [
            "status" => false,
            "type" => 1,
            "message" => "Перевірте правильність введеного коду!",
            "fields" => 'reset_input_key'
        ];
        echo json_encode($responce);
    }
?>