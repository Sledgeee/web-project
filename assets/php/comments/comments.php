<?php
    session_start();
    require_once 'comments_connect_db.php';

    $login = $_SESSION['user']['login'];
    $message = $_POST['message'];
    date_default_timezone_set('Europe/Kiev');
    $date = date('d.m.Y');

    $error_field = [];

    if($message === '') {
        $error_field[] = 'message';
    }

    if(!empty($error_field)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Поле для тексту пусте",
            "field" => $error_field
        ];

        echo json_encode($response);
        die();

    } 

    mysqli_query($connect, "INSERT INTO `comments` (`id`, `login`, `message`, `date`) VALUES (NULL, '$login', '$message', '$date')");

    $response = [
        "status" => true
    ];

    echo json_encode($response);
?>