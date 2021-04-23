<?php
session_start();
include_once 'includes/header.php';
include_once 'includes/navbar.php';
include_once 'includes/topbar.php';
?>
<style>
    .e404 {
        position: absolute;
        top: 45%;
        left: 55%;
        transform: translate(-50%, -50%);
        }
</style>
                    <!-- 404 Error Text -->
                    <div class="text-center e404">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Страница не найдена</p>
                        <p class="text-gray-500 mb-0">Произошла ошибка - запрашиваемая страница не найдена или ограничена</p>
                        <a href="index.php">&larr; Назад к «Панель управлении»</a>
                    </div>

<?php
    include_once 'includes/scripts.php';
    include_once 'includes/footer.php';
?>