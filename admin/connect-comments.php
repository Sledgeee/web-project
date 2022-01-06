<?php
    $connect = mysqli_connect('localhost', 'a0546147_astral', 'astral', 'a0546147_comments');
    
    if (isset($connect) === false) {
        die('Error connect to DataBase');
    }
?>