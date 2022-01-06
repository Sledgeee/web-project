<?php
     session_start();
     if(!isset($_SESSION['user'])) {
        header("Location: ../profile/signin.php");
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
    
    <title>Чому iHub?</title>
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
                            <a class="nav__link" href="../profile/profile.php">Профіль</a>
                        </li>
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
                            <a class="nav__link" href="../profile/profile.php">Профіль</a>
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
                
                
                <article class="post">
                    <div class="post__header  post__header--open">
                        <h1 class="post__title  post__title--open">Коротко про iHub</h1>
                        <ul class="post__data">
                            <li class="post__data-item">
                                <time datetime="2020-03-07 17:40">07.03.2021</time>
                            </li>
                            <li class="post__data-item">
                                <a href="">Workshops</a>
                            </li>
                        </ul>
                    </div>
                
                    <div class="post__content">
                        <div class="post__text">
                            <p>
                                <img src="/assets/images/ihub.jpg" alt="">
                            </p>
                            <h2>iHub - це</h2>
                            <p>поєднання сучасного коворкингу та історичної архітектури у самому центрі міста. Просторий open space, приватні офіси, оснащенні технікою дизайнерські переговорні кімнати, зони для відпочинку та зали для івентів.</p>
                
                            <h3>Переваги</h3>
                            <p>У нас тільки актуальні тематики заходів та топові спікери. Нудьгувати не прийдеться, адже Ви зможете знайти івенти на будь-який смак: майстер-класи, воркшопи, хакатони, зустрічі з інвесторами, пітчинги та ще багато іншого.</p><br>
                            <p>iHUB не просто ком’юніті – це сім’я, де Ви можете приєднатись до найталановитіших підприємців та стартапів або знайти собі партнерів, клієнтів, співробітників та навіть інвесторів.</p>
                
                            
                 
                        <h3 class="post__subtitle">Коментарі</h3>
                        <form class="form" method="post">
                            <div class="form__group">
                                <textarea class="form__control  form__control--textarea" id="textarea" name="message" placeholder="Текст" data-autoresize></textarea>
                                <span class="form__line"></span>
                            </div>
                            <button class="btn  btn--blue  btn--rounded  btn--sm" id="btn_send_comment" type="submit">Відправити</button>
                        </form>

                        <?php require $_SERVER['DOCUMENT_ROOT'].'/assets/php/comments/comments_show.php'; ?>

                    </div>
                </article>
                
                </div>
            </div>
        </main>
        <footer class="main__footer">&copy; Oleg Voloshyn 2021. All rights reserved</footer>
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
                    E-mail: <a href="mailto:info@ki2201works.pp.ua">
                        info@ki2201works.pp.ua</a>
                </li>
                <li>
                    Телефон: <a href="tel:+380670779664">+38(067)077-96-64</a>
                </li>
            </ul>
        </div>
    </div>

    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/validation_comments.js"></script>
    <script src="/assets/js/contact.js"></script>
    <script src="/assets/js/app.js"></script>

</body>

</html>