<?php

$firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = md5($_POST['password']);

$mysql = new mysqli('localhost', 'root', '', 'adminpanel');
$mysql->query("INSERT INTO `admins` (`username`, `password`, `email`, `name`) VALUES('$username', '$password', '$email', '$firstname')");

$mysql->close();

header('Location: login.php');
exit;


?>