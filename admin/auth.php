<?php
session_start();
include 'includes/scripts.php';
require_once 'database/connect.php';

if(isset($_POST['login'])){

    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);

    $check_user = $connection->query("SELECT * FROM `admins` WHERE `username` = '$username' AND `password` = '$password'");
    if(mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "firstname" => $user['firstname'],
            "username" => $user['username'],
            "email" => $user['email'],
            "usertype" => $user['usertype']
        ];
        $_SESSION['status'] = 'Вы успешно авторизовались!';
        $_SESSION['status_code'] = 'info';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['status'] = 'Не правильный логин или пароль!';
        $_SESSION['status_code'] = 'error';
        header('Location: login.php');
        exit;
    }
    #setcookie('user', $_SESSION['user']['username'], time() + 10);
    $connection->close();
} else {
        header('Location: login.php');
    }
?>