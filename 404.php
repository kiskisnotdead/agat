<?php 
header("HTTP/1.1 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/feedback.css" />
    <link rel="stylesheet" href="styles/modal.css" />
    <link rel="stylesheet" href="styles/err404.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
    <header class="header" data-aos="fade-down">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <a href="./index.html">
                        <img src="assets/logo_x512.png" alt="logo" />
                    </a>
                </div>
                <nav class="menu">
                    <a class="nav__link underline-one" href="./index.html#main">Главная</a>
                    <a class="nav__link underline-one" href="./index.html#about">О нас</a>
                    <a class="nav__link underline-one" href="./index.html#products">Продукция</a>
                    <a class="nav__link underline-one" href="./index.html#projects">Проекты</a>
                    <a class="nav__link underline-one" href="./index.html#docs">Документация</a>
                    <a class="nav__link underline-one" href="./index.html#partners">Партнеры</a>
                    <a class="nav__link underline-one" href="./index.html#contacts">Контакты</a>
                </nav>
                <div class="header__phone">
                    <a href="tel:+7 (863) 256-85-88">+7 (863) 256-85-88</a>
                </div>
                <div class="burger__open" onclick="openBurger()">
                    <img src="assets/open.svg" alt="open" />
                </div>
                <nav class="burger">
                    <div class="burger__close" onclick="closeBurger()">
                        <img src="assets/close.svg" alt="close" />
                    </div>
                    <div class="burger__links">
                        <div>
                            <a class="nav__link underline-one" href="./index.html#main">Главная</a>
                        </div>
                        <div>
                            <a class="nav__link underline-one" href="./index.html#about">О нас</a>
                        </div>
                        <div>
                            <a class="nav__link underline-one" href="./index.html#products">Продукция</a>
                        </div>
                        <div>
                            <a class="nav__link underline-one" href="./index.html#projects">Проекты</a>
                        </div>
                        <div>
                            <a class="nav__link underline-one" href="./index.html#docs">Документация</a>
                        </div>
                        <div>
                            <a class="nav__link underline-one" href="./index.html#partners">Партнеры</a>
                        </div>
                        <div>
                            <a class="nav__link underline-one" href="./index.html#contacts">Контакты</a>
                        </div>
                        <div class="burger__phone">
                            <a class="nav__link" href="tel:+7 (863) 256-85-88">+7 (863) 256-85-88</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="error">
        <div class="container">
            <div class="error__inner">
                <h2>404 Страница не найдена</h2>
                <p>Пожалуйста, воспользуйтесь меню.</p>
            </div>
        </div>
    </section>
    <footer class="footer" id="contacts" data-aos="fade-up">
        <div class="container">
            <div class="footer__inner">
                <img src="assets/logo_x512.png" alt="logo" />
                <h4>Связаться с нами</h4>
                <div class="footer__list">
                    <div class="footer__card">
                        <p>
                            <img src="assets/footer/phone.svg" alt="phone" /><a href="tel:+7 (863) 256-85-88">+7 (863)
                                256-85-88</a>
                        </p>
                        <p>
                            <img src="assets/footer/phone.svg" alt="phone2" /><a href="tel:+7 (903) 406-85-88">+7 (903)
                                406-85-88</a>
                        </p>
                        <p>
                            <img src="assets/footer/mail.svg" alt="mail" /><a target="_blank"
                                href="mailto:info@agat-m.ru">info@agat-m.ru</a>
                        </p>
                        <p>
                            <img src="assets/footer/telegram.svg" alt="telegram" /><a target="_blank"
                                href="https://web.telegram.org/k/#@agat_m">Telegram</a>
                        </p>
                        <p>
                            <img src="assets/footer/whatsapp.svg" alt="whatsapp" /><a target="_blank"
                                href="https://api.whatsapp.com/send?phone=89094408079">WhatsApp</a>
                        </p>
                        <p>
                            <img src="assets/feedback.svg" alt="feedback" /><a onclick="openModal()">Обратная связь</a>
                        </p>
                    </div>
                </div>
                <div class="footer__list2">
                    <div class="footer__card2">
                        <p>
                            <img src="assets/footer/phone.svg" alt="phone" /><a href="tel:+7 (863) 256-85-88">+7 (863)
                                256-85-88</a>
                        </p>
                        <p>
                            <img src="assets/footer/phone.svg" alt="phone2" /><a href="tel:+7 (903) 406-85-88">+7 (903)
                                406-85-88</a>
                        </p>
                        <p>
                            <img src="assets/footer/mail.svg" alt="mail" /><a target="_blank"
                                href="mailto:info@agat-m.ru">info@agat-m.ru</a>
                        </p>
                    </div>
                    <div class="footer__card2">
                        <p>
                            <img src="assets/footer/telegram.svg" alt="telegram" /><a target="_blank"
                                href="https://web.telegram.org/k/#@agat_m">Telegram</a>
                        </p>
                        <p>
                            <img src="assets/footer/whatsapp.svg" alt="whatsapp" /><a target="_blank"
                                href="https://api.whatsapp.com/send?phone=89094408079">WhatsApp</a>
                        </p>
                        <p>
                            <img src="assets/feedback.svg" alt="feedback" /><a onclick="openModal()">Обратная связь</a>
                        </p>
                    </div>
                </div>
                <div class="footer__links">
                    <div class="footer__link">
                        <a onclick="toggleMap()">
                            <div>Посмотреть на карте</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <circle cx="15" cy="15" r="14.5" stroke="#242424"></circle>
                                <path
                                    d="M20.3536 15.3536C20.5488 15.1583 20.5488 14.8417 20.3536 14.6464L17.1716 11.4645C16.9763 11.2692 16.6597 11.2692 16.4645 11.4645C16.2692 11.6597 16.2692 11.9763 16.4645 12.1716L19.2929 15L16.4645 17.8284C16.2692 18.0237 16.2692 18.3403 16.4645 18.5355C16.6597 18.7308 16.9763 18.7308 17.1716 18.5355L20.3536 15.3536ZM9 15.5L20 15.5V14.5L9 14.5V15.5Z"
                                    fill="#242424"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="map">
                    <div class="footer__map footer__map_hidden">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A4c44e65ea78b437f75ef8f685c2ff2cda4dcae938fd3223e7fa0a09d1ec1dd89&amp;source=constructor"
                            width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="tn-elem">
        <div class="tn-atom"></div>
    </div>
    <section class="copyright">
        <div class="container">
            <div class="copyright__inner">
                <p>© 2023, ООО «Агат-Трейд»</p>
            </div>
        </div>
    </section>
    <div class="btn-up btn-up_hide" style="font-size: 30px"></div>
    <div class="fab">
        <span class="fab-action-button">
            <i class="fab-action-button__icon"></i>
        </span>
        <ul class="fab-buttons">
            <li class="fab-buttons__item">
                <a href="https://web.telegram.org/k/#@agat_m" target="_blank" class="fab-buttons__link"
                    data-tooltip="Telegram">
                    <img src="assets/telegram.png" alt="telegram">
                </a>
            </li>
            <li class="fab-buttons__item">
                <a href="https://api.whatsapp.com/send?phone=89094408079" target="_blank" class="fab-buttons__link"
                    data-tooltip="WhatsApp">
                    <img src="assets/whatsapp.png" alt="telegram">
                </a>
            </li>
            <li class="fab-buttons__item openModal" onclick="openModal()">
                <a class="fab-buttons__link" data-tooltip="Обратная связь">
                    <img src="assets/feedback.svg" alt="telegram">
                </a>
            </li>
        </ul>
    </div>
    <div id="openModal" class="modal" onclick="closeModal()">
        <div class="modal__dialog" onclick="event.stopPropagation()">
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__close" ">
                            <img onclick=" closeModal()" src="assets/close2.svg" alt="closeModal" />
                </div>
                <div>
                    <h3 class="modal-title">Обратная связь</h3>
                </div>
                <p>
                    Поделитесь мнением о нашей работе или задайте нам
                    любой интересующий вас вопрос в поле комментарий
                </p>
            </div>
            <form action="send.php" method="post" class="modal__form">
                <div>
                    <input type="text" name="name" placeholder="Имя *" />
                </div>
                <div>
                    <input type="text" name="surname" placeholder="Фамилия *" />
                </div>
                <div>
                    <input type="number" name="phone" placeholder="Телефон *" />
                </div>
                <div>
                    <input type="email" name="email" placeholder="E-mail *" />
                </div>
                <div>
                    <textarea name="comment" id="" cols="30" rows="5" placeholder="Комментарий"></textarea>
                </div>
                <p>
                    * — обязательные для заполнения поля</p>
                <div class="modal__btn">
                    <button class="big__btn" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="scripts/scroll.js"></script>

    <script src="scripts/burger.js" defer></script>
    <script src="scripts/btn-up.js" defer></script>
    <script src="scripts/map.js" defer></script>
    <script src="scripts/modal.js" defer></script>
</body>

</html>