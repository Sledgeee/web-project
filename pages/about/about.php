<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: /pages/profile/signin.php");
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
    
    <title>Про мене</title>
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
                        <h1 class="post__title  post__tilte--about">Про мене</h1>
                    </div>
                
                    <div class="post__content">
                        <div class="post__text">
                            <h2>Коротко про мене</h2>
                            <p>Мене звати Олег, мені 18 років, я з України, Хмельницька область. Я першокурсник Хмельницького Національного університету за спеціальністю «Комп’ютерна інженерія».</p>
                            <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2596.0035377499003!2d26.95822561602539!3d49.40883877934532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4732068f357093b7%3A0xc4c40e1a0d42c702!2z0KXQvNC10LvRjNC90LjRhtC60LjQuSDQndCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0KPQvdC40LLQtdGA0YHQuNGC0LXRgg!5e0!3m2!1sru!2sua!4v1615573971146!5m2!1sru!2sua" 
                            width="845" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                
                            <h2>Моє робоче місце</h2>
                            <p>
                                <img src="/assets/images/desktop.jpg" alt="">
                            </p>
                            <h4>Основні складові ПК:</h4>
                            <ol>
                                <li>CPU: Intel Xeon X5677</li>
                                <li>GPU: MSI GTX 1060 3GB OC</li>
                                <li>RAM: 12 GB</li>
                                <li>MOTHERBOARD: DELL 0XPDFK T3500</li>
                                <li>POWER SUPPLY: 550W</li>
                            </ol>
                            <h4>Мої девайси:</h4>
                            <ol>
                                <li> Monitor 1: QUBE Overlord G24F144Plus 144hz</li>
                                <li>Monitor 2: ACER K212HQL 60hz</li>
                                <li>Keyboard: Hator Rockfall (Mechanical red switches)</li>
                                <li>Mouse: Razer Viper Mini</li>
                                <li>Headphones: HyperX Cloud Core</li>
                                <li>MousePad: Hator L</li>
                            </ol>
            
                        </div>
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
                    E-mail: <a href="mailto:info@olegvoloshyn.pp.ua">
                        info@olegvoloshyn.pp.ua</a>
                </li>
                <li>
                    Телефон: <a href="tel:+380670779664">+38(067)077-96-64</a>
                </li>
            </ul>
        </div>
    </div>

    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/contact.js"></script>
    <script src="/assets/js/app.js"></script>

</body>

</html>