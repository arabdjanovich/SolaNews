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
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="libs/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/main.min.css">
    <title><?=$title?></title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.php">
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
                        <li class="nav-item"><a class="nav-link" href="category-item.php">Новости</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.php">Спорт</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.php">Технологии</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.php">Авто</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.php">В мире</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.php">Наука</a></li>
                        <li class="nav-item"><a class="nav-link" href="category-item.php">Город</a></li>
                    </ul>
                </div> 
                <div class="searching">
                    <a href="javascript:void(0)" data-target="#modal_search" data-toggle="modal" title="Qidirish">
                        <i class="fal fa-search"></i>
                    </a>
                </div>
                <div class="reg_but">
                    <a href="admin/login.php" class="btn btn-primary btn-sm">Авторизация</a>
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
                    <a href="currency.php">
                        <span class="d-lg-inline-block d-block">1 USD = 9547.05</span>
                        <span class="d-lg-inline-block d-none"> | </span>
                        <span class="d-lg-inline-block d-block">1 EUR = 10585.77</span>
                    </a>
                </div>
                <div class="weather">
                    <a href="weather.php">
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
   
    </header>