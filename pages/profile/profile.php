<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: signin.php");
    }
?>

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
    
    <title>Профіль</title>
</head>

<body class>
    <div class="page" id="page">
        <header class="header">
            <div class="header__left">
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link" href="/index.php">Головна</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="../about/about.php">Про мене</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="../myworks/works.php">Мої роботи</a>
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
                        <?php if($_SESSION['user']['root'] === "admin") { ?>
                        <li class="nav__item">
                            <a class="nav__link" href="/admin/admin-panel.php">Адмін-панель</a>
                        </li>
                        <?php } ?>
                        <li class="nav__item">
                            <a class="nav__link" href="/assets/php/profile/profile_exit.php">Вийти з профілю</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <aside class="sidebar" id="sidebar">
            <div class="sidebar__header">
                <img src="/assets/images/sidebar-header.jpg" alt="">
            </div>
        
            <div class="sidebar__content">
                <div class="profile">
                    <img class="profile__avatar" src="/assets/images/avatar.jpg" alt="">
                    <div class="profile__header">
                        <div class="profile__name">Oleg Voloshyn</div>
                        <div class="profile__prof">Computer Engineering</div>
                    </div>
        
                    <ul class="social">
                        <li class="social__item">
                            <a class="social__link" href="https://www.instagram.com/s1edgee/" target="_blank">
                                <img src="/assets/images/instagram.svg" alt="inst: s1edgee">
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://twitter.com/s1edgee" target="_blank">
                                <img src="/assets/images/twitter.svg" alt="twitter: https://twitter.com/s1edgee">
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://t.me/sIedgee" target="_blank">
                                <img src="/assets/images/telegram.svg" alt="tg: @sIedgee">
                            </a>
                        </li>
                        
                        <li class="social__item">
                            <a class="social__link" href="https://vk.com/infabulos" target="_blank">
                                <img src="/assets/images/vk.svg" alt="vk: https://vk.com/infabulos">
                            </a>
                        </li>
                    </ul>
        
                    <div class="profile__text">
                        <p>First-year student of a Computer Engineering, Full stack Developer.</p>
                    </div>
                </div>
                
        
                <nav class="nav  nav--mobile">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link" href="/index.php">Головна</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="../about/about.php">Про мене</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="../myworks/works.php">Мої роботи</a>
                        </li> 
                        <li class="nav__item">
                            <a class="nav__link" href="/assets/php/profile/profile_exit.php">Вийти з профілю</a>
                        </li>
                    </ul>
                </nav>
            </div>
        
        
            <div class="sidebar__footer">
                
                <button class="btn  btn--blue" type="button" data-modal="contact-modal">Отримати зворотній зв'язок</button>
            </div>
        </aside>

        <main class="main" id="main">
            <div class="container">
                
                
                <h1 class="page__title page__title--cabinet">Данні аккаунта</h1>
                
                <form class="form" method="post">
                    <div class="cabinet">
                        <div class="cabinet__form">
                            <div class="form__group  form__group--md">
                                <input class="form__control" type="text" name="profile_login" placeholder="Ваш логін" value="<?= $_SESSION['user']['login'] ?>">
                                <span class="form__line"></span>
                            </div>
                
                            <div class="form__group  form__group--md">
                                <input class="form__control" type="email" name="profile_email" placeholder="Ваш E-mail" value="<?= $_SESSION['user']['email'] ?>">
                                <span class="form__line"></span>
                            </div>
                
                            <div class="form__group  form__group--md">
                                <input class="form__control" name="profile_password" type="password" placeholder="Новий пароль">
                                <span class="form__line"></span>
                            </div>
                
                            <div class="form__group  form__group--md">
                                <input class="form__control" name="profile_password_confirm" type="password" placeholder="Повторіть пароль">
                                <span class="form__line"></span>
                            </div>
                        </div>
                    </div>
                    <p class="msg none">Перевірте правильній введених данних</p>
                    <div class="form__footer" style="display: flex; justify-content: center;">
                        <button class="btn  btn--blue  btn--rounded  btn--sm" id="btn_changedata" type="submit">Зберегти</button>
                    </div>
                </form>
                
                <br><h2 class="page__title page__title--cabinet">Аватар</h2>
                
                <form class="form" action="/assets/php/profile/load_avatar.php" method="post" enctype="multipart/form-data">
                    <div class="cabinet">
                        <div class="cabinet__form">
                            <div class="form__group  form__group--md">
                                <img class="cabinet__avatar" src="data:image/jpeg;base64, <?=base64_encode($_SESSION['user']['avatar'])?>">
                            </div>
                            <div class="form__group  form__group--md">
                                <input class="cabinet__file btn--load" type="file" name="img_upload" id="img">
                            </div>
                            <div class="form__group  form__group--md">
                                <button class="btn  btn--blue  btn--rounded  btn--sm btn--load" id="btn_changedata" type="submit" name="upload">Завантажити</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <div class="modal" id="contact-modal">
        <div class="modal__content  modal__content--contact">
            <button class="modal__close" type="button">
                <img src="/assets/images/close.svg" alt="Close">
            </button>
    
            <form class="form" action="/" id="contact__form">
                <div class="form__group  form__group--md">
                    <input class="form__control  _req" type="text" id="contact__username" name="message_problem" placeholder="Ваше повідомлення">
                    <span class="form__line"></span>
                </div>
    
                
                <div class="form__footer">
                    <div class="form__group  form__group--md">
                        <button class="btn  btn--blue  btn--rounded  btn--sm" type="submit">Відправити</button>
                    </div>
                </div>
            </form>
    
            <ul class="modal__footer">
                <li>
                    E-mail: <a href="mailto:info@olegvoloshyn.pp.ua">
                        info@olegvoloshyn.pp.ua</a>
                </li>
                <li>
                    Телефон: <a href="tel:+380670779664">+38(067)077-96-64</a>
                </li>
            </ul>
        </div>
    </div>
    <footer class="main__footer main__footer_authforms">&copy; Oleg Voloshyn 2021. All rights reserved</footer>
    
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/validation_data.js"></script>
    <script src="/assets/js/contact.js"></script>
    <script src="/assets/js/app.js"></script>


</body>

</html>