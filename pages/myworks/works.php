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
    
    <title>Мої роботи</title>
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
                
                <h1 class="page__title">Мої виконані лабораторні та практичні роботи</h1>
                
                <article class="work">
                    <div class="work__preview">
                        <picture>
                            <img src="/assets/images/works/work-5.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#">Практична робота №5</a>
                        </h2>
                
                        <div class="work__description">
                            <p>Завдання 1:</p>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="practicework5/task1/index.html" target="_blank">Перейти до роботи</a>
                            <p>Завдання 2:</p>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="practicework5/task2/index.html" target="_blank">Перейти до роботи</a>
                            <p>Завдання 3:</p>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="practicework5/task3/index.html" target="_blank">Перейти до роботи</a>
                            <p>Завдання 4:</p>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="practicework5/task4/index.html" target="_blank">Перейти до роботи</a>
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">Design</li>
                            <li class="tags__item">Website development</li>
                            <li class="tags__item">Front-end</li>
                            <li class="tags__item">VS Code</li>
                            <li class="tags__item">GitHub</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="https://github.com/Sledgeee/storage/blob/main/%D0%B7%D0%B2%D1%96%D1%82_%D0%92%D0%95%D0%91_%D0%BF%D1%805.pdf" target="_blank">Перейти до звіту</a>
                        </div>
                    </div>
                </article>
                
                 <article class="work">
                    <div class="work__preview">
                        <picture>
                            <img src="/assets/images/works/work-5.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#">Практична робота №4</a>
                        </h2>
                
                        <div class="work__description">
                           
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">Design</li>
                            <li class="tags__item">Website development</li>
                            <li class="tags__item">Front-end</li>
                            <li class="tags__item">VS Code</li>
                            <li class="tags__item">GitHub</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="practicework4/index.html" target="_blank">Перейти до роботи</a>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="https://github.com/Sledgeee/storage/blob/main/%D0%B7%D0%B2%D1%96%D1%82_%D0%92%D0%95%D0%91_%D0%BF%D1%804%20(4).pdf" target="_blank">Перейти до звіту</a>
                        </div>
                    </div>
                </article>
                
                <article class="work">
                    <div class="work__preview">
                        <picture>
                            <img src="/assets/images/works/work-5.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#">Практична робота №3</a>
                        </h2>
                
                        <div class="work__description">
                            <p>Завдання 1: Вам потрібно буде створити 3світлих блоки, наприклад, із класу поля та тексту шаблону  "Lorem  ipsum  ..."  в  документі  з  сірим  фоном.  У  кожному  блоці потрібно розмістити заголовок типу "Зразок 1" та абзац тексту.</p>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="practicework3/task1/index.html" target="_blank">Перейти до роботи</a>
                            <p>Завдання 2: Необхідно створити сторінку, на якій, крім заголовка, будуть 4  блоки, які за висотою  повинні  відповідати  розмірам  великих  екранів</p>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="practicework3/task2/index.html" target="_blank">Перейти до роботи</a>
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">Design</li>
                            <li class="tags__item">Website development</li>
                            <li class="tags__item">Front-end</li>
                            <li class="tags__item">VS Code</li>
                            <li class="tags__item">GitHub</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="https://github.com/Sledgeee/storage/blob/main/PR3.pdf" target="_blank">Перейти до звіту</a>
                        </div>
                    </div>
                </article>
                
                <article class="work">
                    <div class="work__preview">
                        <picture>
                            <img src="/assets/images/works/work-4.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#">Практична робота №2</a>
                        </h2>
                
                        <div class="work__description">
                            <p>Завдання: створити подібну таблицю із
                                відомими рок-гуртами та їх хітами чи фільмами/акторами, які стали лауреатами
                                премії «Оскар» або ж країнами/виконавцями–переможцями пісенного конкурсу
                                «Євробачення» за останні 10 років</p>
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">Design</li>
                            <li class="tags__item">Website development</li>
                            <li class="tags__item">Front-end</li>
                            <li class="tags__item">VS Code</li>
                            <li class="tags__item">GitHub</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="https://github.com/Sledgeee/storage/blob/main/%D0%B7%D0%B2%D1%96%D1%82_%D0%9F%D0%A02.pdf" target="_blank">Перейти до звіту</a>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="practicework2/practicework2.php" target="_blank">Перейти до сайту</a>
                        </div>
                    </div>
                </article>
                
                <article class="work">
                    <div class="work__preview">
                        <picture>
                            <img src="/assets/images/works/work-2.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#">Лабораторна робота №2</a>
                        </h2>
                
                        <div class="work__description">
                            <p>Завдання: зверстати хедер сторінки.</p>
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">Design</li>
                            <li class="tags__item">Website development</li>
                            <li class="tags__item">Front-end</li>
                            <li class="tags__item">VS Code</li>
                            <li class="tags__item">GitHub</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="https://github.com/Sledgeee/storage/blob/main/%D0%92%D0%95%D0%91_%D0%9B%D0%90%D0%912_%D0%B7%D0%B2%D1%96%D1%82.pdf" target="_blank">Перейти до звіту</a>
                            <a class="btn  btn--blue  btn--rounded  btn--sm" href="https://sledgeee.github.io/lab2.github.io/" target="_blank">Перейти до сайту</a>
                        </div>
                    </div>
                </article>
                
                <article class="work">
                    <div class="work__preview">
                        <picture>
                            <img src="/assets/images/works/work-1.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#">Лабораторна робота №1</a>
                        </h2>
                
                        <div class="work__description">
                            <p>Завдання: інсталювати VS Code або PHP Storm і запустити XAMPP Apache Server</p>
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">Website development</li>
                            <li class="tags__item">VS Code</li>
                            <li class="tags__item">PHP Storm</li>
                            <li class="tags__item">XAMPP</li>
                            <li class="tags__item">GitHub</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="https://github.com/Sledgeee/storage/blob/main/WEB_LAB1_VOLOSHYN.pdf" target="_blank">Перейти до звіту</a>
                        </div>
                    </div>
                </article>
                
                <article class="work">
                    <div class="work__preview">
                        <picture>
                            <img src="/assets/images/works/work-3.jpg" alt="">
                        </picture>
                    </div>
                
                    <div class="work__content">
                        <h2 class="work__title">
                            <a href="#">Практична робота №1</a>
                        </h2>
                
                        <div class="work__description">
                            <p>Завдання: створити блог-сторінку про себе.</p>
                        </div>
                
                        <ul class="tags">
                            <li class="tags__item">Design</li>
                            <li class="tags__item">Website development</li>
                            <li class="tags__item">Front-end</li>
                            <li class="tags__item">VS Code</li>
                            <li class="tags__item">GitHub</li>
                        </ul>
                
                        <div class="work__footer">
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="https://github.com/Sledgeee/storage/blob/main/%D0%92%D0%95%D0%91_%D0%9F%D0%A0_%D0%B7%D0%B2%D1%96%D1%82.pdf" target="_blank">Перейти до звіту</a>
                            <a class="btn  btn--blue  btn--rounded  btn--sm  btn--goto" href="https://sledgeee.github.io/olegvoloshyn.github.io/" target="_blank">Перейти до сайту</a>
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
    <div class="modal" id="share-modal">
        <div class="modal__content">
            <button class="modal__close" type="button">
                <img src="/assets/images/close.svg" alt="Close">
            </button>
    
            <ul class="social">
                <li class="social__item">
                    <a class="social__link" href="#">
                        <img src="/assets/images/share/instagram.svg" alt="">
                    </a>
                </li>
    
                <li class="social__item">
                    <a class="social__link" href="#">
                        <img src="/assets/images/share/telegram.svg" alt="">
                    </a>
                </li>
    
                <li class="social__item">
                    <a class="social__link" href="#">
                        <img src="/assets/images/share/twitter.svg" alt="">
                    </a>
                </li>
    
                <li class="social__item">
                    <a class="social__link" href="#">
                        <img src="/assets/images/share/viber.svg" alt="">
                    </a>
                </li>
    
                <li class="social__item">
                    <a class="social__link" href="#">
                        <img src="/assets/images/share/vk.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/contact.js"></script>
    <script src="/assets/js/app.js"></script>


</body>

</html>