<?php
    require_once 'comments_connect_db.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `comments` WHERE `id` = '$id'");
    mysqli_close();
?>