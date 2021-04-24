<?php
session_start();
require_once 'database/connect.php';

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
        $_SESSION['status'] = '<div class=" alert alert-danger" role="alert"><center><h5>Логин <strong>' . $_POST['username'] . '</strong> сужествует в базе!</h5></div>';
        exit; 
    }

    $email_check = $connection->query("SELECT * FROM `admins` WHERE `email` = '$email'");
    if(mysqli_num_rows($email_check) > 0) {
        $user = mysqli_fetch_assoc($email_check);
        header('Location: register.php');
        $_SESSION['status'] = '<div class=" alert alert-danger" role="alert"><center><h5>Почта <strong>' . $_POST['email'] . '</strong> сужествует в базе!</h5></div>';
        exit;
    }
    $connection->query("INSERT INTO `admins` (`firstname`, `username`, `password`, `email`, `usertype`) VALUES('$firstname', '$username', '$password', '$email', '$usertype')");
    $connection->close();

    header('Location: register.php?added=success');
    exit;
} else {
    header('Location: login.php');
}
?>