<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: /pages/profile/signin.php");
    }
    if($_SESSION['user']['root'] != "admin") {
        header("Location: '/'");
    }
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/avatar.jpg" type="image/jpg">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>Коментарі користувача</title>
</head>

<body class>
    <div class="page" id="page">
        <header class="header header-admin">
            <div class="header__left">
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link" href="../index.php">Головна</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="../pages/about/about.php">Про мене</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="../pages/myworks/works.php">Мої роботи</a>
                        </li> 
                    </ul>
                </nav>
                
                <button class="burger" type="button" id="sidebarToggle">
                    <span>Відкрити навігацію</span>
                </button>
            </div>
            <div class="header__right">
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link" href="/admin/admin-panel.php">Адмін-панель</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="../pages/profile/profile.php">Профіль</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="../assets/php/profile/profile_exit.php">Вийти з профілю</a>
                        </li>
                    </ul>
                </nav>
            </div>   
        </header>
        
        <main class="main--admin" id="main">
            <div class="container--admin">
                <?php require "show-comments.php"; ?>
            </div>
        </main>
    </div>
    
    
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/admin_scripts.js"></script>
    <script src="/assets/js/app.js"></script>
    
</body>
</html>