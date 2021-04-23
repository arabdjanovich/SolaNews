<?php
$title = 'Error 404';
require('header.php');
?>   
    <link href="css/404/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/404/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .e404 {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            }
        .footer {
            margin-top: 35%;
            }
    </style>
    
    <div class="text-center e404">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Страница не найдена</p>
        <p class="text-gray-500 mb-0">Произошла ошибка - запрашиваемая страница не найдена или ограничена</p>
        <a href="index.php">&larr; Назад к «Главной странице»</a>
    </div>

<?php
require_once 'footer.php';
?>