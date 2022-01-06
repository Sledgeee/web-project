<?php 

    session_start();
    require_once "../registration/connect.php";
    
    $session_id = $_SESSION['user']['id'];
    $login = $_POST['profile_login'];
    $email = $_POST['profile_email'];
    $password = $_POST['profile_password'];
    $password_confirm = $_POST['profile_password_confirm'];
    
    if($_POST['profile_login'] != $_SESSION['user']['login']) {
        $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
        if (mysqli_num_rows($check_login) > 0) {
            $response = [
                "status" => false,
                "type" => 1,
                "message" => "Цей логін вже зайнятий",
                "fields" => ['login']
            ];
            echo json_encode($response);
            die();
        }
    }
    
    if($_POST['profile_email'] != $_SESSION['user']['email']) {
    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
        if (mysqli_num_rows($check_email) > 0) {
            $response = [
                "status" => false,
                "type" => 1,
                "message" => "Ця почта вже зайнята",
                "fields" => ['email']
            ];
        echo json_encode($response);
        die();
        }
    }
    
    $error_fields = [];

    if($login === '') {
        $error_fields[] = 'profile_login';
    }

    if($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_fields[] = 'profile_email';
    }

    if(!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Перевірте поля на правильність введених данних",
            "fields" => $error_fields
        ];
        echo json_encode($response);
        die();
    }
    
    if (strcasecmp($password, $password_confirm) == 0) {
        if($password) {
            $password = md5($password);
        
            mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `email` = '$email', `password` = '$password' WHERE `id` = '$session_id'");
        } else {
            mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `email` = '$email',  WHERE `id` = '$session_id'");
        }
        $_SESSION['user'] = [
            "id" => $session_id,
            "login" => $login,
            "email" => $email
        ];

        $response = [
            "status" => true,
            "message" => "Данні успішно змінені"
        ];

        echo json_encode($response);
    } 
    
    else {
        $error_fields[] = 'profile_password_confirm';
        $response = [
            "status" => false,
            "message" => "Паролі не збігаються",
            "fields" => $error_fields
        ];

        echo json_encode($response);
    }

?>