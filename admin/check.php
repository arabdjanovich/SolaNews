<?php
session_start();

if(isset($_POST['registerbtn'])){
    $firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);
    $usertype = filter_var(trim($_POST['usertype']));

    require_once 'database/connect.php';

    $connection->query("INSERT INTO `admins` (`firstname`, `username`, `password`, `email`, `usertype`) VALUES('$firstname', '$username', '$password', '$email', '$usertype')");

    $connection->close();

    header('Location: register.php?added=success');
    exit;
} else {
    header('Location: login.php');
}
?>