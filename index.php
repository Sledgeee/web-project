

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/avatar.jpg" type="image/jpg">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <title>Головна</title>
</head>

<body class>
    <div class="page" id="page">
        <header class="header">
            <div class="header__left">
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link" href="pages/about/about.php">Про мене</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="pages/myworks/works.php">Мої роботи</a>
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
                            <a class="nav__link" href="admin/admin-panel.php">Адмін-панель</a>
                        </li>
                        <?php } ?>
                        <li class="nav__item">
                            <a class="nav__link" href="pages/profile/profile.php">Профіль</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="assets/php/profile/profile_exit.php">Вийти з профілю</a>
                        </li>
                    </ul>
                </nav>
            </div>   
        </header>

        <aside class="sidebar" id="sidebar">
            <div class="sidebar__header">
                <img src="assets/images/sidebar-header.jpg" alt="">
            </div>
        
            <div class="sidebar__content">
                <div class="profile">
                    <img class="profile__avatar" src="assets/images/avatar.jpg" alt="">
                    <div class="profile__header">
                        <div class="profile__name">Oleg Voloshyn</div>
                        <div class="profile__prof">Computer Engineering</div>
                    </div>
        
                    <ul class="social">
                        <li class="social__item">
                            <a class="social__link" href="https://www.instagram.com/s1edgee/" target="_blank">
                                <img src="assets/images/instagram.svg" alt="inst: s1edgee">
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://twitter.com/s1edgee" target="_blank">
                                <img src="assets/images/twitter.svg" alt="twitter: https://twitter.com/s1edgee">
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://t.me/sIedgee" target="_blank">
                                <img src="assets/images/telegram.svg" alt="tg: @sIedgee">
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://vk.com/infabulos" target="_blank">
                                <img src="assets/images/vk.svg" alt="vk: https://vk.com/infabulos">
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
                            <a class="nav__link" href="pages/about/about.php">Про мене</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="pages/myworks/works.php">Мої роботи</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="pages/profile/profile.php">Профіль</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="assets/php/profile/profile_exit.php">Вийти з профілю</a>
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
                    <div class="post__header  post__header--preview">
                        <a href="">
                            <img class="post__preview" src="assets/images/news-3.jpg" alt="">
                        </a>
                    </div>
                
                    <div class="post__content">
                        <h2 class="post__title">
                            <a href="https://www.instagram.com/p/CPBloCCMBTQ/" target="_blank">Сучасні методи розробки сайтів: загальний огляд</a>
                        </h2>
                        <p class="post__description">📣📣📣 В рамках навчальних дисциплін «Веб-технології» та «Веб-орієнтована розробка ПЗ» запрошуємо студентів на лекцію "Сучасні методи розробки сайтів: загальний огляд"🔥
                            <br>Спікер: Віктор Тершівський - СЕО компанії Global Partner Soft
                            <br><br>📌Дата: 21 травня
                            <br>📌 Початок: о 16:00 год.
                            <br>📌Місце проведення: IHUB Khm
                            <br><br>Реєстрація за посиланням: https://cutt.ly/HbM3GZB
                        </p>
                    </div>
                
                    <div class="post__footer">
                        <ul class="post__data">
                            <li class="post__data-item">
                                <time datetime="2021-05-18">18.05.2021</time>
                            </li>
                            <li class="post__data-item">
                                <a href="https://www.instagram.com/ihub_khm/" target="_blank">iHub</a>
                            </li>
                        </ul>
                    </div>
                </article>
                
                <article class="post">
                    <div class="post__header  post__header--preview">
                        <a href="">
                            <img class="post__preview" src="assets/images/flexbox_meetup.jpg" alt="FLEX-BOX WORKSHOP">
                        </a>
                    </div>
                
                    <div class="post__content">
                        <h2 class="post__title">
                            <a href="https://www.instagram.com/p/CNDdqEysZNp/" target="_blank">Воркшоп по CSS | Flex-box</a>
                        </h2>
                        <p class="post__description">А ти використовуєш CSS Flex-box під час розробки сайтів?
                            Якщо ще ні, тоді ми чекаємо тебе на практичний воркшоп, де познайомимо з цією технологією на прикладах та спробуємо разом 🙌😉
                            
                            <br><br>🗓 п‘ятниця, 2 квітня
                            <br>🕒 15.00

                            <br><br>📍iHub

                            <br><br>З собою must have ноутбук 💻
                            <br>Чекаємо в iHub
                        </p>
                    </div>
                
                    <div class="post__footer">
                        <ul class="post__data">
                            <li class="post__data-item">
                                <time datetime="2021-04-02">02.04.2021</time>
                            </li>
                            <li class="post__data-item">
                                <a href="https://www.instagram.com/ihub_khm/" target="_blank">iHub</a>
                            </li>
                        </ul>
                    </div>
                </article>
                
                <article class="post">
                    <div class="post__header  post__header--preview">
                        <a href="pages/news/post_ihub.php">
                            <img class="post__preview" src="assets/images/ihub.jpg" alt="iHub">
                        </a>
                    </div>
                
                    <div class="post__content">
                        <h2 class="post__title">
                            <a href="pages/news/post_ihub.php">Коротко про iHub</a>
                        </h2>
                        <p class="post__description">iHUB – це поєднання сучасного коворкингу та історичної архітектури у самому центрі міста. Про...</p>
                    </div>
                
                    <div class="post__footer">
                        <ul class="post__data">
                            <li class="post__data-item">
                                <time datetime="2021-03-07">07.03.2021</time>
                            </li>
                            <li class="post__data-item">
                                <a href="https://www.instagram.com/ihub_khm/" target="_blank">iHub</a>
                            </li>
                        </ul>
                
                        <a class="post__read" href="pages/news/post_ihub.php">Читати</a>
                    </div>
                </article>
                
            </div>
        </main>
        <footer class="main__footer">&copy; Oleg Voloshyn 2021. All rights reserved</footer>
    </div>

    <div class="modal" id="contact-modal">
        <div class="modal__content  modal__content--contact">
            <button class="modal__close" type="button">
                <img src="assets/images/close.svg" alt="Close">
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
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
