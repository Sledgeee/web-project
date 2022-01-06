<?php

    $connect = mysqli_connect('localhost', 'a0546147_astral', 'astral', 'a0546147_users');

    if (isset($connect) === false) {
        die('Error connect to DataBase');
    }

?>