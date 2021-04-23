<?php
session_start();

if(isset($_POST['login'])){
    require_once 'database/connect.php';

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
        header('Location: index.php');
    } else {
        $_SESSION['status'] = '<div class="alert alert-danger" role="alert">Не правильный логин или пароль!</div>';
        header('Location: login.php');
    }

    #setcookie('user', $_SESSION['user']['username'], time() + 10);
    $connection->close();
    } else {
        header('Location: login.php');
    }
?>