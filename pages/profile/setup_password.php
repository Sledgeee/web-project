<!DOCTYPE html>
<html lang="uk">

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

    <title>Встановлення паролю</title>
</head>

<body class>
    <div class="page" id="page">
        <main class="main  main--signin">
            <div class="container">

                <h1 class="page__title  page__title--center">Оберіть новий пароль</h1>

                <form class="form  form--auth" action="/" method="post">
                    <div class="form__group  form__group--md">
                        <input class="form__control" name="passwd" type="password" placeholder="Новий пароль">
                        <span class="form__line"></span>
                    </div>
                    
                    <div class="form__group  form__group--md">
                        <input class="form__control" name="confirm_passwd" type="password" placeholder="Повторіть пароль">
                        <span class="form__line"></span>
                    </div>

                    <div class="form__footer  form__footer--center">
                        <div class="form__group  form__group--md">
                            <button class="btn  btn--blue  btn--rounded  btn--sm" type="submit" id="finish_reset-btn">Встановити</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <footer class="main__footer main__footer_authforms">&copy; Oleg Voloshyn 2021. All rights reserved</footer>

    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/validation_data.js"></script>
    <script src="/assets/js/app.js"></script>

</body>

</html>