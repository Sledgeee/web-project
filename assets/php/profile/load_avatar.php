<?php
    $connect = mysqli_connect('localhost', 'a0546147_astral', 'astral', 'a0546147_users');

    if (isset($connect) === false) {
        die('Error connect to DataBase');
    }
    session_start();
    $id = $_SESSION['user']['id'];
    $login = $_SESSION['user']['login'];
    
    if(isset($_POST['upload'])) {
	    $img_type = substr($_FILES['img_upload']['type'], 0, 5);
	    $img_size = 2*1024*1024;
	    
	if(!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size){ 
	$img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
	
	mysqli_query($connect, "UPDATE `users` SET `avatar` = '$img' WHERE `login` = '$login'");
	}
    }
    
    unset($_SESSION['user']);
    session_destroy();
    session_start();
    
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    
    

    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "email" => $user['email'],
        "root" => $user['root'],
        "avatar" => $user['avatar']
    ];
    
    }

        
    header('Location: /pages/profile/profile.php');
?>