<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header("Location: /index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/avatar.jpg" type="image/jpg">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    
    <title>Вхід</title>
</head>

<body class>
    <div class="page" id="page">
        <main class="main  main--signin" id="main">
            <div class="container">
                <h1 class="page__title  page__title--center">Вхід</h1>
                
                <form class="form  form--auth" action="/assets/php/registration/user_auth.php" method="post">
                    <div class="form__group  form__group--md">
                        <input class="form__control" type="login" name="login" placeholder="Логін">
                        <span class="form__line"></span>
                    </div>
                
                    <div class="form__group  form__group--md">
                        <input class="form__control" type="password" name="password" id="pwd" placeholder="Пароль">
                        <span class="form__line"></span>
                    </div>
                    <script>
                    function myFunction() {
                        var x = document.getElementById("pwd");
                        if (x.type === "password") {
                            x.type = "text";
                            
                        } else {
                            x.type = "password";
                        }
                    }
                    </script>
                    <label style="font-size: 1.6rem; top: 10px;">
                    <input style="margin-right: 5px;" type="checkbox" onclick="myFunction()">Показати пароль</label>
                    <div class="form__footer  form__footer--center">
                        <div class="form__group  form__group--md">
                            <button class="btn  btn--blue  btn--rounded  btn--sm" id="btn_signin" type="submit">Увійти</button>
                        </div>

                        <p class="msg none">Перевірте правильній введених данних</p>

                        <ul class="form__footer-list">
                        <li>
                                <a class="signin__text">Ще не зареєстровані? <a class="signin__link" href="signup.php"> Створіть аккаунт</a><a>
                            </li>
                            <li>
                                <a class="signin__text">Забули пароль? <a class="signin__link" href="reset.php">Відновіть доступ</a><a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </main>
        <footer class="main__footer main__footer_authforms">&copy; Oleg Voloshyn 2021. All rights reserved</footer>
    </div>

    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/validation_data.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>