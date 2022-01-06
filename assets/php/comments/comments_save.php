<?php
    require_once 'comments_connect_db.php';
    $id = $_GET['id'];
    $message = $_GET['message'];
    mysqli_query($connect, "UPDATE `comments` SET `message` = '$message' WHERE `id` = '$id'");
    mysqli_close();
?>