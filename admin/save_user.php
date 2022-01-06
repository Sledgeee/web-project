<?php
    require_once 'connect.php';
    $id = $_GET['id'];
    $login = $_GET['login'];
    $email = $_GET['email'];
    $root = $_GET['root'];
    mysqli_query($connect, "UPDATE `users` SET `login` = '$login' WHERE `id` = '$id'");
    mysqli_query($connect, "UPDATE `users` SET `email` = '$email' WHERE `id` = '$id'");
    mysqli_query($connect, "UPDATE `users` SET `root` = '$root' WHERE `id` = '$id'");
    mysqli_close();
?>