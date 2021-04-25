<?php
session_start();
require_once 'database/connect.php';
include 'includes/scripts.php';

if(isset($_POST['registerbtn'])){
    $firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);
    $usertype = filter_var(trim($_POST['usertype']));

    $username_check = $connection->query("SELECT * FROM `admins` WHERE `username` = '$username'");
    if(mysqli_num_rows($username_check) > 0) {
        $user = mysqli_fetch_assoc($username_check);
        header('Location: register.php');
        $_SESSION['status'] = 'Логин ' . $_POST['username'] . ' сужествует в базе!';
        $_SESSION['status_code'] = 'error';
        exit; 
    }

    $email_check = $connection->query("SELECT * FROM `admins` WHERE `email` = '$email'");
    if(mysqli_num_rows($email_check) > 0) {
        $user = mysqli_fetch_assoc($email_check);
        header('Location: register.php');
        $_SESSION['status'] = 'Почта ' . $_POST['email'] . ' сужествует в базе!';
        $_SESSION['status_code'] = 'error';
        exit;
    }
    $connection->query("INSERT INTO `admins` (`firstname`, `username`, `password`, `email`, `usertype`) VALUES('$firstname', '$username', '$password', '$email', '$usertype')");
    $connection->close();

    $_SESSION['status'] = 'Администратор добавлен!';
    $_SESSION['status_code'] = 'success';
    header('Location: register.php');
    exit;
    } else {
    $_SESSION['status'] = 'Администратор не добавлен!';
    $_SESSION['status_code'] = 'error';
    header('Location: login.php');
    }
?>