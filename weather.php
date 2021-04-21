<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="stylesheet" href="libs/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/main.min.css">
    <title>Sola News | Weathers</title>

    <style>
        body {
            background-color: #f0f4fd;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler toggler-spin">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-5">
                    <ul class="navbar-nav navbar-mobile">
                        <li class="nav-item">
                            <div class="lang lang-mobile d-lg-none d-flex">
                                <a class="active" href="#ru">РУ</a>
                                <a href="#uz">ЎЗ</a>
                                <a href="#oz">O'z</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="category-item.html">Новости</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.html">Спорт</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.html">Технологии</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.html">Авто</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.html">В мире</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.html">Наука</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.html">Город</a></li>
                    </ul>
                </div>
                <div class="searching">
                    <a href="javascript:void(0)" data-target="#modal_search" data-toggle="modal" title="Qidirish">
                        <i class="fal fa-search"></i>
                    </a>
                </div>
                <div class="lang d-lg-flex d-none">
                    <a class="active" href="#ru">РУ</a>
                    <a href="#uz">ЎЗ</a>
                    <a href="#oz">O'z</a>
                </div>
            </div>
        </div>
    
        <div class="bsnav-mobile">
            <div class="bsnav-mobile-overlay"></div>
            <div class="navbar"></div>
        </div>
    
        <div class="banner border-top border-bottom">
            <div class="container">
                <div class="date">
                    <span class="d-lg-inline-block d-block">22 января 2020,</span>
                    <span class="d-lg-inline-block d-block">Среда</span>
                </div>
                <div class="currency">
                    <a href="currency.html">
                        <span class="d-lg-inline-block d-block">1 USD = 9547.05</span>
                        <span class="d-lg-inline-block d-none"> | </span>
                        <span class="d-lg-inline-block d-block">1 EUR = 10585.77</span>
                    </a>
                </div>
                <div class="weather">
                    <a href="weather.html">
                        <div class="weather__content">
                            <div class="weather__icon">
                                <!-- <i class="fal fa-cloud"></i> -->
                                <!-- <i class="fal fa-thunderstorm"></i> -->
                                <!-- <i class="fal fa-smog"></i> -->
                                <!-- <i class="fal fa-wind"></i> -->
                                <!-- <i class="fal fa-sun-cloud"></i> -->
                                <!-- <i class="fal fa-clouds"></i> -->
                                <!-- <i class="fal fa-fog"></i> -->
                                <!-- <i class="fal fa-thunderstorm-sun"></i> -->
                                <!-- <i class="fal fa-thunderstorm-moon"></i> -->
                                <i class="fal fa-sun"></i>
                            </div>
                            <div class="weather__count">
                                15<sup><i class="far fa-circle"></i></sup>
                            </div>
                            <div class="weather__region">
                                <!-- Ташкент -->
                                <!-- Кашкадарьинской -->
                                <!-- Каракалпакстан -->
                                <!-- Джизак -->
                                Сурхандарьинской
                                <!-- Наманган -->
                                <!-- Самарканд -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
        <div class="container rek-container">
            <div class="rek">
                <div class="rek__big d-none d-md-block">
                    <img class="img-fluid" src="img/rek1.png" alt="Rek">
                </div>
                <div class="rek__vertical d-block d-md-none">
                    <img class="w-100 h-auto" src="img/rek2.png" alt="Rek">
                </div>
            </div>
        </div>
    
    </header>

    <!-- Main -->
    <main>
        <section class="section-currency py-4">
            <div class="container">
                <h1 class="section__title">Погода</h1>

                <div class="row my-4">
                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="bg-white p-3 temp-left-side">
                            <h1 class="temp-left-side__region">Ташкент</h1>
                            <p class="temp-left-side__date">Сегодня 30 января</p>

                            <div class="d-flex align-items-center">
                                <div class="temp-left-side__img mr-2">
                                    <img src="img/clear.png" alt="Weather">
                                </div>
                                <h2 class="temp-left-side__max ml-2">+10°</h2>
                                <h5 class="text-secondary temp-left-side__min ml-2">-3°</h5>
                            </div>
                            <h5 class="temp-left-side__condition my-2">Ясно</h5>

                            <hr>

                            <div class="my-3 temp-left-side__more-info">
                                <div>Влажность: 56%</div>
                                <div>Ветер: Северо-Восточный, 7 м/c</div>
                                <div>Давление: 769 мм рт. ст.</div>
                                <div>Луна: Растущая Луна</div>
                                <div>Восход: 07:38</div>
                                <div>Закат: 17:37</div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center temp-left-side__today">
                                    <img src="img/clear.png" alt="Weather">
                                    <div class="ml-3 temp-left-side__today--weather">
                                        <div>Утром</div>
                                        <div>0°</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center temp-left-side__today">
                                    <img src="img/clear.png" alt="Weather">
                                    <div class="ml-3 temp-left-side__today--weather">
                                        <div>Вечером</div>
                                        <div>5°</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8 my-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless bg-white my-table">
                                <thead>
                                    <tr>
                                        <th>День</th>
                                        <th>Температура</th>
                                        <th>Описание</th>
                                        <th>Осадки</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-date">
                                            <div>Завтра</div>
                                            <div>31 января</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="img/cloudy.png" alt="Weather">
                                                <div class="table-temp ml-2">
                                                    <div>+13°</div>
                                                    <div>0°</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-title">
                                                Сильная облачность
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-wet">
                                                1%
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-date">
                                            <div>Суббота</div>
                                            <div>1 февраля</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="img/partlycloudy.png" alt="Weather">
                                                <div class="table-temp ml-2">
                                                    <div>+14°</div>
                                                    <div>+3°</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-title">
                                                Небольшая облачность
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-wet">
                                                1%
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-date">
                                            <div>Воскресенье</div>
                                            <div>2 февраля</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="img/cloudy.png" alt="Weather">
                                                <div class="table-temp ml-2">
                                                    <div>+14°</div>
                                                    <div>+4°</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-title">
                                                Сильная облачность
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-wet">
                                                1%
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-date">
                                            <div>Понедельник</div>
                                            <div>3 февраля</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="img/rain.png" alt="Weather">
                                                <div class="table-temp ml-2">
                                                    <div>+10°</div>
                                                    <div>+5°</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-title">
                                                Небольшой дождь
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-wet">
                                                57%
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-date">
                                            <div>Вторник</div>
                                            <div>4 февраля</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="img/cloudy.png" alt="Weather">
                                                <div class="table-temp ml-2">
                                                    <div>+11°</div>
                                                    <div>+3°</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-title">
                                                Ясно
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-wet">
                                                43%
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-date">
                                            <div>Среда</div>
                                            <div>5 февраля</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="img/cloudy.png" alt="Weather">
                                                <div class="table-temp ml-2">
                                                    <div>+14°</div>
                                                    <div>0°</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-title">
                                                Сильная облачность
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-wet">
                                                3%
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-date">
                                            <div>Четверг</div>
                                            <div>6 февраля</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="img/partlycloudy.png" alt="Weather">
                                                <div class="table-temp ml-2">
                                                    <div>+16°</div>
                                                    <div>+6°</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-title">
                                                Небольшая облачность
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-wet">
                                                8%
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

     <!-- Footer -->
     <footer class="footer">
        <div class="footer__links">
            <div class="container">
                <ul>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Спорт</a></li>
                    <li><a href="#">Технологии</a></li>
                </ul>
                <ul>
                    <li><a href="#">Авто</a></li>
                    <li><a href="#">В мире</a></li>
                    <li><a href="#">Наука</a></li>
                </ul>
                <ul>
                    <li><a href="#">Реклама</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Пользовательское соглашение</a></li>
                </ul>
                <ul>
                    <li><a href="#">Обратная связь</a></li>
                    <li><a href="contact.html">Контакты</a></li>
                    <li><a href="#">Дорожная работа</a></li>
                </ul>
    
                <ul>
                    <li>
                        <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-3" href="#instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#telegram"><i class="fab fa-telegram-plane"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="copyright">
                <span>Новости Sola©2020. Все права защищены</span>
                <span class="d-md-inline-block d-none">|</span>
                <span>Разработка и дизайн <a href="https://usoft.uz">Usoft</a></span>
            </div>
        </div>
    </footer>
    
    <!-- Modal Search -->
    <div class="modal fade" id="modal_search">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        <i class="fal fa-times"></i>
                    </button>
                    <form class="form-search">
                        <input type="text" name="search" placeholder="Поиск...">
                        <button type="submit" class="my-btn--search"><i class="fal fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fal fa-arrow-up"></i>
    </button>
    
    <script src="js/main.min.js"></script>
    
</body>

</html>